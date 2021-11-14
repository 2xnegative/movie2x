<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Intervention\Image\ImageManager;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Auth;

class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $data['header_title'] = "ตั้งค่าเว็บ";
        $data['request'] = Setting::find(1);

        return view('admin.page.setting.setting', $data);
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
        // /** Check Domain IAMTHEME **/
        // $checkDomain = new Client;
        // $url = 'https://checkdomain.iamtheme.com/?domain='.url('/');
        // $res = $checkDomain->request('GET', $url, ['http_errors' => false]);

        $data = Setting::find($id);

            $data->domain = $request->domain;
            $data->title = $request->title;
            $data->description = $request->description;
            $data->keyword = $request->keyword;
            $data->header = $request->header;
            $data->footer = $request->footer;
            $data->imdb = 1;
            $data->facebook = $request->facebook;
            // Time Skip
            $data->time_skip = $request->time_skip;
            // $data->facebook_login = $request->facebook_login;
            // $data->twitter = $request->twitter;
            // $data->tmpay = $request->tmpay;
            // $data->texthome = $request->texthome;
            // $data->textrun = $request->textrun;
            // $data->howto = $request->howto;
            // $data->apk = $request->apk;
            // $data->googleplay = $request->googleplay;
            // $data->textrun_color = $request->textrun_color;
            // $data->banner_status = $request->banner_status;
            // $data->status_online = $request->status_online;
            // $data->user_online = $request->user_online;
            // $data->status_loadbalance = $request->status_loadbalance;
            $data->ssl = $request->ssl;
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/logo/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/logo/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/logo/');
                }

                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    // ->resize(135,69)
                    ->resize(null, 100, function($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save($path.$newFilename, 100);
                $data->logo = 'images/logo/'.$newFilename;
            }

            if($request->hasFile('icon')){
                $image = $request->file('icon');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/logo/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/logo/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/logo/');
                }
    
                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    ->save($path.$newFilename, 100);
                $data->icon = 'images/logo/'.$newFilename;
            }

            $data->update();

            session()->flash('message', 'อัพเดทสำเร็จ');
            return redirect()->route('admin.setting');


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
