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

        <title>{{ config('app.name', 'IP Media River') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
