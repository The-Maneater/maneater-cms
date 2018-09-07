@extends('layouts.admin')

@section('title')
    Add New Section
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Section</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('store-subsection') }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Name:">
                    <b-input name="name" id="name" value="{{ old('name') }}"></b-input>
                </b-field>
                <b-field label="Section:">
                    <select2 name="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
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
        });
    </script>
@endsection