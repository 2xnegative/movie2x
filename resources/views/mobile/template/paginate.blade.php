<div class="box">
    @if(isset($ads_footer))
        @foreach ($ads_footer as $k)
            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank" >
                @if(strrpos($k->image_ads , 'http') === false)
                    <img src="{{ asset($k->image_ads) }}" width="100%" alt="banner">
                @else
                    <img src="{{ $k->image_ads }}" width="100%" alt="banner">
                @endif
            </a>
        @endforeach
    @endif
        <div class="navigation">
            <ul style="padding-inline-start: 0px">
                <!-- Pagination Elements -->
                @foreach ($elements  as $element)
                    <!-- "Three Dots" Separator -->
                    @if (is_string($element))
                        <li style="margin-bottom: 20px">
                            <a href="javascript:void()" class="dots">{{ $element }}</a>
                        </li>
                    @endif

                    <!-- Array Of Links -->
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active" style="margin-bottom: 20px">
                                    <a href="javascript:void()" class="page-number page-numbers current">{{ $page }}</a>
                                </li>
                            @else
                                <li style="margin-bottom: 20px">
                                    <a href="{{ $url }}" class="page-number page-numbers">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                <!-- Next Page Link -->
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next">ถัดไป</a>
                    </li>
                @endif
            </ul>

        </div>
    </div>