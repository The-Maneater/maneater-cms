@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-8">
            <div class="blogdetails">LAYOUT ARCHIVES</div>
            @foreach($paginator as $key => $date)
                <h5 class="search-results-header archive-pubdate">{{ Carbon\Carbon::parse($key)->format('M. d, Y') }}</h5>
                @foreach($date as $story)
                    <div class="story">
                        <img class="layout" src="{{ $story->path() }}" alt="">
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
                <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="top-ad"></a>
            @endif

            @if(isset($ads['cubes'][1]))
                <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][1]->url() }}" alt="" class="top-ad"></a>
            @endif
        </div>
    </div>
@endsection