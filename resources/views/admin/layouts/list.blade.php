@extends('layouts.admin')

@section('title')
    Layouts
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Layouts</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a layout" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-layout') }}" class="button">Add Layout</a>
            </div>
        </div>

        <table class="table is-bordered is-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Date Published</th>
                <th>Issue</th>
                <th>Designer</th>
                <th>Section</th>
            </tr>
            </thead>
            <tbody>
            @foreach($layouts as $layout)
                <tr>
                    <td><a href="{{ route('edit-layout', [$layout->id]) }}">{{ $layout->title }}</a></td>
                    <td>{{ $layout->date_published->format('M j, Y g:i A') }}</td>
                    <td>{{ $layout->issue->issueName }}</td>
                    <td>{{ $layout->staffer->fullName }}</td>
                    <td>{{ $layout->section->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $layouts->links() }}
        </div>

    </div>
@endsection