@extends('layouts.admin')

@section('title')
    Edit Graphic
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Graphic</h2>
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
        <form action="{{ route('update-graphic', [$graphic->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="field">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="wideTextField form-control" value="{{ $graphic->title }}">
                </div>
                <div class="field">
                    <label for="publish_date">Publish Date:</label>
                    <input type="text" name="publish_date" id="publish_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('publish_date') === null ? $graphic->publish_date : old('publish_date')}}">
                </div>
                <div class="field">
                    <label for="issue">Issue</label>
                    <select name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}" {{ $graphic->issue_id == $issue->id ? "selected" : "" }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <label for="section" >Section:</label>
                    <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                    <div class="field">
                        <select name="section" id="section">
                            @foreach (\App\Section::all() as $section)
                                <option value="{{ $section->id }}" {{ $graphic->section_id == $section->id ? "selected" : "" }}>{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <label for="byline">Byline:</label>
                    {{--<input type="text" name="byline" id="byline" class="wideTextField form-control" value="{{ old('byline') }}">--}}
                    <select name="byline" id="byline">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ $graphic->staffer_id == $staffer->id ? "selected" : "" }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <label for="static_byline">Static Byline:</label>
                    <input type="text" name="static_byline" id="static_byline" class="wideTextField form-control" value="{{ $graphic->static_byline }}">
                </div>
                <div class="field">
                    <a href="{{ $graphic->link }}" target="_blank">Graphic Link</a>
                </div>
                <div class="field">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="wideTextField form-control">{{ $graphic->description }}</textarea>
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
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
            setInputDate("input[name=publish_date]", "{{ $graphic->publish_date }}");
        })

    </script>
@endsection