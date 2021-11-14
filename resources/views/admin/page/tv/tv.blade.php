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
                <a href="{{ route('admin.tv.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มรายการTV</a>
                <a href="{{ route('admin.tvcategory.create') }}" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down btn-md">เพิ่มหมวดหมู่TV</a>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>IMAGE</th>
                                <th>ชื่อช่อง</th>
                                <th>เวลา</th>
                                <th>แก้ไข/ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tv as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td><img src="{{ asset($k->image) }}" width="70px"></td>
                                    <td>{{ $k->title }}</td>
                                    <td>{{ $k->updated_at }}</td>
                                    <td>
                                        <form action="{{ route('admin.tv.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 50%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                        <a href="{{ route('admin.tv.edit', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 50%">แก้ไข</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div id="pagination">
                        <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="{{ $tv->previousPageUrl() }}" >Previous</a>
                            </li>
                            @for($i = 1;$i <= $tv->lastPage(); $i++)
                                <li class="page-item{{ $i == $tv->currentPage() ? ' active' : '' }}"><a class="page-link" href="{{ url('/dashboard/tv?page='.$i) }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item {{ $tv->currentPage() == $tv->lastPage() ? 'disabled' : '' }}">
                              <a class="page-link" href="{{ $tv->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
