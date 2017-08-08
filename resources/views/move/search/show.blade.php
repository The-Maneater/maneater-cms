@extends('layouts.move')

@section('content')
    <div class="content">
        <div class="columns">
            <div class="column is-12">
                <div class="section-break">
                    <h2>Search: {{ $search }}</h2>
                </div>
                <div class="form searchbar">
                    <form action="/search" method="GET">
                        <b-field expanded>
                            <b-input value="{{ $search }}"
                                     type="search" name="search">
                            </b-input>
                            <p class="control">
                                <button class="button is-info">Search</button>
                            </p>
                        </b-field>
                        <div class="block">
                            <div class="radio-group">
                                <label class="radio"><input type="radio" name="type"
                                                            value="Articles" {{ $type == 'Articles' ? 'checked' : '' }}>
                                    <span>Articles</span></label>
                                <label class="radio"><input type="radio" name="type"
                                                            value="Photos" {{ $type == 'Photos' ? 'checked' : '' }}>
                                    <span>Photos</span></label>
                                <label class="radio"><input type="radio" name="type"
                                                            value="Staff" {{ $type == 'Staff' ? 'checked' : '' }}>
                                    <span>Staff Members</span></label>
                                <label class="radio"><input type="radio" name="type"
                                                            value="Graphics" {{ $type == 'Graphics' ? 'checked' : '' }}>
                                    <span>Graphics</span></label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="results">
                    <h2 class="search-results-header">{{ $type }}</h2>
                        <div class="columns">
                    @foreach($results as $result)
                            @if($loop->index === 0 || $loop->index % 5 === 0)
                                <div class="column is-4">
                            @endif
                                    <div class="resultset">
                                        @include('move.search.content.' . $type, ['data' => $result])
                                    </div>
                            @if($loop->last || $loop->index % 5 === 4)
                                </div>
                            @endif

                    @endforeach
                        </div>
                </div>

                <div class="pagination-links">
                    {{ $results->appends(['type' => $type, 'search' => $search])->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
@endsection