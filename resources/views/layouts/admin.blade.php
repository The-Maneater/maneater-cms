<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">--}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/2.5.1/flatpickr.min.css">
    <style>
        aside.menu{
            margin-left: 20px;
        }
        td a{
            color: #2F7A32;
        }
    </style>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('admin.navigation.top')
    <div class="form-container f-row">
        @include('admin.navigation.side-bar')
        <div class="content p-content">
            @if(Session::has('status'))
            <div class="alert alert-success">
               <p>{{ session('status') }}</p>
            </div>
            @endif
            @yield('content')
        </div>
    </div>
    @yield('footer')
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    @yield('scripts')
</body>