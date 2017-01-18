@extends('layouts.admin')

@section('title')
    Volumes
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Volumes</h2>
            <a href="{{ route('create-volume') }}" class="btn btn-success">Add Layout</a>
        </div>

        <table class="table table-striped table-bordered">
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