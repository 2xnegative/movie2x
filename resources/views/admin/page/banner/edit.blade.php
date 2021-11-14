@extends('admin.master')


@section('body')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <div class="col-lg-12">
        <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.banner.update', ['id'=> $request->id]) }}" method="POST">
                        <div class="card">
                            <div class="card-block">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12">
                                                <label>Title</label>
                                                <input type="text" name="title" placeholder="Title" class="form-control form-control-line" value="{{ $request->title_ads }}">
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>สถานะใช้งาน</label>
                                                <select class="form-control form-control-line" name="status">
                                                    <option value="1" {{ $request->status_ads == 1 ? 'selected' : '' }}>เปิดใช้งาน</option>
                                                    <option value="0" {{ $request->status_ads == 0 ? 'selected' : '' }}>ปิด</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <label>แสดงผล</label>
                                                <select class="form-control form-control-line" name="show_ads">
                                                    <option value="0" {{ $request->show_ads == 0 ? 'selected' : '' }}>แสดงทุกหน้า</option>
                                                    <option value="1" {{ $request->show_ads == 1 ? 'selected' : '' }}>เฉพาะหน้าแรก</option>
                                                    <option value="2" {{ $request->show_ads == 2 ? 'selected' : '' }}>เฉพาะหน้าดูหนัง</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <label>หมดอายุ</label>
                                                <input type="text" name="expired" class="form-control form-control-line" id="end" value="{{ $request->expired }}">
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
                                                @if($request->layout_ads == "video")
                                                    <select class="form-control form-control-line" name="layout">
                                                        <option value="video" {{ $request->layout_ads == 'video' ? 'selected' : '' }}>วีดีโอ ADS</option>
                                                    </select>
                                                @else
                                                    <select class="form-control form-control-line" name="layout">
                                                        <option value="a" {{ $request->layout_ads == 'a' ? 'selected' : '' }}>A ทุกหน้า - ตรงกลางด้านบน (แนะนำ 920x200)</option>
                                                        <option value="f1" {{ $request->layout_ads == 'f1' ? 'selected' : '' }}>F1 ทุกหน้า - ซ้ายบนแนวตั้ง (แนะนำ 200x660)</option>
                                                        <option value="r1" {{ $request->layout_ads == 'r1' ? 'selected' : '' }}>R1 ทุกหน้า - ขวาบนแนวตั้ง (แนะนำ 200x660)</option>
                                                        <option value="r2" {{ $request->layout_ads == 'r2' ? 'selected' : '' }}>R2 ทุกหน้า - ป้ายขวาแสดงตรงเมนู (แนะนำ 250x250)</option>
                                                        <option value="aaa" {{ $request->layout_ads == 'aaa' ? 'selected' : '' }}>AAA ทุกหน้า - ป้ายลอยซ้าย (แนะนำ 180x160)</option>
                                                        <option value="bbb" {{ $request->layout_ads == 'bbb' ? 'selected' : '' }}>BBB ทุกหน้า - ป้ายลอยตรงกลางล่าง (แนะนำ 728x90)</option>
                                                        <option value="ccc" {{ $request->layout_ads == 'ccc' ? 'selected' : '' }}>CCC ทุกหน้า - ป้ายลอยขวา (แนะนำ 180x160)</option>
                                                        @if(env('BANNER_FULL', '0') == "1")
                                                        <option value="footer_menu" {{ $request->layout_ads == 'footer' ? 'selected' : '' }}>FOOTER_MENU ด้านบนปุ่มเปลี่ยนหน้า (แนะนำ 728x90)</option>
                                                        <option value="mt" {{ $request->layout_ads == 'mt' ? 'selected' : '' }}>MT ด้านบนสุด แสดงเฉพาะหน้าดูหนัง (แนะนำ 728x90)</option>
                                                        @endif
                                                        <option value="m1" {{ $request->layout_ads == 'm1' ? 'selected' : '' }}>M1 เฉพาะหน้าดูหนัง - ด้านบนตัวเล่นหนัง (แนะนำ 728x90)</option>
                                                        <option value="m2" {{ $request->layout_ads == 'm2' ? 'selected' : '' }}>M2 เฉพาะหน้าดูหนัง - ด้านล่างตัวเล่นหนัง (แนะนำ 728x90)</option>
                                                        <option value="video" {{ $request->layout_ads == 'video' ? 'selected' : '' }}>VIDEO - ตัวเล่นหนัง</option>
                                                    </select>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($request->layout_ads == "video")
                                                    <video width="300px" controls>
                                                        <source src="{{ $request->image_ads }}" type="video/mp4">
                                                    </video><br>
                                                    <label for="exampleFormControlFile1">VIDEO UPLOAD ขนาดไม่เกิน 10MB</label>
                                                @else
                                                    <img src="{{ asset($request->image_ads) }}" height=" 50px"><br>
                                                    <label for="exampleFormControlFile1">รูปภาพ</label>
                                                @endif
                                                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                @if(env('BANNER_BUTTON', '0') == "1")
                                    {{-- <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12">
                                                <label>แสดงปุ่ม</label>
                                                <select class="form-control form-control-line" name="status">
                                                    <option value="1" {{ $request->status_button == 1 ? 'selected' : '' }}>เปิดใช้งาน</option>
                                                    <option value="0" {{ $request->status_button == 0 ? 'selected' : '' }}>ปิด</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
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
                                                        @php
                                                            if($request->button == "")
                                                            {
                                                                $button_ads = false;
                                                            }
                                                            else {
                                                                $button_ads = json_decode($request->button);
                                                            }
                                                            // $button_ads = $request->button;
                                                        @endphp
                                                        <div class="g-items">
                                                            <div class="item" data-number="0">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <select class="form-control form-control-line" name="button_ads[0][status]">
                                                                            <option value="0" {{ ($button_ads && $button_ads[0]->status == 0) ? 'selected' : '' }}>ปิด</option>
                                                                            <option value="1" {{ ($button_ads && $button_ads[0]->status == 1) ? 'selected' : '' }}>เปิดใช้งาน</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[0][title]" class="form-control" placeholder="Eg: @linexxx" value="{{ $button_ads ? $button_ads[0]->title : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" name="button_ads[0][link]" class="form-control" placeholder="Eg: https://iamtheme.com" value="{{ $button_ads ? $button_ads[0]->link : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[0][icon]" class="form-control" placeholder="Eg: fab fa-line" value="{{ $button_ads ? $button_ads[0]->icon : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[0][color]" class="form-control" placeholder="Eg: #fc141a" value="{{ $button_ads ? $button_ads[0]->color : "" }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item" data-number="1">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <select class="form-control form-control-line" name="button_ads[1][status]">
                                                                            <option value="0" {{ ($button_ads && $button_ads[1]->status == 0) ? 'selected' : '' }}>ปิด</option>
                                                                            <option value="1" {{ ($button_ads && $button_ads[1]->status == 1) ? 'selected' : '' }}>เปิดใช้งาน</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[1][title]" class="form-control" placeholder="Eg: @linexxx" value="{{ $button_ads ? $button_ads[1]->title : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" name="button_ads[1][link]" class="form-control" placeholder="Eg: https://iamtheme.com" value="{{ $button_ads ? $button_ads[1]->link : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[1][icon]" class="form-control" placeholder="Eg: fab fa-line" value="{{ $button_ads ? $button_ads[1]->icon : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[1][color]" class="form-control" placeholder="Eg: #fc141a" value="{{ $button_ads ? $button_ads[1]->color : "" }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item" data-number="2">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <select class="form-control form-control-line" name="button_ads[2][status]">
                                                                            <option value="0" {{ ($button_ads && $button_ads[2]->status == 0) ? 'selected' : '' }}>ปิด</option>
                                                                            <option value="1" {{ ($button_ads && $button_ads[2]->status == 1) ? 'selected' : '' }}>เปิดใช้งาน</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[2][title]" class="form-control" placeholder="Eg: @linexxx" value="{{ $button_ads ? $button_ads[2]->title : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" name="button_ads[2][link]" class="form-control" placeholder="Eg: https://iamtheme.com" value="{{ $button_ads ? $button_ads[2]->link : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[2][icon]" class="form-control" placeholder="Eg: fab fa-line" value="{{ $button_ads ? $button_ads[2]->icon : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[2][color]" class="form-control" placeholder="Eg: #fc141a" value="{{ $button_ads ? $button_ads[2]->color : "" }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item" data-number="3">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <select class="form-control form-control-line" name="button_ads[3][status]">
                                                                            <option value="0" {{ ($button_ads && $button_ads[3]->status == 0) ? 'selected' : '' }}>ปิด</option>
                                                                            <option value="1" {{ ($button_ads && $button_ads[3]->status == 1) ? 'selected' : '' }}>เปิดใช้งาน</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[3][title]" class="form-control" placeholder="Eg: @linexxx" value="{{ $button_ads ? $button_ads[3]->title : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" name="button_ads[3][link]" class="form-control" placeholder="Eg: https://iamtheme.com" value="{{ $button_ads ? $button_ads[3]->link : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[3][icon]" class="form-control" placeholder="Eg: fab fa-line" value="{{ $button_ads ? $button_ads[3]->icon : "" }}">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="text" min="0" name="button_ads[3][color]" class="form-control" placeholder="Eg: #fc141a" value="{{ $button_ads ? $button_ads[3]->color : "" }}">
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
                                    <button class="btn btn-success btn-lg" type="submit">แก้ไข</button>
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
