<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hash;
use App\movie;
use GuzzleHttp\Client;
use App\Collection;
use App\Request as req;
use App\Setting;
use App\User as user;
use App\Tv as tv;
use App\Pincode as pin;
use App\Moviecontact as moviecon;
use Carbon\Carbon;
use Tholu\Packer\Packer;
use App\Expire;
use Intervention\Image\ImageManager;
use App\Categorys_movies as categoryMovies;

class ApiController extends Controller
{

    // GET TOKEN WMSAUTH
    public function get_token($ip)
    {
        $today = gmdate("n/j/Y g:i:s A");
        $ip = $ip;
        $id = "";
        $key = env('STREAMING_KEY', ''); //enter your key here
        $validminutes = 20;
        $str2hash = $ip . $key . $today . $validminutes;
        $md5raw = md5($str2hash, true);
        $base64hash = base64_encode($md5raw);
        $urlsignature = "server_time=" . $today ."&hash_value=" . $base64hash. "&validminutes=$validminutes";
        $base64urlsignature = '?wmsAuthSign='.base64_encode($urlsignature);

        return response()->json([
            'token' => $base64urlsignature
        ]);
    }

    
    // #################################
    // API UPDATE
    // ##################################
    public function api($token_hash)
    {
        if($token_hash != "353890")
        {
            return abort(404, 'Page Not Found');
        }

        $client = new Client;
        $response = $client->request('GET', 'https://api.vip-streaming.com/api/v1/movie/353890',['http_errors' => false]);
        $get = json_decode($response->getBody());
        foreach($get->data as $k)
        {
            $check = Movie::where('id', $k->id);

            // มีหนังอยู่แล้ว
            if($check->count() >= 1)
            {
                $check_version = $check->first();
                // if($check_version->version != $k->version)
                // {
                    // อัพเดทข้อมูล เช่น ซีรี่ย์ Epison
                    if($check_version->image != $k->image)
                    {
                        $part = 'https://api.vip-streaming.com/'.$k->image;
                        // $input = Input::file($part);
                        $test = new ImageManager; // เรียกใช้ object เพราะไม่สามารถเรียกแบบ static ได้
                        $test->make($part)
                            ->save($k->image);
                    }

                    $movie = Movie::find($k->id);

                    // ถ้า resolution เหมือนเดิมไม่ต้องอัพเดท timestamps
                    if($k->resolution == $movie->resolution)
                    {
                        $movie->timestamps = false;
                    }
                    else {
                        // ถ้า resolution มีการอัพเดทให้การอัพเดท
                        $movie->timestamps = false;
                        $movie->created_at = Carbon::now();
                    }
                    
                    $movie->title = $k->title;
                    $movie->slug_title = $k->slug_title;
                    $movie->new_movie = 0;
                    $movie->type = $k->type;
                    $movie->description = $k->description;
                    $movie->youtube = $k->youtube;
                    $movie->onair = $k->onair;
                    $movie->actors = $k->actors;
                    $movie->year = $k->year;
                    $movie->imdb = $k->imdb;
                    $movie->score = $k->score;
                    $movie->resolution = $k->resolution;
                    $movie->sound = $k->sound;
                    $movie->runtime = $k->runtime;
                    $movie->vip = 1;
                    $movie->version = 1;
                    $movie->api_update = 1;
                    $movie->image = $k->image;
                    $movie->image_poster = $k->image_poster;
                    $movie->file_main = $k->file_main;
                    $movie->file_main_2 = $k->file_main_2;
                    $movie->file_main_3 = $k->file_main_3;
                    $movie->file_openload = $k->file_openload;
                    $movie->file_openload_2 = $k->file_openload_2;
                    $movie->file_openload_3 = $k->file_openload_3;
                    $movie->file_streamango = $k->file_streamango;
                    $movie->file_streamango_2 = $k->file_streamango_2;
                    $movie->file_streamango_3 = $k->file_streamango_3;
                    $movie->file_main_sub = $k->file_main_sub;
                    $movie->file_main_sub_2 = $k->file_main_sub_2;
                    $movie->file_main_sub_3 = $k->file_main_sub_3;
                    $movie->file_openload_sub = $k->file_openload_sub;
                    $movie->file_openload_sub_2 = $k->file_openload_sub_2;
                    $movie->file_openload_sub_3 = $k->file_openload_sub_3;
                    $movie->file_streamango_sub = $k->file_streamango_sub;
                    $movie->file_streamango_sub_2 = $k->file_streamango_sub_2;
                    $movie->file_streamango_sub_3 = $k->file_streamango_sub_3;
                    $movie->file_series = $k->file_series;
                    $movie->save();
            }
            else // ไม่มีหนัง
            {
                $movie = new Movie;
                $movie->id = $k->id;
                $movie->title = $k->title;
                $movie->slug_title = $k->slug_title;
                $movie->new_movie = 0;
                $movie->type = $k->type;
                $movie->description = $k->description;
                $movie->youtube = $k->youtube;
                $movie->onair = $k->onair;
                $movie->actors = $k->actors;
                $movie->year = $k->year;
                $movie->imdb = $k->imdb;
                $movie->score = $k->score;
                $movie->resolution = $k->resolution;
                $movie->sound = $k->sound;
                $movie->runtime = $k->runtime;
                $movie->vip = 1;
                $movie->version = 1;
                $movie->api_update = 1;
                $movie->image = $k->image;
                $movie->image_poster = $k->image_poster;
                $movie->file_main = $k->file_main;
                $movie->file_main_2 = $k->file_main_2;
                $movie->file_main_3 = $k->file_main_3;
                $movie->file_openload = $k->file_openload;
                $movie->file_openload_2 = $k->file_openload_2;
                $movie->file_openload_3 = $k->file_openload_3;
                $movie->file_streamango = $k->file_streamango;
                $movie->file_streamango_2 = $k->file_streamango_2;
                $movie->file_streamango_3 = $k->file_streamango_3;
                $movie->file_main_sub = $k->file_main_sub;
                $movie->file_main_sub_2 = $k->file_main_sub_2;
                $movie->file_main_sub_3 = $k->file_main_sub_3;
                $movie->file_openload_sub = $k->file_openload_sub;
                $movie->file_openload_sub_2 = $k->file_openload_sub_2;
                $movie->file_openload_sub_3 = $k->file_openload_sub_3;
                $movie->file_streamango_sub = $k->file_streamango_sub;
                $movie->file_streamango_sub_2 = $k->file_streamango_sub_2;
                $movie->file_streamango_sub_3 = $k->file_streamango_sub_3;
                $movie->file_series = $k->file_series;
                $movie->save();
            }

            if($k->image != "")
            {
                $part = 'https://api.vip-streaming.com/'.$k->image;
                $test = new ImageManager; // เรียกใช้ object เพราะไม่สามารถเรียกแบบ static ได้
                $test->make($part)
                    ->save($k->image);

            }

            echo "<a href='".route('movie', ['title' => $k->slug_title])."' target='_blank'>".$k->id."</a><br>";
        }
    }

    public function api_category($token_hash)
    {
        if($token_hash != "353890")
        {
            return abort(404, 'Page Not Found');
        }

        $client = new Client;
        $response = $client->request('GET', 'https://api.vip-streaming.com/api/v1/movie-category/353890',['http_errors' => false]);
        $get = json_decode($response->getBody());

        $movie_id_array = array();

        foreach($get->data as $k)
        {
            // $check = categoryMovies::where('id', $k->id);
            if(!in_array($k->movie_id, $movie_id_array))
            {
                // $update = categoryMovies::where('movie_id', $k->movie_id)->delete();
                DB::table('categorys_movies')->where('movie_id', $k->movie_id)->delete();
                array_push($movie_id_array,$k->movie_id);
                // $count_loop++;
                // dd($k->movie_id);
            }
            //             ->update([
            //                 'movie_id' => $k->movie_id,
            //                 'category_id' => $k->category_id,
            //                 'api_update' => $k->api_update
            //                 // 'api_update' => $k->version
            //             ]);
            

            $movie = new categoryMovies;
            // $movie->id = $k->id;
            $movie->movie_id = $k->movie_id;
            $movie->category_id = $k->category_id;
            $movie->api_update = 1;
            $movie->save();


            // // มีหนังอยู่แล้ว
            // if($check->count() >= 1)
            // {
            //     $check_version = $check->first();
            //     // if($check_version->version != $k->version)
            //     // {
            //         // อัพเดทข้อมูล เช่น ซีรี่ย์ Epison

            //         $update = categoryMovies::where('id', $k->id)
            //             ->update([
            //                 'movie_id' => $k->movie_id,
            //                 'category_id' => $k->category_id,
            //                 'api_update' => $k->api_update
            //                 // 'api_update' => $k->version
            //             ]);
            //     // }
            // }
            // else // ไม่มีหนัง
            // {
                // $movie = new categoryMovies;
                // $movie->id = $k->id;
                // $movie->movie_id = $k->movie_id;
                // $movie->category_id = $k->category_id;
                // $movie->api_update = 1;
                // $movie->save();
            // }

            // echo "<a href='".url('/')."/".$k->image."'>".$k->id."</a><br>";
        }

        echo "SUCCESS | UPDATE";
    }

    protected function request($title)
    {
        $request = new req;
        $request->title = $title;
        $request->status = 0;
        $request->save();

        echo "เราจะดำเนินการให้เร็วที่สุด";
    }

    protected function moviecontact($movieid)
    {
        $check = moviecon::where('movie_id', $movieid);
        if($check->count() <= 0)
        {
            $request = new moviecon;
            $request->movie_id = $movieid;
            // $request->user_id = $userid;
            // $request->url_error = base64_decode($url);
            $request->save();
        }

        echo "เราจะดำเนินการให้เร็วที่สุด";
    }


    
}
