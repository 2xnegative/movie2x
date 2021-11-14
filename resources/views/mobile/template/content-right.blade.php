<div class="content-right">
    @foreach ($ads_r2 as $k)
    @if($k->show_ads != $show_ads && $k->show_ads != 0)
        @php
            break;
        @endphp
    @endif
        <div class="sidebar">
            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_new">
                <img src="{{ asset($k->image_ads) }}" width="236" height="400" alt="" style="border: none; height: auto;">
            </a>
        </div>
    @endforeach
    <div class="sidebar">
        <div class="sidebar-header">
            <p style="font-size: 18px">หมวดหมู่</p>
        </div>
        <ul>
            @foreach ($category_menu as $k)
                <li class="cat-item cat-left">
                    <a href="{{ route('category', ['title' => $k->title_category_eng]) }}" title="{{ $k->title_category_eng }}">
                        {{ $k->title_category }}  @if($k->split == "1") <img src="{{ asset('images/hot.gif') }}" width="30px" alt="category-hot"> @endif
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="sidebar">
        <div class="sidebar-header">
            <p style="font-size: 18px">ประเภท</p>
        </div>
        <ul>
            @foreach ($category_type as $k)
            <li class="cat-item cat-left">
                <a href="{{ route('category', ['title' => $k->title_category_eng]) }}" title="{{ $k->title_category_eng }} {{ $k->title_category }}">
                    {{ $k->title_category_eng }} {{ $k->title_category }}  @if($k->split == "1") <img src="{{ asset('images/hot.gif') }}" width="30px" alt="category-hot"> @endif
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<style>
    .cat-left {
        background-position: left center;
        background-repeat: no-repeat;
        padding: 6px 6px 6px 18px;
    }
</style>