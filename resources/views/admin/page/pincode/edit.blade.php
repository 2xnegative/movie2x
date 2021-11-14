@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.category.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>ประเภท</label>
                                            <select class="form-control" name="type_category">
                                                <option value="movie" {{ $request->type_category == "movie" ? 'selected' : 'selected' }}>หนัง</option>
                                                <option value="series" {{ $request->type_category == "series" ? 'selected' : 'selected' }}>ซีรี่ย์</option>
                                                <option value="anime" {{ $request->type_category == "anime" ? 'selected' : 'selected' }}>อนิเมะ</option>
                                                <option value="av" {{ $request->type_category == "av" ? 'selected' : 'selected' }}>AV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>ชื่อหมวดหมู่</label>
                                            <input type="text" name="title_category" placeholder="ชื่อเรื่อง" class="form-control form-control-line" value="{{ $request->title_category }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
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
