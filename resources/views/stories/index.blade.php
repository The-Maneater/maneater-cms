@extends('layouts._maneater')

@section('title')
Maneater | Home
@endsection

@section('content')

            <div>
                @if(isset($ads['banner'][0]))

                    @if(!is_null($ads['banner'][0]->raw_content))
                       {!! $ads['banner'][0]->raw_content !!}
                    @else
                        <a href="{{ $ads['banner'][0]->provider() }}"><img src="{{ $ads['banner'][0]->url() }}" alt="" class="banner-bottom-ad"></a>
                    @endif
                @endif

            </div>  <!--END OF TOPBAR AD!-->

            <div class="row ml-md-3 mt-3">   <!--START OF MAIN CONTENT-->
                <div class="col-md-9 pl-md-0">
                    <div class="border rounded main-content-box shadow pl-md-3">
                    <div class="row">
                        <div class="col-md-8 mt-md-3">
                            <!--http://getbootstrap.com/docs/4.1/components/navbar/ REFERENCED FOR CAROUSEL-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="crop-carousel-photos figure-container">
                                            @if(count($frontPageStories[1]->headerPhotos) > 0)
                                                <img class="d-block" src="{{ $frontPageStories[1]->headerPhotos[0]->path() }}" alt="First slide">
                                                <a href="{{ $frontPageStories[1]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[1]->Asection }}</a>

                                            @elseif(count($frontPageStories[1]->graphics) > 0 )
                                                <img class="d-block" src="{{ $frontPageStories[1]->graphics[0]->path() }}"  alt="First slide">
                                                <a href="{{ $frontPageStories[1]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[1]->Asection }}</a>
                                            @else
                                                <img class="d-block" src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="First slide">
                                                <a href="{{ $frontPageStories[1]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[1]->Asection }}</a>
                                            @endif
                                        </div>
                                        <div class="justify-text carousel-sm-item">
                                            <a class="story-style" href="{{ $frontPageStories[1]->path() }}">
                                                <h4 class="mb-0 mt-2">{{ $frontPageStories[1]->title }}</h4>
                                                <p class="main-story-cDeck">{{ substr($frontPageStories[1]->cDeck, 0, 80) }} {{ strlen($frontPageStories[1]->cDeck) > 80 ? "...": "" }}</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="crop-carousel-photos figure-container">
                                            @if(count($frontPageStories[2]->headerPhotos) > 0)
                                                <img class="d-block" src="{{ $frontPageStories[2]->headerPhotos[0]->path() }}"  alt="Second slide">
                                                <a href="{{ $frontPageStories[2]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[2]->Asection }}</a>
                                            @elseif(count($frontPageStories[2]->graphics) > 0 )
                                                <img class="d-block" src="{{ $frontPageStories[2]->graphics[0]->path() }}"  alt="Second slide">
                                                <a href="{{ $frontPageStories[2]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[2]->Asection }}</a>
                                            @else
                                                <img class="d-block" src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="First slide">
                                                <a href="{{ $frontPageStories[2]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[2]->Asection }}</a>
                                            @endif
                                        </div>
                                        <div class="justify-text carousel-sm-item">
                                            <a class="story-style" href="{{ $frontPageStories[2]->path() }}">
                                                <h4 class="mb-0 mt-2">{{ $frontPageStories[2]->title }}</h4>
                                                <p class="main-story-cDeck">{{ substr($frontPageStories[2]->cDeck, 0, 80) }} {{ strlen($frontPageStories[2]->cDeck) > 80 ? "...": "" }}</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="crop-carousel-photos figure-container">
                                            @if(count($frontPageStories[3]->headerPhotos) > 0)
                                                <img class="d-block" src="{{ $frontPageStories[3]->headerPhotos[0]->path() }}"   alt="Third slide">
                                                <a href="{{ $frontPageStories[3]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[3]->Asection }}</a>
                                            @elseif(count($frontPageStories[3]->graphics) > 0 )
                                                <img class="d-block" src="{{ $frontPageStories[3]->graphics[0]->path() }}"   alt="Third slide">
                                                <a href="{{ $frontPageStories[3]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[3]->Asection }}</a>
                                            @else
                                                <img class="d-block" src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg"  alt="First slide">
                                                <a href="{{ $frontPageStories[3]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[3]->Asection }}</a>
                                            @endif
                                        </div>
                                        <div class="justify-text carousel-sm-item">
                                            <a class="story-style" href="{{ $frontPageStories[3]->path() }}">
                                                <h4 class="mb-0 mt-2">{{ $frontPageStories[3]->title }}</h4>
                                                <p class="main-story-cDeck">{{ substr($frontPageStories[3]->cDeck, 0, 80) }} {{ strlen($frontPageStories[3]->cDeck) > 80 ? "...": "" }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>  <!--END OF CAROUSEL-->

                        <div class="col-md-4 pl-md-1 pl-xs-3"> <!--START OF TWO SIDE STORIES-->
                            <div class="mr-md-3">
                                <hr class="d-md-none">
                                
                                @if(count($frontPageStories[4]->headerPhotos) > 0)
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[4]->headerPhotos[0]->path() }}" alt="">
                                        <a href="{{ $frontPageStories[4]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[4]->Asection }}</a>
                                    </figure>
                                @elseif(count($frontPageStories[4]->graphics) > 0 )
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[4]->graphics[0]->linkPath() }}" alt="">
                                        <a href="{{ $frontPageStories[4]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[4]->Asection }}</a>
                                    </figure>

                                @else
                                    <figure class="crop-right mt-3 figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                        <a href="{{ $frontPageStories[4]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[4]->Asection }}</a>
                                    </figure>
                                @endif
                                <a class="story-style" href="{{ $frontPageStories[4]->path() }}">
                                    <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[4]->title }}</h6>
                                    <p class="story-description text-secondary justify-text pr-md-3 story-sm-cDeck">{{ substr($frontPageStories[4]->cDeck, 0, 100) }} {{ strlen($frontPageStories[4]->cDeck) > 100 ? "...": "" }}</p>
                                </a>
                            </div>

                            <div class="mr-md-3">
                                <hr class="d-md-none">
                                
                                @if(count($frontPageStories[5]->headerPhotos) > 0)
                                    <figure class="crop-right mt-3 figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[5]->headerPhotos[0]->path() }}" alt="">
                                        <a href="{{ $frontPageStories[5]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[5]->Asection }}</a>
                                    </figure>
                                @elseif(count($frontPageStories[5]->graphics) > 0 )
                                    <figure class="crop-right mt-3 figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[5]->graphics[0]->linkPath() }}" alt="">
                                        <a href="{{ $frontPageStories[5]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[5]->Asection }}</a>
                                    </figure>
                                @else
                                    <figure class="crop-right mt-3 figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                        <a href="{{ $frontPageStories[5]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[5]->Asection }}</a>
                                    </figure>
                                @endif
                                <a class="story-style" href="{{ $frontPageStories[5]->path() }}">
                                    <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[5]->title }}</h6>
                                    <p class="story-description text-secondary justify-text pr-md-3 story-sm-cDeck">{{ substr($frontPageStories[5]->cDeck, 0, 100) }} {{ strlen($frontPageStories[5]->cDeck) > 100 ? "...": "" }}</p>
                                </a>
                            </div>
                        </div>  <!--END OF TWO SIDE STORIES-->
                    </div>  <!--END OF ROW-->

                    <div class="row mt-0">
                        <div class="col-md-4">
                            <div>
                                <hr class="d-md-none">
                                
                                @if(count($frontPageStories[6]->headerPhotos) > 0)
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[6]->headerPhotos[0]->path() }}" alt="">
                                        <a href="{{ $frontPageStories[6]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[6]->Asection }}</a>
                                    </figure>
                                @elseif(count($frontPageStories[6]->graphics) > 0 )
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[6]->graphics[0]->linkPath() }}" alt="">
                                        <a href="{{ $frontPageStories[6]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[6]->Asection }}</a>
                                    </figure>
                                @else
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                        <a href="{{ $frontPageStories[6]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[6]->Asection }}</a>
                                    </figure>
                                @endif
                                <a class="story-style" href="{{ $frontPageStories[6]->path() }}">
                                    <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[6]->title }}</h6>
                                    <p class="story-description text-secondary justify-text pr-md-3 story-sm-cDeck">{{ substr($frontPageStories[6]->cDeck, 0, 100) }} {{ strlen($frontPageStories[6]->cDeck) > 100 ? "...": "" }}</p>
                                </a>
                            </div><!--END OF STORY 6-->
                        </div>
                        <div class="col-md-4">
                            <div>
                                <hr class="d-md-none">
                                
                                @if(count($frontPageStories[7]->headerPhotos) > 0)
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[7]->headerPhotos[0]->path() }}" alt="">
                                        <a href="{{ $frontPageStories[7]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[7]->Asection }}</a>
                                    </figure>
                                @elseif(count($frontPageStories[7]->graphics) > 0 )
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[7]->graphics[0]->linkPath() }}" alt="">
                                        <a href="{{ $frontPageStories[7]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[7]->Asection }}</a>
                                    </figure>
                                @else
                                    <figure class="crop-right mt-3 figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                        <a href="{{ $frontPageStories[7]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[7]->Asection }}</a>
                                    </figure>
                                @endif
                                <a class="story-style" href="{{ $frontPageStories[7]->path() }}">
                                    <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[7]->title }}</h6>
                                    <p class="story-description text-secondary justify-text pr-md-3 story-sm-cDeck">{{ substr($frontPageStories[7]->cDeck, 0, 100) }} {{ strlen($frontPageStories[7]->cDeck) > 100 ? "...": "" }}</p>
                                </a>
                            </div><!--END OF STORY 7-->
                        </div>


                        <div class="col-md-4">
                            <div class="mr-md-3">
                                <hr class="d-md-none">
                                
                                @if(count($frontPageStories[8]->headerPhotos) > 0)
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[8]->headerPhotos[0]->path() }}" alt="">
                                        <a href="{{ $frontPageStories[8]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[8]->Asection }}</a>
                                    </figure>
                                @elseif(count($frontPageStories[8]->graphics) > 0 )
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $frontPageStories[8]->graphics[0]->linkPath() }}" alt="">
                                        <a href="{{ $frontPageStories[8]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[8]->Asection }}</a>
                                    </figure>
                                @else
                                    <figure class="crop-right mt-3  figure-container">
                                        <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                        <a href="{{ $frontPageStories[8]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $frontPageStories[8]->Asection }}</a>
                                    </figure>
                                @endif
                                <a class="story-style" href="{{ $frontPageStories[8]->path() }}">
                                    <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[8]->title }}</h6>
                                    <p class="story-description text-secondary justify-text pr-md-3 story-sm-cDeck">{{ substr($frontPageStories[8]->cDeck, 0, 100) }} {{ strlen($frontPageStories[8]->cDeck) > 100 ? "...": "" }}</p>
                                </a>
                            </div><!--END OF STORY 8-->
                        </div>
                    </div>  <!--END OF BOTTOM 3 STORIES-->
                </div>
                    <div class="border rounded main-content-box shadow mt-3">
                        <h2 class="ml-2 mt-1 header-font">From Move Magazine:</h2>
                        <div class="row mx-1">   <!--MOVE LINKS-->
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/around-como">
                                        <figure class="crop-move-photos move-container mb-0">
                                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="/media/2018/913/photos/Reed_Downtown2.jpg" alt="">
                                            <div class="move-bottom-right">Around Town</div>
                                        </figure>
                                    </a>
                                </div>    
                            </div>
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/on-campus">
                                        <figure class="crop-move-photos move-container mb-0">
                                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="/media/2018/917/photos/007JesseHall_Comai-Alessandro.jpg" alt="">
                                            <div class="move-bottom-right">On Campus</div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/movies">
                                        <figure class="crop-move-photos move-container">
                                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="/media/2018/97/photos/movelogo.png" alt="">
                                            <div class="move-bottom-right">Movies</div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/music">
                                        <figure class="crop-move-photos move-container">
                                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="/media/2018/913/photos/Reed_BlueNote.jpg" alt="">
                                            <div class="move-bottom-right">Music</div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>  <!--END OF MOVE LINKS-->
                    </div>
                </div>  <!--END OF MAIN CONTENT-->

            
                <div id="sidebar" class="col-md-3 border-left d-none d-md-block">  <!--START OF SIDEBAR-->
                    <div id="test" class="border rounded main-content-box shadow p-2">
                        <h3 class="section-list-header header-font mb-md-2 mt-md-2"><a href="/stories/">LATEST</a></h3>
                        <ul class="section-list pl-md-2 mb-md-0">        <!--MAY NEED TO KEEP THIS-->
                            @foreach($latest as $story)
                                <li class="section-list-item pb-md-3"><a href="{{ $story->path() }}">{{ $story->full_title }}</a></li>
                            @endforeach
                        </ul>
                    </div>  
{{-- 
                    {{ substr($frontPageStories[8]->cDeck, 0, 100) }} {{ strlen($frontPageStories[8]->cDeck) > 100 ? "...": "" }}
 --}}
                    <div class="twitter-box mt-md-3">
                        <a class="twitter-timeline" data-height="350" data-theme="dark" data-border-color="#2F7A32" data-link-color="#2F7A32" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
                    </div>

                    {{-- @if(isset($ads['cubes'][0]))
                        @if(!is_null($ads['cubes'][0]->raw_content))
                            {!! $ads['cubes'][0]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="bottom-ad lazy"></a>
                        @endif
                    @endif --}}


                    @if(isset($ads['cubes'][0]))
                        @if(!is_null($ads['cubes'][0]->raw_content))
                            {!! $ads['cubes'][0]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="cubeAd"></a>
                        @endif
                    @else
                        <a href="https://www.themaneater.com/about/advertising"><img class="cubedAd" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt=""></a>
                    @endif
                   

                    <div class="border rounded main-content-box shadow p-2 mt-md-2">
                        <h3 class="sidebar-issue-header header-font mb-md-2 mt-md-2">LATEST ISSUE</h3>
                        <div id="issue-link">
                            <a href="{{ $issue->issu_url }}">
                            @if(isset($issue->layout))
                                <figure class="issu-img">
                                    <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $issue->layout->path() }}" alt="Maneater front page" />
                                </figure>
                            @endif  <!--MAY NEED TO KEEP THIS CLASS-->
                            </a>
                        </div>
                    </div>
                </div>      <!--END OF SIDEBAR-->
            </div>  <!--END OF MAIN CONTENT-->

            <div class="row border rounded main-content-box shadow pl-md-3 ml-md-3 mt-3 mr-md-0 mx-0">   <!--NEWS SECTION-->
                <div class="col-md-5"> <!--SECTION MAIN STORY-->
                    <a href="/section/news"><h1 class="header-font mb-md-3 mt-md-2 w-50 border-bottom text-dark">NEWS</h1></a>
                    
                    @if(count($sections['news'][0]->headerPhotos) > 0 )
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['news'][0]->headerPhotos[0]->path() }}" alt="">
                            <a href="{{ $sections['news'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['news'][0]->Asection }}</a>
                        </figure>
                    @elseif(count($sections['news'][0]->graphics) > 0 )
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['news'][0]->graphics[0]->linkPath() }}" alt="">
                            <a href="{{ $sections['news'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['news'][0]->Asection }}</a>
                        </figure>
                    @else
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                            <a href="{{ $sections['news'][0]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $sections['news'][0]->Asection }}</a>
                        </figure>
                    @endif
                    <a class="section-main-story" href="{{ $sections['news'][0]->path() }}">
                        <h4 class="mb-0 mt-2">{{ $sections['news'][0]->title }}</h4>
                        <p class="main-story-cDeck">{{ substr($sections['news'][0]->cDeck, 0, 130) }} {{ strlen($sections['news'][0]->cDeck) > 130 ? "...": "" }}</p>
                    </a>
                </div> <!-- END OF SECTION MAIN STORY-->



                {{-- <figure class="crop-right mt-3 d-none d-md-block figure-container">
                    <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                    <a href="{{ $frontPageStories[4]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $frontPageStories[4]->Asection }}</a>
                </figure> --}}



                <div class="col-md-7 mx-0 px-0">

                    <ul class="list-unstyled pl-md-3 pt-md-3 mt-md-5">
                        @for($i = 1; $i<5; $i++)
                        
                            <li class="media border-bottom mr-md-3 ml-md-0 ml-2 pr-2">
                                <figure class="crop-section-photos mr-3 mt-2">
                                @if(count($sections['news'][$i]->headerPhotos) > 0 )
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['news'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif(count($sections['news'][$i]->graphics) > 0 )
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['news'][$i]->graphics[0]->linkPath() }}" alt="">
                                @else
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                @endif
                                </figure>
                                <div class="media-body">
                                    <a href="{{ $sections['news'][$i]->path() }}">
                                        <h5 class="mt-0 mb-1">{{ $sections['news'][$i]->title }} <a href="{{ $sections['news'][$i]->Aurl }}" class="badge badge-pill badge-success ">{{ $sections['news'][$i]->Asection }}</a></h5>
                                        <p class="justify-text subsection-story mb-0">{{ substr($sections['news'][$i]->cDeck, 0, 130) }} {{ strlen($sections['news'][$i]->cDeck) > 130 ? "...": "" }} </p>
                                    </a>

                                </div>
                            </li>
                        
                        @endfor
                    </ul>
                </div>
            </div>      <!--END OF NEWS SECTION-->


                                   




            <div class="row border rounded main-content-box shadow pl-md-3 ml-md-3 mt-3 mr-md-0 mx-0">   <!--SPORTS SECTION-->
                <div class="col-md-7 mx-0 px-0 order-2 order-md-1">
                    <ul class="list-unstyled pt-md-3 mt-md-5">
                        @for($i = 1; $i<5; $i++)
                            <li class="media mb-md-3 border-bottom pr-md-0 mr-md-5 ml-2 pr-2">
                                <div class="media-body mr-3">
                                    <a href="{{ $sections['sports'][$i]->path() }}">
                                        <h5 class="mt-0 mb-1">{{ $sections['sports'][$i]->title }} <a href="{{ $sections['sports'][$i]->Aurl }}" class="badge badge-pill badge-success">{{ $sections['sports'][$i]->Asection }}</a></h5>
                                        <p class="justify-text subsection-story">{{ substr($sections['sports'][$i]->cDeck, 0, 130) }} {{ strlen($sections['sports'][$i]->cDeck) > 130 ? "...": "" }}</p>
                                    </a>
                                    
                                </div>
                                <figure class="crop-section-photos mt-2">
                                @if(count($sections['sports'][$i]->headerPhotos) > 0 )
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['sports'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif(count($sections['sports'][$i]->graphics) > 0 )
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['sports'][$i]->graphics[0]->linkPath() }}" alt="">
                                @else
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                @endif
                                </figure>
                            </li>
                        @endfor
                    </ul>
                </div>

                <div class="col-md-5 pr-md-4 order-1 order-md-2">

                    <a class="right-align-text" href="/section/sports"><h1 class="header-font mb-md-3 mt-md-2 border-bottom text-dark">SPORTS</h1></a>

                    @if(count($sections['sports'][0]->headerPhotos) > 0 )
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['sports'][0]->headerPhotos[0]->path() }}" alt="">
                            <a href="{{ $sections['sports'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['sports'][0]->Asection }}</a>
                        </figure>
                    @elseif(count($sections['sports'][0]->graphics) > 0 )
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['sports'][0]->graphics[0]->linkPath() }}" alt="">
                            <a href="{{ $sections['sports'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['sports'][0]->Asection }}</a>
                        </figure>
                    @else
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                            <a href="{{ $sections['sports'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['sports'][0]->Asection }}</a>
                        </figure>
                    @endif
                    <a class="section-main-story" href="{{ $sections['sports'][0]->path() }}">
                        <h4 class="mb-0 mt-2">{{ $sections['sports'][0]->title }}</h4>
                        <p class="main-story-cDeck">{{ substr($sections['sports'][0]->cDeck, 0, 130) }} {{ strlen($sections['sports'][0]->cDeck) > 130 ? "...": "" }}</p>
                    </a>
                    
                </div>
            </div>      <!--END OF SPORTS SECTION-->



            <div class="row border rounded main-content-box shadow pl-md-3 ml-md-3 mt-md-3 mr-md-0 mt-3 mx-0">   <!--OPINION SECTION-->
                <div class="col-md-5"> <!--SECTION MAIN STORY-->
                    <a href="/section/opinion"><h1 class="header-font mb-md-3 mt-md-2 w-50 border-bottom text-dark">OPINION</h1></a>

                    @if(count($sections['opinion'][0]->headerPhotos) > 0 )
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['opinion'][0]->headerPhotos[0]->path() }}" alt="">
                            <a href="{{ $sections['opinion'][0]->Aurl }}" class="badge badge-pill badge-success story-badge ">{{ $sections['opinion'][0]->Asection }}</a>
                        </figure>
                    @elseif(count($sections['opinion'][0]->graphics) > 0 )
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['opinion'][0]->graphics[0]->linkPath() }}" alt="">
                            <a href="{{ $sections['opinion'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['opinion'][0]->Asection }}</a>
                        </figure>
                    @else
                        <figure class="crop-main-section-photo figure-container">
                            <img class="lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                            <a href="{{ $sections['opinion'][0]->Aurl }}" class="badge badge-pill badge-success story-badge">{{ $sections['opinion'][0]->Asection }}</a>
                        </figure>
                    @endif
                    <a class="section-main-story" href="{{ $sections['opinion'][0]->path() }}">
                        <h4 class="mb-0 mt-2">{{ $sections['opinion'][0]->title }}</h4>
                        <p class="main-story-cDeck">{{ substr($sections['opinion'][0]->cDeck, 0, 130) }} {{ strlen($sections['opinion'][0]->cDeck) > 130 ? ". . .": "" }}</p>
                    </a>
                </div> <!-- END OF SECTION MAIN STORY-->
                

                <div class="col-md-7 mx-0 px-0">

                    <ul class="list-unstyled pl-md-3 pt-md-3 mt-md-5">
                        @for($i = 1; $i<5; $i++)
                        
                            <li class="media mb-md-3 border-bottom mr-3 ml-2 pr-2 figure-container">
                                <figure class="crop-section-photos mr-3 mt-2">
                                @if(count($sections['opinion'][$i]->headerPhotos) > 0 )
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['opinion'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif(count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="{{ $sections['opinion'][$i]->graphics[0]->linkPath() }}" alt="">
                                @else
                                    <img class="mr-3 lazy" src="http://themaneater.com/media/2018/917/photos/1x1_placeholder.png" data-orig="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                                @endif
                                </figure>
                                <div class="media-body">
                                    <a href="{{ $sections['opinion'][$i]->path() }}">
                                        <h5 class="mt-0 mb-1">{{ $sections['opinion'][$i]->title }} <a href="{{ $sections['opinion'][$i]->Aurl }}" class="badge badge-pill badge-success">{{ $sections['opinion'][$i]->Asection }}</a></h5>

                                        <p class="justify-text subsection-story">{{ substr($sections['opinion'][$i]->cDeck, 0, 130) }} {{ strlen($sections['opinion'][$i]->cDeck) > 130 ? "...": "" }}</p>
                                    </a>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>      <!--END OF OPINION SECTION-->

@endsection