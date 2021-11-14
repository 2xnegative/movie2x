@extends('admin.master')


@section('body')
    <div class="col-lg-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.setting.index.update', ['id'=> $res->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <h3>รูปภาพแสดง</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>รูปที่ 1</label>
                                                        <br>
                                                        <img src="{{ asset($res->file1) }}" width="150px">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <br>
                                                        <br>
                                                        <input type="file" class="form-control-file" name="file1" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>รูปที่ 2</label>
                                                        <br>
                                                        <img src="{{ asset($res->file2) }}" width="150px">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <br>
                                                        <br>
                                                        <input type="file" class="form-control-file" name="file2" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>รูปที่ 3</label>
                                                        <br>
                                                        <img src="{{ asset($res->file3) }}" width="150px">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <br>
                                                        <br>
                                                        <input type="file" class="form-control-file" name="file3" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>รูปที่ 4</label>
                                                        <br>
                                                        <img src="{{ asset($res->file4) }}" width="150px">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <br>
                                                        <br>
                                                        <input type="file" class="form-control-file" name="file4" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>รูปที่ 5</label>
                                                        <br>
                                                        <img src="{{ asset($res->file5) }}" width="150px">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <br>
                                                        <br>
                                                        <input type="file" class="form-control-file" name="file5" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h3>ลิ้ง Google Play</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Google Play</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="google_play" class="form-control" value="{{ $res->google }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3>ลิ้งโหลดแอป APK</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>APK File</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="apk" class="form-control" value="{{ $res->apk }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h3>ข้อมูลติดต่อแสดงหน้าแรก</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Line ID</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="line" class="form-control form-control-line" value="{{ $res->line }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Facebook</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="facebook" class="form-control form-control-line" value="{{ $res->facebook }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Gmail</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="gmail" class="form-control form-control-line" value="{{ $res->gmail }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">

                                            </div>
                                            <div class="col-md-10">
                                                <button class="btn btn-success btn-lg" type="submit" onclick="return confirm('ยืนยันอัพเดทข้อมูล')">อัพเดท</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#verify').click(function(){
                                console.log('click on');
                                $.ajax({
                                    url: '{{ url('/') }}/api/v1/admin/verify',
                                    type: 'POST'
                                })
                                .done(function(){
                                    alert('ส่งรหัสเรียบร้อย');
                                });

                            });
                        });
                    </script>
@endsection
