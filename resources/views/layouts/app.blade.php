<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <style>
        body{
            font-family: Roboto, Helvetica, Tahoma, Arial, sans-serif;
        }
        #topNav .nav-left a.nav-item{
            color:white;
            background: #474747;
            border-bottom: 2px solid #474747;
            border-top: 2px solid #474747;
            display: block;
            font-weight: bold;
            font-family: "Roboto Condensed";
            font-size: 26px;
            line-height: 1em;
            padding: 4px 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        #topNav .nav-left a.nav-item:hover{
            color: white;
            background: #2F7A32;
        }
        #topNav .nav-left a.nav-item.is-tab:hover{
            border-bottom-color: #2F7A32;
        }
        #topNav .nav-left a.nav-item.is-tab.is-active{
            color: white;
            background: #2F7A32;
            border-bottom-color: #2F7A32;
        }
        #topNav{
            min-height: 38px;
            padding: 0 2.5%;
            background-color: #474747;
        }
        #topNav .container{
            min-height: 38px;
        }
        #topNav .nav-left{
            height:38px;
            overflow-x: visible;
            overflow-y: visible;
        }
        #main{
            width:100%;
            max-width: 1440px;
        }
        #topNav .nav-left a.nav-item.is-tab{
            padding: 4px 10px;
        }
        .centerImage{
            width: 100%;
            justify-content: center;
        }
        .nameplate{
            width: 50%;
        }
        #subNav{
            background: #2F7A32;
            margin-bottom: 20px;
            min-height: 19px;
        }

        #subNav .container{
            min-height: 19px;
        }

        #subNav .nav-right{
            height: 19px;
        }

        #subNav .nav-right a.nav-item{
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            padding: 0 5px;
            text-transform: uppercase;
            white-space: nowrap;
        }
        #subNav .nav-right a.nav-item:hover{
            background: #fff;
            color:#2F7A32;
            border-bottom-color: transparent;
        }
        a{
            color:#2F7A32;
        }
        .sectionlist li{
            padding: 0.75em 0 0;
        }

        .ui-tabs-panel a{
            color: black;
        }
        a.sectionlabel{
            border-bottom: 2px solid #f1f1f1;
            color: #474747;
            display: block;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: Roboto Condensed;
        }
        .sm-logos{
            display: flex;
            justify-content: space-between;
            margin: 1em 0;
        }
        .sm-logos a{
            width: 40%;
        }

        .col-22{
            width: 22%;
        }

        h2.sectionlabel {
            background: #474747;
            border-bottom: 2px solid #2F7A32;
            color: #fff;
            font-size: 20px;
            text-align: center;
            letter-spacing: 1px;
            padding: 3px 7px;
            text-transform: uppercase;
        }
        .sectionbox {
            background: #f1f1f1;
            padding: 10px;
        }
        .issu{
            display: flex;
            justify-content: space-between;
        }
        .h1-content{
            font-size: 2.75em;
            margin: 0 0 0.25em;
        }
        h1{
            font-size: 32px;
            margin: 5px 0;
            padding: 0;
            font-family: Lora;
            letter-spacing: -0.5px;
            font-weight: bold;
            line-height: 1.2em;
        }
        .h3-content{
            font-size: 1.5em;
            line-height: 1.25em;
        }
        .h3{
            color: #474747;
            font-size: 18px;
            line-height: 22px;
            margin: 0;
            padding: 0;
        }
        .byline {
            color: #959595;
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 0.5em;
            line-height: 1.25em;
            font-family: Roboto Condensed;
        }
        .published{
            color: #474747;
            font-weight: bold;
            font-family: Roboto Condensed;
            margin: 0 0 0.5em;
            line-height: 1.25em;
            font-size: 18px;
        }
        .main-picture{
            padding-top: 10px;
            padding-bottom: 20px;
        }
        .articleInfo{
            justify-content: flex-end;
            flex-flow:column;
            text-align: right;
        }
        .story a {
            color: #000;
        }
        .story h2{
            font-family: Lora;
            font-size: 1.75em;
            color: #474747;
            margin: 0;
            padding: 0;
        }
        .story{
            border-bottom: 1px solid #e6e6e6;
            padding-bottom: 1em;
            margin-bottom: 1em;
        }
        .substory h1 a{
            color: black;
        }
        .substory{
            padding-bottom: 20px;
        }
    </style>

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
            <a href="{{ env('APP_URL') }}">
                <img src="http://themaneater.com/media/style/2012-08/images/namplates/themaneater-hr.png">
            </a>
        </div>
    </div>
    <nav class="nav has-shadow" id="topNav">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item is-tab is-hidden-mobile" href="/sections/campus">CAMPUS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/sections/projects">PROJECTS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/sections/unews">UNEWS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/sections/sports">SPORTS</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/sections/opinion">OPINION</a>
                <a class="nav-item is-tab is-hidden-mobile">MOVE</a>
                <a class="nav-item is-tab is-hidden-mobile" href="/sections/blogs">BLOGS</a>
                <a class="nav-item is-tab is-hidden-mobile">CLASSIFIEDS</a>
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
                    <p class="control">
                        <input class="input" type="text" placeholder="Search">
                    </p>
                    <p class="control">
                        <a class="button is-info">
                            »
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </nav>
    <nav class="nav has-shadow" id="subNav">
        <div class="container">
            <div class="nav-right">
                <a class="nav-item is-tab is-hidden-mobile">FEEDBACK</a>
                <a class="nav-item is-tab is-hidden-mobile">EDITORIAL STAFF</a>
                <a class="nav-item is-tab is-hidden-mobile">WORK FOR US</a>
                <a class="nav-item is-tab is-hidden-mobile">ADVERTISING INFORMATION</a>
            </div>
            <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        </div>
    </nav>
    @yield('content')

</div>
    <!-- Scripts -->
    <script src="/js/all.js"></script>
</body>
</html>
