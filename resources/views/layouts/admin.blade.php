<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('admin.top-nav')
    <div class="form-container f-row">
        @include('admin.admin-navigation')
        @yield('content')
    </div>

</body>