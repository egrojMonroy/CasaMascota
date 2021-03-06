<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




    <!-- Scripts -->
    <script>
        window.Laravel ={!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                    </button>
                    <!-- Branding Image -->
                            <?php
                            $url =  "{$_SERVER['REQUEST_URI']}";
                        if(strcmp($url, "/login")!='0'){
                            $p = session()->all();
                            if(count($p)>4){
                                $p = array_chunk($p,1);
                                $rol = $p[4][0][0];            
                                if($rol == 3 || $rol ==5){
                            ?>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Control <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="navbar-brand" href="{{ url('/breeds') }}">Breeds</a></li>
                                <!-- <li><a class="navbar-brand" href="{{ url('/salons')}}">Salons</a></li> -->
                                <li><a class="navbar-brand" href="{{ url('/users')}}">Users</a></li>
                                <li><a class="navbar-brand" href="{{ url('/vaccines')}}">Vaccines</a></li>
                                <li><a class="navbar-brand" href="{{ url('/rooms')}}">Crear Sala</a></li>
                                <li><a class="navbar-brand" href="{{ url('/assignations')}}">Asignar Sala</a></li>
                            </ul>
                            
                        </li>
                    </ul>
                    <?php 
                                }
                            }
                    ?>
                    
                    <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
                    <a class="navbar-brand" href="{{ url('/pets')}}">Pets</a>
                    <a class="navbar-brand" href="{{ url('/reservations')}}">Reservations</a>
<?php } ?>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="/users/{{\Illuminate\Support\Facades\Auth::id() }}/edit2">
                                            settings
                                        </a>

                                    </li>

                                </ul>

                            </li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
