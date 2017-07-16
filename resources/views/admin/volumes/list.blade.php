@extends('layouts.admin')

@section('title')
    Volumes
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Volumes</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a classified" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-volume') }}" class="button">Add Volume</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>First Issue Date</th>
                <th>Period</th>
                <th>Publication</th>
            </tr>
            </thead>
            <tbody>
            @foreach($volumes as $volume)
                <tr>
                    <td><a href="{{ route('edit-volume', [$volume->id]) }}">Volume {{ $volume->name }}</a></td>
                    <td>{{ $volume->first_issue_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $volume->period }}</td>
                    <td>{{ $volume->publication }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $volumes->links() }}
        </div>

    </div>
@endsection