@extends('layouts.app')

@section('content')

<h1>Editorial Board</h1>
<div class="flatpage">
    <ul>
        @for($i = 0; $i < count($staffers); $i ++)
            <li><a href="{{ $staffers[$i]->path() }}">{{ $staffers[$i]->fullname }}</a>, {{ $titles[$i] }}</li>
        @endfor
    </ul>
</div>

@endsection