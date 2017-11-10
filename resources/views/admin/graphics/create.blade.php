@extends('layouts.admin')

@section('title')
    Add New Graphic
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Graphic</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('store-graphic') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                {{--<b-field label="Title">--}}
                    {{--<b-input name="title" id="title" value="{{ old('title') }}"></b-input>--}}
                {{--</b-field>--}}
                <b-field label="Publish Date:">
                    <flatpickr name="publish_date" default-value="{{ old('publish_date') === null ? \Carbon\Carbon::now() : old('publish_date') }}"></flatpickr>
                </b-field>
                <b-field label="Issue:">
                    <select2 name="issue" id="issue">
                        @foreach(\App\Issue::all() as $issue)
                            <option value="{{ $issue->id }}">{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Section:">
                    <select2 name="section" id="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Byline">
                    <select2 name="byline" id="byline">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ old('static_byline') }}"></b-input>
                </b-field>
                <b-field label="Graphic:">
                    <b-input type="file" name="graphic" id="graphic"></b-input>
                </b-field>
                {{--<b-field label="Description:">--}}
                    {{--<b-input type="textarea" name="description" id="description" value="{{ old('description') }}"></b-input>--}}
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
        })

    </script>
@endsection