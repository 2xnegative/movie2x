
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <!-- Tell the browser to be responsive to screen width -->
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <title>Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="background-color: #202020">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ $infosetting->domain }}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

                            <!-- Light Logo icon -->
                            <img src="{{ asset($infosetting->logo) }}" alt="homepage" class="light-logo" height="20px"/>
                        </b>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ผู้ดูแลเว็บ :  {{ Auth::user()->email }}</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        {{-- <li> <a class="waves-effect waves-dark" href="{{ route('admin.home') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">หน้าแรก</span></a>
                        </li> --}}
                        
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.movie') }}" aria-expanded="false"><i class="mdi mdi-movie"></i><span class="hide-menu">หนังทั้งหมด</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.category') }}" aria-expanded="false"><i class="mdi mdi-tag-multiple"></i><span class="hide-menu">หมวดหมู่หนัง</span></a>
                        </li>
                        
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.member') }}" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">รายชื่อผู้ดูแลระบบ</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.banner') }}" aria-expanded="false"><i class="mdi mdi-panorama"></i><span class="hide-menu">โฆษณา</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.request') }}" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">ขอหนัง</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.moviecontact') }}" aria-expanded="false"><i class="mdi mdi-movie"></i><span class="hide-menu">แจ้งหนังเสีย</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.seo') }}" aria-expanded="false"><i class="mdi mdi-code-string"></i><span class="hide-menu">SEO</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.setting') }}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">ตั้งค่าเว็บ</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="https://www.youtube.com/playlist?list=PL13dbZ5gZvEv60FHvOdVtmeVSFwt9tZH_" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">วิธีใช้</span></a>
                        </li>
                        <li onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false"><i class="mdi mdi-power"></i><span class="hide-menu">ออกจากระบบ</span></a>
                            <form action="{{ route('logout') }}" id="logout-form" method="post" style="display:none">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="https://www.iamtheme.com/" class="link" data-toggle="tooltip" title="ติดต่อเรา"><small>IAMTHEME</small></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-8 col-7 align-self-center">
                        <h3 class="text-themecolor">{{ $header_title }}</h3>
                    </div>
                    <div class="col-md-4 col-5 align-self-center">
                        <a href="https://www.facebook.com/iamthemes/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> แจ้งปัญหาสคริป IAMTHEME.com</a>
                        &nbsp;
                        <a href="https://www.youtube.com/playlist?list=PL13dbZ5gZvEv60FHvOdVtmeVSFwt9tZH_" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">วิธีใช้งาน</a>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    @yield('body')
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 MOVIE2FREE v.{{ env('APP_VERSION','0') }} | IAMTHEME.COM จำหน่ายสคริปเว็บหนังและสคริปเว็บสำเร็จรูปอื่นๆ </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
</body>

</html>
