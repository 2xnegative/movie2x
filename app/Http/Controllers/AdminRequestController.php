<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use GuzzleHttp\Client;
use App\Request as req;
use App\Setting;
use Auth;


class AdminRequestController extends Controller
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
        $data['header_title'] = "ขอหนัง";
        $data['req'] = req::orderBy('updated_at','desc')->paginate(15);
        return view('admin.page.request.request', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->Main();
        $data['header_title'] = "เพิ่มทีวี";
        $data['setting'] = Setting::find(1);
        return view('admin.page.tv.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = Setting::find(1);
        $data = new Tv;
        $data->title = $request->title;
        $data->url = $request->url;
        $data->status = $request->status;
        $data->image = '/image/not_found.jpg';

        // ==============================================================
        //
        // ถ้ามีการอัพรูป จะ resize
        //
        // ==============================================================
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = $image->getClientOriginalName();
            $newFilename = str_random(11).str_random(20).$filename;
            $newFilename = str_replace(' ','_',$newFilename);
            // ========================================
            // หากเป็น Product จะไม่ใช้ public_path();
            // ========================================
            $path = 'images/tv/';
            if(env('APP_ENV') == 'production'){
                $path = 'images/tv/';
            }else if(env('APP_ENV') == 'local'){
                $path = public_path('images/tv/');
            }

            $image_save = new ImageManager; // เรียกใช้ object เพราะไม่สามารถเรียกแบบ static ได้
            $image_save->make($image->getRealPath())
                ->resize(162,108)
                ->save($path.$newFilename, 90); // ลด Optimize Image
            $data->image = 'images/tv/'.$newFilename;
        }

        $data->save();


        session()->flash('message', 'เพิ่มช่องทีวีเรียบร้อย');
        return redirect()->route('admin.tv');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->Main();
        $data = req::find($id);
        $data->status = 1;
        $data->update();

        return redirect()->route('admin.request');
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
        $setting = Setting::find(1);
        $data = Tv::findOrfail($id);
        $data->title = $request->title;
        $data->url = $request->url;
        $data->status = $request->status;
        //จะแปลงข้อมูลให้เป็น {{}}
        // ==============================================================
        //
        // ถ้ามีการอัพรูป จะ resize
        //
        // ==============================================================
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = $image->getClientOriginalName();
            $newFilename = str_random(11).str_random(20).$filename;
            $newFilename = str_replace(' ','_',$newFilename);
            // ========================================
            // หากเป็น Product จะไม่ใช้ public_path();
            // ========================================
            $path = 'images/tv/';
            if(env('APP_ENV') == 'production'){
                $path = 'images/tv/';
            }else if(env('APP_ENV') == 'local'){
                $path = public_path('images/tv/');
            }

            $image_save = new ImageManager; // เรียกใช้ object เพราะไม่สามารถเรียกแบบ static ได้
            $image_save->make($image->getRealPath())
                ->resize(162,108)
                ->save($path.$newFilename, 90); // ลด Optimize Image
            $data->image = 'images/tv/'.$newFilename;
        }

        $data->update();


        session()->flash('message', 'แก้ไขช่องทีวีเรียบร้อย');
        return redirect()->route('admin.tv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = req::find($id)->delete();

        session()->flash('message', 'ลบเรียบร้อย');
        return redirect()->route('admin.request');
    }
}
