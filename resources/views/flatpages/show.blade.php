@extends('layouts.app')

@section('links')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css">


@endsection

@section('content')
    {!! $flatpage->content !!}
@endsection

@section('main-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("li.students a").on('click', function(){
                $("div.is-active").css("display", "none");
                $("div.is-active").removeClass("is-active");
                var href = $(this).attr("href");
                var parent = $(href).parent();
                parent.addClass("is-active");
                parent.css("display", "block");
            });
        });
    </script>
@endsection