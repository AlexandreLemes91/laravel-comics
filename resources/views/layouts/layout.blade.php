<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('imgs/favicon.ico') }}" type="image/x-icon">
        <title>DC COMICS</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        {{-- HEADER --}}
        @include('partials.header')

        <main>
            @yield('content')
        </main>
        
        {{-- FOOTER --}}
        @include('partials.footer')
        
    </body>
</html>
