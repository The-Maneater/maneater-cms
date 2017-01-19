@extends('layouts.admin')

@section('title')
    Classifieds
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Classifieds</h2>
            <a href="{{ route('create-classified') }}" class="btn btn-success">Add Classified</a>
        </div>

        <table class="table table-striped table-bordered">
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