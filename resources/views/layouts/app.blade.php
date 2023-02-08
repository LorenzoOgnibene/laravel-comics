<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DC Comics</title>
            <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        <main>
            @include('partials.jumbo')
            
            @yield('film-cards')
        </main>
    </body>
</html>