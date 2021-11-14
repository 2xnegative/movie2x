@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.about.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>หัวข้อ</label>
                                            <input type="text" name="title" placeholder="ชื่อเรื่อง" class="form-control form-control-line" value="{{ $request->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea name="description" rows="15" cols="100">{{ $request->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">แก้ไขAbout</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
