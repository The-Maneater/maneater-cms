<nav class="pagination is-centered">
    @if($paginator->onFirstPage())
        <a class="pagination-previous" disabled>Previous</a>
    @else
        <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a>
    @endif
    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}">Next page</a>
        @else
            <a class="pagination-next" disabled>Next page</a>
        @endif

    <ul class="pagination-list">
        <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li><span class="pagination-ellipsis">&hellip;</span></li>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="pagination-link is-current">{{ $page }}</a></li>
                    @else
                        <li><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
</nav>


{{--<ul class="pagination">--}}
    {{--<!-- Previous Page Link -->--}}
    {{--@if ($paginator->onFirstPage())--}}
        {{--<li class="disabled"><span>&laquo;</span></li>--}}
    {{--@else--}}
        {{--<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>--}}
    {{--@endif--}}

    {{--<!-- Pagination Elements -->--}}
    {{--@foreach ($elements as $element)--}}
        {{--<!-- "Three Dots" Separator -->--}}
        {{--@if (is_string($element))--}}
            {{--<li class="disabled"><span>{{ $element }}</span></li>--}}
        {{--@endif--}}

        {{--<!-- Array Of Links -->--}}
        {{--@if (is_array($element))--}}
            {{--@foreach ($element as $page => $url)--}}
                {{--@if ($page == $paginator->currentPage())--}}
                    {{--<li class="active"><span>{{ $page }}</span></li>--}}
                {{--@else--}}
                    {{--<li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                {{--@endif--}}
            {{--@endforeach--}}
        {{--@endif--}}
    {{--@endforeach--}}

    {{--<!-- Next Page Link -->--}}
    {{--@if ($paginator->hasMorePages())--}}
        {{--<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>--}}
    {{--@else--}}
        {{--<li class="disabled"><span>&raquo;</span></li>--}}
    {{--@endif--}}
{{--</ul>--}}
