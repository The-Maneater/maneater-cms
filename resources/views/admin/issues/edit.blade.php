@extends('layouts.admin')

@section('title')
    Edit Issue
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Issue</h2>
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
        <form action="{{ route('update-issue', [$issue->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="field">
                    <label for="name">Issue Number:</label>
                    <input type="number" name="name" id="name" class="wideTextField form-control" value="{{ $issue->issue_number }}">
                </div>
            </div>
            <label for="volume">Volume:</label>
            <div class="field">
                <select name="volume" id="volume">
                    @foreach (\App\Volume::all() as $volume)
                        <option value="{{ $volume->id }}" {{ ($issue->volume->id === $volume->id ? "selected":"") }}>Volume {{ $volume->name }}</option>
                    @endforeach
                </select>
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
    </script>
@endsection