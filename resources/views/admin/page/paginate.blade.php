<div id="pagination">
        <ul class="pagination">

            <!-- Pagination Elements -->
            @foreach ($elements  as $element)
                <!-- "Three Dots" Separator -->
                @if (is_string($element))
                    <li class="page-item">
                        <a href="javascript:void()" class="page-link">{{ $element }}</a>
                    </li>
                @endif

                <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item">
                                <a href="javascript:void()" class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
</div>