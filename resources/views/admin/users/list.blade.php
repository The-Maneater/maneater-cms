@extends('layouts.admin')

@section('title')
    Users
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Users</h2>
            <a href="{{ route('create-user') }}" class="btn btn-success">Add User</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="{{ route('edit-user', [$user->id]) }}">{{ $user->username }}</a></td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $users->links() }}
        </div>

    </div>
@endsection