@extends('admin.master')

@section('body')
    <!-- column -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">โฆษณาวีดีโอ</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>VIDEO</th>
                                <th>ลิ้ง</th>
                                <th>จำนวนคลิ๊ก</th>
                                <th>หมดอายุ</th>
                                <th>แก้ไข</th>
                                <th style="text-align:center">สถานะใช้งาน</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request_video as $k)
                                <tr>
                                    <td>
                                       <video width="200px" controls>
                                            <source src="{{ asset($k->image_ads) }}" type="video/mp4">
                                        </video>
                                    </td>
                                    <td>{{ $k->url_ads }}</td>
                                    <td>{{ $k->count_click }}</td>
                                    <td>{{ $k->expired }}</td>
                                    <td>
                                        <a href="{{ route('admin.banner.edit', ['id'=> $k->id]) }}" class="btn waves-effect wave-light btn-info " style="width: 100%">แก้ไข</a>
                                    </td>
                                    <td style="text-align:center">
                                        {{ $k->status_ads == "1" ? "เปิด" : "ปิด" }}
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.banner.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 100%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <a href="{{ route('admin.banner.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มโฆษณา</a>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ตำแหน่ง</th>
                                <th>Title</th>
                                <th>จำนวนคลิ๊ก</th>
                                <th>รูปแบบแสดง</th>
                                <th>รูป</th>
                                <th>หมดอายุ</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request as $k)
                                <tr>
                                    <td>
                                        @if($k->layout_ads == "a")
                                            A ตรงกลางด้านบน
                                        @elseif($k->layout_ads == "r1")
                                            R1 ขวาบนแนวตั้ง
                                        @elseif($k->layout_ads == "f1")
                                            F1 ซ้ายบนแนวตั้ง
                                        @elseif($k->layout_ads == "bbb")
                                            BBB ป้ายลอยตรงกลาง
                                        @elseif($k->layout_ads == "aaa")
                                            AAA ป้ายลอยซ้าย
                                        @elseif($k->layout_ads == "ccc")
                                            CCC ป้ายลอยขวา
                                        @elseif($k->layout_ads == "r2")
                                            R2 ป้ายซ้ายแสดงตรงเมนู
                                        @elseif($k->layout_ads == "mt")
                                            MT ด้านบนสุด แสดงเฉพาะหน้าหนัง
                                        @elseif($k->layout_ads == "m1")
                                            M1 ด้านบนตัวเล่นหนัง แสดงเฉพาะหน้าหนัง
                                        @elseif($k->layout_ads == "m2")
                                            M2 ด้านล่างตัวเล่นหนัง แสดงเฉพาะหน้าหนัง
                                        @elseif($k->layout_ads == "footer")
                                            FOOTER ด้านบนเมนูเปลี่ยนหน้า
                                        @endif
                                    </td>
                                    <td>{{ $k->title_ads }}</td>
                                    <td>{{ $k->count_click }}</td>
                                    <td>{{ $k->show_ads == 0 ? "แสดงทั้งหมด" : (($k->show_ads == "1") ? "เฉพาะหน้าแรก" : (($k->show_ads == "2") ? "เฉพาะหน้าดูหนัง" : "")) }}</td>
                                    <td><img src="{{ asset($k->image_ads) }}" height="70px"></td>
                                    {{-- <td>{{ $k->start }}</td>
                                    <td>{{ $k->end }}</td> --}}
                                    <td>{{ $k->expired }}</td>
                                    <td>
                                        <a href="{{ route('admin.banner.edit', ['id'=> $k->id]) }}" class="btn waves-effect wave-light btn-info " style="width: 100%">แก้ไข</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.banner.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 100%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
