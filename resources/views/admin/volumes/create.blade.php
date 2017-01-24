@extends('layouts.admin')

@section('title')
    Add New Volume
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Volume</h2>
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
        <form action="{{ route('create-volume') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="form-group">
                    <label for="name">Volume Number:</label>
                    <input type="number" name="name" id="name" class="wideTextField form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="first_issue_date">First Issue Date:</label>
                    <input type="text" name="first_issue_date" id="first_issue_date" class="wideTextField form-control flatpickr">
                </div>
                <div class="form-group">
                    <label for="period">Period:</label>
                    <input type="text" name="period" id="period" class="wideTextField form-control" value="{{ old('period') }}">
                </div>
                <div class="form-group">
                    <label for="publication">Publication:</label>
                    <input type="text" name="publication" id="publication" class="wideTextField form-control" value="{{ old('publication') }}">
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