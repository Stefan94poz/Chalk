<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-design-blocks/2.0.1/css/froala_blocks.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
            <header>
                <div class="container">
                  <nav class="navbar navbar-expand-md no-gutters">
                    <div class="col-3 text-left">
                      <a href="{{ url('/') }}">
                        <img src="./img/logo.png" height="30" alt="image">
                      </a>
                    </div>
              
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-2" aria-controls="navbarNav7" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
              
                    <div class="collapse navbar-collapse navbar-collapse-2 justify-content-center col-md-6" id="navbarNav7">
                      <ul class="navbar-nav justify-content-center">
                        <li class="nav-item active">
                          <a class="nav-link" href="https://www.froala.com">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="https://www.froala.com">Categories<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="https://www.froala.com">Partners<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="https://www.froala.com">About us<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="https://www.froala.com">Contact<span class="sr-only"></span></a>
                        </li>
                       
                      </ul>
                    </div>
              
                    <div class="collapse navbar-collapse navbar-collapse-2">
                      <ul class="navbar-nav ml-auto justify-content-end">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-md-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      </ul>
              
                     
                    </div>
                  </nav>
                </div>
              </header>
        </nav>

        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
