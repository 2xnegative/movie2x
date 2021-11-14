@extends('admin.master')

@section('body')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- column -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                {{-- <a href="{{ route('admin.pincode.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มPIN</a> --}}
                <button type="button" data-toggle="modal" data-target="#pincode" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มPIN</button>

                <div class="modal fade" id="pincode" tabindex="-1" role="dialog" aria-labelledby="pincodec" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่ม PINCODE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                             <label for="recipient-name" class="col-form-label">จำนวนวัน VIP</label>
                             <input type="text" class="form-control" id="days" name="days">
                        </div>
                        <div class="form-group">
                             <label for="recipient-name" class="col-form-label">จำนวน PINCODE</label>
                             <input type="text" class="form-control" id="count" name="count">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">ประเภท</label>
                            <select class="form-control" name="once" id="once">
                                <option value="0" selected>ใช้ครั้งเดียว</option>
                                <option value="1">ไม่จำกัด</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">วันหมดอายุ</label>
                            <input type="text" name="expire" class="form-control form-control-line" id="expire">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary" id="add">เพิ่ม</button>
                      </div>
                    </div>
                  </div>
                </div>

                <script>
                  $(function() {
                    $( "#expire" ).datepicker();
                  });

                  $(document).ready(function() {
                      $('#add').click(function(event) {
                          let days = $('#days').val();
                          let count = $('#count').val();
                          let once = $('#once').val();
                          let expire = $('#expire').val();
                          let token = '{{ Auth::user()->remember_token }}';
                          $.ajax({
                              url: '{{ url('/') }}/api/v1/admin/pincode',
                              type: 'POST',
                              data: {
                                  token: token,
                                  days: days,
                                  count: count,
                                  once: once,
                                  expire: expire}
                          })
                          .done(function(data) {
                              alert("เพิ่มสำเร็จ");
                              console.log("เพิ่มสำเร็จ");
                              setInterval(function() {
                                 location.reload();
                             },500);
                          })

                      });
                  });
              </script>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>สถานะ</th>
                                <th>PINCODE</th>
                                <th>จำนวน VIP (วัน)</th>
                                <th>ประเภท</th>
                                <th>วันหมดอายุ</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($req as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td class="{{ $k->expire <= Carbon\Carbon::now() ? 'text-warning' : ( $k->active == 1 ? 'text-warning' : 'text-success' ) }}">
                                        {{ $k->expire <= Carbon\Carbon::now() ? 'หมดอายุ' : ( $k->active == 1 ? 'ถูกใช้แล้ว' : 'ใช้ได้' ) }}
                                    </td>
                                    <td>{{ $k->pincode }}</td>
                                    <td>{{ $k->days }}</td>
                                    <td>{{ $k->once == 0 ? 'ใช้ครั้งเดียว' : 'ไม่จำกัด' }}</td>
                                    <td>{{ $k->expire }}</td>
                                    <td>
                                        <form action="{{ route('admin.pincode.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="width: 50%" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                        {{-- <a href="{{ route('admin.request.show', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="width: 50%">แก้ไข</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div id="pagination">
                        <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="{{ $req->previousPageUrl() }}" >Previous</a>
                            </li>
                            @for($i = 1;$i <= $req->lastPage(); $i++)
                                <li class="page-item{{ $i == $req->currentPage() ? ' active' : '' }}"><a class="page-link" href="{{ url('/dashboard/pincode?page='.$i) }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item {{ $req->currentPage() == $req->lastPage() ? 'disabled' : '' }}">
                              <a class="page-link" href="{{ $req->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
