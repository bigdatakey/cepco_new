<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $seo_title ?? 'Cepco'}}</title>
    <meta name="description" content="{{ $seo_description ?? 'Cepco'}}" />
    <meta name="keywords" content="{{ $seo_keywords ?? 'Cepco'}}" />
    
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserhappy">
        Ваш браузер <strong>устарел</strong>. Пожалуйста <a href="https://browsehappy.com/"  target="_blank">обновите</a>.
      </p>
    <![endif]-->
    <noscript>
        Вам нужно включить JavaScript в своем браузере, чтобы отображение этой страницы было корректно.
    </noscript>


    <div id="app" class="wrapper">
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')

        @include('modals.popup')
    </div>

    <script src="/js/app.js"></script>
    @yield('scripts')

</body>
</html>
