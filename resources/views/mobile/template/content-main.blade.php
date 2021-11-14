<div>
    <div class="box">
        <div class="box-header">
            <ul>
                <li class="menu-item current-menu-item">
                    <a href="{{ route('home') }}">อัพเดทล่าสุด</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('top_imdb') }}">Top IMDb</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('much_like') }}">คนชอบมากที่สุด</a>
                </li>
            </ul>
        </div>
        @include('mobile.template.movie.listmovie')
    </div>
    {{-- Paginate Custom view --}}
    {{ $movie->links('mobile.template.paginate', ['ads_footer'=>$ads_footer]) }}
</div>

<style>
        .movie-imdb b {
            background: url({{ asset('images/icon-star.png') }}) no-repeat 0;
            background-size: 11px 11px;
        }

        .movie-fullhd {
            background-color: #F2AE3E;
        }
</style>