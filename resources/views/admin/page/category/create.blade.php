@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.category.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="split" value="0" style="display: none">
                                    <div class="form-group row">
                                        <div class="col-md-3 col-sm-3">
                                            <label>รูปแบบ</label>
                                            <select class="form-control" name="type_category">
                                                <option value="type">ประเภท (แสดงเมนูด้านขวา)</option>
                                                <option value="category">หมวดหมู่ (แสดงเมนูด้านบน)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label>เปิดหมวด HOT (ภาพขยับ)</label>
                                            <select class="form-control" name="split">
                                                <option value="0" selected>ปิด</option>
                                                <option value="1">เปิด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ชื่อหมวดหมู่</label>
                                            <input type="text" name="title_category" placeholder="ชื่อเรื่อง" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-3">
                                            <label>ชื่อหมวดหมู่ ภาษาอังกฤษ</label>
                                            <input type="text" name="title_category_eng" placeholder="ชื่อเรื่อง" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">เพิ่มหมวดหมู่</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
