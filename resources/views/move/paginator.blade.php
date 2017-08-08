@if($paginator->hasPages())
    <div>
        @if($paginator->currentPage() > 1)
            <a href="{{ $paginator->previousPageUrl() }}" class="is-move-red">Newer</a>
        @endif
        <span>Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span>
        @if($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="is-move-red">Older</a>
        @endif
    </div>
@endif