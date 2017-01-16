@extends('layouts.admin')

@section('title')
    Edit Event
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Event</h2>
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
        <form action="{{ route('update-event', [$event->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="wideTextField form-control" value="{{ $event->name }}">
                </div>
                <div class="form-group">
                    <label for="summary">Summary:</label>
                    <input type="text" name="summary" id="summary" class="wideTextField form-control" value="{{ $event->summary }}">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location" class="wideTextField form-control" value="{{ $event->location }}">
                </div>
            </div>
            <div class="field-group">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="wideTextField form-control" value="{{ $event->description }}">
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="text" name="start_date" id="start_date" class="wideTextField form-control" value="{{ $event->start_date }}">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="text" name="end_date" id="end_date" class="wideTextField form-control" value="{{ $event->end_date }}">
                </div>
                <div class="form-group">
                    <label for="allday">All day:</label>
                    <input type="checkbox" name="allday" id="allday" class="wideTextField form-control" {{ $event->allday ? "checked":"" }}>
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