@extends('layouts.admin')

@section('title')
    Edit User
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit User</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-user', [$user->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="Username:">
                    <b-input name="username" value="{{ $user->username }}"></b-input>
                </b-field>
                <b-field label="Email:">
                    <b-input type="email" name="email" value="{{ $user->email }}"></b-input>
                </b-field>
                <b-field label="Password:">
                    <b-input type="password" name="password"></b-input>
                </b-field>
                <b-field label="Password Confirmation">
                    <b-input type="password" name="password_confirmation"></b-input>
                </b-field>
            </div>
        </form>
    </div>
@endsection

@include("admin.shared.form-footer")

@section('scripts')
    <script>
        function submitForm(){
            $("#storyForm").submit();
        }
    </script>
@endsection