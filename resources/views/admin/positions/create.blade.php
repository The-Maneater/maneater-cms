@extends('layouts.admin')

@section('title')
    Add New Position
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Position</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-position') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <b-field label="Title">
                    <b-input name="title" id="title" value="{{ old('title') }}"></b-input>
                </b-field>
                <b-field label="Is Editorial Board:">
                    <b-checkbox name="is_editorial_board" {{ old('is_editorial_board') ? "checked" : "" }}></b-checkbox>
                </b-field>
                <b-field label="Is an Executive Position:">
                    <b-checkbox name="is_exec" id="is_exec" {{ old('is_exec') ? "checked" : "" }}></b-checkbox>
                </b-field>
                <b-field label="Priority">
                    <b-input type="number" name="priority" id="priority" value="{{ old('priority') }}"></b-input>
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