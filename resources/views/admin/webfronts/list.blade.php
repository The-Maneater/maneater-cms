@extends('layouts.admin')

@section('title')
    Web Fronts
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Articles</h2>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Webfront Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="{{ route('edit-web-front', [0]) }}">Front Page</a></td>
            </tr>
            @foreach(\App\Section::all() as $section)
                <tr>
                    <td><a href="{{ route('edit-web-front', [$section->id]) }}">{{ $section->name }}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection