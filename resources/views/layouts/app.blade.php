<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

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
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="container" id="main">
    <div style="
    display: flex;
    align-items: flex-end;
">
        {{--<div class="centerImage is-flex">--}}
            {{--<div class="nameplate">--}}
                {{--<a href="{{ config('app.url') }}">--}}
                    {{--<img src="http://themaneater.com/media/style/2012-08/images/namplates/themaneater-hr.png">--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <a class="clear-line-height" href="{{ config('app.url') }}">
            <img  src="https://themaneater.com/media/style/2012-08/images/namplates/maneaterss-hr.png" alt="">
        </a>
        <div style="display: flex;
        flex-flow: column;
        align-items: center;
        width: 100%;
        ">
        <h1 style="
    font-size: 4em;
    color: black;
    text-transform: uppercase;
">The Maneater</h1>
        <div style="width:100%">
            <nav class="nav has-shadow" id="topNav">
                    <div class="nav-left">
                        <a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'campus') !== false ? "active-nav" : "" }}" href="/section/campus">CAMPUS</a>
                        {{--<a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'projects') !== false ? "active-nav" : "" }}" href="/section/projects">PROJECTS</a>--}}
                        <a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'uwire') !== false ? "active-nav" : "" }}" href="/section/uwire">UNEWS</a>
                        <a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'sports') !== false ? "active-nav" : "" }}" href="/section/sports">SPORTS</a>
                        <a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'opinion') !== false ? "active-nav" : "" }}" href="/section/opinion">OPINION</a>
                        <a class="nav-item is-tab is-hidden-mobile move" href="{{ config('app.move_url') }}">MOVE</a>
                        <a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'photos') !== false ? "active-nav" : "" }}" href="/photos">PHOTOS</a>
                        <a class="nav-item is-tab is-hidden-mobile {{ strpos(request()->url(), 'classifieds') !== false ? "active-nav" : "" }}" href="/classifieds">CLASSIFIEDS</a>
                    </div>
                    <span class="nav-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
                    <div class="nav-right nav-menu">
                        <a class="nav-item is-tab is-hidden-tablet">CAMPUS</a>
                        <a class="nav-item is-tab is-hidden-tablet">PROJECTS</a>
                        <a class="nav-item is-tab is-hidden-tablet">UNEWS</a>
                        <a class="nav-item is-tab is-hidden-tablet">SPORTS</a>
                        <a class="nav-item is-tab is-hidden-tablet">OPINION</a>
                        <a class="nav-item is-tab is-hidden-tablet">MOVE</a>
                        <a class="nav-item is-tab is-hidden-tablet">PHOTOS</a>
                        <a class="nav-item is-tab is-hidden-tablet">CLASSIFIEDS</a>
                        <div class="field has-addons">
                            <form method="GET" action="/search" class="main-search-form">
                                <input type="hidden" name="type" value="Articles">
                                <p class="control">
                                    <input class="input input-clear" type="text" name="search" placeholder="Search">
                                </p>
                                <p class="control">
                                    <button class="button is-info maneater-search-button" type="submit">
                                        »
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
            </nav>
        </div>
        </div>
    </div>
    <nav class="nav has-shadow" id="subNav">
        <div class="container">
            <div class="nav-right">
                <a class="nav-item is-tab is-hidden-mobile" href="{{ url('/feedback') }}">FEEDBACK</a>
                <a class="nav-item is-tab is-hidden-mobile" href="{{ url('/staff/editors') }}">EDITORIAL STAFF</a>
                <a class="nav-item is-tab is-hidden-mobile" href="{{ url('/workforus') }}">WORK FOR US</a>
                <a class="nav-item is-tab is-hidden-mobile" href="{{url('/about/advertising') }}">ADVERTISING INFORMATION</a>
            </div>
            <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        </div>
    </nav>
        <div class="content">@yield('content')</div>
    @include('shared.footer')
</div>
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
