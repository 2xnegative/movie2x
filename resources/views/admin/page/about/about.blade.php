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
                <a href="{{ route('admin.about.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">สร้างหน้าเพจ</a>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Url</th>
                                <th>แก้ไข/ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td>{{ $k->title }}</td>
                                    <td><a href="{{ route('about', ['id' => $k->id]) }}">{{ route('about', ['id' => $k->id]) }}</a></td>
                                    <td>
                                        <form action="{{ route('admin.about.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 50%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                        <a href="{{ route('admin.about.edit', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 50%">แก้ไข</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
