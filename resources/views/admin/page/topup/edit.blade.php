@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.topup.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <label>ราคา</label>
                                                    <input type="text" name="price" placeholder="ราคา" class="form-control form-control-line" value="{{ $request->price }}" readonly>
                                                </div>
                                                <div class="col-md-5 col-sm-12">
                                                    <label>จำนวนแต้ม</label>
                                                    <input type="text" name="date" placeholder="วัน" class="form-control form-control-line" value="{{ $request->date }}">
                                                </div>
                                                <div class="col-md-5 col-sm-12">
                                                    <label>โปรโมชั่น</label>
                                                    <input type="text" name="promotion" placeholder="โปรโมชั่น" class="form-control form-control-line" value="{{ $request->promotion }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">แก้ไขราคา</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
