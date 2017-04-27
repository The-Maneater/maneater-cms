@extends('layouts.admin')

@section('title')
    Edit Poll
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Poll</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-poll', [$poll->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <b-field label="Question:">
                    <b-input name="question" id="question" value="{{ $poll->question }}"></b-input>
                </b-field>
                <b-field label="Start Date:">
                    <flatpickr name="start_date" id="start_date" default-value="{{ old('start_date') === null ? $poll->start_date : old('start_date') }}"></flatpickr>
                </b-field>
                <b-field label="End Date:">
                    <flatpickr name="end_date" id="end_date" default-value="{{ old('end_date') === null ? $poll->end_date : old('end_date') }}"></flatpickr>
                </b-field>
                <b-field label="Publication">
                    <select2 name="publication" id="publication">
                        <option></option>
                        @foreach (\App\Publication::all() as $publication)
                            <option value="{{ $publication->id }}" {{ $poll->publication->id == $publication->id ? "selected" : "" }}>{{ $publication->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Answers:" class="answer-container">
                    @foreach($poll->questions as $answer)
                        <p class="control {{ $loop->first ? "firstAnswer" : "" }}">
                            <input type="text" name="answers[{{ $loop->index }}][answer]" class="input" value="{{ $answer->answer }}">
                        </p>
                        <input type="hidden" name="answers[{{ $loop->index }}][id]" value="{{ $answer->id }}">
                    @endforeach
                </b-field>
                <a onclick="addTableRow()" class="button is-info">Add Answer</a>
            </div>
        </form>
    </div>
@endsection

@include("admin.shared.form-footer")

@section('scripts')
    <script>
        let index = {{ count($poll->questions) }};
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
            $(el).children().val("").attr('name', 'answers[' + index + "][answer]");
            $(el).removeClass('firstAnswer');
            $(el).children().innerHTML = "";
            index++;
            console.log(el);
            $(".answer-container").append(el);
        }
    </script>
@endsection