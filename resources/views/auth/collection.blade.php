@extends('master')

@section('body')
    @php
        App::setLocale(session('locale'));
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="movie-page">
                <div class="row">

                    <div class="col-lg-12 menutop">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                <a href="{{ route('collection', ['type' => 'movie']) }}">
                                    <div class="button-main" style="border: 0px solid #ff224d">
                                        @lang('site.movie')
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                <a href="{{ route('collection', ['type' => 'tv']) }}">
                                    <div class="button-main" style="border: 0px solid #ff224d">
                                        @lang('site.live_tv')
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                <a href="{{ route('collection', ['type' => 'series']) }}">
                                    <div class="button-main" style="border: 0px solid #ff224d">
                                        @lang('site.series')
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="{{ route('collection', ['type' => 'anime']) }}">
                                    <div class="button-main" style="border: 0px solid #ff224d">
                                        @lang('site.anime')
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="{{ route('collection', ['type' => 'av']) }}">
                                    <div class="button-main" style="border: 0px solid #ff224d">
                                        @lang('site.porn')
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="movie-title">
                            @lang('site.favorite')
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ($collection as $k)
                                @php
                                    $title_temp = explode(" ", $k->title);
                                    $title_temp = implode("-", $title_temp);
                                @endphp
    
                                <div class="col-sm-4 col-md-3 col-lg-3">
                                    <div class="movie-item" data-toggle="tooltip" data-placement="top" data-html="true" title="<h5>{{ $k->title }}</h5>">
                                        @if ($type == 'tv')
                                            @if(session()->has('smart_tv'))
                                                <a href="{{ route('tv_smart', ['id'=> $k->id,'title'=> $k->title]) }}">
                                            @else
                                                <a href="{{ route('tv', ['id'=> $k->id]) }}">
                                            @endif
                                        @else
                                            <a href="{{ route('movie', ['id'=> $k->id,'title'=> $title_temp]) }}">
                                        @endif
                                            <img class="poster" src="{{ asset($k->image) }}">
                                        </a>
                                        <a href="{{ route('member.delete.collection', ['id' => $k->id_collection, 'type' => $type ]) }}" onclick="event.preventDefault(); document.getElementById('delete-{{ $k->id_collection }}').submit();" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h5>ลบเรื่องนี้</h5>">
                                            <img class="hd" src="{{ asset('images/collection/remove.png') }}">
                                        </a>
                                        <form action="{{ route('member.delete.collection', ['id' => $k->id_collection, 'type' => $type]) }}" method="post" id="delete-{{ $k->id_collection }}" style="display:none">
                                        {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .movie-list {
            width: 100%;
            height: auto;
            border: 1px solid #44464a;
        }

        .movie-list-head {
            background-color: #15181c;
            padding: 0px;

        }


        .movie-list-head p {
            text-align: center;
            font-size: 20px;
            color: #fff;
            padding: 10px 10px;
        }

        .movie-item{
            position: relative;
            border: 2px solid black;
        }

        .movie-item .poster {
            width: 100%;
            height: 330px;
        }

        .movie-item .hd {
            position: absolute;
            top: 3px;
            right: 5px;
            width: 40px;
            height: 40px;
        }

        @media only screen and (min-width: 1280px)
        {
            .movie-item .poster {
                width: 100%;
                height: 280px;
            }
        }
    </style>

    <style>
    .movie-page {
        background-color: #141414;
        padding: 20px 50px;
        border-radius: 5px;
    }
    .movie-title {
        background-color: #15181c;
        text-align: center;
        font-size: 20px;
        padding: 10px 20px;
    }
    .player img {
        width: 100%;
        height: auto;
    }

    .details img {
        border: 2px solid black;
        width: 100%;
        height: 330px;
    }
    .menu-movie {
        margin-top: 10px;
        border-radius: 0px;
        padding: 20px 30px;
        color: #fff;
    }

    @media only screen and (max-width: 1024px){
        .details img {
            height: 250px;
        }

        .movie-page {
            padding: 20px 10px;
            text-align: center;
        }

    }
    </style>
@endsection
