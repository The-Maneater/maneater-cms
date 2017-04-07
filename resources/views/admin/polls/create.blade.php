@extends('layouts.admin')

@section('title')
    Add New Poll
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Poll</h2>
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
        <form action="{{ route('create-poll') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="field">
                    <label for="question">Question:</label>
                    <input type="text" name="question" id="question" class="wideTextField form-control" value="{{ old('question') }}">
                </div>
                <div class="field">
                    <label for="start_date">Start Date:</label>
                    <input type="text" name="start_date" id="start_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('start_date') === null ? \Carbon\Carbon::now() : old('start_date')}}">
                </div>
                <div class="field">
                    <label for="end_date">End Date:</label>
                    <input type="text" name="end_date" id="end_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('end_date') === null ? \Carbon\Carbon::now() : old('end_date')}}">
                </div>
                <div class="field">
                    <label for="publication">Publication:</label>
                    <select name="publication" id="publication">
                        @foreach (\App\Publication::all() as $publication)
                            <option value="{{ $publication->id }}">{{ $publication->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field answer-container">
                    <label for="question">Answers:</label>
                    <input type="text" name="answers[][answer]" class="wideTextField form-control firstAnswer" value="">
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