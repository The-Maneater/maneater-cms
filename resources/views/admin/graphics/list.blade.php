@extends('layouts.admin')

@section('title')
    Graphics
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Graphics</h2>
            <a href="{{ route('create-graphic') }}" class="btn btn-success">Add Graphic</a>
        </div>

        <table class="table table-striped table-bordered">
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