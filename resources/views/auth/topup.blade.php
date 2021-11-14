@extends('master')

@section('body')
    @php
        App::setLocale(session('locale'));
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="movie-page">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="{{ route('topup') }}" type="button" class="btn btn-danger truemoney">@lang('site.truemoney')</a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="{{ route('pincode') }}" type="button" class="btn btn-danger truemoney">@lang('site.pincode')</a>
                    </div>
                </div>
                <br>
                @if(session()->has('message_topup'))
                    <div class="alert alert-success" role="alert">
                      {{ session('message_topup') }} <a href="{{ route('topup') }}">รีเฟรช</a>
                    </div>
                @elseif(session()->has('message_error'))
                    <div class="alert alert-danger" role="alert">
                      {{ session('message_error') }}
                    </div>
                @endif
                @if($type_topup == "truemoney")
                    <div class="form-true">
                        <form action="{{ route('topupSubmit') }}" method="post">
                            {{ csrf_field() }}
                            <div class="input-group row">
                                <label for="staticEmail" class="col-sm-12 col-lg-4 col-form-label">@lang('site.pin')</label>
                                <div class="col-sm-12 col-lg-8">
                                <input type="text" class="form-control" id="staticEmail" name="tmp_pass" placeholder="@lang('site.enter_pin')" maxlength="14">
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-lg-8 offset-lg-4" style="text-align: left">
                                    <button type="submit" class="btn btn-success" style="width: 100%" name="button">@lang('site.pay')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="form-true">
                        <form action="{{ route('pincodeSubmit') }}" method="post">
                            {{ csrf_field() }}
                            <div class="input-group row">
                                <label for="staticEmail" class="col-sm-12 col-lg-4 col-form-label">@lang('site.pin2')</label>
                                <div class="col-sm-12 col-lg-8">
                                <input type="text" class="form-control" id="staticEmail" name="pincode" placeholder="@lang('site.enter_pin2')" maxlength="14">
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-lg-8 offset-lg-4" style="text-align: left">
                                    <button type="submit" class="btn btn-success" style="width: 100%" name="button">@lang('site.pay')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif

                <div class="price">
                    <h4>@lang('site.price_list')</h4>
                    <div class="alert alert-danger" role="alert">
                        Point คงเหลือ <b>{{ Auth::user()->point }}</b>
                    </div>
                    <div class="row">
                        @foreach ($list_point as $k)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="price-list">
                                    {{-- <p>@lang('site.service') {{ $k->price }}</p> --}}
                                    <p>{{ $k->price_point }} Point</p>
                                    <p>+{{ $k->days_point }}</p>
                                    <p>@lang('site.day')</p>
                                    <form action="{{ route('packet') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="packet" value="{{ $k->id_point }}">
                                        <button type="submit" class="btn btn-danger buy" onclick="return confirm('ยืนยันคำสั่งซื้อ')">
                                            @lang('site.buy')
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style >
        .movie-page {
            background-color: #141414;
            padding: 30px 50px;
            border-radius: 5px;
        }

        .truemoney {
            background-color: #ff6600; border-radius: 3px solid #ff6600;
            width: 100%;
            padding: 20px 0px;
            font-size: 1.5rem;
        }

        .price {
            margin: 40px 0;
            text-align: center;
        }

        .price-list {
            padding: 10px 20px;
            background-color: black;
            border-radius: 5px;
            margin-top: 40px;
        }

        .price-list p:first-child{
            font-size: 24px;
            color: #e63636;
            margin-bottom: 12px;
        }

        .price-list p:nth-child(2){
            font-size: 24px;
            color: #fff;
            margin-bottom: 0px;
        }

        .buy {
            background-color: red;
            width: 100%;
        }

        .form-true {
            text-align: center;
            border: 2px solid red;
            margin-top: 30px;
            padding: 60px 30px;
        }



        @media only screen and (max-width: 1024px){

            .movie-page {
                padding: 20px 10px;
                text-align: center;
            }

            .truemoney {
                font-size: 1.2rem;
            }

        }

        @media only screen and (max-width: 768px){

        }
    </style>

@endsection
