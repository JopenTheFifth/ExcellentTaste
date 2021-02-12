<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">


</head>
<body>

<div id="app" class="container">

    <div class="sidebar">
        <ul id="dashboard-main-links" class="list-group list-group-horizontal">
            <li class="list-group-item"><router-link class="" to="/dashboard/reservations" exact>Reservations</router-link></li>
            <li class="list-group-item"><router-link to="/dashboard/orders">Orders</router-link></li>
        </ul>
    </div>

    <div class="content ">
        @yield('content')
    </div>
</div>

</body>
</html>
