@extends('layouts.admin')

@section('title')
    Edit Classified
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Classified</h2>
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
        <form action="{{ route('update-classified', [$classified->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="form-group">
                    <label for="section">Title:</label>
                    <input type="text" name="section" id="section" class="wideTextField form-control" value="{{ $classified->section }}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="text" name="start_date" id="start_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('start_date') === null ? $classified->start_date : old('start_date')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="text" name="end_date" id="end_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('end_date') === null ? $classified->end_date : old('end_date')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" cols="30" rows="10">{{ $classified->content }}</textarea>
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
        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
        });
    </script>
@endsection