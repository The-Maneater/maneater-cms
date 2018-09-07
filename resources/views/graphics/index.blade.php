@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-8">
            <div class="blogdetails">GRAPHIC ARCHIVES</div>
            @foreach($paginator as $key => $date)
                <h5 class="search-results-header archive-pubdate">{{ Carbon\Carbon::parse($key)->format('M. d, Y') }}</h5>
                @foreach($date as $story)
                    <div class="story">
                        @php
                            $graphic = new App\Graphic($story);
                        @endphp
                        <img src="{{ $graphic->linkPath() }}" alt="">
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