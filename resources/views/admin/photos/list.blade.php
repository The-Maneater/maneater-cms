@extends('layouts.admin')

@section('title')
    Photos
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Photos</h2>
            <a href="{{ route('create-photo') }}" class="btn btn-success">Add Photo</a>
        </div>

        <table class="table table-striped table-bordered">
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
                    <td><a href="{{ route('edit-photo', [$photo->id]) }}">{{ $photo->title }}</a></td>
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