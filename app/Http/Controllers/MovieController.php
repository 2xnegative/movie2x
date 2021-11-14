<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use Response;
use App\movie;
use App\genre;
use App\Setting;
use App\Categorys_movies as categoryMovies;
use GuzzleHttp\Client;
use App\Menu as menu;
// use App\About as about;
use App\Tv;
use App\Ad as ads;
use App;
use Carbon\Carbon;
use App\User;
use Jenssegers\Agent\Agent;
use Tholu\Packer\Packer;
use Crypt;
use App\Seo;
use Redirect;

class MovieController extends Controller
{

    public function __construct(){
    }


    public function Main(){

        // Device detech
        if(env('MOBILE_MODE', '0') == "1")
        {
            $device = new Agent();
            $data['device'] = $device;
        }


        $data['setting'] = Setting::find(1);
        $data['seo'] = Seo::first();
        $data['show_ads'] = "1";
        $data['category_type'] = genre::where([['type_category', 'type']])
        ->orderBy('updated_at', 'desc')->get();
        // $data['category_type'] = genre::where([['type_category', 'type'],['no', '!=', "0"]])
        // ->orderBy('no', 'asc')->get();

            // ->leftjoin('categorys_movies', 'genres.id', '=', 'categorys_movies.category_id')
            // ->select('genres.*', DB::raw('count(categorys_movies) as category_count'))
            // ->groupBy('categorys_movies')->get();
        // $data['category_menu'] = genre::where('type_category', 'category')->orderBy('no', 'asc')->get();
        $data['category_menu'] = genre::where('type_category', 'category')->orderBy('updated_at', 'desc')->get();
        $data['category'] = genre::get();
        // $data['menu'] = menu::orderBy('no', 'asc')->get();
        $data['menu'] = menu::get();
        $data['mode'] = "home";
        $data['mode_sub'] = "movie";
        $data['title'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;

        $data['category_year'] = movie::orderBy('year', 'desc')->first();

        $data['ads_a'] = ads::where([
            ['layout_ads','=', 'a'],
            ['status_ads', '=', 1],
            ['expired', '>', Carbon::now()]
            ])
            ->orderBy('updated_at','asc')
            ->get(); // ตรงกลางด้านบน

        // แสดงหลายๆอัน
        if(env('BANNER_FULL', '0') == "1")
        {
            $data['ads_r1'] = ads::where([
                ['layout_ads','=', 'r1'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get(); // ขวาด้านบน

            $data['ads_f1'] = ads::where([
                ['layout_ads','=', 'f1'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get(); // ซ้ายด้านบน

            $data['ads_bbb'] = ads::where([
                ['layout_ads','=', 'bbb'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get(); // ลอยตรงกลางล่าง

            $data['ads_aaa'] = ads::where([
                ['layout_ads','=', 'aaa'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get(); // ลอยซ้าย

            $data['ads_ccc'] = ads::where([
                ['layout_ads','=', 'ccc'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get(); // ลอยขวา

            $data['ads_footer'] = ads::where([
                ['layout_ads','=', 'footer'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get(); // ลอยขวา
        }
        else
        {
            $data['ads_r1'] = ads::where([
                ['layout_ads','=', 'r1'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->first(); // ขวาด้านบน

            $data['ads_f1'] = ads::where([
                ['layout_ads','=', 'f1'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->first(); // ซ้ายด้านบน
            
            $data['ads_bbb'] = ads::where([
                ['layout_ads','=', 'bbb'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->first(); // ลอยตรงกลางล่าง
                
            $data['ads_aaa'] = ads::where([
                ['layout_ads','=', 'aaa'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->first(); // ลอยซ้าย

            $data['ads_ccc'] = ads::where([
                ['layout_ads','=', 'ccc'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->first(); // ลอยขวา
            
            // ปิดใช้งาน
            $data['ads_footer'] = ads::where([
                ['layout_ads','=', 'footer_disable'],
                ['status_ads', '=', 1],
                ['expired', '>', Carbon::now()]
                ])
                ->orderBy('updated_at','desc')
                ->get();

        }

        $data['ads_r2'] = ads::where([
            ['layout_ads','=', 'r2'],
            ['status_ads', '=', 1],
            ['expired', '>', Carbon::now()]
            ])
            ->orderBy('updated_at','asc')
            ->get(); // 250px ข้างๆ
        // $data['bannerB'] = banner::where('layout', 'B')->orderBy('id','asc')->get();
        // $data['bannerC'] = banner::where('layout', 'C')->orderBy('id','asc')->get();
        // $data['bannerD'] = banner::where('layout', 'D')->orderBy('id','asc')->get();

        return $data;
    }

    public function index(){
        
        if(!Schema::hasTable('movies')){
            return redirect()->route('install');
        }

        // เช็ค Paid Monthly 
        // $checkDomain = new Client;
        // $url = 'https://checkdomain.iamtheme.com/checkexpired.php';
        // $res = $checkDomain->request('GET', $url, ['http_errors' => false]);
        // $get_res = $res->getStatusCode();
        // if($get_res == "404")
        // {
        //     return redirect('https://www.iamtheme.com/%E0%B9%81%E0%B8%88%E0%B9%89%E0%B8%87%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%87%E0%B8%B4%E0%B8%99/');
        // }
        // else if($get_res == "200")
        // {
        //     // None expired
        // }
        // else {
        //     return redirect('https://www.iamtheme.com/%E0%B9%81%E0%B8%88%E0%B9%89%E0%B8%87%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%87%E0%B8%B4%E0%B8%99/');
        // }

        // $domain = base64_decode(env('APP_DOMAIN'));
        // $check_domain = strpos($_SERVER['HTTP_HOST'], $domain);
        // if($check_domain === false)
        // {
        //     return redirect(base64_decode("aHR0cHM6Ly93d3cuaWFtdGhlbWUuY29tLyVFMCVCOSU4MSVFMCVCOCU4OCVFMCVCOSU4OSVFMCVCOCU4NyVFMCVCOCU4QSVFMCVCOCVCMyVFMCVCOCVBMyVFMCVCOCVCMCVFMCVCOSU4MCVFMCVCOCU4NyVFMCVCOCVCNCVFMCVCOCU5OS8="));
        // }
        
        $data = $this->Main(); // Main มาใช้

        $data['show_ads'] = "1";
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->keyword;
        $data['description'] = $data['setting']->description;
        $data['movie'] = movie::where('type', '!=', 'av')
            // ->orderBy('id','desc')
            ->orderBy('updated_at','desc')
            ->select('id', 'title', 'slug_title', 'sound', 'image', 'imdb', 'resolution', 'type', 'score','updated_at')
            ->paginate(28);
        
        
        
        
        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.home', $data);
        }
        else{
            return view('movie.home', $data);
        }
    }

    // Streaming MP4 JWPLAYER
    public function recode(){
        // $movie = movie::where([['type', 'series'],['file_series', 'LIKE', '{{}}!!end!!'], ['file_main', '!=', '']])->limit(100)->get();
        // $movie = movie::where([['type', 'series'],['file_series', 'LIKE', ''], ['file_main', '!=', '']])->limit(100)->get();
        // $movie = movie::where([['type', 'series'],['file_main', 'LIKE', '%!!end!!%']])->limit(500)->get();
        // $movie = movie::where([['type', 'movie'],['file_main', 'LIKE', '%!!end!!%']])
        // $movie = movie::where([['type', 'av'],['file_series', 'LIKE', '%!!end!!%']])->limit(500)->get();
        // $movie = movie::where([['type', 'movie'],['file_main', ''],['file_series', '!=', '']])->limit(100)->get();
        // $movie = movie::where([['youtube', 'LIKE', '%/embed/%']])->limit(100)->get();


        // dd($movie);

        //     ->select('id', 'file_main')
        //     ->limit(200)->get();
        // $movie = movie::where([['slug_title', null]])
        // ->select('id', 'title', 'slug_title')
        // ->limit(200)->get();

        // $return = str_replace('/}(.*)!/', '', $movie->file_main)

        
        // foreach($movie as $k) {
        //     $slug = str_replace(" ", "-", $k->title);
        //     // preg_match('/}}(.*)!!end/', $k->file_main, $return_file); 
        //     // $file = $k->file_main;
        //     $update = movie::find($k->id);
        //     // if(count($return_file) > 1) {
        //     //     $update->file_main = $return_file[1];
        //     //     $update->update();
        //     //     echo $return_file[1]."<br>";
        //     // }
        //     $update->slug_title = $slug;
        //     $update->update();
        //     echo $slug;
        // }


        // foreach($movie as $k) {
        //     preg_match('/}}(.*)!!end/', $k->file_series, $return_file); 
        //     // $file = $k->file_main;
        //     $update = movie::find($k->id);
        //     if(count($return_file) > 1) {
        //         $update->file_main = $return_file[1];
        //         $update->file_series = '';
        //         $update->update();
        //         echo $return_file[1]."<br>";
        //     }
        //     // $update->update();
        //     // echo $return_file[1]."<br>";
        // }

        // foreach($movie as $k) {
        //     preg_match('/embed\/(.*)/', $k->youtube, $return_file); 
        //     // $file = $k->file_main;
        //     $update = movie::find($k->id);
        //     if(count($return_file) > 1) {
        //         $update->youtube = 'https://www.youtube.com/watch?v='.$return_file[1];
        //         $update->update();
        //         echo $update->youtube."<br>";
        //     }
        //     // $update->update();
        //     // echo $return_file[1]."<br>";
        // }

         # ลบ Category ซ้ำ
         $category = categoryMovies::orderBy('updated_at','desc')->paginate(6000);

         foreach($category as $k)
         {
             // $check = categoryMovies::where([['movie_id',$k->movie_id], ['category_id',$k->category_id], ['id', '!=',$k->id]])
             //     ->select('id','movie_id')
             //     ->count();
             $check_count = categoryMovies::where([['movie_id',$k->movie_id], ['category_id',$k->category_id]])
                 ->select('id','movie_id')
                 ->count();
             if($check_count >= 2) 
             {
                 $check = categoryMovies::where([['movie_id',$k->movie_id], ['category_id',$k->category_id], ['id', '!=',$k->id]])
                 ->select('id','movie_id')
                 ->delete();
                 echo $k->movie_id." - ".$k->category_id."<br>";
             }
             // dd($check);
             // $delete = $check->delete();
             // if($check) {
             //     dd($check);
             // }
         }
    }

    // Streaming MP4 JWPLAYER
    public function streaming($url){
        $data = $this->Main(); // Main มาใช้
        $check_http = strpos(Crypt::decryptString(base64_decode($url)), "http");
        if($check_http !== false){
            $sources = $this->get_cloudstream(Crypt::decryptString(base64_decode($url)),false);
        }
        else
        {
            $sources = $this->get_cloudstream(Crypt::decryptString(base64_decode($url)),true);
        }
        $data['url'] = $url; 
        $url = "var url = '".$sources."';";
        $packer = new Packer($url, 'Normal', true, false, true);
        $data['sources'] = $packer->pack();
        // $data['sources'] = $url;


        // // url สำหรับดึง token
        // $url_api = url('api/v1/get/token/wmsauth');
        // $url_api = "var api_token = '".$url_api."';";
        // $data['api_token'] = new Packer($url_api, 'Normal', true, false, true);
        // $data['api_token'] = $data['api_token']->pack();
        

        // $data['url'] = route('streaming.file', ['file' => $url]);
        
        if(env('VIDEO_PLAYER', 'jwplayer') == "videojs")
        {
        
            $jw = 'var player = videojs("hlsjslive");
            player.src({
                src: url,
                type: "application/x-mpegURL"
            });';
        }
        else
        {
            $jw = 'jwplayer.key = "ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=";
                jwplayer("hlsjslive").setup({
                file: url,
                width:"100%",
                aspectratio: "16:9",
                primary : "html5",
                preload: "auto"
                });
            ';
        }
        $packer_jw = new Packer($jw, 'Normal', true, false, true);
        // $data['jw'] = $jw;
        $data['jw'] = $packer_jw->pack();

        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.template.movie.streaming', $data);
        }
        else{
            return view('template.movie.streaming', $data);
        }
    }

    // =======================================
    //      Protect Streaming
    // =======================================
    public function get_cloudstream($url, $includ_env = false)
    {
        $video_url = $url;
        if($includ_env) {
            // $video_url = base64_decode(env('STREAMING_ID_URL', '')).$url."/playlist.m3u8";
            $check_http = strpos($url, "ssd/");
            if($check_http === false){
                $video_url = base64_decode(env('STREAMING_ID_URL', '')).$url."/playlist.m3u8";
            }
            else
            {
                $video_url = base64_decode(env('STREAMING_ID_URL_SSD', '')).$url."/playlist.m3u8";
            }

        }

        //สร้าง signature key ต่อท้าย ลิงค์
        // $today = gmdate("n/j/Y g:i:s A");
        // //จะ hash ด้วย IP ก็ได้แต่อาจมีปัญหากับ IPv6
        // $ip = $_SERVER['REMOTE_ADDR'];
        // // $id = ''; // id
        // $key = "0ea631f7f57f39d8272eaa86deb97abaa"; //Do NOT change the key
        // $validminutes = 10; // กำหนดเวลาหมดอายุของลิ้ง default 1
        // $str2hash = $ip . $key . $today . $validminutes;
        // $md5raw = md5($str2hash, true);
        // $base64hash = base64_encode($md5raw);
        // $urlsignature = "server_time=" . $today ."&hash_value=" . $base64hash. "&validminutes=$validminutes";
        // $base64urlsignature = base64_encode($urlsignature);

        $today = gmdate("n/j/Y g:i:s A");
        // dd($today);
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            $commapos = strrpos($ip, ',');
            $ip = trim( substr($ip, $commapos ? $commapos + 1 : 0) );
        }
        $id = "";
        $key = "0ea631f7f57f39d8272eaa86deb97abaa"; //enter your key here
        $validminutes = 20;
        $str2hash = $ip . $key . $today . $validminutes;
        $md5raw = md5($str2hash, true);
        $base64hash = base64_encode($md5raw);
        $urlsignature = "server_time=" . $today ."&hash_value=" . $base64hash. "&validminutes=$validminutes";
        $base64urlsignature = base64_encode($urlsignature);

        $final_url = $video_url."?wmsAuthSign=".$base64urlsignature;
        // $final_url = $video_url;

        return $final_url;
    }

    public function top_imdb(){
        $data = $this->Main(); // Main มาใช้

        $data['show_ads'] = "1";
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->keyword;
        $data['description'] = $data['setting']->description;
        $data['movie'] = movie::orderBy('score','desc')
            ->paginate(28);
        

        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.home', $data);
        }
        else{
            return view('movie.home', $data);
        }
    }

    public function much_like(){
        $data = $this->Main(); // Main มาใช้

        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->keyword;
        $data['description'] = $data['setting']->description;
        $data['movie'] = movie::orderBy('view','desc')
            ->paginate(28);
        

        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.home', $data);
        }
        else{
            return view('movie.home', $data);
        }
    }

    public function movie_year($year){
        $data = $this->Main(); // Main มาใช้

        $data['show_ads'] = "1";
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->keyword;
        $data['description'] = $data['setting']->description;
        $data['movie'] = movie::where('year', $year)
            ->orderBy('updated_at','desc')
            ->paginate(28);
        


        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.home', $data);
        }
        else{
            return view('movie.home', $data);
        }
    }

    public function movie_tag($title){
        $data = $this->Main(); // Main มาใช้

        $data['show_ads'] = "1";
        $data['movie'] = movie::where('slug_title', $title)->paginate(28);

        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.home', $data);
        }
        else{
            return view('movie.home', $data);
        }
    }

  

    // public function about($id){
    //     $data = $this->Main(); // Main มาใช้

    //     $data['about'] = about::findOrFail($id);
    //     $data['title'] = $data['setting']->title;
    //     $data['keywords'] = $data['setting']->keyword;
    //     $data['description'] = $data['setting']->description;
    //     $data['category'] = genre::where('type_category', 'type')->get();

    //     return view('about', $data);
    // }



    public function player($player){

        session()->put('player', $player);

        return redirect()->back();
    }

    public function movie($title){
        $data = $this->Main(); // Main มาใช้
        $data['show_ads'] = "2";
        $data['movie'] = movie::where('slug_title',$title)->first(); // ค้นหาหนัง
        if($data['movie'] == false)
        {
            return redirect()->route('home');
        }

        $data['updated_view'] = movie::where('slug_title',$title)->first();
        $data['updated_view']->view = $data['movie']->view + 1;
        $data['updated_view']->timestamps = false;
        $data['updated_view']->update();

        // SEO
        // $data['title'] = $data['movie']->title." - ".$data['setting']->title;
        $data['title'] = "";
        $data['title'] = str_replace("{movie_title}", $data['movie']->title, $data['seo']->seo_title);
        $data['title'] = str_replace("{title_web}", $data['setting']->title, $data['title']);
        // END SEO


        // SEO
        $data['description'] = "";
        $data['description'] = str_replace("{movie_title}", $data['movie']->title, $data['seo']->seo_description_type);
        $data['description'] = str_replace("{title_web}", $data['setting']->title, $data['description']);
        $data['description'] = str_replace("{movie_description}", $data['movie']->description, $data['description']);
        // END SEO


        $data['genre'] = categoryMovies::where('categorys_movies.movie_id', $data['movie']->id)
            ->join('genres','genres.id', '=','categorys_movies.category_id')
            ->orderBy('genres.title_category_eng', 'asc')->first(); // ค้นหาหมวดหมู่แรกของหนัง
        $data['genre_count'] = categoryMovies::where('categorys_movies.movie_id', $data['movie']->id)
            ->join('genres','genres.id', '=','categorys_movies.category_id')
            ->orderBy('genres.title_category_eng', 'asc')->count();
        
        // โฆษณา
        $data['ads_movie_top'] = ads::where([
            ['layout_ads','=', 'm1'],
            ['status_ads', '=', 1],
            ['expired', '>', Carbon::now()]
            ])
            ->orderBy('number_ads','asc')
            ->get(); // หน้าดูหนังด้านบน
        $data['ads_movie_bottom'] = ads::where([
            ['layout_ads','=', 'm2'],
            ['status_ads', '=', 1],
            ['expired', '>', Carbon::now()]
            ])
            ->orderBy('number_ads','asc')
            ->get(); // หน้าดูหนังด้านล่าง
        $data['ads_movie_video'] = ads::where([
            ['layout_ads', 'video'],
            ['expired', '>', Carbon::now()],
            ['status_ads', '=', 1]
            ])->orderBy('number_ads','asc')->get(); // VIDEO ADS
        $data['ads_movie_video_count'] = ads::where([
            ['layout_ads', 'video'],
            ['expired', '>', Carbon::now()],
            ['status_ads', '=', 1]
            ])->orderBy('number_ads','asc')->count(); // COUNT VIDEO ADS

        $data['ads_mt'] = ads::where([
            ['layout_ads','=', 'mt'],
            ['status_ads', '=', 1],
            ['expired', '>', Carbon::now()]
            ])
            ->orderBy('updated_at','desc')
            ->get(); // ลอยขวา

        $data['random_movie'] = movie::orderByRaw("RAND()")->limit(4)->get(); // สุ่มหนัง

        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.movie', $data);
        }
        else{
            return view('movie.movie', $data);
        }

    }


    public function movies(){
        $data = $this->Main(); // Main มาใช้

        $data['show_ads'] = "1";
        $data['mode'] = "movie";
        $data['movie'] = movie::where('type', 'movie')
            ->orderBy('new_movie', '1')
            ->orderBy('updated_at','desc')
            ->paginate(28);
        $data['title_category'] = 'หนังทั้งหมด';
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;

        $data['random_movie'] = movie::orderByRaw("RAND()")->limit(4)->get(); // สุ่มหนัง
        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.category',$data);
        }
        else{
            return view('movie.category',$data);
        }
    }

    public function category($title){
        $data = $this->Main(); // Main มาใช้

        $category = genre::where('title_category', str_replace('-',' ', $title))->first();

        $data['show_ads'] = "1";
        $data['movie'] = categoryMovies::where('categorys_movies.category_id', $category->id)
            ->join('movies','categorys_movies.movie_id', '=','movies.id')
            // ->orderBy('movies.new_movie', '1')
            ->orderBy('movies.created_at','desc')
            // ->orderBy('movies.id','desc')
            ->paginate(28);
        $data['title'] = $data['setting']->title;
        $data['category'] = $category;
        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.category', $data);
        }
        else{
            return view('movie.category', $data);
        }
    }

    public function series(){
        $data = $this->Main(); // Main มาใช้

        $data['mode'] = "movie";
        $data['mode_sub'] = "series";
        $data['movie'] = movie::where('type', 'series')->orderBy('onair','asc')->orderBy('created_at','desc')
            ->paginate(28);
        $data['title_category'] = 'ซีรี่ย์';
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;

        return view('movie.category_series',$data);
    }

    public function category_series($id,$title){
        $data = $this->Main(); // Main มาใช้

        $data['mode'] = "movie";
        $data['movie'] = categoryMovies::where('categorys_movies.category_id', $id)
            ->join('movies','categorys_movies.movie_id', '=','movies.id')
            ->where('movies.type', 'series')
            ->orderBy('movies.created_at','desc')
            ->paginate(28);
        $data['title_category'] = $title;
        $data['title'] = $data['setting']->title;
        $data['keywords'] = $data['setting']->title;
        $data['description'] = $data['setting']->description;
        return view('movie.category_series', $data);
    }

    public function search(Request $request){
        $data = $this->Main(); // Main มาใช้

        $data['show_ads'] = "1";
        $data['search'] = $request->title;

        $data['movie'] = movie::where('title','like', '%'.$request->title.'%')
            ->orderBy('updated_at','desc')
            ->paginate(28);
        
        
        if(isset($data['device']) && $data['device']->isMobile() && env('MOBILE_MODE', '0') == "1")
        {
            return view('mobile.movie.search', $data);
        }
        else{
            return view('movie.search', $data);
        }
    }

    public function ads_redirect(Request $request) {
        $get_ads = ads::where('id', $request->id)->first();
        $ads = ads::where('id', $request->id)->first();
        $ads->timestamps = false;
        $ads->count_click = $get_ads->count_click + 1;
        $ads->update();

        // dd($ads);
        
        return Redirect::to($ads->url_ads, 301);
    }

}
