@extends('admin.master')


@section('body')
        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.tv.update', ['id'=> $tv->id]) }}" method="POST">
                                        {{ method_field('PUT') }}
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-12">
                                                    <label>ชื่อช่อง</label>
                                                    <input type="text" name="title" placeholder="ชื่อช่อง" class="form-control form-control-line" value="{{ $tv->title }}">
                                                </div>
                                                <div class="col-md-1 col-sm-6">
                                                    <label>สถานะ</label>
                                                    <select class="form-control form-control-line" name="status">
                                                        <option value="1" {{ $tv->status == 1 ? 'selected' : '' }}>เปิด</option>
                                                        <option value="0" {{ $tv->status == 0 ? 'selected' : '' }}>ปิด</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-6">
                                                    <label>Top Channel</label>
                                                    <select class="form-control form-control-line" name="top_channel">
                                                        <option value="1" {{ $tv->top_channel == 1 ? 'selected' : '' }}>เปิด</option>
                                                        <option value="0" {{ $tv->top_channel == 0 ? 'selected' : '' }}>ปิด</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <label>หมดวหมู่</label>
                                                    <select class="form-control form-control-line" name="category">
                                                        @foreach ($CategoryTv as $k)
                                                            @if($tv->category == $k->id)
                                                                <option value="{{ $k->id }}" selected>{{ $k->title }}</option>
                                                            @else
                                                                <option value="{{ $k->id }}" >{{ $k->title }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" name="url_text" placeholder="ชื่อลิ้ง" value="{{ $tv->url_text }}">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="url" placeholder="ลิ้งทีวีสด .m3u8" value="{{ $tv->url }}">
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" name="url2_text" placeholder="ชื่อลิ้ง2" value="{{ $tv->url2_text }}">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="url2" placeholder="ลิ้งทีวีสด2 .m3u8" value="{{ $tv->url2 }}">
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" name="url3_text" placeholder="ชื่อลิ้ง3" value="{{ $tv->url3_text }}">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="url3" placeholder="ลิ้งทีวีสด- .m3u8" value="{{ $tv->url3 }}">
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" name="url4_text" placeholder="ชื่อลิ้ง4" value="{{ $tv->url4_text }}">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="url4" placeholder="ลิ้งทีวีสด- .m3u8" value="{{ $tv->url4 }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset($tv->image) }}">
                                            <label for="exampleFormControlFile1">รูปภาพ</label>
                                            <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success btn-lg" type="submit">แก้ไขTV</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection
