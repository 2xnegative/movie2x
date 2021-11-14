@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.category.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <div class="col-md-3 col-sm-3">
                                            <label>รูปแบบ</label>
                                            <select class="form-control" name="type_category">
                                                <option value="type" {{ $request->type_category == "type" ? 'selected' : '' }}>ประเภท (แสดงเมนูด้านขวา)</option>
                                                <option value="category" {{ $request->type_category == "category" ? 'selected' : '' }}>หมวดหมู่ (แสดงเมนูด้านบน)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label>เปิดหมวด HOT (ภาพขยับ)</label>
                                            <select class="form-control" name="split">
                                                <option value="0" {{ $request->split == "0" ? 'selected' : '' }}>ปิด</option>
                                                <option value="1" {{ $request->split == "1" ? 'selected' : '' }}>เปิด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ชื่อหมวดหมู่</label>
                                            <input type="text" name="title_category" placeholder="ชื่อเรื่อง" class="form-control form-control-line" value="{{ $request->title_category }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ชื่อหมวดหมู่ ภาษาอังกฤษ</label>
                                            <input type="text" name="title_category_eng" placeholder="ชื่อเรื่อง" class="form-control form-control-line" value="{{ $request->title_category_eng }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">แก้ไขหมวดหมู่</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
