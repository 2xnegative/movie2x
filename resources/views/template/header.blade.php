
@if(env('MOVIE_THEME_NAVBAR', '0') == '1')
<link rel="stylesheet" href="{{ asset('css/navbar/bootstrap.min.css') }}">
<nav class="navbar navbar-expand navbar-dark fixed-top" style="background-color: {{ env('MOVIE_THEME_PRIMARY', '000') }}; height: 90px">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}" alt="{{ $setting->title }}" width="120px" ></a>
      <div class="navbar-collapse collapse">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">หน้าแรก</a>
            </li>

            {{-- @foreach ($category_menu as $k)
                <li class="nav-item active">
                    <a class="nav-link"  href="{{ route('category', ['title' => $k->title_category_eng]) }}" title="{{ $k->title_category_eng }}">
                        {{ $k->title_category }}
                    </a>
                </li>
            @endforeach --}}
            <li class="nav-item active">
                <a class="nav-link nav-main-link request">ขอหนัง</a>
            </li>

          </ul>
          <form action="{{ route('search') }}" method="get" class="form-inline mt-2 mt-md-0">
              <input type="text" class="form-control mr-sm-2" name="title" placeholder="Search" aria-label="Search">
              <button type="submit" class="btn btn-outline-light my-2 my-sm-0">ค้นหา</button>
          </form>
      </div>
    </div>
</nav>
<style>
    .notice {
        padding-top: 95px;
    }
    body {
        background-color: #000;
    }
</style>
@else 
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
                    <a href="{{ route('category', ['title' => str_replace(' ','-', $k->title_category)]) }}" title="{{ $k->title_category }} {{ $k->title_category }}" style="font-size: 19px">
                        {{ $k->title_category }}
                    </a>
                </li>
            @endforeach
            <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">
                <a class="nav-main-link request" style="font-size: 19px">ขอหนัง</a>
            </li>
            
        </ul>
    </div>
@endif