@extends('admin.master')


@section('body')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.banner.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>Title</label>
                                                <input type="text" name="title" placeholder="Title" class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label>ลิ้งเว็บ</label>
                                                <input type="text" name="url" placeholder="url" class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label>ตำแหน่ง</label>
                                                <select class="form-control form-control-line" name="layout">
                                                    <option value="a" >A ทุกหน้า - ตรงกลางด้านบน</option>
                                                    <option value="r1" >R1 ทุกหน้า - ขวาบนแนวตั้ง</option>
                                                    <option value="r2" >R2 ทุกหน้า - ป้ายซ้ายแสดงตรงเมนู</option>
                                                    <option value="f1" >F1 ทุกหน้า - ซ้ายบนแนวตั้ง</option>
                                                    <option value="aaa" >AAA ทุกหน้า - ป้ายลอยซ้าย</option>
                                                    <option value="bbb" >BBB ทุกหน้า - ป้ายลอยตรงกลางล่าง</option>
                                                    <option value="m1" >M1 เฉพาะหน้าดูหนัง - ด้านบนตัวเล่นหนัง</option>
                                                    <option value="m2" >M2 เฉพาะหน้าดูหนัง - ด้านล่างตัวเล่นหนัง</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            {{-- <div class="col-md-6 col-sm-12">
                                                <label>ตำแหน่ง</label>
                                                <select class="form-control form-control-line" name="layout">
                                                    <option value="a" >A ทุกหน้า - ตรงกลางด้านบน</option>
                                                    <option value="r1" >R1 ทุกหน้า - ขวาบนแนวตั้ง</option>
                                                    <option value="r2" >R2 ทุกหน้า - ป้ายซ้ายแสดงตรงเมนู</option>
                                                    <option value="f1" >F1 ทุกหน้า - ซ้ายบนแนวตั้ง</option>
                                                    <option value="aaa" >AAA ทุกหน้า - ป้ายลอยซ้าย</option>
                                                    <option value="bbb" >BBB ทุกหน้า - ป้ายลอยตรงกลางล่าง</option>
                                                    <option value="m1" >M1 เฉพาะหน้าดูหนัง - ด้านบนตัวเล่นหนัง</option>
                                                    <option value="m2" >M2 เฉพาะหน้าดูหนัง - ด้านล่างตัวเล่นหนัง</option>
                                                </select>
                                            </div> --}}
                                            {{-- <div class="col-md-3 col-sm-12">
                                                <label>เริ่มต้นวันที่</label>
                                                <input type="text" name="start" class="form-control form-control-line" id="start">
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>สิ้นสุดวันที่</label>
                                                <input type="text" name="end" class="form-control form-control-line" id="end">
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlFile1">รูปภาพ</label>
                                                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">เพิ่มโฆษณา</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
        </div>
        <script  type="text/javascript">
          $(function() {
            $( "#start" ).datepicker();
            $( "#end" ).datepicker();
          });
      </script>
@endsection
