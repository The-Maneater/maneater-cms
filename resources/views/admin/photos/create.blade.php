@extends('layouts.admin')

@section('title')
    Add New Photo
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Photo</h2>
        </div>
        @include("admin.shared.form-footer")
        <form action="{{ route('store-photo') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <b-field label="Publish Date:">
                    <flatpickr name="publish_date" default-date="{{ old('publish_date') === null ? \Carbon\Carbon::now() : old('publish_date')}}"></flatpickr>
                </b-field>
                <b-field label="Issue:">
                    <select2 name="issue_id" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}">{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Section:">
                    <select2 name="section_id" id="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
            </div>
            <div class="field-group">
                <b-field label="Title:">
                    <b-input name="title" id="title" value="{{ old('title') }}"></b-input>
                </b-field>
                <b-field label="Byline:">
                    <select2 name="byline" id="byline">
                        <option></option>
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ old('static_byline') }}"></b-input>
                </b-field>
                <b-field label="Image:">
                    <b-input type="file" name="photo" id="photo"></b-input>
                </b-field>
                <b-field label="Cutline:">
                    <b-input type="textarea" name="description" id="description" value="{{ old('description') }}"></b-input>
                </b-field>
                <b-field label="Tags:">
                    <select2 name="tags[]" id="tags" multiple="multiple">
                        @foreach (\Spatie\Tags\Tag::all() as $tag)
                            <option value="{{ $tag->name }}">{{ $tag->name }}</option>
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
        })

    </script>
@endsection