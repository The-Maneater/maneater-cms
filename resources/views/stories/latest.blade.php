@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-8">
            <div class="blogdetails">ARTICLE ARCHIVES</div>
            @foreach($paginator as $key => $date)
                <h5 class="search-results-header archive-pubdate">{{ Carbon\Carbon::parse($key)->format('M. d, Y') }}</h5>
                @foreach($date as $story)
                    <div class="story columns">
                        <div class="column is-10">
                            <h2><a href="{{ $story->path() }}">{{ $story->title }}</a></h2>
                            <h6>Published by <a href="{{ url('/staff/' . $story->writers[0]['slug']) }}" class="is-m-green">{{ $story->writers[0]['fullname'] }}</a></h6>
                            <p>{{ $story->cDeck }}</p>
                        </div>
                        <div class="column is-2">
                            @if(count($story->headerPhotos) > 0)
                                <img src="{{ $story->headerPhotos[0]->location }}" alt=""> 
                            @endif
                        </div>
                        
                    </div>
                @endforeach
            @endforeach

            {{ $paginator->links() }}
        </div>
        <div class="column is-4">
            <h3 class="header-divider is-bold">GET SOCIAL</h3>
            <div class="twitter-box">
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
            </div>

            @if(isset($ads['cubes'][0]))
                @if(!is_null($ads['cubes'][0]->raw_content))
                    {!! $ads['cubes'][0]->raw_content !!}
                @else
                    <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="top-ad"></a>
                @endif
            @endif

            @if(isset($ads['cubes'][1]))
                @if(!is_null($ads['cubes'][1]->raw_content))
                    {!! $ads['cubes'][1]->raw_content !!}
                @else
                    <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="top-ad"></a>
                @endif
            @endif
        </div>
    </div>
@endsection