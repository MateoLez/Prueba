<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ 'Prueba | Inicio' }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/app.css" rel="stylesheet">

        {{-- Alertas y Scroll --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="{{ asset('argon') }}/js/app.js" defer></script>
        <script src="{{ asset('argon') }}/js/scroll.js" defer></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- Animacion Scroll --}}
        <script src="https://unpkg.com/scrollreveal"></script>
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/267f04779f.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </head>

    {{-- Web Body --}}
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white-100">
            {{-- Incluir Navegador |menu| --}}
            @include('layouts.navbars.navs.web')
            @yield('content')
        </div>

        {{-- Aceptar seccion JS --}}
        @yield('js')
    </body>

</html>
