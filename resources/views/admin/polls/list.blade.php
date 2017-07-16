@extends('layouts.admin')

@section('title')
    Polls
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Polls</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a poll" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-poll') }}" class="button">Add Poll</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
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