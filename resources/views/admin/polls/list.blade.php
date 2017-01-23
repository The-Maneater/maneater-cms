@extends('layouts.admin')

@section('title')
    Polls
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Polls</h2>
            <a href="{{ route('create-poll') }}" class="btn btn-success">Add Poll</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Question</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Publication</th>
            </tr>
            </thead>
            <tbody>
            @foreach($polls as $poll)
                <tr>
                    <td><a href="{{ route('edit-poll', [$poll->id]) }}">{{ $poll->question }}</a></td>
                    <td>{{ $poll->start_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $poll->end_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $poll->publication->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $polls->links() }}
        </div>

    </div>
@endsection