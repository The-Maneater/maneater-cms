@extends('layouts.admin')

@section('title')
    Positions
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Positions</h2>
            <a href="{{ route('create-position') }}" class="btn btn-success">Add Position</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Editorial Board</th>
                <th>Exec</th>
                <th>Priority</th>
            </tr>
            </thead>
            <tbody>
            @foreach($positions as $position)
                <tr>
                    <td><a href="{{ route('edit-position', [$position->id]) }}">{{ $position->title }}</a></td>
                    <td>{{ $position->is_editorial_board ? "Yes" : "No" }}</td>
                    <td>{{ $position->is_exec ? "Yes" : "No" }}</td>
                    <td>{{ $position->priority }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $positions->links() }}
        </div>

    </div>
@endsection