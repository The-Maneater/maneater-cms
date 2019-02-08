<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Maneater</title>

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
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">--}}


    @yield('links')


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>


<div class="columns test-back topbar-nav">
    <div class="column is-2 topbar-nav logo">
        <a href="{{ config('app.url') }}">
            <figure class="crop-logo">
                <img  src="/media/images/ManeaterLogo.png" alt="">
            </figure>
       </a>
    </div>
    <div class="column is-10 topbar-nav">
        <div class="columns">
            <div class="column is-6 is-offset-2 padding-bottom title-top-padding">
                <a href="{{ config('app.url') }}"><h1 class="page-title">The Maneater</h1></a>
            </div>
            <div class="column is-2 is-offset-1 topbar-icons">
                <a href="https://twitter.com/TheManeater"><i class="fab fa-twitter topbar-icon"></i></a>
                <a href="https://www.facebook.com/themaneaterMU/"><i class="fab fa-facebook topbar-icon"></i></a>
                <a href="https://www.instagram.com/themaneater/"><i class="fab fa-instagram topbar-icon"></i></a>
            </div>
        </div>

        <div class="navbar1">
            
            <a class="extra-padding" href="/section/campus">CAMPUS</a> 
            
            <div class="dropdown1">
                <button class="dropbtn1">
                    <a href="/section/uwire">UNEWS</a> 
                </button>
                <div class="dropdown1-content">
                    <a href="#">City</a>
                    <a href="#">National</a>
                    <a href="#">On Campus</a>
                    <a href="#">Student Politics</a>
                    <a href="#">University</a>
                </div>
            </div> 
            <div class="dropdown1">
                <button class="dropbtn1">
                    <a href="/section/sports">SPORTS</a> 
                </button>
                <div class="dropdown1-content">
                    <a href="#">Baseball</a>
                    <a href="#">Club Sports</a>
                    <a href="#">Cross-Country</a>
                    <a href="#">Football</a>
                    <a href="#">Golf</a>
                    <a href="#">Gymnastics</a>
                    <a href="#">Men’s basketball</a>
                    <a href="#">Soccer</a>
                    <a href="#">Softball</a>
                    <a href="#">Swim and Dive</a>
                    <a href="#">Tennis</a>
                    <a href="#">Track and Field</a>
                    <a href="#">Softball</a>
                    <a href="#">Volleyball</a>
                    <a href="#">Women’s basketball</a>
                    <a href="#">Wrestling</a>
                </div>
            </div> 
            <div class="dropdown1">
                <button class="dropbtn1">
                    <a href="/section/sports">OPINION</a> 
                </button>
                <div class="dropdown1-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div> 
            <div class="dropdown1">
                <button class="dropbtn1">
                    <a href="/section/sports">MOVE</a> 
                </button>
                <div class="dropdown1-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div> 
            <div class="dropdown1">
                <button class="dropbtn1">
                    <a href="/section/sports">PHOTOS</a> 
                </button>
                <div class="dropdown1-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div> 
            <div class="dropdown1">
                <button class="dropbtn1">
                    <a href="/section/sports">CLASSIFIEDS</a> 
                </button>
                <div class="dropdown1-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div> 


            <div class="field has-addons topbar-searchbar navbar-searchbox">
                <form method="GET" action="/search" class="main-search-form">
                    <input type="hidden" name="type" value="Articles">
                    <p class="control topbar-searchbar-searchbox">
                        <input class="input input-clear" type="text" name="search" placeholder="Search">
                    </p>
                    <p class="control">
                        <button class="button is-info maneater-search-button" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>


<nav class="nav sub-nav">
    <div class="nav-menu sub-navbar">
        <div class="nav-right">
            <a class="navb-item sub-navbar-items" href="{{ url('/feedback') }}">FEEDBACK</a>
            <a class="navb-item sub-navbar-items" href="{{ url('/staff/editors') }}">EDITORIAL STAFF</a>
            <a class="navb-item sub-navbar-items" href="{{ url('/workforus') }}">WORK FOR US</a>
            <a class="navb-item sub-navbar-items" href="{{url('/about/advertising') }}">ADVERTISING INFORMATION</a>
        </div>
    </div>
</nav>


<div class="content">@yield('content')</div>
@include('shared.footer')

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}
    @yield('main-scripts')
</body>
</html>
