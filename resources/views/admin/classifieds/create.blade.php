@extends('layouts.admin')

@section('title')
    Add New Classified
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Classified</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-classified') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Title">
                    <b-input name="section" value="{{ old('section') }}"></b-input>
                </b-field>
                <b-field label="Start Date:">
                    <flatpickr name="start_date" default-value="{{ old('start_date') === null ? \Carbon\Carbon::now() : old('start_date') }}"></flatpickr>
                </b-field>
                <b-field label="End Date:">
                    <flatpickr name="end_date" default-value="{{ old('end_date') === null ? \Carbon\Carbon::now() : old('end_date')}}"></flatpickr>
                </b-field>
                <b-field label="Content:">
                    <b-input type="textarea" name="content" value="{{ old('content') }}"></b-input>
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
        });
    </script>
@endsection