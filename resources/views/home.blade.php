<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC COMICS</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <div class="container">
                <a href="{{ route('home') }}"><img src="{{ asset('imgs/dc-logo.png') }}" alt="dc-logo"></a>

                <ul>
                    <a href="{{ route('home') }}"><li>COMICS</li></a>
                    <a href="{{ route('home') }}"><li>NEWS</li></a>
                </ul>
            </div>
        </header>

        <footer>
            
        </footer>
        
    </body>
</html>
