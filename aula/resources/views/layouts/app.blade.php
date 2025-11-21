<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        table {
            align-items: center;
            margin: 2%;
            background-color: crimson;

        }

        .btn-show {
            height: 30px;
            width: 30px;
        }

        td {
            padding: 5;
            background-color: aqua;
            width: 200px;
        }

        tr {
            border: 2px solid black;
            height: 30px;
        }

        .btn {
            height: 100%;
            width: 100%;
        }
    </style>

</head>

<!-- Body -->

<body id="estilo">
    <div id="app">
        <div id="barratop">Daniel</div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <div id="bloque-botones-nav" id="navigation" onchange="redirectToPage()">
                            <a class="boton-nav" href="/students">Estudiantes</a>
                            <a class="boton-nav" href="/teachers">Profesores</a>
                            <a class="boton-nav" href="/courses">Cursos</a>

                        </div>


                    </ul>



                    <script>
                        function redirectToPage() {
                            const select = document.getElementById('navigation');
                            const selectedValue = select.value;
                            if (selectedValue) {
                                // Redirige a la ruta seleccionada
                                window.location.href = selectedValue;
                            }
                        }
                    </script>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content') <!-- se sustituye por lo que haya en la vista entre section -->
        </main>
    </div>
</body>

</html>
