<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rory C. Laster</title>

        <link href="/css/welcome.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    rory.cl
                </div>

                <div class="links">
                    <a href="https://www.linkedin.com/in/rory-laster-857374a7">LinkedIn</a>
                    <a href="https://github.com/rorclast">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
