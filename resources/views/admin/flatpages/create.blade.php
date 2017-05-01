@extends('layouts.admin')

@section('title')
    Add New Flatpage
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Flatpage</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('store-flatpage') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <b-field label="Title:">
                    <b-input name="title" value="{{ old('title') }}"></b-input>
                </b-field>
                <b-field label="Path:">
                    <b-input name="path" value="{{ old('path') }}"></b-input>
                </b-field>
                <b-field label="Publication:">
                    <select2 name="publication">
                       @foreach(\App\Publication::all() as $publication)
                            <option value="{{ $publication->id }}">{{ $publication->name }}</option>
                       @endforeach
                    </select2>
                </b-field>
                <b-field label="Content:">
                    <b-input type="textarea" name="content" value="{{ old('content') }}"></b-input>
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
        });

    </script>
@endsection