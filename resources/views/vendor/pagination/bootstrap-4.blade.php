@if ($paginator->hasPages())
    <ul class="pagination d-flex justify-content-center" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled text-secondary rounded-0" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link rounded-0 bg-dark border border-warning" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link bg-dark border border-warning rounded-0 text-warning" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active "
                            aria-current="page"><span class="page-link bg-warning text-dark border border-warning">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link text-warning bg-dark border border-warning" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link border border-warning rounded-0 bg-dark text-warning" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link text-secondary bg-dark border border-warning rounded-0" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif
