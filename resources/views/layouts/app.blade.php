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
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Javascript -->
    <script src="{{ asset('js/ bootstrap.js')}}"></script>
</head>
<body>
    <div id="app">
        @include('layouts._includes.nav')

        @if(Session::has('flash_message'))
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div align="center" class="alert {{ Session::get('flash_message') ['class'] }}">
                        {{ Session::get('flash_message') ['msg'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
