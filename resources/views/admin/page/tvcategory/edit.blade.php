@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.tvcategory.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ชื่อหมวดหมู่ TV</label>
                                            <input type="text" name="title" placeholder="ชื่อหมวดหมู่" class="form-control form-control-line" value="{{ $request->title }}">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>สถานะ</label>
                                            <select name="public" class="form-control">
                                                <option value="0" {{ $request->public == 0 ? 'selected' : '' }}>VIP</option>
                                                <option value="1" {{ $request->public == 1 ? 'selected' : '' }}>Public</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">แก้ไขหมวดหมู่ TV</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
