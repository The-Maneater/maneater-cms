@extends('layouts.app')

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
                                {{ $photo->description }} ({{ $photo->created_at->format('M. d, Y') }})
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
                                {{ $graphic->description }} ({{ $graphic->created_at->format('M. d, Y') }})
                            </div>
                            <div class="column is-4">
                                <img src="{{ $graphic->link }}" alt="">
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(count($staffer->graphics) > 0)
                    <h5 class="search-results-header">LAYOUTS ({{ count($staffer->layouts) }})</h5>
                    @foreach($staffer->layouts as $layout)
                        <div class="columns resultset">
                            <div class="column is-8">
                                {{ $layout->title }} ({{ $layout->created_at->format('M. d, Y') }})
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