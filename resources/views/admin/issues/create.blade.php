@extends('layouts.admin')

@section('title')
    Add New Issue
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Issue</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-issue') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <b-field label="Issue Number:">
                    <b-input type="number" name="name" id="name" value="{{ old('name') }}"></b-input>
                </b-field>
                <b-field label="Volume:">
                    <select2 name="volume">
                        @foreach (\App\Volume::all() as $volume)
                            <option value="{{ $volume->id }}">Volume {{ $volume->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
            </div>

        </form>
    </div>
@endsection

@include("admin.shared.form-footer")

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