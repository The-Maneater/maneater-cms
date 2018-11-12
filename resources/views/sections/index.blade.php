@extends('layouts._maneater')

@section('title')
Maneater | {{ $section->name }}
@endsection

@section('scripts')

    <script type="text/javascript" src="/js/section.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

@endsection

@section('content')
    <div id="sectionContainer">
        <h1 id="sectionHeading">{{ $section->name }}</h1>
        <div class="row">
            <div class="col-md-7 px-0 px-md-3">
                <a href="{{ $priorityStories[0]->path() }}">
                    <div id="mainStory" class="container imageZoom">

                        @if(count( $priorityStories[0]->headerPhotos ) > 0)
                            <img src="{{ $priorityStories[0]->headerPhotos[0]->path() }}" alt="" class="image">
                        @elseif(count($priorityStories[0]->graphics) > 0)
                            <img src="{{ $priorityStories[0]->graphics[0]->path() }}" alt="" class="image">
                        @else
                            <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                        @endif

                        <div class="overlay"></div>
                        <h1 id="mainStoryHeading" class="text">{{ substr($priorityStories[0]->title, 0, 38) }} {{ strlen($priorityStories[0]->title) > 38 ? "...": "" }}</h1>
                        <h5 id="mainStoryCdeck" class="text">{{ substr($priorityStories[0]->cDeck, 0, 60) }} {{ strlen($priorityStories[0]->cDeck) > 60 ? "...": "" }}</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-5 px-0">
                <div class="row">
                    <div class="col-md-12 mt-2 mt-md-0">
                        <a href="{{ $priorityStories[1]->path() }}">
                            <div id="topSideStory1" class="topSideStories container imageZoom">
                                {{-- <img src="/media/2018/819/ads/placeholder.jpg" alt="" class="image"> --}}
                                @if(count( $priorityStories[1]->headerPhotos ) > 0)
                                    <img src="{{ $priorityStories[1]->headerPhotos[0]->path() }}" alt="" class="image">
                                @elseif(count($priorityStories[1]->graphics) > 0)
                                    <img src="{{ $priorityStories[1]->graphics[0]->path() }}" alt="" class="image">
                                @else
                                    <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                                @endif
                                <div class="overlay"></div>
                                <h1 class="text topSideStoryHeading">{{ substr($priorityStories[1]->title, 0, 65) }} {{ strlen($priorityStories[1]->title) > 65 ? "...": "" }}</h1>
                                <h5 class="text topSideStoryCdeck">{{ substr($priorityStories[1]->cDeck, 0, 75) }} {{ strlen($priorityStories[1]->cDeck) > 75 ? "...": "" }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="topSideStoriesSecondRow" class="row">
                    <div class="col-md-6 pr-3 pr-md-2">
                        <a href="{{ $priorityStories[2]->path() }}">
                            <div id="topSideStory3" class="topSideStories reverseContainer imageZoom">
                                {{-- <img src="/media/2018/819/ads/placeholder.jpg" alt="" class="reverseImage"> --}}
                                @if(count( $priorityStories[2]->headerPhotos ) > 0)
                                    <img src="{{ $priorityStories[2]->headerPhotos[0]->path() }}" alt="" class="image">
                                @elseif(count($priorityStories[2]->graphics) > 0)
                                    <img src="{{ $priorityStories[2]->graphics[0]->path() }}" alt="" class="image">
                                @else
                                    <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                                @endif
                                <div class="reverseOverlay"></div>
                                <h1 class="reverseText reverseTopSideStoryHeading">{{ substr($priorityStories[2]->title, 0, 32) }} {{ strlen($priorityStories[2]->title) > 32 ? "...": "" }}</h1>
                                <h5 class="reverseText reverseTopSideStoryCdeck">{{ substr($priorityStories[2]->cDeck, 0, 35) }} {{ strlen($priorityStories[2]->cDeck) > 35 ? "...": "" }}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 pl-3 pl-md-2">
                        <a href="{{ $priorityStories[3]->path() }}">
                            <div id="topSideStory4" class="topSideStories container imageZoom">
                                {{-- <img src="/media/2018/819/ads/placeholder.jpg" alt="" class="image"> --}}
                                @if(count( $priorityStories[3]->headerPhotos ) > 0)
                                    <img src="{{ $priorityStories[3]->headerPhotos[0]->path() }}" alt="" class="image">
                                @elseif(count($priorityStories[3]->graphics) > 0)
                                    <img src="{{ $priorityStories[3]->graphics[0]->path() }}" alt="" class="image">
                                @else
                                    <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                                @endif
                                <div class="overlay"></div>
                                <h1 class="text topSideStoryHeading">{{ substr($priorityStories[3]->title, 0, 32) }} {{ strlen($priorityStories[3]->title) > 32 ? "...": "" }}</h1>
                                <h5 class="text topSideStoryCdeck">{{ substr($priorityStories[3]->cDeck, 0, 35) }} {{ strlen($priorityStories[3]->cDeck) > 35 ? "...": "" }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pl-0">
            <div class="col pr-0">
                <a href="{{ url()->current() . '/archives' }}">
                    <button id="seeMoreButton">See More >></button>
                </a>
            </div>
        </div>
        
        <div id="subSectionsContent" class="row">
            <div class="col-md-9 mt-5">

                @foreach($sectionStories as $story)
                    <a href="{{ $story->path() }}">
                        <div class="media">
                            {{-- <img class="mr-3 mediaImage" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt="Generic placeholder image"> --}}
                            @if(count( $story->headerPhotos ) > 0)
                                <img src="{{ $story->headerPhotos[0]->path() }}" alt="" class="mr-3 mediaImage">
                            @elseif(count($story->graphics) > 0)
                                <img src="{{ $story->graphics[0]->path() }}" alt="" class="mr-3 mediaImage">
                            @else
                                <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="mr-3 mediaImage">
                            @endif
                            <div class="media-body">
                                <h5 class="mt-0">{{ $story->title }}</h5>
                                <p>{{ $story->cDeck }}</p>
                            </div>
                        </div>
                    </a>
                    <hr>
                @endforeach

            </div>  <!--END OF SUBSECTION ROW-->


            <div class="col-md-3 subSectionSidebar">
                <div class="twitter-box">
                    <a class="twitter-timeline" data-height="80vh" data-theme="dark" data-border-color="#2F7A32" data-link-color="#2F7A32" href="https://twitter.com/TheManeater?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Tweets by TheManeater</a>
                </div>  
                <div id="ads-container">
                    @if(isset($ads['cubes'][0]))
                        @if(!is_null($ads['cubes'][0]->raw_content))
                            {!! $ads['cubes'][0]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="cubeAd"></a>
                        @endif
                    @else
                        <a href="https://www.themaneater.com/about/advertising"><img class="cubedAd" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt=""></a>
                    @endif

                    @if(isset($ads['cubes'][1]))
                        @if(!is_null($ads['cubes'][1]->raw_content))
                            {!! $ads['cubes'][1]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="cubeAd"></a>
                        @endif
                    @else
                        <a href="https://www.themaneater.com/about/advertising"><img class="cubedAd mt-3" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt=""></a>
                    @endif
                </div>
            </div>
        </div>



    </div>  <!--END OF SECTION CONTAINER-->
@endsection