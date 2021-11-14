@extends('admin.master')

@section('body')
    <!-- column -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <a href="{{ route('admin.movie.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มหนัง</a>
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
                    <div id="pagination">
                        <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="{{ $movie->previousPageUrl() }}" >Previous</a>
                            </li>
                            @for($i = 1;$i <= $movie->lastPage(); $i++)
                                <li class="page-item{{ $i == $movie->currentPage() ? ' active' : '' }}"><a class="page-link" href="{{ url('/dashboard/movie?page='.$i) }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item {{ $movie->currentPage() == $movie->lastPage() ? 'disabled' : '' }}">
                              <a class="page-link" href="{{ $movie->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
