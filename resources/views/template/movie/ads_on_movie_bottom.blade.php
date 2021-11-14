@foreach ($ads_movie_bottom as $k)
    <div class="box">
        <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_new">
            <img src="{{ asset($k->image_ads) }}" width="100%" alt="banner" style="border: none; height: auto;">
        </a>
    </div>
@endforeach