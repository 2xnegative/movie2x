<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="th" prefix="og: http://ogp.me/ns#">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {!! Html::script('js/5Npl_DkivWTNCRdzYR204bTSOlo.js') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/jquery-migrate.min.js') !!}
    @if(env('MOVIE_THEME', 'default') == "default")
        {!! Html::style('css/default/style.min.css') !!}
        {!! Html::style('css/default/stylesheet.css') !!}
        {!! Html::style('css/default/sidebar.css') !!}
        {!! Html::style('css/default/poster.css') !!}
        {!! Html::style('css/default/navigation.css') !!}
        {!! Html::style('css/default/single.css') !!}
    @elseif(env('MOVIE_THEME', 'default') == "red")
        {!! Html::style('css/red/style.min.css') !!}
        {!! Html::style('css/red/stylesheet.css') !!}
        {!! Html::style('css/red/sidebar.css') !!}
        {!! Html::style('css/red/poster.css') !!}
        {!! Html::style('css/red/navigation.css') !!}
        {!! Html::style('css/red/single.css') !!}
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    @if(env('MOVIE_THEME_NAVBAR', '0') == '1')
        <link rel="stylesheet" href="{{ asset('css/navbar/bootstrap.min.css') }}">
    @endif
    {{-- <script type="text/javascript" src="{{ asset('js/debug.js') }}"></script> --}}
 

    <title>{{ $title }}</title>
    @if(Route::is('home'))
    <link rel="canonical" href="{{ route('home') }}" />   
    @elseif(Route::is('movie'))
    <link rel="canonical" href="{{ route('movie', ['title' => $movie->slug_title]) }}" />
    @elseif(\Request::is('category'))
    <link rel="canonical" href="{{ route('category', ['title' => $movie->title_eng]) }}" />
    @endif

    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $setting->keyword }}" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}">
    <link rel="icon" href="{{ asset($setting->icon) }}">
    <link rel="dns-prefetch" href="https://s.w.org/">
    <style>
        .mobile-only {
            display: none;
        }
        .fb-comments {
            padding: 1px;
        }
    </style>

    @if(env('MOVIE_THEME', 'default') != 'default')

    <style>
        .nav {
            background: {{ env('MOVIE_THEME_PRIMARY', 'red') }};
        }

        li.active a{
            background-color:{{ env('MOVIE_THEME_PRIMARY', 'red') }}
        }

        .sidebar-header{
            background:{{ env('MOVIE_THEME_PRIMARY', 'red') }};
        }

        ul li a:hover{
            color: {{ env('MOVIE_THEME_PRIMARY', 'red') }};
        }
        .movie-footer{
            background: {{ env('MOVIE_THEME_PRIMARY', 'red') }};
        }

        .box-header,.box h3{
            background-color: {{ env('MOVIE_THEME_PRIMARY', 'red') }};
        }
        .header-search-button{
            background: {{ env('MOVIE_THEME_PRIMARY', 'red') }};
            background:{{ env('MOVIE_THEME_PRIMARY', 'red') }};
            background-image:-webkit-linear-gradient(top,{{ env('MOVIE_THEME_PRIMARY', 'red') }},{{ env('MOVIE_THEME_PRIMARY', 'red') }});
            background-image:-moz-linear-gradient(top,{{ env('MOVIE_THEME_PRIMARY', 'red') }},{{ env('MOVIE_THEME_PRIMARY', 'red') }});
            background-image:-ms-linear-gradient(top,{{ env('MOVIE_THEME_PRIMARY', 'red') }},{{ env('MOVIE_THEME_PRIMARY', 'red') }});
            background-image:-o-linear-gradient(top,{{ env('MOVIE_THEME_PRIMARY', 'red') }},{{ env('MOVIE_THEME_PRIMARY', 'red') }});
            background-image:linear-gradient(to bottom,{{ env('MOVIE_THEME_PRIMARY', 'red') }},{{ env('MOVIE_THEME_PRIMARY', 'red') }});
        }

        .nav li a{
            background: {{ env('MOVIE_THEME_PRIMARY', 'red') }};
        }
    </style>

    @endif

    {!! $setting->header !!}
    
</head>


<body class="home blog" cfapps-selector="body">
    @if(env('SEO_TAG', '0') == '1')
    <div id="mainseo">
        <h1>ดูหนัง และ ดูหนังออนไลน์ หนังใหม่ชนโรงเต็มเรื่องได้ที่ doonungonline.com</h1>
        ดูหนังออนไลน์ฟรี ดูหนัง บนมือถือและคอม หนังใหม่ชนโรง หนังดัง อัพเดทหนังใหม่ทุกวัน ดูหนังเต็มเรื่อง พากย์ไทย ซับไทย ดูหนังใหม่ หนังฟรี ทุกเรื่องไม่เสียค่าบริการ ซีรี่ย์ใหม่ ซีรี่ย์ฝรั่ง หนังไทย หนังแอ็คชั่น หนังตลก หนังผี สยองขวัญ หนังIMDB หนังไตรภาคครบทุกเรื่อง
    </div>
    <style>
        #mainseo {
            display: none;
        }
        #secondseo {
            display: none;
        }
    </style>
    @endif
    <div id="wrap">
        @include('template.header')

        <div class="notice" style="z-index: 2147483647">
            <div style="width: 15%;float: left;">
                @if(env('BANNER_FULL', '0') == "1")
                    @if($ads_f1)
                        @foreach ($ads_f1 as $k)
                        @if($k->show_ads != $show_ads && $k->show_ads != 0)
                            @php
                                break;
                            @endphp
                        @endif
                            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_new" style="z-index: 2147483647">
                                @if(strrpos($k->image_ads , 'http') === false)
                                    <img src="{{ asset($k->image_ads) }}" width="100%" alt="banner">
                                @else
                                    <img src="{{ $k->image_ads }}" width="100%" alt="banner">
                                @endif
                            </a>
                        @endforeach
                    @endif
                @elseif(env('BANNER_FULL', '0') == "0")
                    @if($ads_f1)
                        <a href="{{ route('ads_redirect', ['id' => $ads_f1->id]) }}" target="_blank" style="z-index: 2147483647">
                            @if(strrpos($ads_f1->image_ads , 'http') === false)
                                <img src="{{ asset($ads_f1->image_ads) }}" style="width: 100%" alt="banner">
                            @else
                                <img src="{{ $ads_f1->image_ads }}" style="width: 100%" alt="banner">
                            @endif
                        </a>
                    @endif
                @endif
            </div>
            <div style="width: 15%;float: right;">
                @if(env('BANNER_FULL', '0') == "1")
                    @if($ads_r1)
                        @foreach ($ads_r1 as $k)
                        @if($k->show_ads != $show_ads && $k->show_ads != 0)
                            @php
                                break;
                            @endphp
                        @endif
                            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_new" style="z-index: 2147483647">
                                @if(strrpos($k->image_ads , 'http') === false)
                                    <img src="{{ asset($k->image_ads) }}" width="100%" alt="banner">
                                @else
                                    <img src="{{ $k->image_ads }}" width="100%" alt="banner">
                                @endif
                            </a>
                        @endforeach
                    @endif
                @elseif(env('BANNER_FULL', '0') == "0")
                    @if($ads_r1)
                        <a href="{{ route('ads_redirect', ['id' => $ads_r1->id]) }}" target="_blank" style="z-index: 2147483647">
                            @if(strrpos($ads_r1->image_ads , 'http') === false)
                                <img src="{{ asset($ads_r1->image_ads) }}" style="width: 100%" alt="banner">
                            @else
                                <img src="{{ $ads_r1->image_ads }}" style="width: 100%" alt="banner">
                            @endif
                        </a>
                    @endif
                @endif
            </div>

            @if(env('BANNER_FULL', '0') == "1")
                @if(isset($ads_mt))
                    @foreach ($ads_mt as $k)
                        <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_new" style="z-index: 2147483647">
                            @if(strrpos($k->image_ads , 'http') === false)
                                <img src="{{ asset($k->image_ads) }}" width="70%" alt="banner">
                            @else
                                <img src="{{ $k->image_ads }}" width="70%" alt="banner">
                            @endif
                        </a>
                    @endforeach
                @endif
            @endif

            @foreach ($ads_a as $k)
                @if($k->show_ads != $show_ads && $k->show_ads != 0)
                    @php
                        break;
                    @endphp
                @endif
                <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_new" style="z-index: 2147483647">
                    @if(strrpos($k->image_ads , 'http') === false)
                        <img src="{{ asset($k->image_ads) }}" width="70%" alt="banner">
                    @else
                        <img src="{{ $k->image_ads }}" width="70%" alt="banner">
                    @endif
                </a>
            @endforeach
            <p style="font-size: 14px">Thai = เสียงไทยมาสเตอร์, Thai(C) = เสียงไทยโรง, Soundtrack(T) = เสียงซาวด์แทรกซับไทย, Soundtrack(E) = เสียงซาวด์แทรกซับอังกฤษ</p>
        </div>

        <div id="content">
            @if(env('SEO_TAG', '0') == '1')
            <div id="secondseo">
                <h2>ดูหนังฟรีได้แบบไม่เสียเงินหรือเลือกดูหนังออนไลน์อัพเดตใหม่ก่อนใคร</h2>
                <h2>เลือกหนังที่จะดูได้ตามหมวดหมู่หรือเลือกดูหนังออนไลน์ที่อัพใหม่ได้ที่หน้าแรก</h2>
                <h2>เลือกดูหนังตามปีที่ฉาย</h2>
            </div>
            @endif
            @include('template.content-left')

            @yield('content')
            
            @include('template.content-right')
        </div>
        <div class="clearfix"></div>
        @if(env('SEO_TAG', '0') == '1')
        <div style="display: none">
            <h3>ดูหนังตามหมวดหมู่เลือกหมวดหมู่ต่างๆเพื่อดูหนังออนไลน์</h3>
            <h3>ประเภทของหนัง ดูหนังต่างๆตามประเภทที่จัดไว้ คิกเพื่อดูหนังออนไลน์</h3>
        </div>
        @endif
        @if(env('SEO_TAG', '0') == '1')
        <h4 style="display: none">ดูหนัง ก่อนใครอัพเดตไวก่อนใครในปี2020สำหรับคนที่ชอบ ดูหนังออนไลน์ สามารถคลิกหนังที่อยากรับชมได้เลย ในเว็บ ดูหนังออนไลน์ Doonungonline</h4>
        @endif

        @include('template.footer')
    </div>
    
    <!-- TG Facebook Comments Plugin : http://www.tekgazet.com/tg-facebook-comments-plugin -->
    <div id="fb-root" class=" fb_reset">
    </div>
    <script type="text/javascript">
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.4&appId=535371466610314";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.mobile-only').toggle(window.screen.width <= 480);
            jQuery('#close_ads_c1').click(function(){
                jQuery('#show_ads_c1').hide();
            });
        });


        jQuery('.request').click(function() {
            var request = prompt('{{ trans('site.request_movie') }}');
            if( request != null )
            {
                jQuery.ajax({
                    url: '{{ url('/') }}/api/v1/request/'+request,
                    type: 'GET',
                    crossDomain: true,
                    cache: false,
                    success:function(data){
                    jQuery("#jwplay").html(data);
                    }
                });
                alert('เราจะดำเนินการให้เร็วที่สุด')
            }
        });
    </script>
    @if(env('BANNER_FULL', '0') == "1")
        @if($ads_bbb)
        <div style="z-index: 2147483647; position: fixed; bottom: 0px; left: 0px; right: 0px; text-align: center;" id="show_ads_c1">
            @foreach ($ads_bbb as $k_ads)
                @if($k_ads->show_ads != $show_ads && $k_ads->show_ads != 0)
                    @php
                        break;
                    @endphp
                @endif
                <br>
                        <div style="position: relative; display: inline-block;"><a href="javascript: void(0);" style="cursor: pointer; position: absolute; top: 0px; right: -28px;">
                            {{-- @if(env('BANNER_BUTTON', '0') == "1")
                            <div style="position: relative; top: 0%;width: 100%">
                                @if($k_ads->button != "")
                                    @php
                                        $k_button = json_decode($k_ads->button);   
                                    @endphp
                                    @foreach ($k_button as $kk)
                                        @if($kk->status != "0")
                                        <a href="{{ $kk->link }}" target="_blank" class="btn-ads btn-success" style="color: white;background-color: {{ $kk->color }}">
                                            <i class="{{ $kk->icon }}" style="float: left"></i> 
                                            {{ $kk->title }}
                                        </a>
                                        <br>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            @endif --}}
                            <img src="{{ asset('images/ads/close.svg') }}" style="height: 26px; width: 26px;" id="close_ads_c1" alt="close"></a>
                            <a href="{{ route('ads_redirect', ['id' => $k_ads->id]) }}" target="_blank">
                                @if(strrpos($k_ads->image_ads , 'http') === false)
                                    <img src="{{ asset($k_ads->image_ads) }}" alt="banner">
                                @else
                                    <img src="{{ $k_ads->image_ads }}" alt="banner">
                                @endif
                            </a>
                        </div>
            @endforeach
        </div>
        @endif
    @elseif(env('BANNER_FULL', '0') == "0")
        @if($ads_bbb)
            <div style="z-index: 2147483647; position: fixed; bottom: 0px; left: 0px; right: 0px; text-align: center;" id="show_ads_c1">
                <div style="position: relative; display: inline-block;"><a href="javascript: void(0);" style="cursor: pointer; position: absolute; top: 0px; right: -28px;">
                    @if(env('BANNER_BUTTON', '0') == "1")
                    <div style="position: relative; top: 0%;width: 100%">
                        @if($ads_bbb->button != "")
                            @php
                                $ads_bbb_button = json_decode($ads_bbb->button);   
                            @endphp
                            @foreach ($ads_bbb_button as $k)
                                @if($k->status != "0")
                                <a href="{{ $k->link }}" target="_blank" class="btn-ads btn-success" style="color: white;background-color: {{ $k->color }}">
                                    <i class="{{ $k->icon }}" style="float: left"></i> 
                                    {{ $k->title }}
                                </a>
                                <br>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    @endif
                    <img src="{{ asset('images/ads/close.svg') }}" style="height: 26px; width: 26px;" id="close_ads_c1" alt="close"></a>
                    <a href="{{ route('ads_redirect', ['id' => $ads_bbb->id]) }}" target="_blank">
                        @if(strrpos($ads_bbb->image_ads , 'http') === false)
                            <img src="{{ asset($ads_bbb->image_ads) }}" alt="banner">
                        @else
                            <img src="{{ $ads_bbb->image_ads }}" alt="banner">
                        @endif
                    </a>
                </div>
            </div>
        @endif
    @endif
    

    <style>
        .btn-ads {
            font-family: 'Lato', 'Lucida Grande', 'Lucida Sans Unicode', Tahoma, Sans-Serif;
            -webkit-appearance: none;
            font-size: 1.1rem;
            text-shadow: none;
            line-height: 1.2;
            display: inline-block;
            padding: 10px 16px;
            margin: 0 10px 0 0;
            position: relative;
            /* border-radius: 4px; */
            border: 3px solid transparent;
            background: #444857;
            color: white;
            cursor: pointer;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-decoration: none !important;
            text-align: center;
            font-weight: normal !important;
            width: 80%;
        }
    </style>
    @if(env('BANNER_FULL', '0') == "1")
        @if($ads_aaa)
            <div id="aaa-banner-left" style="z-index: 2147483647; position: fixed; bottom: 0; left: 0; text-align: center;">
                @foreach($ads_aaa as $k)
                @if($k->show_ads != $show_ads && $k->show_ads != 0)
                    @php
                        break;
                    @endphp
                @endif
                <br>
                <div style="position: relative; display: inline-block;">
                        @if(env('BANNER_BUTTON', '0') == "1")
                        <div style="position: relative; top: 0%;width: 100%">
                            @if($k->button != "")
                                @php
                                    $k_button = json_decode($k->button);   
                                @endphp
                                @foreach ($k_button as $kk)
                                    @if($kk->status != "0")
                                    <a href="{{ $kk->link }}" target="_blank" class="btn-ads btn-success" style="color: white;background-color: {{ $kk->color }}">
                                        <i class="{{ $kk->icon }}" style="float: left"></i> 
                                        {{ $kk->title }}
                                    </a>
                                    <br>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        @endif
                        <a href="javascript: document.getElementById('aaa-banner-left').remove()" style="cursor: pointer; position: absolute; top: 0; right: -28px;">
                            <img src="{{ asset('images/ads/close.svg') }}" width="25" height="25" alt="close"></a>
                            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank">
                            @if(strrpos($k->image_ads , 'http') === false)
                                <img src="{{ asset($k->image_ads) }}" alt="banner">
                            @else
                                <img src="{{ $k->image_ads }}" alt="banner">
                            @endif
                        </a>
                </div>
                @endforeach
            </div>
        @endif
    @elseif(env('BANNER_FULL', '0') == "0")
        @if($ads_aaa)
            <div id="aaa-banner-left" style="z-index: 2147483647; position: fixed; bottom: 0; left: 0; text-align: center;">
                <div style="position: relative; display: inline-block;">
                    @if(env('BANNER_BUTTON', '0') == "1")
                    <div style="position: relative; top: 0%;width: 100%">
                        @if($ads_aaa->button != "")
                            @php
                                $ads_aaa_button = json_decode($ads_aaa->button);   
                            @endphp
                            @foreach ($ads_aaa_button as $k)
                                @if($k->status != "0")
                                <a href="{{ $k->link }}" target="_blank" class="btn-ads btn-success" style="color: white;background-color: {{ $k->color }}">
                                    <i class="{{ $k->icon }}" style="float: left"></i> 
                                    {{ $k->title }}
                                </a>
                                <br>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    @endif
                    <a href="javascript: document.getElementById('aaa-banner-left').remove()" style="cursor: pointer; position: absolute; top: 0; right: -28px;">
                        <img src="{{ asset('images/ads/close.svg') }}" width="25" height="25" alt="close"></a>
                        <a href="{{ route('ads_redirect', ['id' => $ads_aaa->id]) }}" target="_blank">
                        @if(strrpos($ads_aaa->image_ads , 'http') === false)
                            <img src="{{ asset($ads_aaa->image_ads) }}" alt="banner">
                        @else
                            <img src="{{ $ads_aaa->image_ads }}" alt="banner">
                        @endif
                    </a>
                </div>
            </div>
        @endif
    @endif

    @if(env('BANNER_FULL', '0') == "1")

        @if($ads_ccc)
            <div id="ccc-banner-left" style="z-index: 2147483647; position: fixed; bottom: 0; right: 0; text-align: center;">
                @foreach($ads_ccc as $k)
                @if($k->show_ads != $show_ads && $k->show_ads != 0)
                    @php
                        break;
                    @endphp
                @endif
                <br>
                <div style="position: relative; display: inline-block;">
                    @if(env('BANNER_BUTTON', '0') == "1")
                    <div style="position: relative; top: 0%;width: 100%">
                        @if($k->button != "")
                            @php
                                $k_button = json_decode($k->button);   
                            @endphp
                            @foreach ($k_button as $kk)
                                @if($kk->status != "0")
                                <a href="{{ $kk->link }}" target="_blank" class="btn-ads btn-success" style="color: white;background-color: {{ $kk->color }}">
                                    <i class="{{ $kk->icon }}" style="float: left"></i> 
                                    {{ $kk->title }}
                                </a>
                                <br>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    @endif
                    <a href="javascript: document.getElementById('ccc-banner-left').remove()"
                    style="cursor: pointer; position: absolute; top: 0; left: -28px;"><img
                            src="{{ asset('images/ads/close.svg') }}"
                            width="25" height="25" alt="close"></a><a
                        href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank">
                        @if(strrpos($k->image_ads , 'http') === false)
                            <img src="{{ asset($k->image_ads) }}" alt="banner">
                        @else
                            <img src="{{ $k->image_ads }}" alt="banner">
                        @endif

                    </a>
                </div>
                @endforeach
            </div>
        @endif
    @elseif(env('BANNER_FULL', '0') == "0")
        @if($ads_ccc)
            <div id="ccc-banner-left" style="z-index: 2147483647; position: fixed; bottom: 0; right: 0; text-align: center;">
                <div style="position: relative; display: inline-block;">
                    @if(env('BANNER_BUTTON', '0') == "1")
                    <div style="position: relative; top: 0%;width: 100%">
                        @if($ads_ccc->button != "")
                            @php
                                $ads_ccc_button = json_decode($ads_ccc->button);   
                            @endphp
                            @foreach ($ads_ccc_button as $k)
                                @if($k->status != "0")
                                <a href="{{ $k->link }}" target="_blank" class="btn-ads btn-success" style="color: white;background-color: {{ $k->color }}">
                                    <i class="{{ $k->icon }}" style="float: left"></i> 
                                    {{ $k->title }}
                                </a>
                                <br>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    @endif
                    <a href="javascript: document.getElementById('ccc-banner-left').remove()"
                    style="cursor: pointer; position: absolute; top: 0; left: -28px;"><img
                            src="{{ asset('images/ads/close.svg') }}"
                            width="25" height="25" alt="close"></a><a
                        href="{{ route('ads_redirect', ['id' => $ads_ccc->id]) }}" target="_blank">
                        @if(strrpos($ads_ccc->image_ads , 'http') === false)
                            <img src="{{ asset($ads_ccc->image_ads) }}" alt="banner">
                        @else
                            <img src="{{ $ads_ccc->image_ads }}" alt="banner">
                        @endif

                    </a>
                </div>
            </div>
        @endif
    @endif

    
</body>

</html>