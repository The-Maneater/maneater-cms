@extends('layouts.admin')

@section('title')
    Staffers
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Staffers</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a staffer" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-staffer') }}" class="button">Add Staffer</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Staffer</th>
                <th>Email</th>
                <th>Writer position</th>
                <th>Photographer position</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            @foreach($staffers as $staffer)
                <tr>
                    <td><a href="{{ route('edit-staffer', [$staffer->id]) }}">{{ $staffer->fullname }}</a></td>
                    <td></td>
                    <td>{{ $staffer->writer_pos }}</td>
                    <td>{{ $staffer->photo_pos }}</td>
                    <td>{{ $staffer->is_active ? "Yes" : "No" }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $staffers->links() }}
        </div>

    </div>
@endsection