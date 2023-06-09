<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" 
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <!-- Scripts -->

    <script src="{{  asset('js/scripts.js')}}" ></script>  <!-- LINK DEL JS -->
    <link href="{{  asset('css/style-calculadora.css')}}" rel="stylesheet"> <!-- LINK DEL css -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
     <!-- Iconos FONTAWESOME -->
     <script src="https://kit.fontawesome.com/3ac26e9d9d.js" crossorigin="anonymous" ></script> 

     

      <!-- Links Datatables -->

      <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
      <script src="//cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
      <link rel="dns-prefetch" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
      <link rel="dns-prefetch" href="//cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js">

     <!-- sweet -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Proyecto Yuderly Sapuy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

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
                        <li class="nav-item">
                        <li class="nav-item">
                                    <a class="nav-link" href="home">Home</a>
                                </li>
                                    <a class="nav-link" href="prueba">CEFA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto">Yuderly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nosotros">Proyecto Prueba</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aprendices">Aprendices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="calculadora">Calculadora</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/adminlite">admin</a>
                                </li>
                                
                                
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @yield('content')
        </main>
    </div>
</body>
</html>
