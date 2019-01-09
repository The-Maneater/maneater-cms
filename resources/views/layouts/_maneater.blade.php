<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

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
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.0/jquery.lazyload.min.js" type="text/javascript"></script>
        <script type="text/javascript">
                jQuery(document).ready(function ($) {
                $("img.lazy").lazyload(
                    { data_attribute: "orig" 
                    });
                });
            </script>
        <script>

            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script type="text/javascript" src="/js/maneater.js"></script>
        @yield('scripts')

    </head>
    <body id="main" class="page-background">
        <div class="container-fluid w-100 h-100 pl-md-0 pl-xs-3">
            <div class="row px-0 align-items-center h-100">
                <div id="logo-container" class="col-md-auto pl-3 pr-1">
                    <a href="{{ config('app.url') }}">
                        <img src="https://www.themaneater.com/media/2018/97/photos/ManeaterLogo.png" class="logo-size logo">
                   </a>
                </div>

                <div id="header-right-box" class="col px-0">
                    <div id="header-box" class="text-center d-none d-md-block mb-2">
                        <span class="header-style"><a href="{{ config('app.url') }}" id="header" class="mr-5 header-text header-font">THE MANEATER</a>
            
                        <a href="https://twitter.com/TheManeater" class="ml-5 mr-2"><i class="fab fa-twitter topbar-icon icon-style align-middle"></i></a>
                        <a href="https://www.facebook.com/themaneaterMU/" class="mr-2"><i class="fab fa-facebook topbar-icon icon-style align-middle"></i></a>
                        <a href="https://www.instagram.com/themaneater/"><i class="fab fa-instagram topbar-icon icon-style align-middle"></i></a>
                        </span>
                    </div>

                    <nav id="navigation-bar" class="navbar navbar-expand-lg navbar-light bg-dark navbar-height pl-0">
                        <a class="navbar-brand header-font text-white d-block d-lg-none pl-4" id="mobile-header" href="#">THE MANEATER</a>
                        <button class="navbar-toggler mr-2 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse collapse-margin hamburger-dropdown shadow rounded-bottom bg-dark" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item dropdown">
                                    <a class="nav-link text-white dropdown-links" href="/section/news" id="navbarDropdownMenuLink" ondblclick="newsClicked()">
                                           NEWS
                                    </a>

                                    <div class="dropdown-menu bg-success remove-top-margin" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/section/news/city') }}">City</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/on-campus') }}">On Campus</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/student-politics') }}">Student Politics</a>
                                        <a class="dropdown-item" href="{{ url('/section/news/university') }}">University</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link text-white dropdown-links" href="/section/sports" id="navbarDropdownMenuLink" ondblclick="sportsClicked()">
                                      SPORTS
                                    </a>
                                    <div class="dropdown-menu bg-success remove-top-margin" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/section/sports/baseball') }}">Baseball</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/club-sports') }}">Club Sports</a>
                                        <a class="dropdown-item" href="{{ url('/section/sports/cross-country') }}">Cross-Country</a>
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

                                <li class="nav-item dropdown">
                                    <a class="nav-link text-white dropdown-links" href="/section/opinion" id="navbarDropdownMenuLink" ondblclick="opinionClicked()">
                                      OPINION
                                    </a>
                                    <div class="dropdown-menu bg-success remove-top-margin" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/section/opinion/columns') }}">Columns</a>
                                        <a class="dropdown-item" href="{{ url('/section/opinion/editorial-board') }}">Editorial Board</a>
                                        <a class="dropdown-item" href="{{ url('/section/opinion/letters-to-the-editor') }}">Letters to the Editor</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ config('app.move_url') }}">MOVE</a>
                                </li> 

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ url('/photos') }}">PHOTOS</a>
                                </li>
                                <li class="nav-item mr-4">
                                    <a class="nav-link text-white" href="{{ url('/classifieds') }}">CLASSIFIEDS</a>
                                </li>
                            </ul>

                            <form class="form-inline my-2 my-md-0 input-group mr-1 collapsed-searchbox searchbox-width" method="GET" action="/search">
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

            
            @yield('content')


            <footer class="row footer-style mt-3 pt-md-3 p-3">

                <div id="footerLogo" class="col-md-2 offset-1">
                    <img src="http://themaneater.com/media/style/2012-08/images/namplates/footer.png" alt="maneater logo">
                    <p>© 2017 The Maneater Student Newspaper</p>
                </div>
                <div class="col-md-2">
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
                <div class="col-md-2 p-0">
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
                <div class="col-md-2">
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
                
            </footer>
        </div>  <!--END OF CONTAINER-->
    </body>
</html>