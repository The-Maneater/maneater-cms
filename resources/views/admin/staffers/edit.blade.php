@extends('layouts.admin')

@section('title')
    Edit Staffer
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Staffer</h2>
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
        <form action="{{ route('update-staffer', [$staffer->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <div class="field">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" id="first_name" class="wideTextField form-control" value="{{ $staffer->first_name }}">
                </div>
                <div class="field">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" class="wideTextField form-control" value="{{ $staffer->last_name }}">
                </div>
                <div class="field">
                    <label for="active">Is Active:</label>
                    <input type="checkbox" name="active" id="active" class="wideTextField form-control" {{ $staffer->is_active ? "checked" : "" }}>
                </div>
                <div class="field">
                    <label for="user">Associated user account</label>
                    <select name="user" id="user">
                        <option></option>
                        @foreach(\App\User::all() as $user)
                            <option value="{{ $user->id }}" {{ $staffer->user !== null && $staffer->user->id == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                        @endforeach
                    </select>
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