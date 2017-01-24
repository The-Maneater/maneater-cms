<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('admin.navigation.top')
    <div class="form-container f-row">
        @include('admin.navigation.side-bar')
        <div>
            @if(Session::has('status'))
            <div class="alert alert-success">
               <p>{{ session('status') }}</p>
            </div>
            @endif
            @yield('content')
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    @yield('scripts')
</body>