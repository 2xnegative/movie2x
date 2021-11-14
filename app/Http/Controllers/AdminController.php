<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;
use App\Setting;
use App\User;
use App\Log;
use App\Request as req;
use Carbon\Carbon;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * movie = หนัง,category = หมวดหมู่หนัง, member = สมาชิก,topup = เติมเงิน,setting = ตั้งค่า, help = ช่วยเหลือ/วิธีใช้
     *
     */

    public function Main()
    {
        $data['infosetting'] = Setting::first();


        return $data;
    }

    public function index()
    {
        if(!Auth::check())
        {
            return redirect()->route('admin.login');
        }

        $data = $this->Main();

        $data['user_online'] = User::where([['status_login', '=', '1'],['login_expire', '>=', Carbon::now()->timestamp]])->count();
        $data['user_last'] = User::orderBy('id', 'desc')->limit(3)->get();
        $data['log_topup_last'] = Log::orderBy('id', 'desc')->limit(3)->get();
        $data['header_title'] = "หน้าแรก";
        return view('admin.page.home', $data);
    }


    public function category()
    {
        $data = $this->Main();
        $data['header_title'] = "หมวดหมู่";
        return view('admin.page.category', $data);
    }

    public function member()
    {
        $data = $this->Main();
        $data['header_title'] = "สมาชิก";
        return view('admin.page.member', $data);
    }

    public function topup()
    {
        $data = $this->Main();
        $data['header_title'] = "ตั้งค่าเติมเงิน";
        return view('admin.page.topup', $data);
    }

    public function help()
    {
        $data = $this->Main();
        return redirect('https://www.iamtheme.com/Help/iDoonung');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
