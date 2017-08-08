@extends('layouts.move')

@section('content')
    <div class="columns staff">
        <div class="column is-4">
            <h1>{{ $staffer->fullName }}</h1>
        </div>
        <div class="column is-4 meta">
            @if(count($staffer->edBoardPositions) > 0)
                <h2>EDITORIAL BOARD POSITIONS</h2>
                <ul>
                @foreach($staffer->edBoardPositions as $position)
                    <li>{{ $position->title }} ({{ $position->pivot->period }})</li>
                @endforeach
                </ul>
            @endif

            <h2>STAFF POSITIONS</h2>
            <ul>
                @foreach($staffer->staffPositions as $staffPosition)
                    <li>{{ $staffPosition->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
        <br/>
        <div class="columns staff">
            <div class="column is-6">
                @if(count($staffer->stories) > 0)
                    <h2 class="search-results-header">ARTICLES ({{ count($staffer->stories) }})</h2>
                    @foreach($staffer->stories as $story)
                        <div class="resultset">
                            <a href="{{ $story->path() }}" class="is-move-red">{{ $story->title }}</a> ({{ $story->formattedPublishDate->format('M. d, Y') }})
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="column is-6">
                @if(count($staffer->photos) > 0)
                    <h2 class="search-results-header">PHOTOS ({{ count($staffer->photos) }})</h2>
                    @foreach($staffer->photos as $photo)
                        <div class="columns resultset">
                            <div class="column is-4">
                                <img src="{{ $photo->path() }}" alt="">
                            </div>
                            <div class="column is-8">
                                {{ $photo->description }} ({{ $photo->created_at->format('M. d, Y') }})
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(count($staffer->graphics) > 0)
                    <h2 class="search-results-header">GRAPHICS ({{ count($staffer->graphics) }})</h2>
                    @foreach($staffer->graphics as $graphic)
                        <div class="columns resultset">
                            <div class="column is-4">
                                <img src="{{ $graphic->link }}" alt="">
                            </div>
                            <div class="column is-8">
                                {{ $graphic->description }} ({{ $graphic->created_at->format('M. d, Y') }})
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(count($staffer->graphics) > 0)
                    <h2 class="search-results-header">LAYOUTS ({{ count($staffer->layouts) }})</h2>
                    @foreach($staffer->layouts as $layout)
                        <div class="columns resultset">
                            <div class="column is-4">
                                <img src="{{ $layout->link }}" alt="">
                            </div>
                            <div class="column is-8">
                                {{ $layout->title }} ({{ $layout->created_at->format('M. d, Y') }})
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
@endsection