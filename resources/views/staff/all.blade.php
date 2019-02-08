@extends('layouts.app')

@section('links')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css">


@endsection

@section('content')
    <div class="content active-staff">
        <h1>Active Staff</h1>
        <div class="columns">
            @foreach($staff as $staffer)
                @if($loop->index == 0 || $loop->index % 15 == 0)
                    <div class="column is-2">
                        <ul>
                @endif
                            <li><a href="{{ $staffer->path() }}">{{ $staffer->fullName }}</a></li>
                @if($loop->last || $loop->index % 15 == 14)
                        </ul>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="navigation">
            {{ $staff->links('staff.paginator') }}
        </div>
    </div>
@endsection