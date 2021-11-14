<div class="box">
    <div class="box-header">สุ่มหนังเรื่องอื่นๆ</div>
    @foreach ($random_movie as $k)
    <div class="movie">
        <div class="movie-box">
            <div class="movie-title">
                <a href="{{ route('movie', ['title' => $k->slug_title]) }}">
                    <span>{{ $k->title }}</span>
                </a>
            </div>
            <div class="movie-imdb">
                <b><span>{{ $k->score }}</span></b>
            </div>
            <div class="movie-corner movie-{{ $k->resolution == 'HD' ? 'HD' : 'ZM' }}">{{ $k->resolution }}</div>
            <div class="movie-image">
                <a href="{{ route('movie', ['title' => $k->slug_title]) }}">
                    <img src="{{ asset($k->image) }}" alt="{{ $k->title }}">
                </a>
            </div>
        </div>

        <div class="movie-footer">
            {{ $k->sound }} {{ $k->resolution }} {{ $k->year }}
        </div>
    </div>
    @endforeach

</div>