@extends('layouts.admin')

@section('title')
    Edit Graphic
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Graphic</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-graphic', [$graphic->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                {{--<b-field label="Title:">--}}
                    {{--<b-input name="title" id="title" value="{{ $graphic->title }}"></b-input>--}}
                {{--</b-field>--}}
                <b-field label="Publish Date">
                    <flatpickr name="publish_date" default-value="{{ old('publish_date') === null ? $graphic->publish_date : old('publish_date') }}"></flatpickr>
                </b-field>
                <b-field label="Issue:">
                    <select2 name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}" {{ $graphic->issue_id == $issue->id ? "selected" : "" }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Section:">
                    <select2 name="section" id="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}" {{ $graphic->section_id == $section->id ? "selected" : "" }}>{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Byline:">
                    <select2 name="byline" id="byline">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ $graphic->staffer_id == $staffer->id ? "selected" : "" }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ $graphic->static_byline }}"></b-input>
                </b-field>
                <b-field>
                    <a href="{{ $graphic->link }}" target="_blank">Graphic Link</a>
                </b-field>
                {{--<b-field label="Description">--}}
                    {{--<b-input type="textarea" name="description" id="description" value="{{ $graphic->description }}"></b-input>--}}
                {{--</b-field>--}}
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
            //setInputDate("input[name=publish_date]", "{{ $graphic->publish_date }}");
        })

    </script>
@endsection