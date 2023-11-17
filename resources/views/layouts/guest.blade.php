<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="index, follow">
        <meta name="description" content="IP Media River: Especialistas en Desarrollo Web y Páginas Web en Tijuana, Baja California. Ofrecemos soluciones de diseño web personalizadas y desarrollo de aplicaciones web de alto rendimiento. Optimiza tu presencia en línea con nuestro equipo de expertos. ¡Contáctanos para impulsar tu negocio en la era digital!">
        <meta name="keywords" content="Páginas Web, Páginas Web en Tijuana, Diseño Web en Tijuana, Agencia de Marketing Digital en Tijuana, Agencia de Marketing Digital, Agencia de Marketing Digital en Baja California, Aplicaciones Web a la medidad, Desarrollo de Software, Páginas Web Profesionales, Marketing Medico Tijuana, Aplicaciones Móviles, Apps en Tijuana, Páginas Web en México, Paginas Web Profesionales, Agencia Marketing Mexicana">
        <meta name="author" content="IP Media River">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#F2FAFF">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#F2FAFF">

        <title>{{ config('app.name', 'IP Media River') }} - {{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-B0LE5P4YKQ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-B0LE5P4YKQ');
        </script>


    </head>
    <body class="antialiased" id="app">

        <!-- Header principal -->
        <x-header-master></x-header-master>

        <!-- Enlaces de contacto laterales -->
        <x-contact-links></x-contact-links>

        <!-- Contenido principal -->
        {{ $slot }}

        <!-- Footer principal -->
        <x-footer-master></x-footer-master>
    </body>
</html>
