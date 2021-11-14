<div>
    <div class="box">
        <div class="box-header">
            <div class="breadcrumb" style="background-color: rgba(0,0,0,0);float: left;width: 100%;margin-bottom: 0px">
                <span typeof="v:Breadcrumb">
                    <a href="{{ route('home') }}" >หน้าแรก</a>
                </span>
                <span><i class="fa fa-angle-double-right"></i></span>
                <span>
                    <a href="{{ $genre ? route('category', ['title' => $genre->title_category_eng ]) : '#' }}">
                        {{ $genre ? $genre->title_category_eng : '' }} {{ $genre ? $genre->title_category : 'ไม่มีหมวดหมู่' }}
                    </a>
                </span>
            </div>
            <div class="title">
                <a href="https://www.google.co.th/search?hl=th&amp;q={{ $setting->domain }}{{ $movie->slug_title }}"
                    title="{{ $movie->title }}" target="_blank" class="google-search">

                </a>
                <h1>
                    <a href="{{ route('movie', ['title' => $movie->slug_title]) }}">
                        {{ $movie->title }}
                    </a>
                </h1>
            </div>
        </div>

        <div class="movie-header">
            <div class="movie-thumbnail" style="height: 100%">
                <img src="{{ $movie->image ? asset($movie->image) : '' }}" alt="{{ $movie->title }}">
            </div>
            <div class="movie-trailer" style="height: 100%">
                @php 
                    $youtube = '';
                    if(strrpos($movie->youtube, 'watch?v='))
                    {
                        $youtube_get = explode("watch?v=", $movie->youtube);
                        $youtube = $youtube_get[1];
                    }
                    elseif(strrpos($movie->youtube, 'embed/'))
                    {
                        $youtube_get = explode("/embed/", $movie->youtube);
                        $youtube = $youtube_get[1];
                    }
                    else {
                        $youtube = $movie->youtube;
                    }
                @endphp
                <iframe src="https://www.youtube.com/embed/{{ $youtube }}" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    {{-- Ads On Top Movie --}}
    @include('mobile.template.movie.ads_on_movie_top')
    {{-- Ads --}}
    <div class="box">
        <div class="filmicerik">
            <div class="movie-description">
                @if($movie->description != "")
                <div class="description align-left">
                    <p>เรื่องย่อ</p>
                    <p>{{ $movie->description }}</p>
                </div>
                @endif
                <div>
                    <a href="{{ $setting->domain }}">
                        ดูหนังออนไลน์
                    </a>
                    <a href="{{ route('movie', ['title' => $movie->slug_title]) }}">
                        <strong>
                            {{ $movie->title ? $movie->title : '' }}
                            {{ $movie->year ? $movie->year : '' }}
                        </strong>
                    </a>
                </div>
                <div>
                    <small>{{ $movie->sound == "ST" ? "Soundtrack(T)+Thai" : ($movie->sound == "TH" ? "Thai" : ($movie->sound == "TS" ? "SoundTrack(T)+Thai": $movie->sound)) }} {{ $movie->resolution }}</small>
                </div>
                <div class="imdb-rating">
                    <div class="imdb-rating-content">
                        <span>{{ $movie->score ? $movie->score : '0' }}</span>
                        /10
                    </div>
                </div>
                <div class="path_sound" style="padding: 10px 0px;">
                    @if(env('STREAMING_TYPE', 'proxy') == "streaming")
                        @if($movie->file_main != "" || $movie->file_openload != "" || $movie->file_streamango != "" || $movie->file_main_2 != "" || $movie->file_openload_2 != "" || $movie->file_streamango_2 != "" || $movie->file_main_3 != "" || $movie->file_openload_3 != "" || $movie->file_streamango_3 != "")
                            <button  type="button" data-sound="sound_th" class="sound_path btn btn-primary"
                                data-href="{{ $movie->file_main != "" ? route('streaming', base64_encode(Crypt::encryptString($movie->file_main))) : ($movie->file_main_2 != "" ? route('streaming', base64_encode(Crypt::encryptString($movie->file_main_2))) : ($movie->file_main_3 != "" ? route('streaming', base64_encode(Crypt::encryptString($movie->file_main_3))) : '' )) }}"
                                style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 14px;font-weight: 600;margin: 0px">
                                <i class="fas fa-play"></i>
                                พากย์ไทย
                            </button>
                        @endif
                        @if($movie->file_main_sub != "" || $movie->file_openload_sub != "" || $movie->file_streamango_sub != "" || $movie->file_main_sub_2 != "" || $movie->file_openload_sub_2 != "" || $movie->file_streamango_sub_2 != "" || $movie->file_main_sub_3 != "" || $movie->file_openload_sub_3 != "" || $movie->file_streamango_sub_3 != "")
                            <button  type="button" data-sound="sound_sub" class="sound_path btn btn-default"
                                data-href="{{ $movie->file_main_sub != "" ? route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub))) : ($movie->file_main_sub_2 != "" ? route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub_2))) : ($movie->file_main_sub_3 != "" ? route('streaming', base64_encode(Crypt::encryptString($movie->file_main_sub_3))) : none )) }}"
                                style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;font-size: 14px;font-weight: 600;color: #555;margin: 0px">
                                <i class="far fa-closed-captioning"></i>
                                Soundtrack ซับ
                            </button>
                        @endif
                    @else
                        @if($movie->file_main != "" || $movie->file_openload != "" || $movie->file_streamango != "" || $movie->file_main_2 != "" || $movie->file_openload_2 != "" || $movie->file_streamango_2 != "" || $movie->file_main_3 != "" || $movie->file_openload_3 != "" || $movie->file_streamango_3 != "")
                            <button  type="button" data-sound="sound_th" class="sound_path btn btn-primary"
                                data-href="{{ $movie->file_main != "" ? $movie->file_main : ($movie->file_main_2 != "" ? $movie->file_main_2 : ($movie->file_main_3 != "" ? $movie->file_main_3 : '' )) }}"
                                style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 14px;font-weight: 600;margin: 0px">
                                <i class="fas fa-play"></i>
                                พากย์ไทย
                            </button>
                        @endif
                        @if($movie->file_main_sub != "" || $movie->file_openload_sub != "" || $movie->file_streamango_sub != "" || $movie->file_main_sub_2 != "" || $movie->file_openload_sub_2 != "" || $movie->file_streamango_sub_2 != "" || $movie->file_main_sub_3 != "" || $movie->file_openload_sub_3 != "" || $movie->file_streamango_sub_3 != "")
                            <button  type="button" data-sound="sound_sub" class="sound_path btn btn-default"
                                data-href="{{ $movie->file_main_sub != "" ? $movie->file_main_sub : ($movie->file_main_sub_2 != "" ? $movie->file_main_sub_2 : ($movie->file_main_sub_3 != "" ? $movie->file_main_sub_3 : none )) }}"
                                style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #c3c3c3;font-size: 14px;font-weight: 600;color: #555;margin: 0px">
                                <i class="far fa-closed-captioning"></i>
                                Soundtrack ซับ
                            </button>
                        @endif

                    @endif
                </div>
            </div>
            {{-- Player --}}
            @include('mobile.template.movie.player')
        </div>
    </div>
    {{-- Ads On Bottom Movie --}}
    @include('mobile.template.movie.ads_on_movie_bottom')
    {{-- Ads --}}
    <div class="actions">
    </div>
    {{-- TAG --}}
    @include('mobile.template.movie.tag')

    <div id="fb-root"></div>
    
    <div class="box" style="position: relative;">
        <h3> แสดงความคิดเห็น</h3>
        <div class="fb-comments" data-href="{{ url()->current() }}" data-colorscheme="dark" data-width="760" data-numposts="5"></div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    </div>

    @include('mobile.template.movie.random')

</div>

<style>
    .movie-imdb b{
        background: url('{{ asset("images/icon-star.png") }}') no-repeat 0;
        background-size: 11px 11px;
    }
    .imdb-rating {
        background: url({{ asset('images/IMDb.png')}}) no-repeat;
        background-size: 100% 100%;
        width: 160px;
        height: 36px;
        vertical-align: top;
        display: inline-block;
    }
    .description {
        padding: 10px;
        background-color: #2b2b2b;
        margin: 10px;
        border-radius: 4px;
        color: #f3f3f3;
    }
    .description p:first {
        font-size: 18px;
    }
    .description p:nth-child() {
        font-size: 14px;
        color: white;
    }
</style>