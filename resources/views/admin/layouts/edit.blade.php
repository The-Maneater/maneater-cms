@extends('layouts.admin')

@section('title')
    Edit Layout
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Layout</h2>
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
        <form action="{{ route('update-layout', [$layout->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="field">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="wideTextField form-control" value="{{ $layout->title }}">
                </div>
                <div class="field">
                    <label for="date_published">Date Published:</label>
                    <input type="text" name="date_published" id="date_published" class="wideTextField form-control flatpickr" data-default-date="{{ old('date_published') === null ? $layout->date_published : old('date_published')}}">
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <label for="section" >Section:</label>
                    <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                    <div class="field">
                        <select name="section" id="section">
                            @foreach (\App\Section::all() as $section)
                                <option value="{{ $section->id }}" {{ $layout->section->id == $section->id ? "selected" : ""  }}>{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="issue">Issue</label>
                    <select name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}" {{ $layout->issue->id == $issue->id ? "selected" : "" }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <label for="staffer">Designer:</label>
                    <select name="staffer" id="staffer">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ $layout->staffer->id == $staffer->id ? "selected" : "" }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <a href="{{ $layout->link }}" target="_blank">Layout Link</a>
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
                placeholder: 'Select an option'
            });
        })
    </script>
@endsection