@extends('layouts.admin')

@section('title')
    Add New Section
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Section</h2>
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
        <form action="{{ route('create-section') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="field">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="wideTextField form-control" value="{{ old('name') }}">
                </div>
            </div>
            <label for="publication">Publication:</label>
            <div class="field">
                <select name="publication" id="publication">
                    @foreach (\App\Publication::all() as $publication)
                        <option value="{{ $publication->id }}">{{ $publication->name }}</option>
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