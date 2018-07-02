<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/todo.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height full-bg">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <img class="" src="http://todoarts.com/wp-content/uploads/2016/02/TODO_Logo_black_2.png" alt="todo-logo" width="400">
                <h3 class="desc">Simple Todo Application</h3>
            </div>                
        </div>
    </body>
</html>
