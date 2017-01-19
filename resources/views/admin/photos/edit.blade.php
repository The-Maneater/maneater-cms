@extends('layouts.admin')

@section('title')
    Edit Photo
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Photo</h2>
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
        <form action="{{ route('update-photo', [$photo->id]) }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="form-group">
                    <label for="publish_date">Publish Date:</label>
                    <input type="text" name="publish_date" id="publish_date" class="wideTextField form-control" value="{{ $photo->publish_date }}">
                </div>
                <div class="form-group">
                    <label for="issue">Issue</label>
                    <select name="issue_id" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}" {{ ($photo->issue->id === $issue->id ? "selected":"") }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="section" >Section:</label>
                    <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                    <div class="form-group">
                        <select name="section_id" id="section">
                            @foreach (\App\Section::all() as $section)
                                <option value="{{ $section->id }}" {{ ($photo->section->id === $issue->id ? "selected":"") }}>{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="wideTextField form-control" value="{{ $photo->title }}">
                </div>
                <div class="form-group">
                    <label for="byline">Byline:</label>
                    {{--<input type="text" name="byline" id="byline" class="wideTextField form-control" value="{{ old('byline') }}">--}}
                    <select name="byline[]" id="byline" multiple="multiple">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ ($photo->photographers->contains($staffer->id) ? "selected":"") }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="static_byline">Static Byline:</label>
                    <input type="text" name="static_byline" id="static_byline" class="wideTextField form-control" value="{{ $photo->static_byline }}">
                </div>
                <div class="form-group">
                    <label for="image">Photo:</label>
                    <img src="{{ Image::url($photo->location,300,300,array('crop')) }}" id="image" alt="">
                </div>
                <div class="form-group">
                    <label for="description">Cutline:</label>
                    <textarea name="description" id="description" class="wideTextField form-control">{{ $photo->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tags">Tags:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="form-group">
                        <select name="tags[]" id="tags" multiple>
                            @foreach (\Spatie\Tags\Tag::all() as $tag)
                                <option value="{{ $tag->name }}" {{ $photo->tagExists($tag->name) }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
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
            $('select').select2();
        })

    </script>
@endsection