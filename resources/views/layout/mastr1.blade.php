<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    <head>
        <title>@yield('title','no titel')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('resources')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('resources')}}/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="{{asset('resources')}}/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/uikit.min.css" />

        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
        {{-- @section('navbar')
        @include('inc.navbar')
        @endsection --}}
        @yield('nav')
        @yield('content')
        @section('sidebar')
          THis is sidebar for parent
         @show
         @include('inc.footer')
    </body>
