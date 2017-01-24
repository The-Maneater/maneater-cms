@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div>
        <h1>This is the dashboard.  It is currently empty.</h1>
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