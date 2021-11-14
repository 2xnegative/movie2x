<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About as about;
use App\Setting;
use Auth;

class AdminAboutController extends Controller
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
        $data['header_title'] = "จัดการหน้าเพจ";
        $data['request'] = about::orderBy('created_at', 'asc')->get();
        return view('admin.page.about.about', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->Main();
        $data['header_title'] = "เพิ่มหน้าเพจ";
        return view('admin.page.about.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new about;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        session()->flash('message', "เพิ่มหน้าเพจสำเร็จ");
        return redirect()->route('admin.about');
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
        $data = $this->Main();
        $data['request'] = about::find($id);
        $data['header_title'] = "แก้ไขหน้าเพจ";

        return view('admin.page.about.edit', $data);
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
        $data = about::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->update();

        session()->flash('message', "แก้ไขหน้าเพจสำเร็จ");
        return redirect()->route('admin.about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = about::where('id',$id)->delete();

        session()->flash('message', 'ลบเรียบร้อย');
        return redirect()->route('admin.about');
    }
}
