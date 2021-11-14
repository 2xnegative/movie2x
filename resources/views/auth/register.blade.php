@extends('master')

@section('body')
    <div class="row justify-content-md-center">
        <div class="col-lg-4">
            <div class="login-main">
                <h3 style="margin-bottom: 20px">สมัครสมาชิก</h3>
                <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        @if (session()->has('message_login'))
                            <span class="help-block">
                                <strong>{{ session()->has('message_login') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input id="email" name="email" type="text" class="form-control" placeholder="อีเมล์ / เบอร์โทร">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input type="password" id="password" name="password_confirmation" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit" style="background-color: red;width: 100%">
                            สมัครสมาชิก
                        </button>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('/login/facebook') }}" class="btn" style="background-color: #3b5998;width: 100%;color: #fff">
                            <i class="fab fa-facebook-f"></i>
                            Login with Facebook
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .login-main {
            background-color: #272727;
            box-shadow: 0 0px 20px #000;
            padding: 50px 20px;
            text-align: center;
        }

        input.form-control {
            height: 50px;
        }

        @media only screen and (max-width: 1024px){
            .login-main {
                padding: 20px 10px;
            }

        }

        @media only screen and (max-width: 768px){


        }
    </style>
@endsection
