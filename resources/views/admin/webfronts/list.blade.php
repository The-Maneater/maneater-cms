@extends('layouts.admin')

@section('title')
    Web Fronts
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Web Fronts</h2>
        </div>

        <table class="table is-striped is-bordered">
            <thead>
            <tr>
                <th>Webfront Name</th>
                <th>Publication</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="{{ route('edit-web-front', [-1]) }}">MOVE Front</a></td>
                <td>MOVE</td>
            </tr>
            <tr>
                <td><a href="{{ route('edit-web-front', [0]) }}">Front Page</a></td>
                <td>The Maneater</td>
            </tr>
            @foreach($sections as $section)
                <tr>
                    <td><a href="{{ route('edit-web-front', [$section->id]) }}">{{ $section->name }}</a></td>
                    <td>@if($section->publication !== null){{ $section->publication->name }}@endif</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection