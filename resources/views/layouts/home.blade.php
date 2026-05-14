<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="keywords" content="@yield('keywords')">
        <meta name="description" content="@yield('description')">
        @section('head')
            <link href="{{ asset('assets/style.css') }}" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">

            <link rel="preconnect" href="{{ asset('assets/style.css') }}">
            <link rel="preconnect" href="{{ asset('assets/style.css') }}" crossorigin>
            <link
            href="{{ asset('assets/style.css') }}/css/fonts.css"
            rel="stylesheet">

            
        @show
    </head>
    <body>
        @section('header')
            @include('front.header')
        @show
        @yield('slider')
 
        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            @include('front.footer')
        @show
    </body>
</html>