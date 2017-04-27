@extends('layouts.admin')

@section('title')
    Issues
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Issues</h2>
            <a href="{{ route('create-issue') }}" class="button">Add Issue</a>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Issue</th>
                <th>Volume</th>
            </tr>
            </thead>
            <tbody>
            @foreach($issues as $issue)
                <tr>
                    <td><a href="{{ route('edit-issue', [$issue->id]) }}">Issue {{ $issue->issue_number }}</a></td>
                    <td>Volume {{ $issue->volume->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $issues->links() }}
        </div>

    </div>
@endsection