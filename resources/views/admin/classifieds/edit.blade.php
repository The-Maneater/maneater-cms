@extends('layouts.admin')

@section('title')
    Edit Classified
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Classified</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-classified', [$classified->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <b-field label="Title">
                <b-input name="section" value="{{ $classified->section }}"></b-input>
            </b-field>
            <b-field label="Start Date:">
                <flatpickr name="start_date" default-value="{{ old('start_date') === null ? $classified->start_date : old('start_date') }}"></flatpickr>
            </b-field>
            <b-field label="End Date:">
                <flatpickr name="end_date" default-value="{{ old('end_date') === null ? $classified->end_date : old('end_date')}}"></flatpickr>
            </b-field>
            <b-field label="Content:">
                <b-input type="textarea" name="content" value="{{ $classified->content }}"></b-input>
            </b-field>
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
        });
    </script>
@endsection