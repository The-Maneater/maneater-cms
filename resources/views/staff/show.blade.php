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
            <div class="column is-5">
                <h5 class="search-results-header">ARTICLES ({{ count($staffer->stories) }})</h5>
                @foreach($staffer->stories as $story)
                    <div class="resultset">
                        <a href="{{ $story->path() }}">{{ $story->title }}</a> ({{ $story->publish_date->format('M. d, Y') }})
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection