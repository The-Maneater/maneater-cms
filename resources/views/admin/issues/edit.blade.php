@extends('layouts.admin')

@section('title')
    Edit Issue
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Issue</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-issue', [$issue->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="Issue Number:">
                    <b-input type="number" name="name" id="name" value="{{ $issue->issue_number }}"></b-input>
                </b-field>
                <b-field label="Volume:">
                    <select2 name="volume" id="volume">
                        @foreach (\App\Volume::all() as $volume)
                            <option value="{{ $volume->id }}" {{ ($issue->volume->id === $volume->id ? "selected":"") }}>Volume {{ $volume->name }}</option>
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