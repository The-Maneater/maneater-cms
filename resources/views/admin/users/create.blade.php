@extends('layouts.admin')

@section('title')
    Add New User
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New User</h2>
        </div>
       @include("admin.shared.errors")
        <form action="{{ route('create-user') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <b-field label="Username:">
                    <b-input name="username" value="{{ old('username') }}"></b-input>
                </b-field>
                <b-field label="Email:">
                    <b-input type="email" name="email" value="{{ old('email') }}"></b-input>
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