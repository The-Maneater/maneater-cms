@extends('layouts.admin')

@section('title')
    Section Webfront
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Articles</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Position</th>
                <th>Article</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 1; $i<=5; $i++)
                <tr>
                    <td>{{ $i }}</td>
              @if($articles->get($i) !== null)
                    <td>{{ $articles->get($i)->title }}</td>
              @else
                    <td> None </td>
              @endif
                </tr>
            @endfor
            </tbody>
        </table>
    </div>

@endsection