<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="{{ asset('img/framework/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/framework/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Common CSS -->
    <link href="{{ asset('css/framework/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/framework/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashio/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashio/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <!-- 固有 CSS -->
    @yield('stylesheet')
</head>
<body>
    <!-- =======================================================
    contents start
  ======================================================= -->
    <section id="container">
        <!-- common header -->
        @include('layouts.header')
        <!-- common sidebar -->
        @include('layouts.sidebar')
        <!-- main contents -->
        <div id="app">
            @yield('main-content')
        </div>
        <!-- common footer -->
        @include('layouts.footer')
    </section>
    <!-- =======================================================
    contents end
  ======================================================= -->

    <!-- Common JS-->
    <script src="{{ mix('js/app.js')}}"></script>
    <script src="{{ asset('/js/framework/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/framework/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/framework/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('/js/framework/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/js/framework/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('/js/framework/common-scripts.js') }}"></script>


</body>
</html>
