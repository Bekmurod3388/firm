<!DOCTYPE html>
<html lang="ru">

<head lang="ru">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" rel="shortcut icon" href="{{asset('img/favicon/favicon.ico')}}">
    <link type="image/png" sizes="16x16" rel="icon" href="{{asset('img/favicon/favicon-16x16.png')}}">
    <link type="image/webp" sizes="16x16" rel="icon" href="{{asset('img/favicon/favicon-16x16.webp')}}">
    <link type="image/png" sizes="32x32" rel="icon" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link type="image/webp" sizes="32x32" rel="icon" href="{{asset('img/favicon/favicon-32x32.webp')}}">
    <link type="image/png" sizes="192x192" rel="icon" href="{{asset('img/favicon/android-chrome-192x192.png')}}">
    <link type="image/webp" sizes="192x192" rel="icon" href="{{asset('img/favicon/android-chrome-192x192.webp')}}">
    <link type="image/png" sizes="512x512" rel="icon" href="{{asset('img/favicon/android-chrome-512x512.png')}}">
    <link type="image/webp" sizes="512x512" rel="icon" href="{{asset('img/favicon/android-chrome-512x512.web')}}p">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="manifest" href="{{asset('img/favicon/manifest.json')}}">
    <link rel="preload" as="font" href="{{asset('fonts/ProximaNova-Regular.woff2')}}"  crossorigin="anonymous">
    <link rel="preload" as="font" href="{{asset('fonts/ProximaNova-Bold.woff2')}}"  crossorigin="anonymous">
    <link rel="preload" as="font" href="{{asset('fonts/ProximaNova-Light.woff2')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet"
          href="{{asset('css/fonts.css')}}" as="style">
    <link rel="stylesheet"
          href="{{asset('css/libs.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('css/swiper-bundle.min.css')}}">
    <title>CA-DC</title>
</head>


<body class="{{url()->current() == route('index') ? 'main-page' : '' }} " >
<div class="container">
    @yield('header')
    <main class="main">
        @include('sweetalert::alert')


        {{ $slot }}
    </main>

    @yield('footer')
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/libs.min.js')}}"></script>
    <script src="{{asset('js/main.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    @stack('script')
</div>
</body>
</html>
