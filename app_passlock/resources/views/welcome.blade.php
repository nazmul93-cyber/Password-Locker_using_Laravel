<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pass</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body class="container my-5 d-flex justify-content-center">
        <div >
            @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-secondary ">Dashboard</a>
                    @else

                        <a href="{{ route('login') }}" class="btn btn-secondary ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-5 btn btn-secondary ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

      
            
        </div>
    </body>
</html>
