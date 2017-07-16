@extends('layouts.admin')

@section('title')
    Positions
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Positions</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a position" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-position') }}" class="button">Add Position</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Editorial Board</th>
                <th>Exec</th>
                <th>Priority</th>
            </tr>
            </thead>
            <tbody>
            @foreach($positions as $position)
                <tr>
                    <td><a href="{{ route('edit-position', [$position->id]) }}">{{ $position->title }}</a></td>
                    <td>{{ $position->is_editorial_board ? "Yes" : "No" }}</td>
                    <td>{{ $position->is_exec ? "Yes" : "No" }}</td>
                    <td>{{ $position->priority }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $positions->links() }}
        </div>

    </div>
@endsection