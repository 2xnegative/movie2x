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
                                <th>หนังเรื่อง</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($req as $k)
                                <tr>
                                    <td>{{ $k->title}}</td>
                                    <td class="{{ $k->status == 1 ? "text-success" : "text-warning" }}">
                                        <a href="{{ route('admin.movie.edit', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 100%">แก้ไข</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.moviecontact.destroy', ['id'=> $k->id_contact]) }}" method="POST">
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
                {{ $req->links('admin.page.paginate') }}
            </div>
        </div>
    </div>
@endsection
