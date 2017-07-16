@extends('layouts.admin')

@section('title')
    Edit Event
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Event</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-event', [$event->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="Name:">
                    <b-input name="name" id="name" value="{{ $event->name }}"></b-input>
                </b-field>
                <b-field label="Summary:">
                    <b-input name="summary" id="summary" value="{{ $event->name }}"></b-input>
                </b-field>
                <b-field label="Location">
                    <b-input name="location" id="location" value="{{ $event->location }}"></b-input>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Description:">
                    <b-input name="description" id="description" value="{{ $event->description }}"></b-input>
                </b-field>
                <b-field label="Start Date:">
                    <flatpickr name="start_date" default-value="{{ $event->start_date === null ?  \Carbon\Carbon::now() : $event->start_date }}"></flatpickr>
                </b-field>
                <b-field label="End Date:">
                    <flatpickr name="end_date" default-value="{{ $event->end_date === null ? \Carbon\Carbon::now() : $event->end_date }}"></flatpickr>
                </b-field>
                <div class="field">
                    <b-checkbox name="allday" id="allday" {{ $event->allday ? "checked":"" }}>All day</b-checkbox>
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
        $(document).ready(function () {
        })
    </script>
@endsection