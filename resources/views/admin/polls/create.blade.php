@extends('layouts.admin')

@section('title')
    Add New Poll
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Poll</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-poll') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Question:">
                    <b-input name="question" id="question" value="{{ old('question') }}"></b-input>
                </b-field>
                <b-field label="Start Date:">
                    <flatpickr name="start_date" id="start_date" default-value="{{ old('start_date') === null ? \Carbon\Carbon::now() : old('start_date') }}"></flatpickr>
                </b-field>
                <b-field label="End Date:">
                    <flatpickr name="end_date" id="end_date" default-value="{{ old('end_date') === null ? \Carbon\Carbon::now() : old('end_date') }}"></flatpickr>
                </b-field>
                <b-field label="Publication:">
                    <select2 name="publication" id="publication">
                        @foreach (\App\Publication::all() as $publication)
                            <option value="{{ $publication->id }}">{{ $publication->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field class="answer-container" label="Answers:">
                    <b-input name="answers[][answer]" class="firstAnswer"></b-input>
                </b-field>
                <a onclick="addTableRow()" class="button is-info">Add Answer</a>
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

        function addTableRow(){
            let el = $(".firstAnswer").clone();
            $(el).val("");
            $(el).removeClass('firstAnswer');
            $(".answer-container").append(el);
        }
    </script>
@endsection