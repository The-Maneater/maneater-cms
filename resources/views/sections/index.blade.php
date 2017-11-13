@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-5">
            <div class="substory">
                @if(count($priorityStories[0]->headerPhotos) > 0)
                    <img class="front-page-images" src="{{ $priorityStories[0]->headerPhotos[0]->path() }}" alt="">
                @elseif(count($priorityStories[0]->graphics) > 0)
                    <img class="front-page-images" src="{{ $priorityStories[0]->graphics[0]->linkPath() }}" alt="">
                @endif
                <h1><a href="{{ $priorityStories[0]->path() }}">{{ $priorityStories[0]->full_title }}</a></h1>
                <p>{{ $priorityStories[0]->cDeck }}</p>
            </div>
        </div>
        <div class="column is-7">
            <div class="columns">
                <div class="column is-6">
                    <div class="substory">
                        @if(count($priorityStories[1]->headerPhotos) > 0)
                            <img class="section-image" src="{{ $priorityStories[1]->headerPhotos[0]->path() }}" alt="">
                        @elseif(count($priorityStories[1]->graphics) > 0)
                            <img class="section-image" src="{{ $priorityStories[1]->graphics[0]->linkPath() }}" alt="">
                        @endif
                        <h1><a href="{{ $priorityStories[1]->path() }}">{{ $priorityStories[1]->full_title }}</a></h1>
                        <p>{{ $priorityStories[1]->cDeck }}</p>
                    </div>
                    <div class="substory">
                        @if(count($priorityStories[3]->headerPhotos) > 0)
                            <img class="section-image" src="{{ $priorityStories[3]->headerPhotos[0]->path() }}" alt="">
                        @elseif(count($priorityStories[3]->graphics) > 0)
                            <img class="section-image" src="{{ $priorityStories[3]->graphics[0]->linkPath() }}" alt="">
                        @endif
                        <h1><a href="{{ $priorityStories[3]->path() }}">{{ $priorityStories[3]->full_title }}</a></h1>
                        <p>{{ $priorityStories[3]->cDeck }}</p>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="substory">
                        @if(count($priorityStories[2]->headerPhotos) > 0)
                            <img class="section-image" src="{{ $priorityStories[2]->headerPhotos[0]->path() }}" alt="">
                        @elseif(count($priorityStories[2]->graphics) > 0)
                            <img class="section-image" src="{{ $priorityStories[2]->graphics[0]->linkPath() }}" alt="">
                        @endif
                        <h1><a href="{{ $priorityStories[2]->path() }}">{{ $priorityStories[2]->full_title }}</a></h1>
                        <p>{{ $priorityStories[2]->cDeck }}</p>
                    </div>
                    <div class="substory">
                        @if(count($priorityStories[4]->headerPhotos) > 0)
                            <img class="section-image" src="{{ $priorityStories[4]->headerPhotos[0]->path() }}" alt="">
                        @elseif(count($priorityStories[4]->graphics) > 0)
                            <img class="section-image" src="{{ $priorityStories[4]->graphics[0]->linkPath() }}" alt="">
                        @endif
                        <h1><a href="{{ $priorityStories[4]->path() }}">{{ $priorityStories[4]->full_title }}</a></h1>
                        <p>{{ $priorityStories[4]->cDeck }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-8">
            @foreach($stories as $story)
                <div class="story">
                    <div class="columns archive-columns">
                        <div class="is-8">
                            <h2><a href="{{ $story->path() }}">{{ $story->full_title }}</a></h2>
                            <p>{{ $story->cDeck }}</p>
                        </div>
                        <div class="is-4 archive-column">
                            @if(count($story->headerPhotos) > 0)
                                <img class="archive-image" src="{{ $story->headerPhotos[0]->path() }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

                <a href="{{ url()->current() . '/archives' }}" class="button is-m-green">Archives</a>
        </div>
        <div class="column is-4">
            <h2 class="sectionlabel">Top tags</h2>
            <div class="related-blogs">
                <ul class="top-tags">
                    @foreach($tags as $tag)
                        <li><a href="{{ url("/tags/" . $tag[0]->slug) }}">{{ $tag[0]->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="twitter-box">
                <h2 class="sectionlabel is-primary">LATEST TWEETS</h2>
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
            </div>

            @if(isset($ads['cubes'][0]))
                <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="top-ad"></a>
            @endif

            @if(isset($ads['cubes'][1]))
                <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][1]->url() }}" alt="" class="top-ad"></a>
            @endif
        </div>
    </div>
@endsection