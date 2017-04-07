@extends('layouts.admin')

@section('title')
    Add New Ad
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Add New Ad</h2>
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
        <form action="{{ route('store-ad') }}" method="POST" enctype="multipart/form-data" id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
                <div class="field">
                    <label for="purchaser">Purchaser:</label>
                    <input type="text" name="purchaser" id="purchaser" class="wideTextField form-control" value="{{ old('purchaser') }}">
                </div>
                <div class="field">
                    <label for="campaign_start">Campaign Start:</label>
                    <input type="text" name="campaign_start" id="campaign_start" class="wideTextField form-control flatpickr" data-default-date="{{ old('campaign_start') === null ? \Carbon\Carbon::now() : old('campaign_start')}}">
                </div>
                <div class="field">
                    <label for="campaign_end">Campaign End:</label>
                    <input type="text" name="campaign_end" id="campaign_end" class="wideTextField form-control flatpickr" data-default-date="{{ old('campaign_end') === null ? \Carbon\Carbon::now() : old('campaign_end')}}">
                </div>
                <div class="field">
                    <label for="size">Size</label>
                    <select name="size" id="size">
                        <option value="banner">Banner</option>
                        <option value="sidebar">Sidebar</option>
                    </select>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <label for="provider_url">Provider URL:</label>
                    <input type="text" name="provider_url" id="provider_url" class="wideTextField form-control" value="{{ old('provider_url') }}">
                </div>
                <div class="field">
                    <label for="duration">Duration:</label>
                    <input type="text" name="duration" id="duration" class="wideTextField form-control" value="{{ old('duration') }}">
                </div>
                <div class="field">
                    <label for="adFile">Ad</label>
                    <input type="file" name="adFile" id="adFile">
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
        });

    </script>
@endsection