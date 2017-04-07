@extends('layouts.admin')

@section('title')
    Edit Poll
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Poll</h2>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('update-poll', [$poll->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="field">
                    <label for="question">Question:</label>
                    <input type="text" name="question" id="question" class="wideTextField form-control" value="{{ $poll->question }}">
                </div>
                <div class="field">
                    <label for="start_date">Start Date:</label>
                    <input type="text" name="start_date" id="start_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('start_date') === null ? $poll->start_date : old('start_date')}}">
                </div>
                <div class="field">
                    <label for="end_date">End Date:</label>
                    <input type="text" name="end_date" id="end_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('end_date') === null ? $poll->end_date : old('end_date')}}">
                </div>
                <div class="field">
                    <label for="publication">Publication:</label>
                    <select name="publication" id="publication">
                        <option></option>
                        @foreach (\App\Publication::all() as $publication)
                            <option value="{{ $publication->id }}" {{ $poll->publication->id == $publication->id ? "selected" : "" }}>{{ $publication->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field answer-container">
                    <label for="question">Answers:</label>
                    @foreach($poll->questions as $answer)
                        <input type="text" name="answers[{{ $loop->index }}][answer]" class="wideTextField form-control {{ $loop->first ? "firstAnswer" : "" }}" value="{{ $answer->answer }}">
                        <input type="hidden" name="answers[{{ $loop->index }}][id]" value="{{ $answer->id }}">
                    @endforeach
                </div>
                <a onclick="addTableRow()" class="btn btn-info">Add Answer</a>
            </div>
        </form>
    </div>
    <div class="sticky-footer">
        <button class="btn btn-info" onclick="submitForm()">Save</button>
    </div>
@endsection

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
            $(el).val("").attr('name', 'answers[' + index + "][answer]");
            $(el).removeClass('firstAnswer');
            index++;
            console.log(el);
            $(".answer-container").append(el);
        }
    </script>
@endsection