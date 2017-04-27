@extends('layouts.admin')

@section('title')
    Add New Volume
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Volume</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-volume', [$volume->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <b-field label="Volume Number:">
                    <b-input type="number" name="name" id="name" value="{{ $volume->name }}"></b-input>
                </b-field>
                <b-field label="First Issue Date:">
                    <flatpickr name="first_issue_date" default-value="{{ old('first_issue_date') === null ? $volume->first_issue_date : old('first_issue_date') }}"></flatpickr>
                </b-field>
                <b-field label="Period:">
                    <b-input name="period" value="{{ $volume->period }}"></b-input>
                </b-field>
                <b-field label="Publication:">
                    <b-input name="publication" value="{{ $volume->publication }}"></b-input>
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