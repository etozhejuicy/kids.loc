<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    @vite('resources/scss/app.scss')

    @yield('head')

    <title>@yield('title')</title>

    @hasSection('description')
    <meta name="description" content="@yield('description')" />
    @else
    <meta name="description" content="Добро пожаловать в мир книг вместе с проектом «Читай с детьми»! 📚" />
    @endif

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180x180.png">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192x192.png">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon-144x144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <!-- Google Chrome -->
    <meta name="theme-color" content="#ffffff">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#ffffff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">

    @hasSection('image')
    <meta property="og:image" content="{{ config('app.url') }}@yield('image')">
    @else
    <meta property="og:image" content="/preview.png">
    @endif

    @yield('opengraph')

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>