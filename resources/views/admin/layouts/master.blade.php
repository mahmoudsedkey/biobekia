<!DOCTYPE html>
<html>
 <head>

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/admin/login.css')}}" />
     <link rel="stylesheet" href="{{asset('css/admin/main.css')}}">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
     <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    </head>
    <body>

        @yield('navbar')
        @yield('content')
        @yield('footer')


        <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/admin/main.js')}}"></script>

    </body>
</html>
