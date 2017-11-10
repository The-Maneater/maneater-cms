@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="columns">
            <div class="column is-8">
                <div class="archive-header">
                    {{ $sectionName }} Archives
                </div>
                @foreach($paginator as $key => $date)
                    <h5 class="search-results-header archive-pubdate">{{ Carbon\Carbon::parse($key)->format('M. d, Y') }}</h5>
                        @foreach($date as $story)
                            <div class="story">
                                {{--@php--}}
                                    {{--$story = (new App\Story($story));--}}
                                {{--@endphp--}}
                                <div class="columns archive-columns">
                                    <div class="is-8">
                                        <h2><a href="{{ $story->path() }}">{{ $story->title }}</a></h2>
                                        <p>{{ $story->cDeck }}</p>
                                    </div>
                                    <div class="is-4 archive-column">
                                        @if(count($story->headerPhotos) > 0)
                                            <img class="archive-image" src="{{ $story->headerPhotos[0]->path() }}" alt="">
                                        @endif
                                    </div>
                                </div>

                            </div>
                    @endforeach
                @endforeach

                {{ $paginator->links('staff.paginator') }}
            </div>
            <div class="column is-8">

            </div>
        </div>
    </div>

@endsection