<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Maneater</title>

    <!-- Styles -->

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="centerImage is-flex">
        <div class="nameplate">
            <a href="{{ config('app.url') }}">
                <img src="http://themaneater.com/media/style/2012-08/images/namplates/themaneater-hr.png">
            </a>
        </div>
    </div>
    <nav class="nav has-shadow" id="topNav">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item is-tab is-hidden-mobile" href="/section/campus">CAMPUS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/section/projects">PROJECTS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/section/unews">UNEWS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/section/sports">SPORTS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/section/opinion">OPINION</a>
                <a class="nav-item is-tab is-hidden-mobile">MOVE</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/section/blogs">BLOGS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/classifieds">CLASSIFIEDS</a>
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
                <a class="nav-item is-tab is-hidden-tablet">BLOGS</a>
                <a class="nav-item is-tab is-hidden-tablet">CLASSIFIEDS</a>
                <div class="field has-addons">
                    <form method="GET" action="/search" class="main-search-form">
                        <input type="hidden" name="type" value="Articles">
                        <p class="control">
                            <input class="input" type="text" name="search" placeholder="Search">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                »
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </nav>
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
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}
</body>
</html>
