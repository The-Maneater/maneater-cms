@extends('layouts.admin')

@section('title')
    Add New Event
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Event</h2>
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
        <form action="{{ route('create-event') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="wideTextField form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="summary">Summary:</label>
                    <input type="text" name="summary" id="summary" class="wideTextField form-control" value="{{ old('summary') }}">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location" class="wideTextField form-control" value="{{ old('location') }}">
                </div>
            </div>
            <div class="field-group">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="wideTextField form-control" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="text" name="start_date" id="start_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('start_date') === null ? \Carbon\Carbon::now() : old('start_date')}}">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="text" name="end_date" id="end_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('end_date') === null ? \Carbon\Carbon::now() : old('end_date')}}">
                </div>
                <div class="form-group">
                    <label for="allday">All day:</label>
                    <input type="checkbox" name="allday" id="allday" class="wideTextField form-control">
                </div>
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
    </script>
@endsection