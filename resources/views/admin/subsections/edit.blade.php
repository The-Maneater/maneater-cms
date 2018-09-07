@extends('layouts.admin')

@section('title')
    Edit Sub Section
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Section</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-subsection', [$subSection->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="Name:">
                    <b-input name="name" id="name" value="{{ $subSection->name }}"></b-input>
                </b-field>
                <b-field label="Section:">
                    <select2 name="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}" {{ $subSection->section->id == $section->id ? "selected" : "" }}>{{ $section->name }}</option>
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