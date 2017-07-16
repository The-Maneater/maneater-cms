@extends('layouts.admin')

@section('title')
    Add New Layout
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Layout</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('create-layout') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Title:">
                    <b-input name="title" id="title" value="{{ old('title') }}"></b-input>
                </b-field>
                <b-field label="Date Published:">
                    <flatpickr name="date_published" id="date_published" defaultValue="{{ old('date_published') === null ? \Carbon\Carbon::now() : old('date_published')}}"></flatpickr>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Section:">
                    <select2 name="section" id="section">
                        @foreach (\App\Section::all() as $section)
                            <option></option>
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Issue:">
                    <select2 name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option></option>
                            <option value="{{ $issue->id }}">{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Designer:">
                    <select2 name="staffer" id="staffer">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option></option>
                            <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Layout:">
                    <b-input type="file" name="layout" id="layout"></b-input>
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
        })
    </script>
@endsection