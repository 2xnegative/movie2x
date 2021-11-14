<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

use App\Setting;
use App\tmpay;
use App\Log;
use App\Logregister as logre;
use App\User;

class TmpayController extends Controller
{
    public function tmpay(Request $request)
    {
        $data = Log::where('tmpay_trans_id', $request->transaction_id);

        if($data->count() == 0){
            return 'ERROR';
        }

        if($request->status == 1){
            // =================================================
            //      อัพเดท Log
            // =================================================
            DB::table('log')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 1,
                    'tmpay_price' => $request->real_amount
                ]);

            // =================================================
            //      ปรับวันใช้งาน
            //      $user_id = ค้นหา User ที่เติม
            //      $dayForGet = ค้นหาจำนวนวันที่ได้รับ
            //      $update_user = อัพเดท VIP USER
            // =================================================
            $user_id = DB::table('log')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->first();

            $dayForGet = DB::table('tmpay')
                ->where('price', $request->real_amount)
                ->first();

            // $update_user = DB::table('users')
            //     ->where('id', $user_id->tmpay_id_user)
            //     ->update([
            //         'vip' => Carbon::now()->addDays($dayForGet->date)
            //     ]);
            // เปลี่ยนจากเพิ่มวันใช้งาน มาเพิ่ม Point แทน

            $update_user = DB::table('users')
                ->where('id', $user_id->tmpay_id_user)
                ->update([
                    'point' => $dayForGet->date
                ]);


            echo 'SUCCEED|UID='.$user_id->tmpay_id_user;

        }else if($request->status == 3){
            DB::table('log')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 3
                ]);
        }else if($request->status == 4){
            DB::table('log')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 4
                ]);
        }else if($request->status == 5){
            DB::table('log')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 5
                ]);
        }
    }

    /*
    *
    *
    *   สมัครด้วย TRUEMONEY
    *
    */
    public function tmpay_register(Request $request)
    {

        $data = logre::where('tmpay_trans_id', $request->transaction_id);

        if($data->count() == 0){
            return 'ERROR';
        }

        if($request->status == 1){
            // =================================================
            //      อัพเดท Log
            // =================================================
            DB::table('logre')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 1,
                    'tmpay_price' => $request->real_amount
                ]);

            // =================================================
            //      ปรับวันใช้งาน
            //      $user_id = ค้นหา User ที่เติม
            //      $dayForGet = ค้นหาจำนวนวันที่ได้รับ
            //      $update_user = อัพเดท VIP USER
            // =================================================
            $user_id = DB::table('logre')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->first();

            $dayForGet = DB::table('tmpay')
                ->where('price', $request->real_amount)
                ->first();


            $create_user = new User;
            $create_user->email = $user_id->username;
            $create_user->password = $user_id->password;
            $create_user->admin = 0;
            $create_user->vip = Carbon::now()->addDays($dayForGet->date);
            $create_user->save();

            $id = User::where('id', 'desc')->first();

            $create_log = new Log;
            $create_log->tmpay_status = 1;
            $create_log->tmpay_trans_id = $request->transaction_id;
            $create_log->tmpay_tmp_pass = $request->password;
            $create_log->tmpay_id_user = $id->id;
            $create_log->tmpay_username = $id->email;
            $create_log->tmpay_price = $request->real_amount;
            $create_log->save();

            // $update_user = DB::table('users')
            //     ->where('id', $user_id->tmpay_id_user)
            //     ->update([
            //         'vip' => Carbon::now()->addDays($dayForGet->date)
            //     ]);


            echo 'SUCCEED|UID='.$user_id->username;

        }else if($request->status == 3){
            DB::table('logre')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 3
                ]);
        }else if($request->status == 4){
            DB::table('logre')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 4
                ]);
        }else if($request->status == 5){
            DB::table('logre')
                ->where('tmpay_trans_id', $request->transaction_id)
                ->update([
                    'tmpay_status' => 5
                ]);
        }
    }

}
