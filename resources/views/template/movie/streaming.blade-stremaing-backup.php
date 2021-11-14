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
    {{-- <script type="text/javascript" src="{{ asset(env('STREAMING_APP_JWPLAYER_LINK', 'jw/jwplayer8.js')) }}"></script> --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/cdnbye@latest"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script> --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/p2p-media-loader-core@0.6.2/build/p2p-media-loader-core.min.js"></script> --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/@hola.org/jwplayer-hlsjs@latest/dist/jwplayer.hlsjs.min.js"></script> --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/p2p-media-loader-hlsjs@0.6.2/build/p2p-media-loader-hlsjs.min.js"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/debug.js') }}"></script> --}}
    {{-- <script src="//ssl.p.jwpcdn.com/player/v/8.0.11/jwplayer.js"></script> --}}
    {{-- <script src="https://ssl.p.jwpcdn.com/player/v/8.11.10/jwplayer.core.controls.js"></script> --}}

    @if(env('VIDEO_PLAYER', 'jwplayer') == "videojs")
    {{-- <script src="{{ asset('js/video.js') }}"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/video-js.min.css') }}"> --}}
    <link href="//vjs.zencdn.net/6.0.0/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/6.0.0/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-http-source-selector@latest/dist/videojs-http-source-selector.js" type="aeaa8bb5b587c0da10429086-text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-contrib-quality-levels@latest/dist/videojs-contrib-quality-levels.min.js" type="aeaa8bb5b587c0da10429086-text/javascript"></script>
    {{-- <script src="https://cdn.streamroot.io/videojs-hlsjs-plugin/1/stable/videojs-hlsjs-plugin.js" type="aeaa8bb5b587c0da10429086-text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-contrib-quality-levels@latest/dist/videojs-contrib-quality-levels.min.js" type="aeaa8bb5b587c0da10429086-text/javascript"></script>
     --}}
    @else
    <!-- JW Player Builds -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@hola.org/jwplayer-hlsjs@latest/dist/jwplayer.hlsjs.min.js"></script> --}}
    <script src="https://p2p.allplayer.tk/player/player/v/8.8.2/provider.hlsjs.js"></script>
    <script type="text/javascript" src="{{ asset(env('STREAMING_APP_JWPLAYER_LINK', 'jw/jwplayer8.js')) }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/p2p-media-loader-core@latest/build/p2p-media-loader-core.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/p2p-media-loader-hlsjs@latest/build/p2p-media-loader-hlsjs.min.js"></script> --}}
    <!-- JWPlayer Hlsjs Provider -->
    {{-- <script src="//cdn.jsdelivr.net/npm/cdnbye@latest/dist/jwplayer.hlsjs.provider.min.js"></script> --}}
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
    // {!! $api_token !!}
    // var ip = "";
    // var token = "";
    // {!! $sources !!}
    // var _0x3723=['getJSON','https://api.ipify.org/?format=json'];(function(_0x5beba5,_0x3723c7){var _0x3ed938=function(_0x4ef64e){while(--_0x4ef64e){_0x5beba5['push'](_0x5beba5['shift']());}};_0x3ed938(++_0x3723c7);}(_0x3723,0x1e6));var _0x3ed9=function(_0x5beba5,_0x3723c7){_0x5beba5=_0x5beba5-0x0;var _0x3ed938=_0x3723[_0x5beba5];return _0x3ed938;};$(document)['ready'](function(){$[_0x3ed9('0x0')](_0x3ed9('0x1'),function(_0x2deae1){ip=_0x2deae1['ip'];$[_0x3ed9('0x0')](api_token+'/'+ip,function(_0x1449cc){token=_0x1449cc['token'];get_player(url+token);});});});
    @php
    // $(document).ready(function(){
    //     $.getJSON("https://api.ipify.org/?format=json", function(e) {
    //         // Get IP for Cloudflare
    //         ip = e.ip;
    //         // Get Token 
    //         $.getJSON(api_token+"/"+ip, function(e) {
    //             token = e.token;
    //             get_player(url+token);
    //         });
    //     });
    // });
    @endphp

    (() => {
        {!! $api_token !!}
        var ip = "";
        var token = "";
        {!! $sources !!}
        get_ip();
        function get_ip() 
        {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://api.ipify.org');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    ip = xhr.responseText;
                    get_token();
                }
                else {
                }
            };
            xhr.send();
        }

        function get_token() 
        {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', api_token+"/"+ip);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // var jsonResponse = JSON.parse(xhr.responseText);
                    console.log("data: "+xhr.responseText)
                    const regex = /\?(.*)/gm;
                    let m;
                    while ((m = regex.exec(xhr.responseText)) !== null) {
                        // This is necessary to avoid infinite loops with zero-width matches
                        if (m.index === regex.lastIndex) {
                            regex.lastIndex++;
                        }
                        
                        // The result can be accessed through the `m`-variable.
                        m.forEach((match, groupIndex) => {
                            if(groupIndex == 0)
                            {
                                token = match;
                                token = token.replace('"}',"");
                                // console.log(token);
                            }
                        });
                    }
                    // token = jsonResponse.token;
                    get_player(url+token);
                }
                else {
                }
            };
            xhr.send();
        }

        function get_player(url) {
            {!! $jw !!}
        }
    })();

</script>
    
</body>
</html>