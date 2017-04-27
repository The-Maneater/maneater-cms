@extends('layouts.admin')

@section('title')
    Edit Layout
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Layout</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-layout', [$layout->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="field-group">
                <b-field label="Title:">
                    <b-input name="title" id="title" value="{{ $layout->title }}"></b-input>
                </b-field>
                <b-field label="Date Published:">
                    <flatpickr name="date_published" id="date_published" default-value="{{ $layout->date_published === null ? \Carbon\Carbon::now() : $layout->date_published }}"></flatpickr>
                </b-field>
            </div>
            <div class="field-group">
                <b-field label="Section:">
                    <select2 name="section" id="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}" {{ $layout->section->id == $section->id ? "selected" : ""  }}>{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Issue:">
                    <select2 name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}" {{ $layout->issue->id == $issue->id ? "selected" : "" }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Designer:">
                    <select2 name="staffer" id="staffer">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ $layout->staffer->id == $staffer->id ? "selected" : "" }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field>
                    <a href="{{ $layout->link }}" target="_blank">Layout Link</a>
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
                placeholder: 'Select an option'
            });
        })
    </script>
@endsection