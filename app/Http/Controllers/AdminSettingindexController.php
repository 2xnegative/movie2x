<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Intervention\Image\ImageManager;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Indexsetting;
use Auth;

class AdminSettingindexController extends Controller
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
        $data['res'] = Indexsetting::orderBy('id', 'asc')->first();

        return view('admin.page.settingindex.settingindex', $data);
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
            $data = Indexsetting::find($id);
            $data->google = $request->google_play;
            $data->line = $request->line;
            $data->facebook = $request->facebook;
            $data->gmail = $request->gmail;
            $data->apk = $request->apk;

            if($request->hasFile('file1')){
                $image = $request->file('file1');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/slide/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/slide/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/slide/');
                }

                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    ->resize(1280,680)
                    ->save($path.$newFilename, 100);
                $data->file1 = 'images/slide/'.$newFilename;
            }

            if($request->hasFile('file2')){
                $image = $request->file('file2');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/slide/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/slide/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/slide/');
                }

                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    ->resize(1280,680)
                    ->save($path.$newFilename, 100);
                $data->file2 = 'images/slide/'.$newFilename;
            }

            if($request->hasFile('file3')){
                $image = $request->file('file3');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/slide/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/slide/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/slide/');
                }

                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    ->resize(1280,680)
                    ->save($path.$newFilename, 100);
                $data->file3 = 'images/slide/'.$newFilename;
            }

            if($request->hasFile('file4')){
                $image = $request->file('file4');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/slide/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/slide/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/slide/');
                }

                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    ->resize(1280,680)
                    ->save($path.$newFilename, 100);
                $data->file4 = 'images/slide/'.$newFilename;
            }

            if($request->hasFile('file5')){
                $image = $request->file('file5');
                $filename = $image->getClientOriginalName();
                $newFilename = str_random(11).str_random(20).$filename;
                $newFilename = str_replace(' ','_', $newFilename);
                // ========================================
                // หากเป็น Product จะไม่ใช้ public_path();
                // ========================================
                $path = 'images/slide/';
                if(env('APP_ENV') == 'production'){
                    $path = 'images/slide/';
                }else if(env('APP_ENV') == 'local'){
                    $path = public_path('images/slide/');
                }

                $image_save = new ImageManager;
                $image_save->make($image->getRealPath())
                    ->resize(1280,680)
                    ->save($path.$newFilename, 100);
                $data->file5 = 'images/slide/'.$newFilename;
            }

            $data->update();

            session()->flash('message', 'อัพเดทสำเร็จ');
            return redirect()->route('admin.setting.index');


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
