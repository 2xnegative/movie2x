@extends('master')
@section('body')
    @php
        App::setLocale(session('locale'));
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="movie-page">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="profile">
                            <h3>@lang('site.about_me')</h3>
                            <p>ชื่อผู้ใช้: <input type="text" class="form-control" disabled value="{{ Auth::user()->email }}"></p>
                            <p>สถานะ: <input type="text" class="form-control" disabled value="VIP"></p>
                            <p>@lang('site.expire_in') <span class="badge badge-success">@php
                                $vip = Carbon\Carbon::parse(Auth::user()->vip);
                            @endphp
                            @if(Auth::user()->admin == 1)
                                ( <strong style="color: red">Admin ผู้ดูแลระบบ</strong> )
                            @elseif( Carbon\Carbon::now() >= Auth::user()->vip )
                                ( @lang('site.expired') )
                            @elseif( Carbon\Carbon::now() <= Auth::user()->vip )
                               ( <strong style="color: red">VIP</strong> ) ( {{ $vip->diffInDays() + 1 }} วัน )
                            @endif</span></p>
                            <p>ภาษา: @lang('site.Language')</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        @if(session()->has('resetpass'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                               <strong style="text-align: left">{{ session('resetpass') }}</strong>
                            </div>
                        @endif
                        <div class="profile">
                            <h3>@lang('site.reset_password')</h3>
                            <form action="{{ route('resetpass') }}" method="post" id="submit">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <p><input type="text" id="oldpass" name="oldpassword" class="form-control" placeholder="@lang('site.old_password')"></p>
                                    <p><input type="text" id="newpass"name="newpassword" class="form-control" placeholder="@lang('site.new_password')"></p>
                                    <p><input type="text" id="conpass" name="confirmpassword"  class="form-control" placeholder="@lang('site.new_password_confirm')"></p>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn btn-primary" name="button">@lang('site.submit_reset')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $("#submit").submit(function() {
                                var oldpass = $('#oldpass').val();
                                var newpass = $('#newpass').val();
                                var conpass = $('#conpass').val();
                                if(oldpass == "" || newpass == "" || conpass == "")
                                {
                                    alert('กรุณาใส่รหัส');
                                    return false;
                                }
                                else if(newpass != conpass)
                                {
                                    alert('กรุณากรอกรหัสใหม่ทั้งตรงกัน');
                                    return false;
                                }

                                return true;
                            });
                        });
                    </script>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="profile">
                            <h3>@lang('site.request_movie')</h3>
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                      <th>ขอหนัง</th>
                                      <th>สถานะ</th>
                                      <th>วันที่</th>
                                </tr>
                              </thead>
                              <tbody>
                                    @foreach ($req as $k)
                                        @php
                                        $status = '';
                                            if($k->status == 1){
                                                $status = 'เพิ่มหนังแล้ว';
                                            }else if($k->status == 0){
                                                $status = 'กำลังตรวจสอบ';
                                            }
                                        @endphp
                                        <tr>
                                            <td>{{ $k->title }}</td>
                                            <td><span class="label label-default {{ $k->$status == 0 ? 'text-warning' : 'text-success' }}">{{ $status }}</span></td>
                                            <td>{{ $k->created_at }}</td>
                                        <tr>
                                    @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="profile">
                            <h3>ประวัติการเติมเงิน</h3>
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                      <th>รหัสบัตร</th>
                                      <th>สถานะรายการ</th>
                                      <th>วันที่</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if ($count_log == 0)
                                    <tr>
                                        <td>ไม่มีรายการเติมเงิน</td>
                                        <td>-------</td>
                                        <td>--/--/--</td>
                                    </tr>
                                @else
                                    @foreach ($log as $k)
                                        @php
                                        $status = '';
                                            if($k->tmpay_status == 1){
                                                $status = 'เติมเงินสำเร็จ';
                                            }else if($k->tmpay_status == 2){
                                                $status = 'กำลังตรวจสอบ';
                                            }
                                            else if($k->tmpay_status == 3){
                                                $status = 'บัตรถูกใช้ไปแล้ว';
                                            }else if($k->tmpay_status == 4){
                                                $status = 'บัตรไม่ถูกต้อง';
                                            }else if($k->tmpay_status == 5){
                                                $status = 'เป็นบัตรทรูมูฟ ไม่ใช่ทรูมันนี่';
                                            }
                                        @endphp
                                        <tr>
                                            <td>{{ $k->tmpay_tmp_pass }}</td>
                                            <td><span class="label label-default">{{ $status }}</span></td>
                                            <td>{{ $k->created_at }}</td>
                                        <tr>
                                    @endforeach
                                @endif
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .movie-page {
            background-color: #141414;
            padding: 20px 50px;
            border-radius: 5px;
        }

        .profile {
            border-radius: 5px;
            padding: 15px;
            border: 1px solid #44464a;
        }


        @media only screen and (max-width: 1024px){
            .movie-page {
                padding: 20px 10px;
                text-align: center;
            }

        }

        @media only screen and (max-width: 768px){


        }
    </style>
@endsection
