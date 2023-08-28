@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="waves-effect"><a href="{{ $paginator->previousPageUrl() }}"><i class="material-icons"><i class="fa fa-angle-left" aria-hidden="true"></i>
 &nbsp</i></a></li>

        @else
        <li class="waves-effect"><a href="{{ $paginator->previousPageUrl() }}"><i class="material-icons"><i class="fa fa-angle-left" aria-hidden="true"></i>
 &nbsp</i></a></li>

        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a>{{ $page }}</a> &nbsp;&nbsp;&nbsp;&nbsp;
                        </li>
                    @else
                        <li class="waves-effect"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}"><i class="material-icons">&nbsp <i class="fa fa-angle-right" aria-hidden="true"></i></i></a></li>
        @else
            <li class="disabled"><a href="{{ $paginator->nextPageUrl() }}"><i class="material-icons">&nbsp <i class="fa fa-angle-right" aria-hidden="true"></i></i></a></li>
        @endif
    </ul>
@endif