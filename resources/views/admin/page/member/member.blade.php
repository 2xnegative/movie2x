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
                <a href="{{ route('admin.member.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มแอดมิน</a>
                <h4 class="card-title">รายชื่อผู้ดูแลระบบ</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td>{{ $k->email }}</td>
                                    <td>
                                        <a href="{{ route('admin.member.edit', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 100%">แก้ไข</a>
                                    </td>
                                    <td>
                                        @if($k->email == Auth::user()->email)
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" disabled style="width: 100%">บัญชีคุณ(ไม่สามารถลบได้)</button>
                                        @else
                                            <form action="{{ route('admin.member.destroy', ['id'=> $k->id]) }}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 100%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div id="pagination">
                        <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="{{ $request->previousPageUrl() }}" >Previous</a>
                            </li>
                            @for($i = 1;$i <= $request->lastPage(); $i++)
                                <li class="page-item{{ $i == $request->currentPage() ? ' active' : '' }}"><a class="page-link" href="{{ url('/dashboard/member?page='.$i) }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item {{ $request->currentPage() == $request->lastPage() ? 'disabled' : '' }}">
                              <a class="page-link" href="{{ $request->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
