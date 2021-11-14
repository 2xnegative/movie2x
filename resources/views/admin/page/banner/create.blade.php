@extends('admin.master')


@section('body')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <div class="col-lg-12">
        <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.banner.store') }}" method="POST">
        <div class="card">
            <div class="card-block">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <label>Title</label>
                                <input type="text" name="title" placeholder="Title" class="form-control form-control-line">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label>สถานะใช้งาน</label>
                                <select class="form-control form-control-line" name="status">
                                    <option value="1">เปิดใช้งาน</option>
                                    <option value="0">ปิด</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <label>แสดงผล</label>
                                <select class="form-control form-control-line" name="show_ads">
                                    <option value="0">แสดงทุกหน้า</option>
                                    <option value="1">เฉพาะหน้าแรก</option>
                                    <option value="2">เฉพาะหน้าดูหนัง</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <label>หมดอายุ</label>
                                <input type="text" name="expired" class="form-control form-control-line" id="end">
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
                                    <option value="a" >A ทุกหน้า - ตรงกลางด้านบน (แนะนำ 920x200)</option>
                                    <option value="f1" >F1 ทุกหน้า - ซ้ายบนแนวตั้ง (แนะนำ 200x660)</option>
                                    <option value="r1" >R1 ทุกหน้า - ขวาบนแนวตั้ง (แนะนำ 200x660)</option>
                                    <option value="r2" >R2 ทุกหน้า - ป้าขวาแสดงตรงเมนู (แนะนำ 250x250)</option>
                                    <option value="aaa" >AAA ทุกหน้า - ป้ายลอยซ้าย (แนะนำ 180x160)</option>
                                    <option value="bbb" >BBB ทุกหน้า - ป้ายลอยตรงกลางล่าง (แนะนำ 728x90)</option>
                                    <option value="ccc" >CCC ทุกหน้า - ป้ายลอยขวา (แนะนำ 180x160)</option>
                                    @if(env('BANNER_FULL', '0') == "1")
                                    <option value="footer" >FOOTER_MENU ด้านบนปุ่มเปลี่ยนหน้า (แนะนำ 728x90)</option>
                                    <option value="mt" >MT ด้านบนสุด แสดงเฉพาะหน้าดูหนัง (แนะนำ 728x90)</option>
                                    @endif
                                    <option value="m1" >M1 เฉพาะหน้าดูหนัง - ด้านบนตัวเล่นหนัง (แนะนำ 728x90)</option>
                                    <option value="m2" >M2 เฉพาะหน้าดูหนัง - ด้านล่างตัวเล่นหนัง (แนะนำ 728x90)</option>
                                    <option value="video" {{ $video_count >= 3 ? 'disabled' : ''}}>VIDEO - ตัวเล่นหนัง {{ $video_count >= 3 ? '(เพิ่มได้ไม่เกิน 3 อัน)' : ''}}</option>
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
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                @if(env('BANNER_BUTTON', '0') == "1")
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>ปุ่มโฆษณา</label>
                                <div class="form-controls">
                                    <div class="form-group-item">
                                        <div class="g-items-header">
                                            <div class="row">
                                                <div class="col-md-2">สถานะ</div>
                                                <div class="col-md-2">ข้อความ</div>
                                                <div class="col-md-2">ลิ้งเว็บ</div>
                                                <div class="col-md-2">Class icon | <a href="https://fontawesome.com/icons?d=gallery" target="_blank">ดู icon ทั้งหมด</a></div>
                                                <div class="col-md-2">สีปุ่ม | <a href="https://htmlcolorcodes.com/" target="_blank">ดู Code สี</a></div>
                                            </div>
                                        </div>
                                        <div class="g-items">
                                            <div class="item" data-number="0">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <select class="form-control form-control-line" name="button_ads[0][status]">
                                                            <option value="0">ปิด</option>
                                                            <option value="1">เปิดใช้งาน</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[0][title]" class="form-control" placeholder="Eg: @linexxx" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" name="button_ads[0][link]" class="form-control" placeholder="Eg: https://iamtheme.com" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[0][icon]" class="form-control" placeholder="Eg: fab fa-line" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[0][color]" class="form-control" placeholder="Eg: #fc141a" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-number="1">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <select class="form-control form-control-line" name="button_ads[1][status]">
                                                            <option value="0">ปิด</option>
                                                            <option value="1">เปิดใช้งาน</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[1][title]" class="form-control" placeholder="Eg: @linexxx" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" name="button_ads[1][link]" class="form-control" placeholder="Eg: https://iamtheme.com" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[1][icon]" class="form-control" placeholder="Eg: fab fa-line" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[1][color]" class="form-control" placeholder="Eg: #fc141a" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-number="2">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <select class="form-control form-control-line" name="button_ads[2][status]">
                                                            <option value="0">ปิด</option>
                                                            <option value="1">เปิดใช้งาน</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[2][title]" class="form-control" placeholder="Eg: @linexxx">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" name="button_ads[2][link]" class="form-control" placeholder="Eg: https://iamtheme.com">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[2][icon]" class="form-control" placeholder="Eg: fab fa-line">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[2][color]" class="form-control" placeholder="Eg: #fc141a" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-number="3">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <select class="form-control form-control-line" name="button_ads[3][status]">
                                                            <option value="0">ปิด</option>
                                                            <option value="1">เปิดใช้งาน</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[3][title]" class="form-control" placeholder="Eg: @linexxx" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" name="button_ads[3][link]" class="form-control" placeholder="Eg: https://iamtheme.com" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[3][icon]" class="form-control" placeholder="Eg: fab fa-line" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" min="0" name="button_ads[3][color]" class="form-control" placeholder="Eg: #fc141a">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

            </div>
        </div>

    <div class="card">
        <div class="card-block">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-success btn-lg" type="submit">เพิ่มโฆษณา</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
        <script  type="text/javascript">
          $(function() {
            $( "#start" ).datepicker({ dateFormat: 'yy-mm-dd' });
            $( "#end" ).datepicker({ dateFormat: 'yy-mm-dd' });
          });
      </script>
@endsection
