@extends('layouts.admin')

@section('title')
    Flatpages
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Flatpages</h2>
            <a href="{{ route('create-flatpage') }}" class="button">Add Flatpage</a>
        </div>

        <table class="table is-bordered is-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Path</th>
            </tr>
            </thead>
            <tbody>
            @foreach($flatpages as $flatpage)
                <tr>
                    <td><a href="{{ route('edit-flatpage', [$flatpage->id]) }}">{{ $flatpage->title }}</a></td>
                    <td>{{ $flatpage->path }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $flatpages->links() }}
        </div>

    </div>


@endsection

