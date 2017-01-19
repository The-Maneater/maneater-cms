@extends('layouts.admin')

@section('title')
    Sections
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Sections</h2>
            <a href="{{ route('create-section') }}" class="btn btn-success">Add Section</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Publication</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sections as $section)
                <tr>
                    <td><a href="{{ route('edit-section', [$section->id]) }}">{{ $section->name }}</a></td>
                    <td>{{ $section->publication->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $sections->links() }}
        </div>

    </div>
@endsection