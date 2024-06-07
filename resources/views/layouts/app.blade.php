<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <meta name="description" content="Главная страница">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <link rel="apple-touch-icon" sizes="180x180"
        <link rel="icon" type="image/png" sizes="32x32"


        @vite(['resources/css/app.css', 'resources/sass/main.sass', 'resources/js/app.js'])
        @yield('scripts')
    </head>

    <body>
        @include('shared.header')

        @yield('chat')

        <main class="py-16 lg:py-20">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        @include('shared.footer')
    </body>

</html>
