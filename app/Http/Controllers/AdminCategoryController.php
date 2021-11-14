<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genre as category;
use App\Setting;
use Auth;

class AdminCategoryController extends Controller
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
        $data['header_title'] = "จัดการหมวดหมู่";
        // $data['request'] = category::where('split', '0')->orderBy('created_at', 'asc')->get();
        $data['request'] = category::orderBy('created_at', 'asc')->get();

        // $data['request_split'] = category::where('split', '1')->orderBy('created_at', 'asc')->get();

        return view('admin.page.category.category', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->Main();
        $data['header_title'] = "เพิ่มหมวดหมู่";
        return view('admin.page.category.create', $data);
    }

    public function createsplit()
    {
        $data = $this->Main();
        $data['header_title'] = "เพิ่มหมวดหมู่แบบแยก";
        return view('admin.page.category.createsplit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new category;
        $data->title_category = $request->title_category;
        $data->title_category_eng = $request->title_category_eng;
        $data->split = $request->split;
        $data->type_category = $request->type_category;
        $data->save();

        session()->flash('message', "เพิ่มหมวดหมู่สำเร็จ");
        return redirect()->route('admin.category');
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
        $data['request'] = category::find($id);
        $data['header_title'] = "แก้ไขหมวดหมู่";

        return view('admin.page.category.edit', $data);
    }

    public function editsplit($id)
    {
        $data = $this->Main();
        $data['request'] = category::find($id);
        $data['header_title'] = "แก้ไขหมวดหมู่แบบแยก";

        return view('admin.page.category.editsplit', $data);
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
        $data = category::find($id);
        $data->timestamps = false;
        $data->title_category = $request->title_category;
        $data->title_category_eng = $request->title_category_eng;
        $data->split = $request->split;
        $data->type_category = $request->type_category;
        $data->update();

        session()->flash('message', "แก้ไขหมวดหมู่สำเร็จ");
        return redirect()->route('admin.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = category::where('id',$id)->delete();

        session()->flash('message', 'ลบเรียบร้อย');
        return redirect()->route('admin.category');
    }
}
