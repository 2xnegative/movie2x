<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Intervention\Image\ImageManager;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Seo;
use Auth;

class AdminSeoController extends Controller
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
        $data['seo'] = Seo::first();

        return view('admin.page.seo.seo', $data);
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

        $data = Seo::first();
        $data->seo_title = $request->seo_title;
        $data->seo_description_type = $request->seo_description_type;
        $data->update();

        session()->flash('message', 'อัพเดทสำเร็จ');
        return redirect()->route('admin.seo');


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
