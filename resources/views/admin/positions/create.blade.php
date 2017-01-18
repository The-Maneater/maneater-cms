@extends('layouts.admin')

@section('title')
    Add New Position
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Position</h2>
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
        <form action="{{ route('create-position') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="wideTextField form-control" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="is_editorial_board">Is Editorial Board:</label>
                    <input type="checkbox" name="is_editorial_board" id="is_editorial_board" class="wideTextField form-control" value="{{ old('is_editorial_board') }}">
                </div>
                <div class="form-group">
                    <label for="is_exec">Is Exec:</label>
                    <input type="checkbox" name="is_exec" id="is_exec" class="wideTextField form-control" value="{{ old('is_exec') }}">
                </div>
                <div class="form-group">
                    <label for="priority">Priority:</label>
                    <input type="number" name="priority" id="priority" class="wideTextField form-control" value="{{ old('priority') }}">
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