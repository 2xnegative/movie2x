
    <div class="row justify-content-md-center">
        <div class="col-lg-4">
            <div class="login-main">
                <h3 style="margin-bottom: 20px">สมาชิกเข้าสู่ระบบ</h3>
                <form class="" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    @if(session()->has('message_login'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <strong style="text-align: left">Username หรือ Password ผิดพลาด</strong>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="email" class="form-control" placeholder="อีเมล์" id="username" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <input type="password" id="password" name="password" class="form-control" placeholder="รหัสผ่าน" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" class="form-check-input" name="remember" checked>ให้ฉันอยู่ในระบบต่อไป</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" style="background-color: red;width: 100%">
                            เข้าสู่ระบบ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @auth
            {{ Auth::user()->email }}   
            {{ Auth::user()->admin }}   
        @endauth
