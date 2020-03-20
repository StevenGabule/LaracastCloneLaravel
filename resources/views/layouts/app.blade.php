<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
            <div class="container">

                <div class="topbar-left">
                    <button class="topbar-toggler">&#9776;</button>
                    <a class="topbar-brand" href="/">
                        BAHDCASTS
                    </a>
                </div>


                <div class="topbar-right">
                    <ul class="topbar-nav nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- end of toolbar -->
        <!-- Start Header -->
        @yield('header')
        <!-- End Header -->
        <main class="main-content">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row gap-y justify-content-center">
                    <div class="col-12 col-lg-6">
                        <ul class="nav nav-primary nav-hero">
                            <li class="nav-item hidden-sm-down">
                                <a class="nav-link" href="/">Bahdcasts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <login></login>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/thesaas.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
