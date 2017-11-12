@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-8">
            <div class="blogdetails"><a href="/tags/" class="is-white">Tag</a>: {{ $tag->name }}</div>
            @foreach($stories as $story)
                <div class="story">
                    <h2><a href="{{ $story->path() }}">{{ $story->title }}</a></h2>
                    <p>{{ $story->cDeck }}</p>
                </div>
            @endforeach

            {{ $stories->links() }}
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