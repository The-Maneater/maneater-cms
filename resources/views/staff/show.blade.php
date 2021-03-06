@extends('layouts.app')

@section('links')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css">


@endsection

@section('content')
    <div class="content staff-info">
        <div class="columns">
            <div class="column is-4">
                <h1>{{ $staffer->fullName }}</h1>
                @if($currentPosition !== null)
                    <h3>{{ $currentPosition->title }}</h3>
                @endif

                @if(isset($staffer->email))
                    <a href="mailto:{{ $staffer->email }}">{{ $staffer->email }}</a>
                @endif
            </div>
            <div class="column is-4">
                @if(count($staffer->edBoardPositions) > 0)
                    <h6>EDITORIAL BOARD POSITIONS</h6>
                    <ul>
                        @foreach($staffer->edBoardPositions as $position)
                            <li>{{ $position->title }} ({{ $position->pivot->period }})</li>
                        @endforeach
                    </ul>
                @endif

                <h6>STAFF POSITIONS</h6>
                <ul>
                    @foreach($staffer->staffPositions as $staffPosition)
                        <li>{{ $staffPosition->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6">
                @if(count($staffer->stories) > 0)
                    <h5 class="search-results-header">ARTICLES ({{ count($staffer->stories) }})</h5>
                    @foreach($staffer->stories as $story)
                        <div class="resultset">
                            <a href="{{ $story->path() }}">{{ $story->title }}</a> ({{ $story->formattedPublishDate->format('M. d, Y') }})
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="column is-6">
                @if(count($staffer->photos) > 0)
                    <h5 class="search-results-header">PHOTOS ({{ count($staffer->photos) }})</h5>
                    @foreach($staffer->photos as $photo)
                        <div class="columns resultset">
                            <div class="column is-8">
                                {{ $photo->description }} ({{ $photo->publish_date->format('M. d, Y') }})
                            </div>
                            <div class="column is-4">
                                <img src="{{ $photo->path() }}" alt="">
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(count($staffer->graphics) > 0)
                    <h5 class="search-results-header">GRAPHICS ({{ count($staffer->graphics) }})</h5>
                    @foreach($staffer->graphics as $graphic)
                        <div class="columns resultset">
                            <div class="column is-8">
                                ({{ $graphic->publish_date->format('M. d, Y') }})
                            </div>
                            <div class="column is-4">
                                <img src="{{ $graphic->linkPath() }}" alt="">
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(count($staffer->layouts) > 0)
                    <h5 class="search-results-header">LAYOUTS ({{ count($staffer->layouts) }})</h5>
                    @foreach($staffer->layouts as $layout)
                        <div class="columns resultset">
                            <div class="column is-8">
                                {{ $layout->title }} ({{ $layout->date_published->format('M. d, Y') }})
                            </div>
                            <div class="column is-4">
                                <img src="{{ $layout->link }}" alt="">
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

@endsection