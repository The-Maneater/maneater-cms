@extends('layouts.app')

@section('links')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css">


@endsection

@section('content')
    <div class="columns">
        <div class="column is-8">
            <h1>{{ $subsection->name }}</h1>
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