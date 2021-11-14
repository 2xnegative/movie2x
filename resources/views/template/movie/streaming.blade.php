@php
    if(env('PROTECT_STREAMING', '0') == "1"){
        if(isset($_SERVER['HTTP_REFERER'])) {
            if(!strpos($_SERVER['HTTP_REFERER'], base64_decode(env("STREAMING_APP","localhost/")))){
                die('Unauthorized access');
            }  
        }
        else {
            die('Unauthorized access');
        }
    }
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streaming</title>
    <script type="text/javascript" src="{{ asset('js/debug.js') }}"></script>

    @if(env('VIDEO_PLAYER', 'jwplayer') == "videojs")
    {{-- <script src="{{ asset('js/video.js') }}"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/video-js.min.css') }}"> --}}
    <link href="//vjs.zencdn.net/6.0.0/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/6.0.0/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-http-source-selector@latest/dist/videojs-http-source-selector.js" type="aeaa8bb5b587c0da10429086-text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-contrib-quality-levels@latest/dist/videojs-contrib-quality-levels.min.js" type="aeaa8bb5b587c0da10429086-text/javascript"></script>
     --}}
    @else
    <!-- JW Player Builds -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script src="https://p2p.allplayer.tk/player/player/v/8.8.2/provider.hlsjs.js"></script>
    <script type="text/javascript" src="{{ asset(env('STREAMING_APP_JWPLAYER_LINK', 'jw/jwplayer8.js')) }}"></script>
    @endif
</head>
<body>
<style>
    body {
        background-color: #000;
        margin: 0px;
        padding: 0px;
    }
</style>
@if(env('VIDEO_PLAYER', 'jwplayer') == 'videojs')
<video id="hlsjslive" width="100%" class="video-js vjs-default-skin vjs-16-9" controls playsinline>
</video>
@else
<div id="hlsjslive" class="embed-responsive-16by9"></div>
@endif


<script>
    {!! $sources !!}
    {!! $jw !!}
</script>
    
</body>
</html>