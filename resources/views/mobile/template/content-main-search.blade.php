<div>
    <div class="box">
        <h1 class="box-header">
            ค้นหา: {{ $search }}
        </h1>
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