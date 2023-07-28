<div class="styled-pagination text-center">
    <ul class="inner-container clearfix">
        <!-- Previous Page Link -->
        @if ($articales->onFirstPage())
            <li class="prev disabled"><span><i class="flaticon-left-arrow"></i> Prev</span></li>
        @else
            <li class="prev"><a href="{{ $articales->previousPageUrl() }}"><i class="flaticon-left-arrow"></i> Prev</a></li>
        @endif

        <!-- Pagination Links -->
        @foreach ($articales->getUrlRange(1, $articales->lastPage()) as $page => $url)
            <li class="{{ $page == $articales->currentPage() ? 'active' : '' }}">
                <a href="{{ $url }}">{{ $page }}</a>
            </li>
        @endforeach

        <!-- Next Page Link -->
        @if ($articales->hasMorePages())
            <li class="next"><a href="{{ $articales->nextPageUrl() }}">Next <i class="flaticon-right-arrow-1"></i></a></li>
        @else
            <li class="next disabled"><span>Next <i class="flaticon-right-arrow-1"></i></span></li>
        @endif
    </ul>
</div>
