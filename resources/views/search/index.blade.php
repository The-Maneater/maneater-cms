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
        <div class="columns">
            <div class="column is-8">
                <div class="search-header">
                    <div>Search: {{ $search }}</div>
                </div>
                <div class="form">
                    <form action="/search" method="GET">
                        <b-field expanded>
                            <b-input value="{{ $search }}"
                                     type="search" name="search">
                            </b-input>
                            <p class="control">
                                <button class="button is-info">Search</button>
                            </p>
                        </b-field>
                        <div class="block">
                            <div class="radio-group">
                                <label class="radio"><input type="radio" name="type"
                                                            value="Articles" {{ $type == 'Articles' ? 'checked' : '' }}>
                                    <span>Articles</span></label>
                                <label class="radio"><input type="radio" name="type"
                                                            value="Photos" {{ $type == 'Photos' ? 'checked' : '' }}>
                                    <span>Photos</span></label>
                                <label class="radio"><input type="radio" name="type"
                                                            value="Staff" {{ $type == 'Staff' ? 'checked' : '' }}>
                                    <span>Staff Members</span></label>
                                {{--<label class="radio"><input type="radio" name="type"--}}
                                                            {{--value="Graphics" {{ $type == 'Graphics' ? 'checked' : '' }}>--}}
                                    {{--<span>Graphics</span></label>--}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="results">
                    <h5 class="search-results-header">{{ $type }}</h5>
                    @foreach($results as $result)
                        <div class="resultset">
                            @include('search.content.' . $type, ['data' => $result])
                        </div>
                    @endforeach
                </div>

                <div class="pagination-links">
                    {{ $results->appends(['type' => $type, 'search' => $search])->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
