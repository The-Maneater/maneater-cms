@extends('layouts.admin')

@section('title')
    Staffers
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Staffers</h2>
            <a href="{{ route('create-staffer') }}" class="button">Add Staffer</a>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Staffer</th>
                <th>Email</th>
                <th>Writer position</th>
                <th>Photographer position</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            @foreach($staffers as $staffer)
                <tr>
                    <td><a href="{{ route('edit-staffer', [$staffer->id]) }}">{{ $staffer->fullname }}</a></td>
                    <td></td>
                    <td>{{ $staffer->writerPosition }}</td>
                    <td>{{ $staffer->photographerPosition }}</td>
                    <td>{{ $staffer->is_active ? "Yes" : "No" }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $staffers->links() }}
        </div>

    </div>
@endsection