@extends('layouts.admin')

@section('title')
    Edit Photo
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Photo</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-photo', [$photo->id]) }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="Publish Date:">
                    <flatpickr name="publish_date" default-value="{{ old('publish_date') === null ? $photo->publish_date : old('publish_date') }}"></flatpickr>
                </b-field>
                <b-field label="Issue:">
                    <select2 name="issue_id" id="issue">
                        @foreach(\App\Issue::latest('id')->get() as $issue)
                            <option value="{{ $issue->id }}" {{ ($photo->issue->id === $issue->id ? "selected":"") }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Section:">
                    <select2 name="section_id" id="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}" {{ ($photo->section->id === $section->id ? "selected":"") }}>{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Title:">
                    <b-input name="title" id="title" value="{{ $photo->title }}"></b-input>
                </b-field>
                <b-field label="Byline:">
                    <select2 name="byline" id="byline">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ ($photo->photographer->id == $staffer->id ? "selected":"") }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ $photo->static_byline }}"></b-input>
                </b-field>
                <b-field label="Photo:">
                    <img src="{{ Image::url($photo->path(), 300, 300, array('crop')) }}" alt="" id="image">
                </b-field>
                <b-field label="Cutline:">
                    <b-input name="description" id="description" value="{{ $photo->description }}"></b-input>
                </b-field>
                <b-field label="Tags:">
                    <select2 name="tags[]" id="tags" multiple="multiple">
                        @foreach (\Spatie\Tags\Tag::all() as $tag)
                            <option value="{{ $tag->name }}" {{ $photo->tagExists($tag->name) }}>{{ $tag->name }}</option>
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
            $('select').select2();
        })

    </script>
@endsection