@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="columns">
            <div class="column is-8">
                <div class="archive-header">
                    {{ $sectionName }} Archives
                </div>
                @foreach($paginator as $key => $date)
                    <h5 class="search-results-header archive-pubdate">{{ Carbon\Carbon::parse($key)->format('M. d, Y') }}</h5>
                        @foreach($date as $story)
                            <div class="story">
                                @php
                                    $story = new App\Story($story);
                                @endphp
                                <h2><a href="{{ $story->path() }}">{{ $story->title }}</a></h2>
                                <p>{{ $story->cDeck }}</p>
                            </div>
                    @endforeach
                @endforeach

                {{ $paginator->links('staff.paginator') }}
            </div>
            <div class="column is-8">

            </div>
        </div>
    </div>

@endsection