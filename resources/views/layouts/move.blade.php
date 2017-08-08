<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MOVE Magazine</title>

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="/css/move.css" rel="stylesheet">

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
            <a href="{{ config('app.move_url') }}">
                <img class="header-logo" src="http://move.themaneater.com/media/style/move-new/Images/moveHeader.png">
            </a>
        </div>
    </div>
    <nav class="nav" id="menu">
        <div class="container">
            <div class="nav-left">
                <a class="item is-tab is-hidden-mobile" href="/section/around-como">AROUND COMO</a>
                <a class="item is-tab is-hidden-mobile" href="/section/features">FEATURES</a>
                <a class="item is-tab is-hidden-mobile" href="/section/on-campus">ON CAMPUS</a>
                <a class="item is-tab is-hidden-mobile" href="/section/insight">INSIGHT</a>
                <a class="item is-tab is-hidden-mobile maneater" href="{{ config('app.maneater_url') }}">THE MANEATER</a>
            </div>
            <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
            <div class="nav-right nav-menu">
                <a class="nav-item is-tab is-hidden-tablet">AROUND COMO</a>
                <a class="nav-item is-tab is-hidden-tablet">FEATURES</a>
                <a class="nav-item is-tab is-hidden-tablet">ON CAMPUS</a>
                <a class="nav-item is-tab is-hidden-tablet">INSIGHT</a>
                <a class="nav-item is-tab is-hidden-tablet">THE MANEATER</a>
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
    <div class="content">@yield('content')</div>
    @include('shared.move-footer')
</div>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
@yield('scripts')
{{--<script src="/js/manifest.js"></script>--}}
{{--<script src="/js/vendor.js"></script>--}}
{{--<script src="/js/app.js"></script>--}}
</body>
</html>
