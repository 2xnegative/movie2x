<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @if($type == "movie")
        @foreach ($data as $item)
            <url>
                <loc>{{ route('movie', [ 'title' => $item['slug_title'] ]) }}</loc>
                <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @elseif($type == "category")
        @foreach ($data as $item)
            <url>
                <loc>{{ route('category', [ 'title' => $item['title_category'] ]) }}</loc>
                <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @endif
</urlset>