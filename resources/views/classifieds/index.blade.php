@extends('layouts.app')

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