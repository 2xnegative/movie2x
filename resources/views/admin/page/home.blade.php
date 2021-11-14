@extends('admin.master')

@section('body')
    {{-- <div class="col-lg-4 col-md-6">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">เรียลไทม์ผู้ใช้</a> </li>
            </ul>
        </div>
    </div> --}}
    {{-- <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">สมาชิกล่าสุด</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_last as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td>{{ $k->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">เติมเงินล่าสุด</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>จำนวน</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($log_topup_last as $k)
                                <tr>
                                    <td>{{ $k->tmpay_username }}</td>
                                    <td>{{ $k->tmpay_price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <script>
        $(document).ready(function(){
            function check_user_online()
                {
                    $.ajax({
                        url: '{{ url('/') }}/api/v1/useronline',
                        type: 'get'
                    })
                    .done(function(data) {
                        $("#user_online").html(data);
                    });

                }
            setInterval(check_user_online, 1000*5);
        });
    </script>
@endsection
