@extends('admin.master')


@section('body')
    <div class="col-lg-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.setting.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <h3>ตั้งค่าเว็บ</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>โดเมน (Domain)</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="domain" placeholder="Domain" class="form-control form-control-line" value="{{ $request->domain }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Title</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="title" placeholder="Title" class="form-control form-control-line" value="{{ $request->title }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Description คำอธิบายเว็บ</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="description" placeholder="Description" class="form-control form-control-line" value="{{ $request->description }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Keyword</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" name="keyword" placeholder="Keyword" class="form-control form-control-line" value="{{ $request->keyword }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>โลโก้เว็บ</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <img src="{{ asset($request->logo) }}" style="background: #000">
                                                        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>ICON</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <img src="{{ asset($request->icon) }}" style="background: #000" width="50px">
                                                        <input type="file" class="form-control-file" name="icon" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h3>ตั้งค่า SSL</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>SSL(http or https)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <select class="form-control form-control-line" name="ssl">
                                                            <option value="0" {{ $request->ssl == 0 ? 'selected' : '' }}>http://</option>
                                                            <option value="1" {{ $request->ssl == 1 ? 'selected' : '' }}>https://</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h3>ตั้งค่า Skip โฆษณา</h3>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>วินาที </label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" name="time_skip" class="form-control form-control-line" value="{{ $request->time_skip }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h3>ตั้งค่า Soical</h3>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>FACEBOOK</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" name="facebook" class="form-control form-control-line" value="{{ $request->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h3>ตั้งค่า Analytics - Header</h3>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Code </label>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea type="text" name="header" class="form-control form-control-line">{{ $request->header }}</textarea>
                                            </div>
                                        </div>
                                        <h3>ตั้งค่า Footer</h3>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Code </label>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea type="text" name="footer" class="form-control form-control-line">{{ $request->footer }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-lg" type="submit" onclick="return confirm('ยืนยันอัพเดทข้อมูล')">อัพเดท</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#verify').click(function(){
                                console.log('click on');
                                $.ajax({
                                    url: '{{ url('/') }}/api/v1/admin/verify',
                                    type: 'POST'
                                })
                                .done(function(){
                                    alert('ส่งรหัสเรียบร้อย');
                                });

                            });
                        });
                    </script>
@endsection
