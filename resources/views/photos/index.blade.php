@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-8">
            <div class="blogdetails">PHOTO ARCHIVES</div>
            @foreach($paginator as $key => $date)
                <h5 class="search-results-header archive-pubdate">{{ Carbon\Carbon::parse($key)->format('M. d, Y') }}</h5>
                @foreach($date as $story)
                    <div class="story columns">
                        <div class="column is-3">
                            <img class="layout" src="{{ $story->path() }}" alt="">
                        </div>
                        <div class="column is-9">
                            <p>{{ $story->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endforeach

            {{ $paginator->links() }}
        </div>
        <div class="column is-4">
            <div class="twitter-box">
                <h2 class="sectionlabel is-primary">LATEST TWEETS</h2>
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
            </div>

            @if(isset($ads['cubes'][0]))
                <img src="{{ $ads['cubes'][0]->url() }}" alt="" class="top-ad">
            @endif

            @if(isset($ads['cubes'][1]))
                <img src="{{ $ads['cubes'][1]->url() }}" alt="" class="top-ad">
            @endif
        </div>
    </div>
@endsection