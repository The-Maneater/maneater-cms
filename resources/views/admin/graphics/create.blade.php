@extends('layouts.admin')

@section('title')
    Add New Graphic
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Graphic</h2>
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
        <form action="{{ route('store-graphic') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="wideTextField form-control" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="publish_date">Publish Date:</label>
                    <input type="text" name="publish_date" id="publish_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('publish_date') === null ? \Carbon\Carbon::now() : old('publish_date')}}">
                </div>
                <div class="form-group">
                    <label for="issue">Issue</label>
                    <select name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}">{{ $issue->issueName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="section" >Section:</label>
                    <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                    <div class="form-group">
                        <select name="section" id="section">
                            @foreach (\App\Section::all() as $section)
                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="form-group">
                    <label for="byline">Byline:</label>
                    {{--<input type="text" name="byline" id="byline" class="wideTextField form-control" value="{{ old('byline') }}">--}}
                    <select name="byline" id="byline">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="static_byline">Static Byline:</label>
                    <input type="text" name="static_byline" id="static_byline" class="wideTextField form-control" value="{{ old('static_byline') }}">
                </div>
                <div class="form-group">
                    <label for="graphic">Graphic</label>
                    <input type="file" name="graphic" id="graphic">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="wideTextField form-control">{{ old('description') }}</textarea>
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
        })

    </script>
@endsection