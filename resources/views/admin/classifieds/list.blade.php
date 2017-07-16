@extends('layouts.admin')

@section('title')
    Classifieds
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Classifieds</h2>
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
                <a href="{{ route('create-classified') }}" class="button">Add Classified</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Content</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classifieds as $classified)
                <tr>
                    <td><a href="{{ route('edit-classified', [$classified->id]) }}">{{ $classified->section }}</a></td>
                    <td>{{ $classified->start_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $classified->end_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $classified->content }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $classifieds->links() }}
        </div>

    </div>
@endsection