@extends('layouts.admin')

@section('title')
    Edit Position
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Position</h2>
        </div>
        @include('admin.shared.errors')
        <form action="{{ route('update-position', [$position->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <b-field label="Title:">
                    <b-input name="title" value="{{ $position->title }}"></b-input>
                </b-field>
                <b-field label="Is Editorial Board">
                    <b-checkbox name="is_editorial_board" {{ $position->is_editorial_board ? "checked" : "" }}></b-checkbox>
                </b-field>
                <b-field label="Is an Executive Position:">
                    <b-checkbox name="is_exec" {{ $position->is_exec ? "checked" : "" }}></b-checkbox>
                </b-field>
                <b-field label="Priority">
                    <b-input type="number" name="priority" value="{{ $position->priority }}"></b-input>
                </b-field>
            </div>
        </form>
    </div>
@endsection

@include('admin.shared.form-footer')

@section('scripts')
    <script>
        function submitForm(){
            $("#storyForm").submit();
        }
    </script>
@endsection