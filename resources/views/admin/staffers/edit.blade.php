@extends('layouts.admin')

@section('title')
    Edit Staffer
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Staffer</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-staffer', [$staffer->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <b-field label="First Name:">
                    <b-input name="first_name" value="{{ $staffer->first_name }}"></b-input>
                </b-field>
                <b-field label="Last Name:">
                    <b-input name="last_name" value="{{ $staffer->last_name }}"></b-input>
                </b-field>
                <b-field label="Is Active:">
                    <b-checkbox name="active" {{ $staffer->is_active ? "checked" : "" }}></b-checkbox>
                </b-field>
                <b-field label="Associated user account:">
                    <select2 name="user">
                        <option></option>
                        @foreach(\App\User::all() as $user)
                            <option value="{{ $user->id }}" {{ $staffer->user !== null && $staffer->user->id == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                        @endforeach
                    </select2>
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

        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
        })
    </script>
@endsection