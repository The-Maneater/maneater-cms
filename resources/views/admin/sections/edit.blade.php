@extends('layouts.admin')

@section('title')
    Edit Section
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Section</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-section', [$section->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <b-field label="Name:">
                    <b-input name="name" id="name" value="{{ $section->name }}"></b-input>
                </b-field>
                <b-field label="Publication:">
                    <select2 name="publication">
                        @foreach (\App\Publication::all() as $publication)
                            <option value="{{ $publication->id }}" {{ $section->publication->id == $publication->id ? "selected" : "" }}>{{ $publication->name }}</option>
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