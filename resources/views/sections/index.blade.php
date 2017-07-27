@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-5">
            <div class="substory">
                <h1><a href="{{ $priorityStories[0]->path() }}">{{ $priorityStories[0]->title }}</a></h1>
                <p>{{ $priorityStories[0]->title }}</p>
            </div>
        </div>
        <div class="column is-7">
            <div class="columns">
                <div class="column is-6">
                    <div class="substory">
                        <h1><a href="{{ $priorityStories[1]->path() }}">{{ $priorityStories[1]->title }}</a></h1>
                        <p>{{ $priorityStories[1]->title }}</p>
                    </div>
                    <div class="substory">
                        <h1><a href="{{ $priorityStories[3]->path() }}">{{ $priorityStories[3]->title }}</a></h1>
                        <p>{{ $priorityStories[3]->title }}</p>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="substory">
                        <h1><a href="{{ $priorityStories[2]->path() }}">{{ $priorityStories[2]->title }}</a></h1>
                        <p>{{ $priorityStories[2]->title }}</p>
                    </div>
                    <div class="substory">
                        <h1><a href="{{ $priorityStories[4]->path() }}">{{ $priorityStories[4]->title }}</a></h1>
                        <p>{{ $priorityStories[4]->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-8">
            @foreach($stories as $story)
                <div class="story">
                    <h2><a href="{{ $story->path() }}">{{ $story->title }}</a></h2>
                    <p>{{ $story->cDeck }}</p>
                </div>
            @endforeach

                <a href="{{ url()->current() . '/archives' }}" class="button is-m-green">Archives</a>
        </div>
        <div class="column is-4">
            <p>Extra stuff and ads</p>
        </div>
    </div>
@endsection