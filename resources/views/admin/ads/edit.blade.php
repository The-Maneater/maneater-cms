@extends('layouts.admin')

@section('title')
    Edit Ad
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Ad</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-ad', [$ad->id]) }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="Purchaser:">
                    <b-input name="purchaser" value="{{ $ad->purchaser }}"></b-input>
                </b-field>
                <b-field label="Campaign Start:">
                    <flatpickr name="campaign_start" default-value="{{ old('campaign_start') === null ? $ad->campaign_start : old('campaign_start')}}"></flatpickr>
                </b-field>
                <b-field label="Campaign End:">
                    <flatpickr name="campaign_end" default-value="{{ old('campaign_end') === null ? $ad->campaign_end : old('campaign_end')}}"></flatpickr>
                </b-field>
                <b-field label="Size:">
                    <select2 name="size">
                        <option value="banner" {{ $ad->size == "banner" ? "selected" : "" }}>Banner</option>
                        <option value="cube" {{ $ad->size == "cube" ? "selected" : "" }}>Cubed</option>
                    </select2>
                </b-field>
            </div>
            <div class="box">
                <b-field label="Provider URL:">
                    <b-input name="provider_url" value="{{ $ad->provider_url }}"></b-input>
                </b-field>
                <b-field label="Duration:">
                    <b-input name="duration" value="{{ $ad->duration }}"></b-input>
                </b-field>
                <b-field label="Ad">
                    <img src="{{ Image::url($ad->url(),300,300,array('crop')) }}" alt="">
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