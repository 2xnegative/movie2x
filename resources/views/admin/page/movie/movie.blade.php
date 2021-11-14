@extends('admin.master')

@section('body')
    <!-- column -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-lg-4 col-sm-12" style="margin: 20px 0px">
    <form action="{{ route('admin.movie.movies_search') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="title" placeholder="ค้นหาหนัง">
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                </div>
        </div>
    </form>
    </div>
    <div class="col-lg-12">
        <a href="{{ route('admin.movie') }}" class="btn btn-primary">ทั้งหมด</a>
        <div class="card">
            <div class="card-block">
                <a href="{{ route('admin.movie.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มหนัง</a>
                <a href="{{ route('admin.category.create') }}" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down btn-md">เพิ่มหมวดหมู่</a>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>รูปภาพ</th>
                                <th>ชื่อเรื่อง</th>
                                <th>อัพเดท</th>
                                <th>แก้ไข/ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movie as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td><img src="{{ asset($k->image) }}" width="70px"></td>
                                    <td>{{ $k->title }}</td>
                                    <td>{{ $k->updated_at }}</td>
                                    <td>
                                        <form action="{{ route('admin.movie.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 50%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                        <a href="{{ route('admin.movie.edit', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 50%">แก้ไข</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $movie->links('admin.page.paginate') }}
                </div>
            </div>
        </div>
    </div>
@endsection
