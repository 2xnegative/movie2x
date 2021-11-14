@extends('admin.master')


@section('body')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.banner.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>Title</label>
                                                <input type="text" name="title" placeholder="Title" class="form-control form-control-line" value="{{ $request->title_ads }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label>ลิ้งเว็บ</label>
                                                <input type="text" name="url" placeholder="url" class="form-control form-control-line" value="{{ $request->url_ads }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label>ตำแหน่ง</label>
                                                <select class="form-control form-control-line" name="layout">
                                                    <option value="a" {{ $request->layout_ads == 'a' ? 'selected' : '' }}>A ทุกหน้า - ตรงกลางด้านบน</option>
                                                    <option value="r1" {{ $request->layout_ads == 'r1' ? 'selected' : '' }}>R1 ทุกหน้า - ขวาบนแนวตั้ง</option>
                                                    <option value="r2" {{ $request->layout_ads == 'r2' ? 'selected' : '' }}>R2 ทุกหน้า - ป้ายซ้ายแสดงตรงเมนู</option>
                                                    <option value="f1" {{ $request->layout_ads == 'f1' ? 'selected' : '' }}>F1 ทุกหน้า - ซ้ายบนแนวตั้ง</option>
                                                    <option value="aaa" {{ $request->layout_ads == 'aaa' ? 'selected' : '' }}>AAA ทุกหน้า - ป้ายลอยซ้าย</option>
                                                    <option value="bbb" {{ $request->layout_ads == 'bbb' ? 'selected' : '' }}>BBB ทุกหน้า - ป้ายลอยตรงกลางล่าง</option>
                                                    <option value="m1" {{ $request->layout_ads == 'm1' ? 'selected' : '' }}>M1 เฉพาะหน้าดูหนัง - ด้านบนตัวเล่นหนัง</option>
                                                    <option value="m2" {{ $request->layout_ads == 'm2' ? 'selected' : '' }}>M2 เฉพาะหน้าดูหนัง - ด้านล่างตัวเล่นหนัง</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="{{ asset($request->image_ads) }}" height=" 50px"><br>
                                                <label for="exampleFormControlFile1">รูปภาพ</label>
                                                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">แก้ไข</button>
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
