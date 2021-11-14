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
                <a href="{{ route('admin.point.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มป้ายราคา</a>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>จำนวนวัน</th>
                                <th>ราคา (Point)</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request as $k)
                                <tr>
                                    <td>{{ $k->title_point }}</td>
                                    <td>{{ $k->days_point }}</td>
                                    <td>{{ $k->price_point }}</td>
                                    <td>
                                        <a href="{{ route('admin.point.edit', ['id'=> $k->id_point]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 100%">แก้ไข</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.point.destroy', ['id'=> $k->id_point]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 100%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
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
