@extends('layouts.admin')

@section('title')
    Sub Sections
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Sub Sections</h2>
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
                <a href="{{ route('create-subsection') }}" class="button">Add Section</a>
            </div>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subsections as $subsection)
                <tr>
                    <td><a href="{{ route('edit-subsection', [$subsection->id]) }}">{{ $subsection->name }}</a></td>
                    <td>{{ $subsection->section->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $subsections->links() }}
        </div>

    </div>
@endsection