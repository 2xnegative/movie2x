<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function setup(){
      var post = true;
      var username = document.getElementById('username_admin');
      var password = document.getElementById('password_admin');
      var password2 = document.getElementById('password_admin2');
      var domain = document.getElementById('domain');
      var alert_error = document.getElementById('alert');
      if(username.value == ""){
        alert_error.innerHTML = "กรุณากรอก Email";
        post = false;
      }
      else if(password.value == ""){
        alert_error.innerHTML = "กรุณากรอก Password Admin ที่ต้องการ";
        post = false;
      }
      else if(password2.value == ""){
        alert_error.innerHTML = "กรุณากรอกยืนยัน Password Admin ที่ต้องการ";
        post = false;
      }
      else if(password.value !== password2.value){
        alert_error.innerHTML = "Password Admin ต้องตรงกันทั้ง 2 ช่อง";
        post = false;
      }
      else if(domain.value == ""){
        alert_error.innerHTML = "กรุณากรอก Domain ของท่าน";
        post = false;
      }
      return post;
    }
  </script>
  <title>ติดตั้งสคลิปเว็บ</title>
</head>
<body>
    <style>
        .main {
            background-image: url(https://www.iamtheme.com/wp-content/uploads/2017/04/TH-en-20170424-popsignuptwoweeks-perspective_alpha_website_small-1.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            width:100vw;
            height: 100vh;
            padding: 10vh;
        }
    </style>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="">
                        <div class="card-header text-center">
                            <h3 class="card-title">สคริปเว็บดูหนัง</h3>
                            <div class="card-subtitle mb-2 text-muted">
                                แก้ไขข้อมูลในไฟล์ <kbd class="text-danger">.env</kbd> ก่อนทุกครั้ง
                                <p class="text-right">
                                    {{-- <kbd><a href="{{ route('how') }}" class="text-white">ดูวิธีการติดตั้ง</a></kbd> --}}
                                    {{-- <kbd><a href="{{ route('support') }}" class="text-white">ติดต่อทีมงาน</a></kbd> --}}
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning" id="alert" >
                            </div>
                            <form method="post" onsubmit="return setup()" action="{{ route('install.submit') }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group row justify-content-center">
                                    <div class="col-5">
                                        <label for="username_admin">Email</label>
                                        <input type="email" class="form-control" id="username_admin"  name="username_admin" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-5">
                                        <label for="password_admin">Password</label>
                                        <input type="password" class="form-control" id="password_admin" name="password_admin" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-5">
                                        <label for="password_admin2">ยืนยัน Password</label>
                                        <input type="password" class="form-control" id="password_admin2" name="password_admin2" placeholder="ยืนยัน Password">
                                    </div>
                                </div>
                                {{-- <div class="form-group row justify-content-center">
                                    <div class="col-5">
                                        <label for="domain">Domain ของท่าน</label>
                                        <input type="text" class="form-control" id="domain" name="domain" placeholder="เช่น http://iamtheme.com/">
                                    </div>
                                </div> --}}
                                <div class="form-group row justify-content-center" style="margin-top: 50px">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-success btn-block">ติดตั้งทันที <i class="fa fa-cogs"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted text-center">
                            ลิขสิทธิ์ของ IAMTHEME.COM | ห้ามนำไปจำหน่ายต่อ (หากตรวจพบจะหมดสิทธิ์ซัพพอร์ตและอัพเดททันที)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
