<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Setting;
use App\Banner as banner;
use App\Menu as menu;
use App\genre;
use App\CategoryTv;
use App\User;
use Carbon\Carbon;
use App\Indexsetting;
use Cookie;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */

    public function Main(){
        $data['user_online'] = User::where([['status_login', '=', '1'],['login_expire', '>=', Carbon::now()->timestamp]])->count();
         $data['setting'] = Setting::find(1);
         $data['category'] = genre::orderBy('id', 'asc')->get();
         $data['category_tv'] = CategoryTv::orderBy('updated_at', 'desc')->get();
         $data['res'] = Indexsetting::orderBy('id','asc')->first();
         $data['menu'] = menu::orderBy('no', 'asc')->get();
         $data['bannerA'] = banner::where('layout', 'A')->orderBy('id','asc')->get();
         $data['bannerB'] = banner::where('layout', 'B')->orderBy('id','asc')->get();
         $data['bannerC'] = banner::where('layout', 'C')->orderBy('id','asc')->get();
         $data['bannerD'] = banner::where('layout', 'D')->orderBy('id','asc')->get();
         $data['mode'] = "home";

        return $data;
    }

    public function showRegistrationForm()
    {
        $data = $this->Main();
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;


        return view('register', $data);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
