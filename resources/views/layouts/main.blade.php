<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LogicDS - @yield('title', 'The Home of Logic')</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Logic DS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @if(Route::has('login'))
                <ul class="pull-right navbar-nav">
                    <li class="nav-item">
                         <span class="navbar-text">
                             {{Auth::user()->name ? Auth::user()->name : Auth::user()->email}}

                             <i class="fas fa-user-circle"></i>
                         </span>
                    </li>

                    @auth
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">Logout</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('login')}} " class="nav-link">Login/Signup</a>
                    </li>
                    @endauth
                </ul>
                @endif
            </div>
        </nav>
    </header>

    @yield('content')
</div>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>