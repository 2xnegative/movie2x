@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.tvcategory.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ชื่อหมวดหมู่</label>
                                            <input type="text" name="title" placeholder="ชื่อเรื่อง" class="form-control form-control-line">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>สถานะ</label>
                                            <select name="public" class="form-control">
                                                <option value="0">VIP</option>
                                                <option value="1">Public</option>
                                            </select>
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
