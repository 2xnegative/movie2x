<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use App\Setting;
use App\tmpay;
use App\Log;
use App\Banner as banner;
use App\Collection;
use App\movie;
use App\Menu as menu;
use App\genre;
use App\User;
use App\Request as req;
use App\CategoryTv;
use App\Point;
use App\Pincode as pin;
use App\Pinlog as pinlog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Main()
    {
        $data['user_online'] = User::where([['status_login', '=', '1'],['login_expire', '>=', Carbon::now()->timestamp]])->count();
        $data['setting'] = Setting::find(1);
        $data['category'] = genre::orderBy('id', 'asc')->get();
        $data['category_split'] = genre::where('split', '1')->orderBy('updated_at', 'asc')->get();
        $data['category_tv'] = CategoryTv::orderBy('updated_at', 'desc')->get();
        $data['menu'] = menu::orderBy('no', 'asc')->get();
        $data['bannerA'] = banner::where('layout', 'A')->orderBy('id','asc')->get();
        $data['bannerB'] = banner::where('layout', 'B')->orderBy('id','asc')->get();
        $data['bannerC'] = banner::where('layout', 'C')->orderBy('id','asc')->get();
        $data['bannerD'] = banner::where('layout', 'D')->orderBy('id','asc')->get();
        $data['mode'] = "home";

        return $data;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->Main();

        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;
        $data['req'] = req::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $log = Log::where('tmpay_id_user', Auth::user()->id)
            ->limit(5)
            ->orderBy('id','desc');
        $data['log'] = $log->get();
        $data['count_log'] = $log->count();

        return view('auth.member', $data);
    }

    public function resetpass(Request $request)
    {
        $data = $this->Main();

        $user = User::find(Auth::user()->id);
        if(Hash::check($request->oldpassword, $user->password))
        {
            $user->password = Hash::make($request->confirmpassword);
            $user->update();
            session()->flash('resetpass', 'เปลี่ยนรหัสสำเร็จ');
        }
        else {
            session()->flash('resetpass', 'รหัสผ่านเก่าไม่ถูกต้อง');
        }

        return redirect()->route('member');
    }

    public function formverify()
    {
        $data = $this->Main();

        $data['title_category'] = 'AV 18+';
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;

        return view('movie.verify', $data);
    }

    public function verifyav(Request $request) {
        $data = $this->Main();

        if($request->password == Auth::user()->secret_password)
        {
            $data = $this->Main();

            session(['av' => true]);

            return redirect()->route('av18');
        }
        else
        {
            session()->flash('verifyav', 'รหัสผิดพลาด');
            return redirect()->route('formverify');
        }
    }

    public function verifyav_reset(Request $request) {
        $data = $this->Main();

        if($request->password == Auth::user()->secret_password)
        {
            $reset = User::find(Auth::user()->id)->update(['secret_password' => $request->password]);
            session(['av' => true]);
            
            return redirect()->route('av18');
        }
        else
        {
            session()->flash('verifyav', 'รหัสผิดพลาด');
            return redirect()->route('formverify');
        }
    }

    public function verifyav_create(Request $request) {
        $data = $this->Main();

        if($request->password)
        {
            $reset = User::where('id',Auth::user()->id)->update(['secret_password' => $request->password]);

            session(['av' => true]);
            
            return redirect()->route('av18');
        }
        else
        {
            session()->flash('verifyav', 'รหัสผิดพลาด');
            return redirect()->route('formverify');
        }
    }


    // =======================================
    //      TOPUP ระบบบเติมเงิน
    // =======================================
        public function topup()
        {

            $data = $this->Main();

            $log = Log::where('tmpay_id_user', Auth::user()->id)
                ->limit(5)
                ->orderBy('id','desc');
            $data['log'] = $log->get();
            $data['count_log'] = $log->count();
            $data['title'] = $data['setting']->title;
            $data['keywords'] = $data['setting']->title;
            $data['description'] = $data['setting']->description;
            $data['list_price'] = tmpay::orderBy('id', 'asc')->get();
            $data['list_point'] = Point::orderBy('price_point', 'asc')->get();
            $data['type_topup'] = "truemoney";


            return view('auth.topup', $data);
        }

        // =======================================
        //      PINCODE ระบบบเติมเงิน
        // =======================================
        public function pincode()
        {

            $data = $this->Main();

            $log = Log::where('tmpay_id_user', Auth::user()->id)
                ->limit(5)
                ->orderBy('id','desc');
            $data['log'] = $log->get();
            $data['count_log'] = $log->count();
            $data['title'] = $data['setting']->title;
            $data['keywords'] = $data['setting']->title;
            $data['description'] = $data['setting']->description;
            $data['list_price'] = tmpay::orderBy('id', 'asc')->get();
            $data['list_point'] = Point::orderBy('price_point', 'asc')->get();
            $data['type_topup'] = "pincode";


            return view('auth.topup', $data);
        } // End Pincode()

        public function pincodeSubmit(Request $request)
        {

                $pincode = pin::where('pincode', $request->pincode)->first();
                    // ################################
                    //  เช็ค PINCDE ถูกมีหรือไม่
                    // ################################
                    if($pincode)
                    {
                        if($pincode->active == 1)
                        {
                            // ################################
                            //  PINCODE ถูกใช้ไปแล้ว
                            // ################################
                            session()->flash('message_error', 'PINCODE ถูกใช้ไปแล้ว');
                            return back()->withInput();
                        }
                        else if($pincode->active == 0)
                        {
                            // ################################
                            //  เพิ่มวันใช้งาน
                            // ################################
                            $check_user = User::where('id', Auth::user()->id);
                            $check_user->update(['vip' => Carbon::now()->addDays($pincode->days)]);

                            if($pincode->once == 0)
                            {
                                // ################################
                                //  PINCODE ประเภทใช้ครั้งเดียว
                                // ################################
                                $pincode = pin::where('id', $pincode->id)->update(['active' => 1]);
                            }

                            // ################################
                            //  เก็บ Log การเติม PINCODE
                            // ################################
                            $log = new pinlog;
                            $log->pincode_id = $request->pincode;
                            $log->user_id = Auth::user()->id;
                            $log->save();

                            
                            if($request->application)
                            {
                                return redirect()->route('application.member');
                            }
                            else {
                                return redirect()->route('member');
                            }
                        }
                    }
                    else if(!$pincode)
                    {
                        // ################################
                        //  PIN CODE ไม่ถูกต้อง
                        // ################################
                        session()->flash('message_error', 'PIN CODE ไม่ถูกต้อง');
                        return back()->withInput();
                    }   return back()->withInput();
        }

        public function collection($type)
        {
            $data = $this->Main();

            $data['title'] = $data['setting']->title;
            $data['keywords'] = $data['setting']->title;
            $data['description'] = $data['setting']->description;
            $data['type'] = $type;
            if($type == "movie")
            {
                $data['collection'] = Collection::where([['collections.user_id', Auth::user()->id], ['collections.type', $type]])
                    ->join('movies','collections.movie_id', '=','movies.id')
                    ->where('movies.type','movie')
                    ->orderBy('collections.id_collection','desc')
                    ->get();
            }
            else if($type == "tv")
            {
                $data['collection'] = Collection::where([['collections.user_id', Auth::user()->id], ['collections.type', $type]])
                    ->join('tvs','collections.movie_id', '=','tvs.id')
                    ->orderBy('collections.id_collection','desc')
                    ->get();
            }
            else if($type == "series")
            {
                $data['collection'] = Collection::where([['collections.user_id', Auth::user()->id], ['collections.type', $type]])
                    ->join('movies','collections.movie_id', '=','movies.id')
                    ->where('movies.type','series')
                    ->orderBy('collections.id_collection','desc')
                    ->get();
            }
            else if($type == "anime")
            {
                $data['collection'] = Collection::where([['collections.user_id', Auth::user()->id], ['collections.type', $type]])
                    ->join('movies','collections.movie_id', '=','movies.id')
                    ->where('movies.type','anime')
                    ->orderBy('collections.id_collection','desc')
                    ->get();
            }
            else if($type == "av")
            {
                $data['collection'] = Collection::where([['collections.user_id', Auth::user()->id], ['collections.type', $type]])
                    ->join('movies','collections.movie_id', '=','movies.id')
                    ->where('movies.type','av')
                    ->orderBy('collections.id_collection','desc')
                    ->get();
            }

            return view('auth.collection', $data);
        }

        public function collectDelete($id,$type)
        {
            $data = Collection::where('id_collection',$id);
            $data->delete();

            return redirect()->route('collection', ['type' => $type]);
        }

        public function topupSubmit(Request $request)
        {


            $data['setting'] = Setting::first();
            $id_tmpay = $data['setting']->tmpay;
            // Route TmpayController
            $domain = url('/tmpay');
            $tmpay = new Client;
            $url = 'https://www.tmpay.net/TPG/backend.php?merchant_id='.$id_tmpay.'&password='.$request->tmp_pass.'&resp_url='.$domain;
            $res = $tmpay->request('GET', $url, ['http_errors' => false]);
            $getBody = $res->getBody();
            $getBody = urldecode($getBody);
            if(strrpos($getBody, 'SUCCEED') !== false){
                $getBody = explode('|', $getBody);
                $tmpay_trans_id = $getBody[1];
                $data = new Log;
                $data->tmpay_status = 2;
                $data->tmpay_trans_id = $tmpay_trans_id;
                $data->tmpay_tmp_pass = $request->tmp_pass;
                $data->tmpay_id_user = Auth::user()->id;
                $data->tmpay_username = Auth::user()->email;
                $data->tmpay_price = 0;
                $data->save();
            }

            session()->flash('message_topup', 'กำลังตรวจสอบ');
            return redirect()->route('topup');
        }

}
