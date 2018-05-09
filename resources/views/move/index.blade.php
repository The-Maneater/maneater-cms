@extends('layouts.move')

@section('content')
    <div class="container">
        {{--<div class="columns">--}}
            {{--<div class="column is-12">--}}
                {{--<div class="columns">--}}
                    {{--@if(count($articles[1]->headerPhotos) > 0 )--}}
                    {{--<div class="column is-6">--}}
                        {{--<img src="{{ $articles[1]->headerPhotos[0]->path() }}" alt="">--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--<div class="column story-details">--}}
                        {{--<p class="category"><a href="{{ $articles[1]->section->path() }}" class="is-move-red">{{ $articles[1]->section->name }}</a></p>--}}
                        {{--<h2><a href="{{ $articles[1]->path() }}">{{ $articles[1]->title }}</a></h2>--}}
                        {{--<div class="cdeck">--}}
                            {{--<p>{{ $articles[1]->cDeck }}</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="columns">--}}
            {{--<div class="column is-4">--}}
                {{--<p class="category"><a href="{{ $articles[2]->section->path() }}" class="is-move-red">{{ $articles[2]->section->name }}</a></p>--}}
                {{--@if(count($articles[2]->headerPhotos) > 0)--}}
                    {{--<img src="{{ $articles[2]->headerPhotos[0]->path() }}" alt="">--}}
                {{--@endif--}}
                {{--<div class="story-details">--}}
                    {{--<h2><a href="{{ $articles[2]->path() }}">{{ $articles[2]->title }}</a></h2>--}}
                    {{--<div class="cdeck">--}}
                        {{--<p>{{ $articles[2]->cDeck }}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="column is-4">--}}
                {{--<p class="category"><a href="{{ $articles[3]->section->path() }}" class="is-move-red">{{ $articles[3]->section->name }}</a></p>--}}
                {{--@if(count($articles[3]->headerPhotos) > 0)--}}
                    {{--<img src="{{ $articles[3]->headerPhotos[0]->path() }}" alt="">--}}
                {{--@endif--}}
                {{--<div class="story-details">--}}
                    {{--<h2><a href="{{ $articles[3]->path() }}">{{ $articles[3]->title }}</a></h2>--}}
                    {{--<div class="cdeck">--}}
                        {{--<p>{{ $articles[3]->cDeck }}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="column is-4">--}}
                {{--<p class="category"><a href="{{ $articles[4]->section->path() }}" class="is-move-red">{{ $articles[4]->section->name }}</a></p>--}}
                {{--@if(count($articles[4]->headerPhotos) > 0)--}}
                    {{--<img src="{{ $articles[4]->headerPhotos[0]->path() }}" alt="">--}}
                {{--@endif--}}
                {{--<div class="story-details">--}}
                    {{--<h2><a href="{{ $articles[4]->path() }}">{{ $articles[4]->title }}</a></h2>--}}
                    {{--<div class="cdeck">--}}
                        {{--<p>{{ $articles[4]->cDeck }}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="story-gallery-wrapper">
            <div class="story-gallery">
                <div class="story-gallery-1">
                    <div class="main-photo-wrapper {{ count($articles[1]->headerPhotos) > 0 ? "" : "flex-column-end" }}">
                        @if(count($articles[1]->headerPhotos) > 0)
                            <img class="main-photo" src="{{ $articles[1]->headerPhotos[0]->path() }}" alt="">
                            <div class="photo-caption-wrapper">
                                <div class="photo-caption">
                                    <a class="is-white" href="{{ $articles[1]->path() }}">{{ $articles[1]->title }}</a>
                                </div>
                            </div>
                        @else
                            <h2><a href="{{ $articles[1]->path() }}">{{ $articles[1]->title }}</a></h2>
                            <div class="topcaption">{{ $articles[1]->cDeck }}</div>
                        @endif
                    </div>
                </div>
                <div class="story-gallery-2">
                    <div class="main-photo-wrapper {{ count($articles[2]->headerPhotos) > 0 ? "" : "flex-column-end" }}">
                        @if(count($articles[2]->headerPhotos) > 0)
                            <img class="main-photo" src="{{ $articles[2]->headerPhotos[0]->path() }}" alt="">
                            <div class="photo-caption-wrapper">
                                <div class="photo-caption">
                                    <a class="is-white" href="{{ $articles[2]->path() }}">{{ $articles[2]->title }}</a>
                                </div>
                            </div>
                        @else
                            <h2><a href="{{ $articles[2]->path() }}">{{ $articles[2]->title }}</a></h2>
                            <div class="topcaption">{{ $articles[2]->cDeck }}</div>
                        @endif
                    </div>
                </div>
                <div class="story-gallery-3">
                    <div class="main-photo-wrapper {{ count($articles[3]->headerPhotos) > 0 ? "" : "flex-column-end" }}">
                        @if(count($articles[3]->headerPhotos) > 0)
                            <img class="main-photo" src="{{ $articles[3]->headerPhotos[0]->path() }}" alt="">
                            <div class="photo-caption-wrapper">
                                <div class="photo-caption">
                                    <a class="is-white" href="{{ $articles[3]->path() }}">{{ $articles[3]->title }}</a>
                                </div>
                            </div>
                        @else
                            <h2><a href="{{ $articles[3]->path() }}">{{ $articles[3]->title }}</a></h2>
                            <div class="topcaption">{{ $articles[3]->cDeck }}</div>
                        @endif
                    </div>
                </div>
                <div class="story-gallery-4">
                    <div class="main-photo-wrapper {{ count($articles[4]->headerPhotos) > 0 ? "" : "flex-column-end" }}">
                        @if(count($articles[4]->headerPhotos) > 0)
                            <img class="main-photo" src="{{ $articles[4]->headerPhotos[0]->path() }}" alt="">
                            <div class="photo-caption-wrapper">
                                <div class="photo-caption">
                                    <a class="is-white" href="{{ $articles[4]->path() }}">{{ $articles[4]->title }}</a>
                                </div>
                            </div>
                        @else
                            <h2><a href="{{ $articles[4]->path() }}">{{ $articles[4]->title }}</a></h2>
                            <div class="topcaption">{{ $articles[4]->cDeck }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="section-break">
            <h2>Latest Stories</h2>
        </div>
        <div class="columns">
            <div class="column is-2"></div>
            @foreach($latestStories as $story)
                @if($loop->index === 0 || $loop->index % 5 === 0)
            <div class="column is-4">
                @endif
                <div class="newsreel big-third">
                    <p class="category"><a href="{{ $story->path() }}" class="is-move-red">{{ $story->section->name }}</a></p>
                    <a href="">
                        @if(count($story->headerPhotos) > 0)
                            <img src="{{ $story->headerPhotos[0]->path() }}" alt="">
                        @endif
                    </a>
                    <h4><a href="{{ $story->path() }}" class="is-black"><p>{{ $story->title }}</p></a></h4>
                    <div class="cdeck"><p>{{ $story->cDeck }}</p></div>
                    <div class="clear"></div>
                </div>
                @if($loop->last || $loop->index % 5 === 4)
            </div>
                @endif
                @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.story-gallery').slick({
                "autoplay": false,
                "arrows": false,
                "dots": true,
                "pauseOnDotsHover": true
            });
        });
    </script>
@endsection