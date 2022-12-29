<!DOCTYPE html>
<!-- saved from url=(0024)http://biobekia.com/home -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="" dir="" style=""><!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">

       <title> @yield('title') </title>

     <link rel="apple-touch-icon" href="http://biobekia.com/apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('resources')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('resources')}}/css/fonticons.css">
    <link rel="stylesheet" href="{{asset('resources')}}/css/stylesheet.css">
    <link rel="stylesheet" href="{{asset('resources')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('resources')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('resources')}}/css/bootstrap-rtl.min.css">

    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{asset('../resources')}}/css/plugins.css">
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('resources')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('resources')}}/css/style2.css">
    {{-- <link rel="stylesheet" href="{{asset('resources')}}/css/dropzone.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Cairo:600" rel="stylesheet">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('../resources/')}}/css/responsive.css">

    <style media="screen">
        .home-icon {
            width: 100px;
            text-align: center;
            margin: auto;
            display: block;
        }

        .home-icon + h5 {
            text-align: center;
        }

   
    </style>

    <script src="{{asset('resources')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('resources')}}/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="{{asset('resources')}}/js/jquery-1.11.1.min.js"></script>
    {{-- <script src="{{asset('resources')}}/js/dropzone.js" type="text/javascript"></script> --}}

    <!-- //js-->

</head>
<body data-spy="scroll" data-target=".navbar-collapse" style="width: 100vw; overflow-x: hidden;">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--<header id="main_menu" class="header navbar-fixed-top">
    <div class="main_menu_bg">
        <div class="container">
            <div class="row">
                <div class="nave_menu"> -->
        @yield('navbar')
        <div class="jumbotron" style="margin-top: 30px;
            padding: 0; background-color:white">

            @yield('content')



        </div>
            @yield('footer')
            <script src="{{asset('resources')}}/js/form.js"></script>
            <script src="{{asset('resources')}}/js/jquery-1.11.2.min.js"></script>

            <script src="{{asset('resources')}}/js/bootstrap.min.js"></script>
            <script src="{{asset('resources')}}/js/jquery.easypiechart.min.js"></script>
            <script src="{{asset('resources')}}/js/jquery.mixitup.min.js"></script>
            <script src="{{asset('resources')}}/js/jquery.easing.1.3.js"></script>

            <script src="{{asset('resources')}}/js/plugins.js"></script>
            <script src="{{asset('resources')}}/js/main.js"></script>




    </body>
</html>
