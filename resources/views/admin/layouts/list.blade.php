@extends('layouts.admin')

@section('title')
    Layouts
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Layouts</h2>
            <a href="{{ route('create-layout') }}" class="btn btn-success">Add Layout</a>
        </div>

        <table class="table table-striped table-bordered">
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