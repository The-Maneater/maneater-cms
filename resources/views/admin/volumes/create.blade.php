@extends('layouts.admin')

@section('title')
    Add New Volume
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Volume</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-volume') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Volume Number:">
                    <b-input type="number" name="name" id="name" value="{{ old('name') }}"></b-input>
                </b-field>
                <b-field label="First Issue Date:">
                    <flatpickr name="first_issue_date" default-value="{{ old('first_issue_date') == null ? \Carbon\Carbon::now() : old('first_issue_date') }}"></flatpickr>
                </b-field>
                <b-field label="Period:">
                    <b-input name="period" id="period" value="{{ old('period') }}"></b-input>
                </b-field>
                <b-field label="Publication:">
                    <b-input name="publication" id="publication" value="{{ old('publication') }}"></b-input>
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