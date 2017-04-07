@extends('layouts.admin')

@section('title')
    Add New User
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New User</h2>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('create-user') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="field">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="wideTextField form-control" value="{{ old('username') }}">
                </div>
                <div class="field">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="wideTextField form-control" value="{{ old('email') }}">
                </div>
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="wideTextField form-control">
                </div>
                <div class="field">
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="wideTextField form-control">
                </div>
            </div>
        </form>
    </div>
    <div class="sticky-footer">
        <button class="btn btn-info" onclick="submitForm()">Save</button>
    </div>
@endsection

@section('scripts')
    <script>
        function submitForm(){
            $("#storyForm").submit();
        }
    </script>
@endsection