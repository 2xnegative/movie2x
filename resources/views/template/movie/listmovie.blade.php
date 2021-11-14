@foreach($movie as $k)
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
            <div class="movie-corner movie-{{ $k->resolution == 'HD' ? 'HD' : ($k->resolution == 'FullHD' || $k->resolution == 'FULLHD' ? 'fullhd' : 'ZM') }}">{{ $k->resolution }}</div>
            @if(env('RIBBIN_NEW_UPDATE', '0') == "1")
                @if(Carbon\Carbon::parse($k->updated_at)->addDays(1)->timestamp > Carbon\Carbon::now()->timestamp)
                    <div class="movie-corner"
                        style=" width: 133px;top: 23px;right: -30px;background-color: #000">
                        อัพเดทใหม่
                    </div>
                @endif
            @endif
            <div class="movie-image">
                <a href="{{ route('movie', ['title' => $k->slug_title]) }}">
                    <img src="{{ asset($k->image) }}" alt="{{ $k->title }}">
                </a>
            </div>
        </div>

        <div class="movie-footer">
            {{ $k->sound == "ST" ? "Soundtrack(T)+Thai" : ($k->sound == "TH" ? "Thai" : ($k->sound == "TS" ? "SoundTrack(T)+Thai": $k->sound)) }} {{ $k->resolution }} {{ $k->year }}
        </div>
    </div>
@endforeach