<div class="content-main">
    <div class="box">
        <h1 class="box-header">
            {{ $category->title_category_eng }} {{ $category->title_category }} - {{ $setting->title }}
        </h1>
        @include('template.movie.listmovie')
    </div>
    {{-- Paginate Custom view --}}
    {{ $movie->links('template.paginate', ['ads_footer'=>$ads_footer]) }}
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