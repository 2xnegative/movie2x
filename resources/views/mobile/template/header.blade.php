{{-- Header Container --}}
<div id="mySidebar" class="sidebar" style="overflow-x: hidden;">
    @foreach ($ads_r2 as $k)
    @if($k->show_ads != $show_ads && $k->show_ads != 0)
        @php
            break;
        @endphp
    @endif
        <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank" style="padding: 0px 2px; text-align: center">
            <img src="{{ asset($k->image_ads) }}" width="70%" alt="banner" style="border: none; height: auto;">
        </a>
    @endforeach
    <a href="javascript:void(0)" style="font-size: 40px; color: red" class="closebtn" onclick="closeNav()">&times;</a>
    <form action="{{ route('search') }}" method="get">
        <div class="form-group" style="padding: 5px">
            <input type="text" name="title" class="form-control text-white" placeholder="ค้นหา"
                style="width: 100%;background: {{ env('MOVIE_THEME_PRIMARY', 'red') }};border: 0px solid #ccc;border-radius: 8px;">
        </div>
    </form>
    @foreach ($category_menu as $k)
    <a href="{{ route('category', ['title' => $k->title_category_eng]) }}" title="{{ $k->title_category_eng }}" style="font-size: 1.0em" href="#" onClick="closeNav();" data-id="{{ $k->id }}" class="select_category">
        {{ $k->title_category }}
    </a>
    @endforeach
    <hr>
    <a style="font-size: 1.0em" href="#"><i class="fas fa-film"></i> หมวดหมู่</a>
    @foreach ($category_menu as $k)
    <a style="font-size: 1.0em" href="{{ route('category', ['title' => $k->title_category_eng]) }}"
        title="{{ $k->title_category_eng }}"
        onClick="closeNav();" >
        {{ $k->title_category }}  @if($k->split == "1") <img src="{{ asset('images/hot.gif') }}" width="30px" alt="category-hot"> @endif
    </a>
    @endforeach

    <hr>
    <a style="font-size: 1.0em" href="#"><i class="fas fa-film"></i> ประเภท</a>
    @foreach ($category_type as $k)
    <a style="font-size: 1.0em" href="{{ route('category', ['title' => $k->title_category_eng]) }}"
        title="{{ $k->title_category_eng }}"
        onClick="closeNav();" >
        {{ $k->title_category_eng }} @if($k->split == "1") <img src="{{ asset('images/hot.gif') }}" width="30px" alt="category-hot"> @endif
    </a>
    @endforeach


    @php
    $year = Carbon\Carbon::now()->year;
    // if(count($category_year) >= 1)
    // {
    //     $year = $category_year->year;
    // }
    @endphp
    <hr>
    <a style="font-size: 1.0em" href="#"><i class="fas fa-film"></i> ปีที่ฉาย</a>
    @for ($i = $year+1; $i > 1947; $i--)
    <a style="font-size: 0.9em" href="{{ route('movie_year', ['year' => $i]) }}"
        onClick="closeNav();" >
        {{ $i }}
    </a>
    @endfor
    {{-- <a style="font-size: 1.0em" href="{{ route('movies') }}"><i class="fas fa-film"></i> @lang('site.movie')</a>
    @foreach ($category_movie as $k)
        <a style="font-size: 0.9em" href="#" onClick="closeNav();" data-id="{{ $k->id }}" class="select_category"> - {{ $k->title_category }}</a>
    @endforeach
    <a style="font-size: 1.0em" href="{{ route('series') }}"><i class="fas fa-film"></i> @lang('site.series')</a>
    @foreach ($category_series as $k)
        <a style="font-size: 0.9em" href="#" onClick="closeNav();" data-id="{{ $k->id }}" class="select_category" > - {{ $k->title_category }}</a>
    @endforeach --}}

</div>
<div style="background-color: {{ env('MOVIE_THEME_PRIMARY', 'black') }}" id="headmenu" class="d-block d-lg-none">
    <div style="position: relative;height: 60px">
        <div style="position: absolute; top: 20%; transform: translate(0, 0%)">
            <label onclick="toggleMenu()" style="font-size: 30px; color: #ccc; margin-left: 10px;" class="drawer-toggle">&#9776;</label>
            <a href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}" width="50px;" style="margin-top: -15%"></a>
        </div>
    </div>
</div>
{{-- 
    <div class="header">
        <div class="header-left">
            <div class="header-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset($setting->logo) }}" alt="{{ $setting->title }}">
                </a>
            </div>
            @if($setting->facebook != "")
                <div class="header-social">
                    <a class="fb-icon" rel="nofollow" target="_blank" href="{{ $setting->facebook }}">Facebook</a>
                </div>
            @endif
        </div>
        <div class="header-right">
            <div class="header-title">
                <a href="{{ route('home') }}">
                    <p style="padding-left: 2.5rem;height: 2.5rem; overflow: hidden; text-overflow: ellipsis">{{ $setting->description }}</p>
                </a>
            </div>
            <div class="header-search">
                <form action="{{ route('search') }}" method="get">
                    <div class="header-search-icon"><i class="fa fa-search"></i></div>
                    <input type="text" name="title" class="header-search-input" placeholder="ค้นหา">
                    <button type="submit" class="header-search-button">ค้นหา</button>
                </form>
            </div>
        </div>
    </div>

    <div class="navbar">
        <ul class="nav">
            <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">
                <a class="nav-main-link" href="{{ route('home') }}" style="font-size: 19px">หน้าแรก</a>
            </li>
            @foreach ($category_menu as $k)
                <li class="cat-item">
                    <a href="{{ route('category', ['title' => $k->title_category_eng]) }}" title="{{ $k->title_category_eng }}" style="font-size: 19px">
                        {{ $k->title_category }}
                    </a>
                </li>
            @endforeach
            <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">
                <a class="nav-main-link request" style="font-size: 19px">ขอหนัง</a>
            </li>
        </ul>
    </div> --}}

    <style>
        input.form-control::placeholder {
            color: #fff;
        }
        /* The sidebar menu */
        .sidebar {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 2147483647; /* Stay on top */
        top: 0;
        left: 0;
        background-color: #111; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
        }

        /* The sidebar links */
        .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidebar a:hover {
        color: #f1f1f1;
        }

        /* Position and style the close button (top right corner) */
        .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        }

        /* The button used to open the sidebar */
        .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
        }

        .openbtn:hover {
        background-color: #444;
        }

        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
        transition: margin-left .5s; /* If you want a transition effect */
        padding: 10px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
        .sidebar {padding-top: 15px;}
        .sidebar a {font-size: 18px;}
        }

        .sidemenu li{
        list-style: none;
        }

        .sidemenu li a{
            color: #ccc;
        }

        .sidemenu li a:hover{
            color: #fff;
        }

     /* Menu */
     .sidemenu > li > a, .list-group-item
        {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: 1px;
            background-color: #1a1a1a;
            border: 1px solid transparent;
        }
        .sidemenu > li > a:hover, .sidemenu > li > a:focus, .list-group-item:hover
        {
            background-color: #363636;
            color: white;
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        /* Menu */

    </style>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "230px";
            document.getElementById("headmenu").style.marginLeft = "230px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("headmenu").style.marginLeft = "0";
        }

        function toggleMenu() {
            var widthmenu = document.getElementById("mySidebar").offsetWidth;
            if(widthmenu > 229) {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("headmenu").style.marginLeft = "0";
            }
            else {
                document.getElementById("mySidebar").style.width = "230px";
                document.getElementById("headmenu").style.marginLeft = "230px";
            }
        }
    </script>