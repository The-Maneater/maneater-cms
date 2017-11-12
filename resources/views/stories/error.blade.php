@extends('layouts.app')

@section('content')
    <div class="section">
        <h1>The article you were looking for matches more than one slug. Please select the article you would like from the
            list below.
        </h1>
        <ul>
            @foreach($stories as $article)
                <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
            @endforeach
        </ul>
    </div>

@endsection