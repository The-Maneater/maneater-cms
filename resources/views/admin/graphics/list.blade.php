@extends('layouts.admin')

@section('title')
    Graphics
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Graphics</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a graphic" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-graphic') }}" class="button">Add Graphic</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Date Published</th>
                <th>Issue</th>
                <th>Section</th>
            </tr>
            </thead>
            <tbody>
            @foreach($graphics as $graphic)
                <tr>
                    <td><a href="{{ route('edit-graphic', [$graphic->id]) }}">{{ $graphic->title }}</a></td>
                    <td>{{ $graphic->publish_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $graphic->issue->issueName }}</td>
                    <td>{{ $graphic->section->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $graphics->links() }}
        </div>

    </div>
@endsection