@php

    // header("Content-type: application/text");
    header("Access-Control-Allow-Origin: *");
    header( "location: ".$file );
    exit(0);
    // $reqpath = 'http://cdn-2.vip-streaming.com/vod/movie2/store-22/Countdown_2019_thr_v1.mp4/playlist.m3u8';
    // // header("Content-type: application/x-mpegURL");
    // // header("Content-Disposition: attachment; filename=index.m3u8");

    // $opts = array(
    //     'http'=>array(
    //         'method'=>"GET",
    //         'header'=>"Accept-language: en\r\n" .
    //                 "Cookie: foo=bar\r\n"
    //     )
    //     );

    // $context = stream_context_create($opts);

    // // Open the file using the HTTP headers set above
    // $file = file_get_contents($reqpath, false, $context);

    // // @readfile($reqpath);

    // $handle = curl_init();
    // $url = "http://cdn-2.vip-streaming.com/vod/movie2/store-22/Countdown_2019_thr_v1.mp4/playlist.m3u8";
    // // $domain = preg_replace("(^https?://)", "", $url );
    // // dd($domain);
    // $header = array('Accept-Language: fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3');
    // curl_setopt($handle, CURLOPT_URL, $url);
    // curl_setopt($handle, CURLINFO_HEADER_OUT, 1);
    // curl_setopt($handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:55.0) Gecko/20100101 Firefox/55.0.1');
    // curl_setopt($handle, CURLOPT_FOLLOWLOCATION, false);
    // curl_setopt($handle, CURLOPT_NOSIGNAL, true);
    // curl_setopt($handle, CURLOPT_RETURNTRANSFER, false); 
    // curl_setopt($handle, CURLOPT_HTTPHEADER, $header); 
    // curl_setopt($handle, CURLOPT_HEADER, false);
    // header('Content-Type: text/html');
    // header("Access-Control-Allow-Origin: *");

    // $result = curl_exec($handle);
    // var_dump($result);

    
@endphp
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streaming</title>
    <script type="text/javascript" src="{{ asset(env('STREAMING_APP_JWPLAYER_LINK', 'jw/jwplayer8.js')) }}"></script>
</head>
<body>
<style>
    body {
        background-color: #000;
        margin: 0px;
        padding: 0px;
    }
</style>
<div id="hlsjslive" class="embed-responsive-16by9"></div>
<script>
    {!! $sources !!}
    {!! $jw !!}
</script>
    
</body>
</html> --}}