@extends('layouts.admin')

@section('title')
    Add New Ad
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Ad</h2>
        </div>
       @include("admin.shared.errors")
        <form action="{{ route('store-ad') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <b-field label="Purchaser:">
                    <b-input name="purchaser" value="{{ old('purchaser') }}"></b-input>
                </b-field>
                <b-field label="Campaign Start:">
                    <flatpickr name="campaign_start" default-value="{{ old('campaign_start') === null ? \Carbon\Carbon::now() : old('campaign_start') }}"></flatpickr>
                </b-field>
                <b-field label="Campaign End:">
                    <flatpickr name="campaign_end" default-value="{{ old('campaign_end') === null ? \Carbon\Carbon::now() : old('campaign_end') }}"></flatpickr>
                </b-field>
                <b-field label="Size:">
                    <select2 name="size">
                        <option value="banner">Banner</option>
                        <option value="cube">Cubed</option>
                    </select2>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Provider URL:">
                    <b-input name="provider_url" value="{{ old('provider_url') }}"></b-input>
                </b-field>
                <b-field label="Duration:">
                    <b-input name="duration" value="{{ old('duration') }}"></b-input>
                </b-field>
                <b-field label="Ad File:">
                    <b-input type="file" name="adFile"></b-input>
                </b-field>
                <b-field label="Raw HTML:">
                    <b-input name="raw_content" id="raw_content" type="textarea" value="{{ old('raw_content') }}"></b-input>
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