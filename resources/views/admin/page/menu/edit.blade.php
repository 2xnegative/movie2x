@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.menu.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>ชื่อเมนู</label>
                                            <input type="text" name="title" placeholder="Title" class="form-control form-control-line" value="{{ $request->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>ลำดับการแสดง</label>
                                            <select class="form-control form-control-line" name="no">
                                                <option value="1" {{ $request->no == 1 ?'selected' : '' }}>1</option>
                                                <option value="2" {{ $request->no == 2 ?'selected' : '' }}>2</option>
                                                <option value="3" {{ $request->no == 3 ?'selected' : '' }}>3</option>
                                                <option value="4" {{ $request->no == 4 ?'selected' : '' }}>4</option>
                                                <option value="5" {{ $request->no == 5 ?'selected' : '' }}>5</option>
                                                <option value="6" {{ $request->no == 6 ?'selected' : '' }}>6</option>
                                                <option value="7" {{ $request->no == 7 ?'selected' : '' }}>7</option>
                                                <option value="8" {{ $request->no == 8 ?'selected' : '' }}>8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>Url</label>
                                            <input type="text" name="url" placeholder="Url" class="form-control form-control-line" value="{{ $request->url }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">เพิ่มเมนู</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
