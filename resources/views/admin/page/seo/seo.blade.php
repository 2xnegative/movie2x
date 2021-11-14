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
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.seo.update', ['id'=> $request->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <h3>SEO</h3>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>SEO title สำหรับหน้าแสดงหนัง</label>
                                                        <label for=""></label>
                                                        <p>
                                                            <code>
                                                                ตัวอย่างโค๊ดฟังก์ชั่น <kbd>{movie_title} ชื่อเรื่อง</kbd> <kbd>{movie_description} เรื่องย่อของหนัง</kbd> <kbd>{title_web} Site Title</kbd>
                                                            </code>
                                                            <br>
                                                            <code>
                                                                defalut: {movie_title} - {title_web}
                                                            </code>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <input type="text" name="seo_title" placeholder="{movie_title} - {title_web}" class="form-control form-control-line" value="{{ $seo->seo_title }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="col-md-12 col-sm-12">
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>SEO Description สำหรับหน้าแสดงหนัง</label>
                                                        <label for=""></label>
                                                        <p>
                                                            <code>
                                                                ตัวอย่างโค๊ดฟังก์ชั่น <kbd>{movie_title} ชื่อเรื่อง</kbd> <kbd>{movie_description} เรื่องย่อของหนัง</kbd> <kbd>{title_web} Site Title</kbd>
                                                            </code>
                                                            <br>
                                                            <code>
                                                                defalut: {movie_description}
                                                            </code>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <input type="text" name="seo_description_type" placeholder="{movie_description}" class="form-control form-control-line" value="{{ $seo->seo_description_type }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="col-md-12 col-sm-12">
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Sitemap</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" name="sitemap" placeholder="Sitemap" class="form-control form-control-line" value="{{ route('sitemap.index') }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
