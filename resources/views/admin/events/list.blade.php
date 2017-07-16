@extends('layouts.admin')

@section('title')
    Events
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Events</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find an event" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-event') }}" class="button">Add Event</a>
            </div>
        </div>

        <table class="table is-bordered is-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Summary</th>
                <th>Location</th>
                <th>Start date</th>
                <th>End date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td><a href="{{ route('edit-event', [$event->id]) }}">{{ $event->name }}</a></td>
                    <td>{{ $event->summary }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->start_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $event->end_date->format('M j, Y g:i A') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $events->links() }}
        </div>

    </div>
@endsection