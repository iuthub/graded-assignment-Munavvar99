<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'melon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" >
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    @yield('styles')


<!-- JQuery -->
    <script type="text/javascript" src="{{ asset('mdb/js/jquery-3.4.0.min.js') }}"></script>
</head>
<body>
<!-- Nav notification count is dynamic. -->
        @include('admin.nav')
<div id="app">
    <main>
        @yield('content')
    </main>
</div>


<!-- SCRIPTS -->

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
@yield('js')
</body>
</html>
