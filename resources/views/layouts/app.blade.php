<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('paper/img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('paper/img/apple-icon.png') }}">

    <!-- Caronical -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard-laravel" />

    <!-- Social Tags -->
    <meta name="keywords" content="covid, corona, bootstrap 4 dashboard, laravel">
    <meta name="description" content="Covid-19 Tracker app by group 8">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Covid-19 tracker app by group 8">
    <meta itemprop="description" content="This is app is using for tracking covid-19 disease, development with a bootstrap 4 Admin Dashboard built for Laravel Framework">
    <meta itemprop="image" content="{{ asset('paper/img/covid-19.jpg') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@covidTrackerApp">
    <meta name="twitter:title" content="Covid Tracker app Laravel by group 8">
    <meta name="twitter:description" content="This is app is using for tracking covid-19 disease, development with a bootstrap 4 Admin Dashboard built for Laravel Framework.">
    <meta name="twitter:creator" content="@Group8">
    <meta name="twitter:image" content="{{ asset('paper/img/covid-19.jpg') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Covid Tracker app Laravel by group 8" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/paper-dashboard-laravel" />
    <meta property="og:image" content="{{ asset('paper/img/covid-19.jpg') }}"/>
    <meta property="og:description" content="This is app is using for tracking covid-19 disease, development with a bootstrap 4 Admin Dashboard built for Laravel Framework." />
    <meta property="og:site_name" content="Covid Tracker App" />

    <title>{{ config('app.name', 'Covid Tracker App') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('paper/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('paper/css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
</head>
<body>

    <script src="{{ asset('paper/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('paper/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('paper/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('paper/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <script src="{{ asset('paper/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('paper/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('paper/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
    <script src="{{ asset('paper/demo/demo.js') }}"></script>

    <div id="app">
        @include('shared.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('shared.footer')
    </div>

    @stack('scripts')

</body>
</html>
