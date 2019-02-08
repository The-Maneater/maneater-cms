@extends('layouts.app')

@section('links')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css">


@endsection

@section('content')
    <div class="content">
        <h1>Classifieds</h1>
        <p>Classifieds will run online for one week and cost $10 per week for a 40-word maximum ad.</p>
        <p>Email <a href="mailto:classifieds@themaneater.com">classifieds@themaneater.com</a> to place your ad.</p>

        @if(count($classifieds) > 0)
            <div class="result-container">
                @foreach($classifieds as $classified)
                    <div class="resultset">
                        <h5 class="classified-header">{{ $classified->section }}</h5>
                        <p>{{ $classified->content }}</p>
                    </div>
                @endforeach
            </div>

            <div class="pagination-links">
                {{ $classifieds->links() }}
            </div>
        @endif
    </div>
@endsection