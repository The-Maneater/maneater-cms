@extends('layouts.admin')

@section('title')
    Edit Ad
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Ad</h2>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            {{--2016-08-22 12:00:00--}}
        @endif
        <form action="{{ route('update-ad', [$ad->id]) }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="field">
                    <label for="purchaser">Purchaser:</label>
                    <input type="text" name="purchaser" id="purchaser" class="wideTextField form-control" value="{{ $ad->purchaser }}">
                </div>
                <div class="field">
                    <label for="campaign_start">Campaign Start:</label>
                    <input type="text" name="campaign_start" id="campaign_start" class="wideTextField form-control flatpickr" data-default-date="{{ old('campaign_start') === null ? $ad->campaign_start : old('campaign_start')}}">
                </div>
                <div class="field">
                    <label for="campaign_end">Campaign End:</label>
                    <input type="text" name="campaign_end" id="campaign_end" class="wideTextField form-control flatpickr" data-default-date="{{ old('campaign_end') === null ? $ad->campaign_end : old('campaign_end')}}">
                </div>
                <div class="field">
                    <label for="size">Size</label>
                    <select name="size" id="size">
                        <option value="banner" {{ $ad->size == "banner" ? "selected" : "" }}>Banner</option>
                        <option value="sidebar" {{ $ad->size == "sidebar" ? "selected" : "" }}>Sidebar</option>
                    </select>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <label for="provider_url">Provider URL:</label>
                    <input type="text" name="provider_url" id="provider_url" class="wideTextField form-control" value="{{ $ad->provider_url }}">
                </div>
                <div class="field">
                    <label for="duration">Duration:</label>
                    <input type="text" name="duration" id="duration" class="wideTextField form-control" value="{{ $ad->duration }}">
                </div>
                <div class="field">
                    <label for="adFile">Ad</label>
                    <img src="{{ Image::url($ad->image_url,300,300,array('crop')) }}" alt="">
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