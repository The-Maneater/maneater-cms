@extends('layouts.admin')

@section('title')
    Photos
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Photos</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a photo" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-photo') }}" class="button">Add Photo</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Date Published</th>
                <th>Issue</th>
                <th>Section</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td><a href="{{ route('edit-photo', [$photo->id]) }}">
                            @if($photo->title == null || $photo->title == "")
                                {{ $photo->id }}
                            @else
                                {{ $photo->title }}
                            @endif
                        </a></td>
                    <td>{{ $photo->publish_date->format('M j, Y g:i A') }}</td>
                    <td>{{ $photo->issue->issueName }}</td>
                    <td>{{ $photo->section->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $photos->links() }}
        </div>

    </div>
@endsection