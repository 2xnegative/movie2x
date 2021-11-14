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
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>หนังที่ขอ</th>
                                <th>สถานะ</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($req as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td>{{ $k->title }}</td>
                                    <td class="{{ $k->status == 1 ? "text-success" : "text-warning" }}">{{ $k->status == 1 ? "ยืนยันแล้ว" : "รอการตรวจสอบ" }}</td>
                                    <td>
                                        <form action="{{ route('admin.request.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 50%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                        <a href="{{ route('admin.request.show', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 50%">ยืนยัน</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $req->links('admin.page.paginate') }}
            </div>
        </div>
    </div>
@endsection
