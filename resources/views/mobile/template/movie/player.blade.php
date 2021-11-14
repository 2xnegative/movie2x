<meta name="viewport" content="width=device-width, initial-scale=1.0">
@if(env('VIDEO_PLAYER', 'jwplayer') == 'videojs')
<link href="//vjs.zencdn.net/5.4.6/video-js.min.css" rel="stylesheet">
<script src="//vjs.zencdn.net/5.4.6/video.min.js"></script>
@else
<script type="text/javascript" src="{{ asset(env('STREAMING_APP_JWPLAYER_LINK', '')) }}"></script>
<script type="text/javascript">
    jwplayer.key = "{{ env('STREAMING_APP_JWPLAYER_KEY', '') }}"; 
</script>
<script src="//content.jwplatform.com/libraries/eX4mp13.js"></script>
@endif

{{-- มีโฆษณา --}}
@if($ads_movie_video_count > 0) 
    @foreach($ads_movie_video as $key => $playlist)
        @if($playlist->status_ads)
            <div class="player_container" id="player_ads_{{ $key }}" style="margin-top: 10px;{{ $key != 0 ? 'display: none' : '' }}">
                @if(env('VIDEO_PLAYER', 'jwplayer') == 'videojs')
                <video id="ads_movie_{{ $key }}" width="100%" class="video-js vjs-default-skin vjs-16-9" controls playsinline>
                </video>
                @else
                <div id="ads_movie_{{ $key }}" style="margin: 15px" class="embed-responsive-16by9 ads_movie" ></div>
                @endif
                
                <div id="skip_ads_{{ $key }}" class="skip-ads" style="display:none" disabled="true">
                        ข้ามได้ใน <b id="time_skip_{{ $key }}">{{ $setting->time_skip }}</b>
                </div>
                <div id="skip_ads_{{ $key }}" class="skip-ads" style="display:none" disabled="true">
                        ข้ามได้ใน <b id="time_skip_{{ $key }}">{{ $setting->time_skip }}</b>
                </div>
            </div>
            <script>
                @if(env('VIDEO_PLAYER', 'jwplayer') == 'videojs')
                    var player_{{ $key }} = videojs("ads_movie_{{ $key }}");
                    player_{{ $key }}.src({
                        @if(strrpos($playlist->image_ads , 'http') === false)
                            src: "{{ asset($playlist->image_ads) }}",
                        @else
                            src: "{{ $playlist->image_ads }}",
                        @endif
                    });

                    // console.log("{{ asset($playlist->image_ads) }}");

                    player_{{ $key }}.on('displayClick', function(e) {
                        if(start_ads_{{ $key }} >= 1)
                        {
                            window.open("{{ route('ads_redirect', ['id' => $playlist->id]) }}");
                        }
                    });

                    player_{{ $key }}.on('click', function(e) {
                        if(start_ads_{{ $key }} >= 1)
                        {
                            window.open("{{ route('ads_redirect', ['id' => $playlist->id]) }}");
                        }
                    });

                @else
                    var player_{{ $key }} = jwplayer("ads_movie_{{ $key }}");
                    player_{{ $key }}.key = "{{ env('STREAMING_APP_JWPLAYER_KEY', '') }}";
                    player_{{ $key }}.setup({
                        @if(strrpos($playlist->image_ads , 'http') === false)
                            file: '{{ asset($playlist->image_ads) }}',
                        @else
                            file: '{{ $playlist->image_ads }}',
                        @endif
                        // image: "{{ asset($movie->image_poster) }}",
                        width:"100%",
                        aspectratio: "16:9",
                        
                    });
        
                    player_{{ $key }}.on('displayClick', function(e) {
                        if(start_ads_{{ $key }} >= 1)
                        {
                            window.open("{{ route('ads_redirect', ['id' => $playlist->id]) }}");
                        }
                    });
                @endif
    
            </script>
        @endif
    @endforeach
@else
    {{-- ไม่มีโฆษณา --}}
    <script>
        jQuery(document).ready(function(){
            jQuery("#player_movie").show();
        });
    </script>
@endif

{{-- Iframe Player --}}
@if($movie->type == "movie" || $movie->type == "av")
    <div class="player_container" id="player_movie" style="display: {{ $ads_movie_video_count == 0 ? 'block' : 'none' }};">
        <div style="display: block;" class="movie_player">
            @php
                $file_main = "";
                $file_resolution = "";
                if($movie->sound == "TH" || $movie->sound == "Thai" || $movie->sound == "CT" || $movie->sound == "thai" || $movie->sound == "TS" || $movie->sound == "Thai(C)" || $movie->sound == "ZM" || $movie->sound == "Zoom" || $movie->sound == "zoom")
                {
                    $file_main = $movie->file_main;
                    $file_resolution = "main";
                    if($movie->file_main == "" && $movie->file_main_2 != "")
                    {
                        $file_main = $movie->file_main_2;
                    }
                    elseif($movie->file_main == "" && $movie->file_main_2 == "" && $movie->file_main_3 != "")
                    {
                        $file_main = $movie->file_main_3;
                    }
                    elseif($movie->file_main == "" && $movie->file_main_2 == "" && $movie->file_main_3 == "")
                    {
                        $file_main = $movie->file_openload;
                        $file_resolution = "openload";
                        if($movie->file_openload == "" && $movie->file_openload_2 != "" && $movie->file_openload_3 == "")
                        {
                            $file_main = $movie->file_openload_2;
                        }
                        elseif($movie->file_openload == "" && $movie->file_openload_2 == "" && $movie->file_openload_3 != "")
                        {
                            $file_main = $movie->file_openload_3;
                        }
                        elseif($movie->file_openload == "" && $movie->file_openload_2 == "" && $movie->file_openload_3 == "")
                        {
                            if($movie->file_streamango == "" && $movie->file_streamango_2 != "" && $movie->file_streamango_3 == "")
                            {
                                $file_main = $movie->file_streamango_2;
                            }
                            elseif($movie->file_streamango == "" && $movie->file_streamango_2 == "" && $movie->file_streamango_3 != "")
                            {
                                $file_main = $movie->file_streamango_3;
                            }
                            elseif($movie->file_streamango == "" && $movie->file_streamango_2 == "" && $movie->file_streamango_3 == "")
                            {
                                $file_main = $movie->file_streamango;
                            }
                        }
                    }
                }
                elseif($movie->sound == "Soundtrack(T)" || $movie->sound == "ST" || $movie->sound == "Soundtrack(E)")
                {
                    $file_main = $movie->file_main_sub;
                    $file_resolution = "main";
                    if($movie->file_main_sub == "" && $movie->file_main_sub_2 != "")
                    {
                        $file_main = $movie->file_main_sub_2;
                    }
                    elseif($movie->file_main_sub == "" && $movie->file_main_sub_2 == "" && $movie->file_main_sub_3 != "")
                    {
                        $file_main = $movie->file_main_sub_3;
                    }
                    elseif($movie->file_main_sub == "" && $movie->file_main_sub_2 == "" && $movie->file_main_sub_3 == "")
                    {
                        $file_main = $movie->file_openload_sub;
                        $file_resolution = "openload";
                        if($movie->file_openload_sub == "" && $movie->file_openload_sub_2 != "" && $movie->file_openload_sub_3 == "")
                        {
                            $file_main = $movie->file_openload_sub_2;
                        }
                        elseif($movie->file_openload_sub == "" && $movie->file_openload_sub_2 == "" && $movie->file_openload_sub_3 != "")
                        {
                            $file_main = $movie->file_openload_sub_3;
                        }
                        elseif($movie->file_openload_sub == "" && $movie->file_openload_sub_2 == "" && $movie->file_openload_sub_3 == "")
                        {
                            if($movie->file_streamango_sub == "" && $movie->file_streamango_sub_2 != "" && $movie->file_streamango_sub_3 == "")
                            {
                                $file_main = $movie->file_streamango_sub_2;
                            }
                            elseif($movie->file_streamango_sub == "" && $movie->file_streamango_sub_2 == "" && $movie->file_streamango_sub_3 != "")
                            {
                                $file_main = $movie->file_streamango_sub_3;
                            }
                            elseif($movie->file_streamango_sub == "" && $movie->file_streamango_sub_2 == "" && $movie->file_streamango_sub_3 == "")
                            {
                                $file_main = $movie->file_streamango_sub;
                            }
                        }
                    }


                    // ป้องกันกรณีไม่พบ Source ในซับไทยเลย
                    if($file_main == "")
                    {
                        $file_main == $movie->file_main;
                    }

                }
            @endphp
            @php
            // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
            if(strrpos($file_main, '.mp4') !== false || strrpos($file_main, '.MP4') !== false)
            {
                $file_main = route('streaming', base64_encode(Crypt::encryptString($file_main)));
            }
            // กรณีเป็น soundtrack และ file_main ว่าง
            elseif($file_main == "" && $movie->sound == "Soundtrack(T)" || $movie->sound == "ST")
            {
                $file_main = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub)));
            }
            
            @endphp
            <iframe src="{{ $file_main }}" id="player_iframe" style="width: 100%; height: 230px; border: none;/* position: relative; z-index: 2147483647*/"
                allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" scrolling="no" __idm_id__="993216513">
            </iframe>
        </div>
    </div>
@elseif($movie->type == "series" || $movie->type == "anime")
    @php
        if ($movie->file_series != "" && strpos($movie->file_series, "!!end!!")){
            preg_match_all("/}}(.*?)!!end!!/", $movie->file_series, $filemovie);
            preg_match_all("/\{\{(.*?)\}\}/", $movie->file_series, $filename);
            $count_filename = count($filename[1]);
        } 
    @endphp
    <div class="player_container" id="player_movie" style="display: {{ $ads_movie_video_count == 0 ? 'block' : 'none' }};">
        <div style="display: block;" class="movie_player">
            @php
            // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
            if(strrpos($filemovie[1][0], '.mp4') !== false || strrpos($filemovie[1][0], '.MP4') !== false)
            {
                $filemovie[1][0] = route('streaming', base64_encode(Crypt::encryptString($filemovie[1][0])));
            }
            @endphp
            <iframe src="{{ $filemovie[1][0] != "" ? $filemovie[1][0] : '' }}" id="player_iframe" style="width: 100%; height: 230px; border: none;/* position: relative; z-index: 2147483647*/"
                allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" scrolling="no" __idm_id__="993216513"></iframe>
        </div>
    </div>
@endif


{{-- END IFRAME PLAYER --}}

@if($movie->type == "movie")
    {{-- ThaiSound --}}
<div id="sound_th" class="sound_container">

        <div class="player_ep">
            <div style="text-align: center">
                @if ($movie->file_main != "" || $movie->file_main_2 != "" || $movie->file_main_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main, '.mp4') !== false || strrpos($movie->file_main, '.MP4') !== false)
                    {
                        $movie->file_main = route('streaming', base64_encode(Crypt::encryptString($movie->file_main)));
                    }
                    @endphp
                <button type="button" data-href="{{ $movie->file_main != "" ? $movie->file_main : ($movie->file_main_2 != "" ? $movie->file_main_2 : ($movie->file_main_3 != "" ? $movie->file_main_3 : "" ) ) }}" data-resolution="google_res" onclick="triggerAd()"  class="btn btn-primary play-ep" style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                    <i class="fas fa-link"></i> หลัก
                </button>
                @endif
                @if ($movie->file_openload != "" || $movie->file_openload_2 != "" || $movie->file_openload_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload, '.mp4') !== false)
                    {
                        $movie->file_openload = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload)));
                    }
                    @endphp
                <button type="button" data-href="{{ $movie->openload != "" ? $movie->openload : ($movie->openload_2 != "" ? $movie->openload_2 : ($movie->openload_3 != "" ? $movie->openload_3 : "" ) ) }}" data-resolution="openload_res" class="btn btn-default play-ep" 
                    style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                    <i class="fas fa-link"></i> OPENLOAD
                </button>
                @endif
                @if ($movie->file_streamango != "" || $movie->file_streamango_2 != "" || $movie->file_streamango_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango, '.mp4') !== false)
                    {
                        $movie->file_streamango = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango)));
                    }
                    @endphp
                <button type="button" data-href="{{ $movie->file_streamango != "" ? $movie->file_streamango : ($movie->file_streamango_2 != "" ? $movie->file_streamango_2 : ($movie->file_streamango_3 != "" ? $movie->file_streamango_3 : "" ) ) }}" data-resolution="streamango_res" class="btn btn-default play-ep" 
                    style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555">
                    <i class="fas fa-link"></i> STREAMANGO
                </button>
                @endif
                <br>
            </div>
        </div>
        <div id="google_res" class="resolution_path" style="text-align: right;display: {{ $file_resolution == "main" ? 'block' : 'none' }};">
                @if($movie->file_main_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main_3, '.mp4') !== false)
                    {
                        $movie->file_main_3 = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_3)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_main_3 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        360p
                    </button>
                @endif
                @if($movie->file_main_2 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main_2, '.mp4') !== false)
                    {
                        $movie->file_main_2 = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_2)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_main_2 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        720p
                    </button>
                @endif
                @if($movie->file_main != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main, '.mp4') !== false)
                    {
                        $movie->file_main = route('streaming', base64_encode(Crypt::encryptString($movie->file_main)));
                    }
                    @endphp
                    {{-- <button data-href="{{ $movie->file_main }}" type="button" class="resolution btn btn-primary"
                        style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        1080p
                    </button> --}}
                @endif
        </div>
    
        <div id="openload_res" class="resolution_path" style="text-align: right;display: {{ $file_resolution == "openload" ? 'block' : 'none' }}">
                @if($movie->file_openload_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload_3, '.mp4') !== false)
                    {
                        $movie->file_openload_3 = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload_3)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_openload_3 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        360p
                    </button>
                @endif
                @if($movie->file_openload_2 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload_2, '.mp4') !== false)
                    {
                        $movie->file_openload_2 = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload_2)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_openload_2 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        720p
                    </button>
                @endif
                @if($movie->file_openload != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload, '.mp4') !== false)
                    {
                        $movie->file_openload = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_openload }}" type="button" class="resolution btn btn-primary"
                        style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        1080p
                    </button>
                @endif
        </div>
        <div id="streamango_res" class="resolution_path" style="text-align: right;display: {{ $file_resolution == "streamango" ? 'block' : 'none' }}">
                @if($movie->file_streamango_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango_3, '.mp4') !== false)
                    {
                        $movie->file_streamango_3 = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango_3)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_streamango_3 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        360p
                    </button>
                @endif
                @if($movie->file_streamango_2 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango_2, '.mp4') !== false)
                    {
                        $movie->file_streamango_2 = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango_2)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_streamango_2 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        720p
                    </button>
                @endif
                @if($movie->file_streamango != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango, '.mp4') !== false)
                    {
                        $movie->file_streamango = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_streamango }}" type="button" class="resolution btn btn-primary"
                        style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        1080p
                    </button>
                @endif
        </div>
    </div>
    
    {{-- Subtitle --}}
    <div id="sound_sub" class="sound_container" style="display: none">
    
        <div class="player_ep">
            <div style="text-align: center">
                @if ($movie->file_main_sub != "" || $movie->file_main_sub_2 != "" || $movie->file_main_sub_3 != "")
                @php
                // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                if(strrpos($movie->file_main_sub, '.mp4') !== false)
                {
                    $movie->file_main_sub = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub)));
                }
                @endphp
                <button type="button" data-href="{{ $movie->file_main_sub }}" data-resolution="google_res" onclick="triggerAd()"  class="btn btn-primary play-ep" 
                    style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                    <i class="fas fa-link"></i> หลัก
                </button>
                @endif
                @if ($movie->file_openload_sub != "" || $movie->file_openload_sub_2 != "" || $movie->file_openload_sub_3 != "")
                @php
                // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                if(strrpos($movie->file_openload_sub, '.mp4') !== false)
                {
                    $movie->file_openload_sub = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload_sub)));
                }
                @endphp
                <button type="button" data-href="{{ $movie->file_openload_sub }}" data-resolution="openload_res" class="btn btn-default play-ep" 
                    style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                    <i class="fas fa-link"></i> OPENLOAD
                </button>
                @endif
                @if ($movie->file_streamango_sub != "" || $movie->file_streamango_sub_2 != "" || $movie->file_streamango_sub_3 != "")
                @php
                // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                if(strrpos($movie->file_streamango_sub, '.mp4') !== false)
                {
                    $movie->file_streamango_sub = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango_sub)));
                }
                @endphp
                <button type="button" data-href="{{ $movie->file_streamango_sub }}" data-resolution="streamango_res" class="btn btn-default play-ep" 
                    style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555">
                    <i class="fas fa-link"></i> STREAMANGO
                </button>
                @endif
                <br>
            </div>
        </div>
    
        <div style="text-align: right" id="google_res_sub" class="resolution_path" style="display: block">
                @if($movie->file_main_sub_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main_sub_3, '.mp4') !== false)
                    {
                        $movie->file_main_sub_3 = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub_3)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_main_sub_3 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        360p
                    </button>
                @endif
                @if($movie->file_main_sub_2 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main_sub_2, '.mp4') !== false)
                    {
                        $movie->file_main_sub_2 = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub_2)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_main_sub_2 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        720p
                    </button>
                @endif
                @if($movie->file_main_sub != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_main_sub, '.mp4') !== false)
                    {
                        $movie->file_main_sub = route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_main_sub }}" type="button" class="resolution btn btn-primary"
                        style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        1080p
                    </button>
                @endif
        </div>
    
        <div style="text-align: right" id="openload_res_sub" class="resolution_path" style="display: none">
                @if($movie->file_openload_sub_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload_sub_3, '.mp4') !== false)
                    {
                        $movie->file_openload_sub_3 = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload_sub_3)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_openload_sub_3 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        360p
                    </button>
                @endif
                @if($movie->file_openload_sub_2 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload_sub_2, '.mp4') !== false)
                    {
                        $movie->file_openload_sub_2 = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload_sub_2)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_openload_sub_2 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        720p
                    </button>
                @endif
                @if($movie->file_openload_sub != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_openload_sub, '.mp4') !== false)
                    {
                        $movie->file_openload_sub = route('streaming', base64_encode(Crypt::encryptString($movie->file_openload_sub)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_openload_sub }}" type="button" class="resolution btn btn-primary"
                        style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        1080p
                    </button>
                @endif
        </div>
        <div style="text-align: right" id="streamango_res_sub" class="resolution_path" style="display: none;">
                @if($movie->file_streamango_sub_3 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango_sub_3, '.mp4') !== false)
                    {
                        $movie->file_streamango_sub_3 = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango_sub_3)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_streamango_sub_3 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px">
                        <i class="glyphicon glyphicon-sd-video"></i>
                        360p
                    </button>
                @endif
                @if($movie->file_streamango_sub_2 != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango_sub_2, '.mp4') !== false)
                    {
                        $movie->file_streamango_sub_2 = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango_sub_2)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_streamango_sub_2 }}" type="button" class="resolution btn btn-default"
                        style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #555;margin: 0px"
                        ><i class="glyphicon glyphicon-hd-video"></i>
                        720p
                    </button>
                @endif
                @if($movie->file_streamango_sub != "")
                    @php
                    // ตรวจสอบว่าเป็นไฟล์ MP4 ตรงหรือไม่
                    if(strrpos($movie->file_streamango_sub, '.mp4') !== false)
                    {
                        $movie->file_streamango_sub = route('streaming', base64_encode(Crypt::encryptString($movie->file_streamango_sub)));
                    }
                    @endphp
                    <button data-href="{{ $movie->file_streamango_sub }}" type="button" class="resolution btn btn-primary"
                        style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
                        <i class="glyphicon glyphicon-hd-video"></i>
                        1080p
                    </button>
                @endif
        </div>
    </div>
@elseif($movie->type == "series")
    @php
        if ($movie->file_series != "" && strpos($movie->file_series, "!!end!!")){
            preg_match_all("/}}(.*?)!!end!!/", $movie->file_series, $filemovie);
            preg_match_all("/\{\{(.*?)\}\}/", $movie->file_series, $filename);
            $count_filename = count($filename[1]);
        } 
    @endphp
        @for ($i=0; $i < $count_filename; $i++)
            @php
                $source = $filemovie[1][$i];
                if(strrpos($filemovie[1][$i],'.mp4') !== false || strrpos($filemovie[1][$i],'.MP4') !== false)
                {
                    $source = route('streaming', base64_encode(Crypt::encryptString($filemovie[1][$i])));
                }

            @endphp
            <div class="episode" style="padding: 0 20px;color: #fff;text-align:center;">
                @if($i == 0)
                    <div class="episode_path"  data-ep-name="{{ $movie->title }} - {{ $filename[1][$i] }}" data-href="{{ $source }}" style="width: 100%; background-color: #127ba3;cursor: pointer;padding: 10px;border-radius: 5px;margin: 5px">
                        <i class="fas fa-play"></i> {{ $movie->title }} - {{ $filename[1][$i] }}
                    </div>
                @else
                    <div class="episode_path"  data-ep-name="{{ $movie->title }} - {{ $filename[1][$i] }}" data-href="{{ $source }}" style="width: 100%; background-color: #5b5b5b;cursor: pointer;padding: 10px;border-radius: 5px;margin: 5px">
                        <i class="fas fa-play"></i> {{ $movie->title }} - {{ $filename[1][$i] }}
                    </div>
                @endif
            </div>
        @endfor
@endif
    

<div style="text-align: right;margin-top: 20px;">
        <button class="btn" id="movie_refresh" style="background-color: #DB601E; color: white">
            รีเฟชหนังไม่เล่น
        </button>
        <button class="btn" id="movie_fix" style="background-color: #E83016; color: white">
            แจ้งหนังเสีย
        </button>
    </div>
<script>
    jQuery(document).ready(function(){

        jQuery(".play-ep").click(function(){
            var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
            var resolution = jQuery(this).attr('data-resolution');
            jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
            jQuery(".play-ep").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
            jQuery(".play-ep").css({ 'color': '#555', 'border-bottom': '4px solid #c3c3c3' });
            jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
            jQuery(this).css({ 'border-bottom': '4px solid #127ba3', 'color': '#fff' });
            jQuery(".resolution_path").hide();
            jQuery("#"+resolution).show();

        });

        jQuery(".episode_path").click(function(){
            var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
            var name = jQuery(this).attr('data-ep-name');
            jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
            jQuery(".episode_path").css({ 'background-color': '#5b5b5b' });
            jQuery(this).css({ 'background-color': '#127ba3' });
        });

        jQuery(".resolution").click(function(){
            var ep = jQuery(this).attr('data-href'); // ดึง URL
            jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe

            jQuery(".resolution").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
            jQuery(".resolution").css({ 'color': '#555', 'border-bottom': '4px solid #c3c3c3' });
            jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
            jQuery(this).css({ 'border-bottom': '4px solid #127ba3', 'color': '#fff' });
        });

        jQuery(".sound_path").click(function(){
            
            jQuery(".sound_path").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
            jQuery(".sound_path").css({ 'color': '#555', 'border-bottom': '4px solid #c3c3c3' });
            jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
            jQuery(this).css({ 'border-bottom': '4px solid #127ba3', 'color': '#fff' });

            jQuery(".sound_container").hide();

            var path = jQuery(this).attr('data-sound');
            var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
            jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
            // console.log(path);
            jQuery("#"+path).show();
        });

        jQuery("#movie_refresh").click(function(){
            var movie_url = jQuery('#player_iframe').attr('src');
            jQuery("#player_iframe").attr('src', movie_url);
        });

        jQuery('#movie_fix').click(function() {
            var request = "{{ $movie->id }}";
            jQuery.ajax({
                url: '{{ url('/') }}/api/v1/moviecontact/'+request,
                type: 'GET',
                crossDomain: true,
                cache: false,
                success:function(data){
                
                // console.log(data);
                }
            });
            alert('เราจะดำเนินการให้เร็วที่สุด')
         });

    });
</script>
<style>
    .resolution_path {
        margin-right: 20px;
    }

    .ads_movie {
        position: absolute;
        z-index: 98;
    }
    .movie_player {
    }
    .player_container {
        position: relative;
        width: 100%;
        height: 250px;
    }
    .player_ep {
        margin: 5px 0 10px 0;
    }
    .skip-ads {
        position: absolute;
        z-index: 99;
        top: 30%;
        right: 0px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        color: #fff;
        background-color: #222;
        border-color: #151515;
        padding: 20px 21px 18px;
        line-height: 20px;
        font-size: 20px;
        opacity: .9;
    }

    .jw-controlbar {
        display: none;
    }

    
</style>
<script>
    @if($ads_movie_video) 
        @foreach($ads_movie_video as $key => $playlist)
            var ads_movie_{{ $key }} = document.getElementById("ads_movie_{{ $key }}");
            var ads_skip_{{ $key }} = document.getElementById("skip_ads_{{ $key }}");
            var ads_controller = document.getElementById("jw-controlbar");
            var player_ads_{{ $key }} = document.getElementById("player_ads_{{ $key }}");
            var player_movie_{{ $key }} = document.getElementById("player_movie_{{ $key }}");
            var set_time_skip = document.getElementById("time_skip_{{ $key }}");
            var start_ads_{{ $key }} = 0;


            
            @if(env('VIDEO_PLAYER', 'jwplayer') == 'videojs')

                // Videojs
                // เมื่อเริ่มเล่น
                player_{{ $key }}.on('play', function(e) {
                    start_ads_{{ $key }}++;
                    ads_skip_{{ $key }}.style.display = "block"; // แสดงปุ่มข้าม
                    var time_skip = parseInt({{ $setting->time_skip }});
                    set_time_skip.innerHTML = time_skip;
                    // ads_controller.style.display = "none";
                    // ads_controller.style.display = "none";
                    var count_down = setInterval(function()
                    { 
                        time_skip--;
                        set_time_skip.innerHTML = time_skip;
                    }, 1000); // นับถอยหลัง

                    setTimeout(function(){
                        clearInterval(count_down);
                        ads_skip_{{ $key }}.setAttribute("disabled", false);
                        ads_skip_{{ $key }}.innerHTML = "ข้ามโฆษณา";
                    }, {{ $setting->time_skip*1000 }})

                });

                player_{{ $key }}.on('stop', function(e) {
                    // console.log('stop');
                    start_ads_{{ $key }}++;
                    ads_skip_{{ $key }}.style.display = "block"; // แสดงปุ่มข้าม
                    var time_skip = parseInt({{ $setting->time_skip }});
                    set_time_skip.innerHTML = time_skip;
                    // ads_controller.style.display = "none";
                    // ads_controller.style.display = "none";
                    var count_down = setInterval(function()
                    { 
                        time_skip--;
                        set_time_skip.innerHTML = time_skip;
                    }, 1000); // นับถอยหลัง

                    setTimeout(function(){
                        clearInterval(count_down);
                        ads_skip_{{ $key }}.setAttribute("disabled", false);
                        ads_skip_{{ $key }}.innerHTML = "ข้ามโฆษณา";
                    }, {{ $setting->time_skip*1000 }})

                });

                player_{{ $key }}.on('pause', function(e) {
                    
                });

                player_{{ $key }}.on('ended', function(e) {
                    player_ads_{{ $key }}.style.display = "none"; // ปิดโฆษณา
                    // ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
                    @if($key == count($ads_movie_video)-1)
                        player_movie.style.display = "block"; // แสดงหนัง
                    // ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
                    @else($key != count($ads_movie_video) -1)
                        player_ads_{{ $key+1 }}.style.display = "block";
                        player_{{ $key+1 }}.play() //ให้เล่น Auto Play Ads ตัวถัดไป
                    @endif
                });

                // เมื้่อกดปุ่ม Skip
                ads_skip_{{ $key }}.addEventListener("click", function(){
                    if(ads_skip_{{ $key }}.getAttribute("disabled") == "false") // เช็คว่า ads_skip ครบ 3 วิหรือไม่แล้วปุ่มได้ปิด disabled ยัง
                    {
                        player_{{ $key }}.pause(); // หยุดเล่นโฆษณา
                        player_ads_{{ $key }}.style.display = "none"; // ปิดโฆษณา
                        // ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
                        @if($key == count($ads_movie_video)-1)
                            player_movie.style.display = "block"; // แสดงหนัง
                        // ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
                        @else($key != count($ads_movie_video) -1)
                            player_ads_{{ $key+1 }}.style.display = "block";
                            player_{{ $key+1 }}.play() //ให้เล่น Auto Play Ads ตัวถัดไป
                        @endif
                    }
                });

            @else
                // Jwplayer
                // เมื่อเริ่มเล่น
                player_{{ $key }}.on('play', function(e) {
                    start_ads_{{ $key }}++;
                    ads_skip_{{ $key }}.style.display = "block"; // แสดงปุ่มข้าม
                    var time_skip = parseInt({{ $setting->time_skip }});
                    set_time_skip.innerHTML = time_skip;
                    // ads_controller.style.display = "none";
                    // ads_controller.style.display = "none";
                    var count_down = setInterval(function()
                    { 
                        time_skip--;
                        set_time_skip.innerHTML = time_skip;
                    }, 1000); // นับถอยหลัง

                    setTimeout(function(){
                        clearInterval(count_down);
                        ads_skip_{{ $key }}.setAttribute("disabled", false);
                        ads_skip_{{ $key }}.innerHTML = "ข้ามโฆษณา";
                    }, {{ $setting->time_skip*1000 }})

                });

                player_{{ $key }}.on('pause', function(e) {
                    player_{{ $key }}.play();
                });

                // เมื่อเล่นจบ
                player_{{ $key }}.on('beforeComplete', function(e) {
                    player_ads_{{ $key }}.style.display = "none"; // ปิดโฆษณา
                    // ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
                    @if($key == count($ads_movie_video)-1)
                        player_movie.style.display = "block"; // แสดงหนัง
                    // ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
                    @else($key != count($ads_movie_video) -1)
                        player_ads_{{ $key+1 }}.style.display = "block";
                        player_{{ $key+1 }}.play() //ให้เล่น Auto Play Ads ตัวถัดไป
                    @endif
                    // console.log('complete');
                });

                // เมื้่อกดปุ่ม Skip
                ads_skip_{{ $key }}.addEventListener("click", function(){
                    if(ads_skip_{{ $key }}.getAttribute("disabled") == "false") // เช็คว่า ads_skip ครบ 3 วิหรือไม่แล้วปุ่มได้ปิด disabled ยัง
                    {
                        player_{{ $key }}.stop(); // หยุดเล่นโฆษณา
                        player_ads_{{ $key }}.style.display = "none"; // ปิดโฆษณา
                        // ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
                        @if($key == count($ads_movie_video)-1)
                            player_movie.style.display = "block"; // แสดงหนัง
                        // ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
                        @else($key != count($ads_movie_video) -1)
                            player_ads_{{ $key+1 }}.style.display = "block";
                            player_{{ $key+1 }}.play() //ให้เล่น Auto Play Ads ตัวถัดไป
                        @endif
                    }
                });
            @endif
        @endforeach
    @endif


</script>

<style>
    .btn-primary {
        color: #fff;
        background-color: #158cba;
        border-radius: 2px;
    }

    .play-ep {
        /* border-color: #127ba3; */
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        text-align: center;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 7px 12px;
        font-size: 14px;
        border-radius: 4px;
    }
</style>