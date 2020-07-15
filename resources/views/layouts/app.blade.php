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
    <script src="https://kit.fontawesome.com/9690220c47.js" crossorigin="anonymous"></script>

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
                          <a class="nav-link" href="{{ route('category') }}">Categories<span class="sr-only"></span></a>
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
        <footer class="fdb-block footer-large bg-dark">
            <div class="container">
              <div class="row align-items-top text-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-sm-left">
                  <h3>Group 1</h3>
                  <nav class="nav flex-column">
                    <a class="nav-link active" href="https://www.froala.com">Home</a>
                    <a class="nav-link" href="https://www.froala.com">Features</a>
                    <a class="nav-link" href="https://www.froala.com">Pricing</a>
                    <a class="nav-link" href="https://www.froala.com">Team</a>
                    <a class="nav-link" href="https://www.froala.com">Contact Us</a>
                  </nav>
                </div>
          
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-5 mt-sm-0 text-sm-left">
                  <h3>Group 2</h3>
                  <nav class="nav flex-column">
                    <a class="nav-link active" href="https://www.froala.com">Privacy Policy</a>
                    <a class="nav-link" href="https://www.froala.com">Terms</a>
                    <a class="nav-link" href="https://www.froala.com">FAQ</a>
                    <a class="nav-link" href="https://www.froala.com">Support</a>
                  </nav>
                </div>
          
                <div class="col-12 col-md-4 col-lg-2 text-md-left mt-5 mt-md-0">
                    <h3>Follow Us</h3>
                    <p class="lead">
                      <a href="https://www.froala.com" class="mx-2"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                      <a href="https://www.froala.com" class="mx-2"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                      <a href="https://www.froala.com" class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                      <a href="https://www.froala.com" class="mx-2"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                      <a href="https://www.froala.com" class="mx-2"><i class="fab fa-google" aria-hidden="true"></i></a>
                    </p>
  
                </div>
          
                <div class="col-12 col-lg-3 ml-auto text-lg-left mt-4 mt-lg-0">
                  <h3>About Us</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
          
              <div class="row mt-3">
                <div class="col text-center">
                  © 2020 Chalk. All Rights Reserved
                </div>
              </div>
            </div>
        </footer>   
    </div>
</body>
</html>
