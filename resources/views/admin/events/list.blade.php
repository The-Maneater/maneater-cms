@extends('layouts.admin')

@section('title')
    Events
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Events</h2>
            <a href="{{ route('create-event') }}" class="btn btn-success">Add Event</a>
        </div>

        <table class="table table-striped table-bordered">
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