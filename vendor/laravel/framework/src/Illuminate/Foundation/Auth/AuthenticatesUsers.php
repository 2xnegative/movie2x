<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Setting;
use App\Menu as menu;
use App\genre;
use App\User;
use Carbon\Carbon;
use Cookie;

trait AuthenticatesUsers
{
    use RedirectsUsers, ThrottlesLogins;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function Main(){
         $data['setting'] = Setting::find(1);
         $data['category'] = genre::orderBy('id', 'asc')->get();
         
         return $data;
    }

    public function showLoginForm()
    {
        $data = $this->Main();

        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;


        return view('login', $data);
    }


    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->has('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user, $application = false)
    {
        return redirect()->route('admin.movie');
    }

    // protected function authenticatedApplication(Request $request, $user)
    // {
    //     if(Auth::user()->status_login == 0 || Auth::user()->login_expire <= Carbon::now()->timestamp){
    //         $update_expire = User::find(Auth::user()->id);
    //         $update_expire->ip = \Request::ip();
    //         $update_expire->status_login = 1;
    //         $update_expire->login_expire = Carbon::now()->addMinute(5)->timestamp;
    //         $update_expire->update();
    //         $request->session()->put('player', 'jwplayer');
    //         $request->session()->put('application', '1');
    //    }
    //    // เก็บ Cookie Login
    //    Cookie::queue('username_login', $request->email, 5400);
    //    Cookie::queue('password_login', $request->password, 5400);

    //  return redirect()->route('application.index');
    // }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        session()->flash('message_login', 'Username หรือ Password ผิดพลาด');
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // ###########################
        //
        //  ลบ Expire ออก เพื่อให้ login ได้
        //
        // ###########################
        // $logout_expire = User::where('id', Auth::user()->id)->first();
        // $logout_expire->login_expire = 0;
        // $logout_expire->ip = 0;
        // $logout_expire->status_login = 0;
        // $logout_expire->update();

        $this->guard()->logout();

        $request->session()->invalidate();

        // return redirect('/shadefiftyproject/movie2u');
        return redirect('/admin/login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
