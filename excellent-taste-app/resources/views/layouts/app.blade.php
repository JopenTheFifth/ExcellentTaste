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

<div id="app">
    <div class="sidebar">

        <div id="userInfoSection">
            Welcome back {{\Illuminate\Support\Facades\Auth::user()->name}}
            <img class="mx-auto" src="{{asset('/images/dashboard/profile_pic.jpg')}}">
            <hr />
        </div>

        <div id="dashboard-main-links">
            <router-link class="" to="/dashboard/reservations" exact>Reservations</router-link>
            <router-link to="/dashboard/orders">Orders</router-link>
        </div>

    </div>


    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>
