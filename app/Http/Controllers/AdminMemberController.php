<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Setting;
use Auth;

class AdminMemberController extends Controller
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

        $data['header_title'] = "สมาชิกทั้งหมด";
        $data['request'] = User::where('admin', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.page.member.member', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->Main();
        $data['header_title'] = "เพิ่มแอดมิน";
        return view('admin.page.member.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User;
        $data->email = $request->email;
        $data->password = \Hash::make($request->password);
        $data->save();

        session()->flash('message', 'เพิ่มแอดมินเรียบร้อย');
        return redirect()->route('admin.member');
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
        $data['header_title'] = "แก้ไขแอดมิน";
        $data['request'] = User::find($id);

        return view('admin.page.member.edit', $data);
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
        $data = User::find($id)
            ->update(['password' => \Hash::make($request->password)]);

        session()->flash('message', 'แก้ไขแอดมินเรียบร้อย');
        return redirect()->route('admin.member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->delete();

        session()->flash('message', 'ลบเรียบร้อย');
        return redirect()->route('admin.member');
    }
}
