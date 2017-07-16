@extends('layouts.admin')

@section('title')
    Add New Event
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Event</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-event') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Name:">
                    <b-input name="name" id="name" value="{{ old('name') }}"></b-input>
                </b-field>
                <b-field label="Summary:">
                    <b-input name="summary" id="summary" value="{{ old('summary') }}"></b-input>
                </b-field>
                <b-field label="Location">
                    <b-input name="location" id="location" value="{{ old('location') }}"></b-input>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Description:">
                    <b-input name="description" id="description" value="{{ old('description') }}"></b-input>
                </b-field>
                <b-field label="Start Date:">
                    <flatpickr name="start_date" defaultValue="{{ old('start_date') === null ? \Carbon\Carbon::now() : old('start_date')}}"></flatpickr>
                </b-field>
                <b-field label="End Date:">
                    <flatpickr name="end_date" defaultValue="{{ old('end_date') === null ? \Carbon\Carbon::now() : old('end_date')}}"></flatpickr>
                </b-field>
                <div class="field">
                    <b-checkbox name="allday" id="allday">All day</b-checkbox>
                </div>
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