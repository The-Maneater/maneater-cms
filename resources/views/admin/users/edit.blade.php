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
                <b-field label="Roles:">
                    <select2 name="roles[]" id="roles" multiple="true">
                        @foreach (\App\Role::all() as $role)
                            <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? "selected" : "" }}>{{ $role->display_name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                {{--<b-field label="Permissions:">--}}
                    {{--<select2 name="roles" id="roles" multiple="true">--}}
                        {{--@foreach (\App\Permission::all() as $permission)--}}
                            {{--<option value="{{ $permission->id }}" {{ $user->hasPermission($permission->name) ? "selected" : "" }}>{{ $permission->display_name }}</option>--}}
                        {{--@endforeach--}}
                    {{--</select2>--}}
                {{--</b-field>--}}
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

        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
        })
    </script>
@endsection