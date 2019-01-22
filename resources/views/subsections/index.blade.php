@extends('layouts._maneater')

@section('title')
Maneater | {{ $subsection->name }}
@endsection

@section('scripts')

    <script type="text/javascript" src="/js/section.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

@endsection

@section('content')
    <div id="sectionContainer">
        <h1 id="sectionHeading">{{ $subsection->name }}</h1>
        <div class="row">
            <div class="col-md-7 px-0 px-md-3">
                <a href="{{ $stories[0]->path() }}">
                    <div id="mainStory" class="container imageZoom">

                        @if(count( $stories[0]->headerPhotos ) > 0)
                            <img src="{{ $stories[0]->headerPhotos[0]->path() }}" alt="" class="image">
                        @elseif(count($stories[0]->graphics) > 0)
                            <img src="{{ $stories[0]->graphics[0]->path() }}" alt="" class="image">
                        @else
                            <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                        @endif

                        <div class="overlay"></div>
                        <h1 id="mainStoryHeading" class="text">{{ substr($stories[0]->title, 0, 35) }} {{ strlen($stories[0]->title) > 35 ? "...": "" }}</h1>
                        <h5 id="mainStoryCdeck" class="text">{{ substr($stories[0]->cDeck, 0, 55) }} {{ strlen($stories[0]->cDeck) > 55 ? "...": "" }}</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-5 px-0">
                <div class="row">
                    <div class="col-md-12 mt-2 mt-md-0">
                        <a href="{{ $stories[1]->path() }}">
                            <div id="topSideStory1" class="topSideStories container imageZoom">
                                {{-- <img src="/media/2018/819/ads/placeholder.jpg" alt="" class="image"> --}}
                                @if(count( $stories[1]->headerPhotos ) > 0)
                                    <img src="{{ $stories[1]->headerPhotos[0]->path() }}" alt="" class="image">
                                @elseif(count($stories[1]->graphics) > 0)
                                    <img src="{{ $stories[1]->graphics[0]->path() }}" alt="" class="image">
                                @else
                                    <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                                @endif
                                <div class="overlay"></div>
                                <h1 class="text topSideStoryHeading">{{ substr($stories[1]->title, 0, 63) }} {{ strlen($stories[1]->title) > 63 ? "...": "" }}</h1>
                                <h5 class="text topSideStoryCdeck">{{ substr($stories[1]->cDeck, 0, 75) }} {{ strlen($stories[1]->cDeck) > 75 ? "...": "" }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="topSideStoriesSecondRow" class="row">
                    <div class="col-md-6 pr-3 pr-md-2">
                        <a href="{{ $stories[2]->path() }}">
                            <div id="topSideStory3" class="topSideStories reverseContainer imageZoom">
                                {{-- <img src="/media/2018/819/ads/placeholder.jpg" alt="" class="reverseImage"> --}}
                                @if(count( $stories[2]->headerPhotos ) > 0)
                                    <img src="{{ $stories[2]->headerPhotos[0]->path() }}" alt="" class="image">
                                @elseif(count($stories[2]->graphics) > 0)
                                    <img src="{{ $stories[2]->graphics[0]->path() }}" alt="" class="image">
                                @else
                                    <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                                @endif
                                <div class="reverseOverlay"></div>
                                <h1 class="reverseText reverseTopSideStoryHeading">{{ substr($stories[2]->title, 0, 30) }} {{ strlen($stories[2]->title) > 30 ? "...": "" }}</h1>
                                <h5 class="reverseText reverseTopSideStoryCdeck">{{ substr($stories[2]->cDeck, 0, 35) }} {{ strlen($stories[2]->cDeck) > 35 ? "...": "" }}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 pl-3 pl-md-2">
                        <a href="{{ $stories[3]->path() }}">
                            <div id="topSideStory4" class="topSideStories container imageZoom">
                                {{-- <img src="/media/2018/819/ads/placeholder.jpg" alt="" class="image"> --}}
                                @if(count( $stories[3]->headerPhotos ) > 0)
                                    <img src="{{ $stories[3]->headerPhotos[0]->path() }}" alt="" class="image">
                                @elseif(count($stories[3]->graphics) > 0)
                                    <img src="{{ $stories[3]->graphics[0]->path() }}" alt="" class="image">
                                @else
                                    <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="" class="image">
                                @endif
                                <div class="overlay"></div>
                                <h1 class="text topSideStoryHeading">{{ substr($stories[3]->title, 0, 30) }} {{ strlen($stories[3]->title) > 30 ? "...": "" }}</h1>
                                <h5 class="text topSideStoryCdeck">{{ substr($stories[3]->cDeck, 0, 35) }} {{ strlen($stories[3]->cDeck) > 35 ? "...": "" }}</h5>
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
                @foreach($stories as $index => $story)
                    @if($index > 4)
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
                    @endif
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