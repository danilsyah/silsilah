<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('ext_css')
    <style>
        .page-header {
            margin-top: 0px;
        }
    </style>

    <style>
        .navbar-default {
            background-color: #2c3e50;
            /* ganti dengan warna sesuai keinginan */
            border-color: #2c3e50;
        }

        .navbar-default .navbar-nav>li>a,
        .navbar-default .navbar-brand {
            color: #ffffff;
            /* warna teks */
        }

        .navbar-default .navbar-nav>li>a:hover,
        .navbar-default .navbar-brand:hover {
            color: #dddddd;
            /* warna saat hover */
        }
    </style>
    <style>
        body {
            padding-top: 70px; /* atur sesuai tinggi navbar kamu */
        }
    </style>
</head>

<body>
    <div id="app">
        @include('layouts.partials.nav')

        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('ext_js')
    @yield('script')
    <script>
        var header = $('h2.page-header').contents();
        str = '';
        mainText = header.filter(function() {
            // return type of text
            return this.nodeType === 3;
        })[0];
        str += mainText.data.trim();

        if (mainText.nextSibling) {
            // next siblings should be a small tag text
            str += " - " + mainText.nextSibling.innerText;
        }
        $('title').prepend(str + " - ");
    </script>
</body>

</html>
