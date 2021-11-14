@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.category.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="type_category" value="split" style="display: none">
                                    <input type="hidden" name="split" value="1" style="display: none">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>ชื่อหมวดหมู่</label>
                                            <input type="text" name="title_category" placeholder="ชื่อเรื่อง" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">เพิ่มหมวดหมู่แบบแยก</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
