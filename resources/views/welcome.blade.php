<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
                <div class="row">
                    <div class="col text-right">
                        <a href="{{ asset('img/modelo-ia.jpeg') }}" target="_blank" rel="noopener noreferrer" class=" btn btn-dark btn-block">Modelo IA propuesto</a>
                    </div>
                    <div class="col text-right">
                        <figure class="w-100 text-right">
                            <img src="{{ asset('img/logo.jpeg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="display-4">
                    Verifica la Transparencia Corporativa
                </div>
                <form action="{{ route('empresa.buscar.path') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-11 pr-0">
                            <input type="text" name="empresa" class="form-control" placeholder="Ingrese el ruc de la empresa">
                        </div>
                        <div class="col-1 pl-0">
                            <button type="submit" class="btn btn-primary">
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
