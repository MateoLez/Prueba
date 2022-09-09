<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Prueba | @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <script src="https://kit.fontawesome.com/267f04779f.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>
    <body class="{{ $class ?? '' }}">

        {{-- Cerrar Sesión --}}
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            {{-- Barra izquierda y Movil --}}
            @include('layouts.navbars.sidebar')
        @endauth

        {{-- Barra Superior PC --}}
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        <script src="{{ asset('../resources/js/app.js') }}"><script>
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


        @stack('js')
            <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        @yield('js')
    </body>
</html>
