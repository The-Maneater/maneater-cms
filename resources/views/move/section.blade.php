@extends('layouts.move')

@section('content')
    <div class="container">
        <div class="section-break">
            <h2>{{ $section->name }}</h2>
        </div>
        <div class="columns">
            @foreach($stories as $story)
                @if($loop->index == 0 || $loop->index % 7 == 0)
                    <div class="column is-4">
                            @endif
                        <div class="newsreel big-third">
                            <p class="category">{{ $story->formattedPublishDate->format('M. d, Y') }}</p>
                            {{--<a href="http://move.themaneater.com/stories/2017/5/7/thisisamerica-fashion-diversity/"><img src="http://move.themaneater.com/media/2017/0508/photos/thisisamerica3_jpg_300x200_crop_q85.jpg" width="100%" alt="'#ThisIsAmerica': Fashion for diversity"></a>--}}
                            <h4><a href="{{ $story->path() }}" class="is-black is-move-hover-red"><p>{{ $story->title }}</p></a></h4>
                            <div class="cdeck">
                                <p>{{ $story->cDeck }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                            @if($loop->last || $loop->index % 7 == 6)
                    </div>
                @endif
            @endforeach
        </div>
        <div class="navigation">
            {{ $stories->links('move.paginator') }}
        </div>
    </div>
@endsection