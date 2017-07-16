@extends('layouts.admin')

@section('title')
    Sections
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Sections</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find a section" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-section') }}" class="button">Add Section</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
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