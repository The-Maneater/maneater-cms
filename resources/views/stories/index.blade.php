<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>The Maneater | Home</title>

        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-8727143-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">--}}
        <link rel="stylesheet" href="{{ url('/css/maneater.css') }}" type="text/css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script type="text/javascript" src="/js/maneater.js"></script>
    </head>
    <body class="page-background">
        <div class="container-fluid w-100 h-100 pl-lg-0 pl-xs-3">
            <div class="row px-0 align-items-center h-100">
                <div class="col-md-auto pl-3 pr-1">
                    <a href="{{ config('app.url') }}">
                        <img src="/media/images/ManeaterLogo.png" class="logo-size logo">
                   </a>
                </div>

                <div class="col px-0">
                    <div id="header-box" class="text-center d-none d-md-block mb-2">
                        <span class="header-style"><a href="{{ config('app.url') }}" id="header" class="mr-5 header-text header-font">THE MANEATER</a>
            
                        <a href="https://twitter.com/TheManeater" class="ml-5 mr-2"><i class="fab fa-twitter topbar-icon icon-style align-middle"></i></a>
                        <a href="https://www.facebook.com/themaneaterMU/" class="mr-2"><i class="fab fa-facebook topbar-icon icon-style align-middle"></i></a>
                        <a href="https://www.instagram.com/themaneater/"><i class="fab fa-instagram topbar-icon icon-style align-middle"></i></a>
                        </span>
                            
                    </div>

                    <nav id="navigation-bar" class="navbar navbar-expand-md navbar-light bg-dark navbar-height pl-0">
                        <a class="navbar-brand header-font text-white d-block d-md-none pl-4" id="mobile-header" href="#">THE MANEATER</a>
                        <button class="navbar-toggler mr-2 bg-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse collapse-background collapse-margin hamburger-dropdown shadow rounded" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item dropdown ml-4">
                                    <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      NEWS
                                    </a>
                                    <div class="dropdown-menu bg-success remove-top-margin" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/section/news/city') }}">City</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/national') }}">National</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/on-campus') }}">On Campus</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/student-politics') }}">Student Politics</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/university') }}">University</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ml-4">
                                    <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      SPORTS
                                    </a>
                                    <div class="dropdown-menu bg-success remove-top-margin" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/section/sports/baseball') }}">Baseball</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/club-sports') }}">Club Sports</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/university') }}">Cross-Country</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/football') }}">Football</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/golf') }}">Golf</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/gymnastics') }}">Gymnastics</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/men-s-basketball') }}">Men’s basketball</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/soccer') }}">Soccer</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/softball') }}">Softball</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/swim-and-dive') }}">Swim and Dive</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/tennis') }}">Tennis</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/track-and-field') }}">Track and Field</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/volleyball') }}">Volleyball</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/women-s-basketball') }}">Women’s basketball</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/wrestling') }}">Wrestling</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ml-4">
                                    <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      OPINION
                                    </a>
                                    <div class="dropdown-menu bg-success remove-top-margin" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/section/opinion/columns') }}">Columns</a>
                                        <a class="dropdown-item" href="{{ url('/section/opinion/editorial-board') }}">Editorial Board</a>
                                        <a class="dropdown-item" href="{{ url('/section/opinion/letters-to-the-editor') }}">Letters to the Editor</a>
                                    </div>
                                </li>

                                <li class="nav-item ml-4">
                                    <a class="nav-link text-white" href="{{ config('app.move_url') }}">MOVE</a>
                                </li> 

                                <li class="nav-item ml-4">
                                    <a class="nav-link text-white" href="{{ url('/photos') }}">PHOTOS</a>
                                </li>
                            </ul>

                            <form class="form-inline my-2 my-lg-0 input-group mr-1 collapsed-searchbox searchbox-width" method="GET" action="/search">
                                <input class="form-control" type="hidden" name="type" value="Articles">
                                <input class="form-control rounded-left searchbox-style" type="text" name="search" placeholder="Search">
                                <div class="input-group-append searchbox-style">
                                    <button class="btn btn-success my-sm-0 pt-1" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>  <!--END OF ROW 1-->
            <nav class="sub-navbar d-none d-md-block">
                
                    <a href="{{ url('/feedback') }}" class="sub-navbar-items">FEEDBACK</a>
                    <a href="{{ url('/staff/editors') }}" class="sub-navbar-items">EDITORIAL STAFF</a>
                    <a href="{{ url('/workforus') }}" class="sub-navbar-items">WORK FOR US</a>
                    <a href="{{url('/about/advertising') }}" class="sub-navbar-items">ADVERTISING INFORMATION</a>
                
            </nav> <!--END OF TOPBAR-->

            <div>

                @if(isset($ads['banner'][0]))

                    <a href="{{ $ads['banner'][0]->provider() }}"><img src="{{ $ads['banner'][0]->url() }}" alt="" class="banner-bottom-ad"></a>

                    @if(!is_null($ads['banner'][0]->raw_content))
                       {!! $ads['banner'][0]->raw_content !!}
                    @else
                        <a href="{{ $ads['banner'][0]->provider() }}"><img src="{{ $ads['banner'][0]->url() }}" alt="" class="banner-bottom-ad"></a>
                    @endif
                @endif

            </div>  <!--END OF TOPBAR AD!-->

            <div class="row ml-lg-3 mt-3">   <!--START OF MAIN CONTENT-->
                <div class="col-md-9 pl-lg-0">
                    <div class="border rounded main-content-box shadow pl-lg-3">
                    <div class="row">
                        <div class="col-md-8 mt-md-3">
                            <!--http://getbootstrap.com/docs/4.1/components/navbar/ REFERENCED FOR CAROUSEL-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="crop-carousel-photos">
                                            @if(count($frontPageStories[1]->headerPhotos) > 0)
                                                <img class="d-block rounded-top" src="{{ $frontPageStories[1]->headerPhotos[0]->path() }}" alt="First slide">

                                            @elseif(count($frontPageStories[1]->graphics) > 0 )
                                                <img class="d-block rounded-top" src="{{ $frontPageStories[1]->graphics[0]->linkPath() }}" alt="First slide">
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
                                        <div class="crop-carousel-photos">
                                            @if(count($frontPageStories[2]->headerPhotos) > 0)
                                                <img class="d-block rounded-top" src="{{ $frontPageStories[2]->headerPhotos[0]->path() }}" alt="Second slide">
                                            @elseif(count($frontPageStories[2]->graphics) > 0 )
                                                <img class="d-block rounded-top" src="{{ $frontPageStories[2]->graphics[0]->linkPath() }}" alt="Second slide">
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
                                        <div class="crop-carousel-photos">
                                            @if(count($frontPageStories[3]->headerPhotos) > 0)
                                                <img class="d-block rounded-top" src="{{ $frontPageStories[3]->headerPhotos[0]->path() }}" alt="Third slide">
                                            @elseif(count($frontPageStories[3]->graphics) > 0 )
                                                <img class="d-block rounded-top" src="{{ $frontPageStories[3]->graphics[0]->linkPath() }}" alt="Third slide">
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

                        <div class="col-md-4 pl-lg-1 pl-xs-3"> <!--START OF TWO SIDE STORIES-->
                            <div class="mr-md-3">
                                <hr class="d-md-none">
                                <a class="story-style" href="{{ $frontPageStories[4]->path() }}">
                                    @if(count($frontPageStories[4]->headerPhotos) > 0)
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[4]->headerPhotos[0]->path() }}" alt="">
                                        </figure>
                                    @elseif(count($frontPageStories[4]->graphics) > 0 )
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[4]->graphics[0]->linkPath() }}" alt="">
                                        </figure>
                                    @endif
                                        <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[4]->title }}</h6>
                                        <p class="story-description text-secondary justify-text pr-lg-3 story-sm-cDeck">{{ substr($frontPageStories[4]->cDeck, 0, 95) }} {{ strlen($frontPageStories[4]->cDeck) > 95 ? "...": "" }}</p>
                                </a>
                            </div>
                            <div class="mr-md-3">
                                <hr class="d-md-none">
                                <a class="story-style" href="{{ $frontPageStories[5]->path() }}">
                                    @if(count($frontPageStories[5]->headerPhotos) > 0)
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[5]->headerPhotos[0]->path() }}" alt="">
                                        </figure>
                                    @elseif(count($frontPageStories[5]->graphics) > 0 )
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[5]->graphics[0]->linkPath() }}" alt="">
                                        </figure>
                                    @endif
                                        <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[5]->title }}</h6>
                                        <p class="story-description text-secondary justify-text pr-lg-3 story-sm-cDeck">{{ substr($frontPageStories[5]->cDeck, 0, 95) }} {{ strlen($frontPageStories[5]->cDeck) > 95 ? "...": "" }}</p>
                                </a>
                            </div>
                        </div>  <!--END OF TWO SIDE STORIES-->
                    </div>  <!--END OF ROW-->

                    <div class="row mt-0">
                        <div class="col-md-4">
                            <div>
                                <hr class="d-md-none">
                                <a class="story-style" href="{{ $frontPageStories[6]->path() }}">
                                    @if(count($frontPageStories[6]->headerPhotos) > 0)
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[6]->headerPhotos[0]->path() }}" alt="">
                                        </figure>
                                    @elseif(count($frontPageStories[6]->graphics) > 0 )
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[6]->graphics[0]->linkPath() }}" alt="">
                                        </figure>
                                    @endif
                                        <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[6]->title }}</h6>
                                        <p class="story-description text-secondary justify-text pr-lg-3 story-sm-cDeck">{{ substr($frontPageStories[6]->cDeck, 0, 107) }} {{ strlen($frontPageStories[6]->cDeck) > 107 ? "...": "" }}</p>
                                </a>
                            </div><!--END OF STORY 6-->
                        </div>
                        <div class="col-md-4">
                            <div>
                                <hr class="d-md-none">
                                <a class="story-style" href="{{ $frontPageStories[7]->path() }}">
                                    @if(count($frontPageStories[7]->headerPhotos) > 0)
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[7]->headerPhotos[0]->path() }}" alt="">
                                        </figure>
                                    @elseif(count($frontPageStories[7]->graphics) > 0 )
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[7]->graphics[0]->linkPath() }}" alt="">
                                        </figure>
                                    @endif
                                        <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[7]->title }}</h6>
                                        <p class="story-description text-secondary justify-text pr-lg-3 story-sm-cDeck">{{ substr($frontPageStories[7]->cDeck, 0, 107) }} {{ strlen($frontPageStories[7]->cDeck) > 107 ? "...": "" }}</p>
                                </a>
                            </div><!--END OF STORY 7-->
                        </div>


                        <div class="col-md-4">
                            <div class="mr-md-3">
                                <hr class="d-md-none">
                                <a class="story-style" href="{{ $frontPageStories[8]->path() }}">
                                    @if(count($frontPageStories[8]->headerPhotos) > 0)
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[8]->headerPhotos[0]->path() }}" alt="">
                                        </figure>
                                    @elseif(count($frontPageStories[8]->graphics) > 0 )
                                        <figure class="crop-right mt-3 d-none d-md-block">
                                            <img src="{{ $frontPageStories[8]->graphics[0]->linkPath() }}" alt="">
                                        </figure>
                                    @endif
                                        <h6 class="story-sm-title mt-1 mb-1">{{ $frontPageStories[8]->title }}</h6>
                                        <p class="story-description text-secondary justify-text pr-lg-3 story-sm-cDeck">{{ substr($frontPageStories[8]->cDeck, 0, 107) }} {{ strlen($frontPageStories[8]->cDeck) > 107 ? "...": "" }}</p>
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
                                            <img src="/media/images/movelogo.png" alt="">
                                            <div class="move-bottom-right">Around Town</div>
                                        </figure>
                                    </a>
                                </div>    
                            </div>
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/on-campus">
                                        <figure class="crop-move-photos move-container mb-0">
                                            <img src="/media/images/movelogo.png" alt="">
                                            <div class="move-bottom-right">On Campus</div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/movies">
                                        <figure class="crop-move-photos move-container">
                                            <img src="/media/images/movelogo.png" alt="">
                                            <div class="move-bottom-right">Movies</div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1 p-md-3">
                                <div>
                                    <a href="{{ config("app.move_url") }}/section/music">
                                        <figure class="crop-move-photos move-container">
                                            <img src="/media/images/movelogo.png" alt="">
                                            <div class="move-bottom-right">Music</div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>  <!--END OF MOVE LINKS-->
                    </div>
                </div>  <!--END OF MAIN CONTENT-->

            
                <div class="col-md-3 border-left d-none d-md-block">  <!--START OF SIDEBAR-->
                    <div class="border rounded main-content-box shadow p-2">
                        <h3 class="section-list-header header-font mb-lg-2 mt-lg-2"><a href="/stories/">LATEST</a></h3>
                        <ul class="section-list pl-lg-2 mb-lg-0">        <!--MAY NEED TO KEEP THIS-->
                            @foreach($latest as $story)
                                <li class="section-list-item pb-lg-3"><a href="{{ $story->path() }}">{{ $story->full_title }}</a></li>
                            @endforeach
                        </ul>
                    </div>   

                    <div class="twitter-box mt-lg-3">
                        <a class="twitter-timeline" data-height="400" data-theme="dark" data-border-color="#2F7A32" data-link-color="#2F7A32" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
                    </div>

                    @if(isset($ads['cubes'][0]))
                        @if(!is_null($ads['cubes'][0]->raw_content))
                            {!! $ads['cubes'][0]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="bottom-ad"></a>
                        @endif
                    @endif

                    <div class="border rounded main-content-box shadow p-2 mt-lg-2">
                        <h3 class="sidebar-issue-header header-font mb-lg-2 mt-lg-2">LATEST ISSUE</h3>
                        <div id="issue-link">
                            <a href="{{ $issue->issu_url }}">
                            @if(isset($issue->layout))
                                <img class="issu-img" src="{{ $issue->layout->path() }}" alt="Maneater front page" />
                            @endif  <!--MAY NEED TO KEEP THIS CLASS-->
                            </a>
                        </div>
                    </div>
                </div>      <!--END OF SIDEBAR-->
            </div>  <!--END OF MAIN CONTENT-->

            <div class="row border rounded main-content-box shadow pl-lg-3 ml-lg-3 mt-3 mr-lg-0 mx-0">   <!--NEWS SECTION-->
                <div class="col-md-5"> <!--SECTION MAIN STORY-->
                    <a href="/section/news"><h1 class="header-font mb-lg-3 mt-lg-2 w-50 border-bottom text-dark">NEWS</h1></a>

                    <a class="section-main-story" href="{{ $sections['news'][0]->path() }}">
                        @if(count($sections['news'][0]->headerPhotos) > 0 )
                            <figure class="crop-main-section-photo">
                                <img src="{{ $sections['news'][0]->headerPhotos[0]->path() }}" alt="">
                            </figure>
                        @elseif(count($sections['news'][0]->graphics) > 0 )
                            <figure class="crop-main-section-photo">
                                <img src="{{ $sections['news'][0]->graphics[0]->linkPath() }}" alt="">
                            </figure>
                        @endif
                        <h4 class="mb-0 mt-2">{{ $sections['news'][0]->title }}</h4>
                        <p class="main-story-cDeck">{{ substr($sections['news'][0]->cDeck, 0, 130) }} {{ strlen($sections['news'][0]->cDeck) > 130 ? "...": "" }}</p>
                    </a>
                </div> <!-- END OF SECTION MAIN STORY-->

                <div class="col-md-7 mx-0 px-0">

                    <ul class="list-unstyled pl-lg-3 pt-lg-3 mt-lg-5">
                        @for($i = 1; $i<5; $i++)
                        <a href="{{ $sections['news'][$i]->path() }}">
                            <li class="media border-bottom mr-md-3 ml-md-0 ml-2 pr-2">
                                <figure class="crop-section-photos mr-3 mt-2">
                                @if(count($sections['news'][$i]->headerPhotos) > 0 )
                                    <img class="mr-3" src="{{ $sections['news'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif(count($sections['news'][$i]->graphics) > 0 )
                                    <img clas="mr-3" src="{{ $sections['news'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                </figure>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">{{ $sections['news'][$i]->title }}</h5>
                                    <p class="justify-text subsection-story">{{ substr($sections['news'][$i]->cDeck, 0, 130) }} {{ strlen($sections['news'][$i]->cDeck) > 130 ? "...": "" }}</p>
                                </div>
                            </li>
                        </a>
                        @endfor
                    </ul>
                </div>
            </div>      <!--END OF NEWS SECTION-->



            <div class="row border rounded main-content-box shadow pl-lg-3 ml-lg-3 mt-3 mr-lg-0 mx-0">   <!--SPORTS SECTION-->
                <div class="col-md-7 mx-0 px-0 order-2 order-md-1">

                    <ul class="list-unstyled pt-lg-3 mt-lg-5">
                        @for($i = 1; $i<5; $i++)
                        <a href="{{ $sections['sports'][$i]->path() }}">
                            <li class="media mb-lg-3 border-bottom pr-lg-0 mr-lg-5 ml-2 pr-2">
                                <div class="media-body mr-3">
                                    <h5 class="mt-0 mb-1">{{ $sections['sports'][$i]->title }}</h5>
                                    <p class="justify-text subsection-story">{{ substr($sections['sports'][$i]->cDeck, 0, 130) }} {{ strlen($sections['sports'][$i]->cDeck) > 130 ? "...": "" }}</p>
                                </div>
                                <figure class="crop-section-photos mt-2">
                                @if(count($sections['sports'][$i]->headerPhotos) > 0 )
                                    <img class="mr-3" src="{{ $sections['sports'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif(count($sections['sports'][$i]->graphics) > 0 )
                                    <img clas="mr-3" src="{{ $sections['sports'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                </figure>
                            </li>
                        </a>
                        @endfor
                    </ul>
                </div>

                <div class="col-md-5 pr-lg-4 order-1 order-md-2">

                    <a class="right-align-text" href="/section/sports"><h1 class="header-font mb-lg-3 mt-lg-2 border-bottom text-dark">SPORTS</h1></a>

                    <a class="section-main-story" href="{{ $sections['sports'][0]->path() }}">
                        @if(count($sections['sports'][0]->headerPhotos) > 0 )
                            <figure class="crop-main-section-photo">
                                <img src="{{ $sections['sports'][0]->headerPhotos[0]->path() }}" alt="">
                            </figure>
                        @elseif(count($sections['sports'][0]->graphics) > 0 )
                            <figure class="crop-main-section-photo">
                                <img src="{{ $sections['sports'][0]->graphics[0]->linkPath() }}" alt="">
                            </figure>
                        @endif
                        <h4 class="mb-0 mt-2">{{ $sections['sports'][0]->title }}</h4>
                        <p class="main-story-cDeck">{{ substr($sections['sports'][0]->cDeck, 0, 130) }} {{ strlen($sections['sports'][0]->cDeck) > 130 ? "...": "" }}</p>
                    </a>
                    
                </div>
            </div>      <!--END OF SPORTS SECTION-->



            <div class="row border rounded main-content-box shadow pl-lg-3 ml-lg-3 mt-lg-3 mr-lg-0 mt-3 mx-0">   <!--OPINION SECTION-->
                <div class="col-md-5"> <!--SECTION MAIN STORY-->
                    <a href="/section/opinion"><h1 class="header-font mb-lg-3 mt-lg-2 w-50 border-bottom text-dark">OPINION</h1></a>

                    <a class="section-main-story" href="{{ $sections['opinion'][0]->path() }}">
                        @if(count($sections['opinion'][0]->headerPhotos) > 0 )
                            <figure class="crop-main-section-photo">
                                <img src="{{ $sections['opinion'][0]->headerPhotos[0]->path() }}" alt="">
                            </figure>
                        @elseif(count($sections['opinion'][0]->graphics) > 0 )
                            <figure class="crop-main-section-photo">
                                <img src="{{ $sections['opinion'][0]->graphics[0]->linkPath() }}" alt="">
                            </figure>
                        @endif
                        <h4 class="mb-0 mt-2">{{ $sections['opinion'][0]->title }}</h4>
                        <p class="main-story-cDeck">{{ substr($sections['opinion'][0]->cDeck, 0, 130) }} {{ strlen($sections['opinion'][0]->cDeck) > 130 ? ". . .": "" }}</p>
                    </a>
                </div> <!-- END OF SECTION MAIN STORY-->
                

                <div class="col-md-7 mx-0 px-0">

                    <ul class="list-unstyled pl-lg-3 pt-lg-3 mt-lg-5">
                        @for($i = 1; $i<5; $i++)
                        <a href="{{ $sections['opinion'][$i]->path() }}">
                            <li class="media mb-lg-3 border-bottom mr-3 ml-2 pr-2">
                                <figure class="crop-section-photos mr-3 mt-2">
                                @if(count($sections['opinion'][$i]->headerPhotos) > 0 )
                                    <img class="mr-3" src="{{ $sections['opinion'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif(count($sections['opinion'][$i]->graphics) > 0 )
                                    <img clas="mr-3" src="{{ $sections['opinion'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                </figure>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">{{ $sections['opinion'][$i]->title }}</h5>
                                    <p class="justify-text subsection-story">{{ substr($sections['opinion'][$i]->cDeck, 0, 130) }} {{ strlen($sections['opinion'][$i]->cDeck) > 130 ? "...": "" }}</p>
                                </div>
                            </li>
                        </a>
                        @endfor
                    </ul>
                </div>
            </div>      <!--END OF OPINION SECTION-->


            <footer class="row footer-style mt-3 pt-lg-3 p-3">
                <div class="col-4">
                    <div>
                        <h3>Sections</h3>
                        <ul class="footer-list mb-0">
                            <li><a href="{{env('APP_URL')}}/section/campus/">Campus</a></li>
                            <li><a href="{{env('APP_URL')}}/section/opinion/">Opinion</a></li>
                            <li><a href="{{env('APP_URL')}}/section/projects/">Projects</a></li>
                            <li><a href="{{env('APP_URL')}}/section/sports/">Sports</a></li>
                            <li><a href="{{env('APP_URL')}}/section/uwire/">UNews</a></li>
                        </ul>
                        <br>
                        <h3>The Maneater</h3>
                        <ul class="footer-list mb-0">
                            <li><a href="{{env('APP_URL')}}/graphics/">Graphics</a></li>
                            <li><a href="{{env('APP_URL')}}/layouts/">Layouts</a></li>
                            <li><a href="{{env('APP_URL')}}/photos/">Photos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h3>MOVE Magazine</h3>
                        <ul class="footer-list mb-0">
                            <li><a href="http://move.themaneater.com/section/angles/">Columns</a></li>
                            <li><a href="http://move.themaneater.com/section/guide/">Guides</a></li>
                            <li><a href="http://move.themaneater.com/section/community/">In Town</a></li>
                            <li><a href="http://move.themaneater.com/section/music/">Music</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h3>Information</h3>
                        <ul class="footer-list mb-0">
                            <li><a href="{{env('APP_URL')}}/about/">About</a></li>
                            <li><a href="{{env('APP_URL')}}/about/accuracy/">Accuracy</a></li>
                            <li><a href="{{env('APP_URL')}}/about/advertising/">Advertising</a></li>
                            <li><a href="{{env('APP_URL')}}/about/contact/">Contact us</a></li>
                            <li><a href="https://themaneatermafia.wordpress.com/">Mafia</a></li>
                            <li><a href="{{env('APP_URL')}}/about/maneater-versus-missourian/">Missourian</a></li>
                            <li><a href="{{env('APP_URL')}}/order-photo/">Order a photo</a></li>
                            <li><a href="{{env('APP_URL')}}/about/scholarships/">Scholarships</a></li>
                            <li><a href="{{env('APP_URL')}}/staff/">Staff</a></li>
                            <li><a href="{{env('APP_URL')}}/reporters/info_pages/maneater-stylebook/">Stylebook</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>  <!--END OF CONTAINER-->
    </body>
</html>