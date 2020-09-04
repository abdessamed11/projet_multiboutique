<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title','inknown page')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/accueilPrincipal1.css')}}">
  <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body>

  <div id="app" >
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm bg-dark py-0 fixed-top hvr-float">
      <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light py-0">
            <a class="navbar-brand" href="{{ url('/')}}">
              <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" style="width:170px;height:70px">
            </a>
            <a class="navbar-brand" href="{{ url('/home')}}" style="font-family: roboto, sans-serif;">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/')}}" style="font-family: roboto, sans-serif;">Boutique</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/contact')}}" style="font-family: roboto, sans-serif;">Contact</a>
                </li>
              </ul>
            </div>
          </nav>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
    </div>
  </nav>

  <main class="my-4 pt-5">
    @yield('content')
  </main>
</div>

<!-- footer -->

<footer class="page-footer font-small bg-white pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-5 mt-md-0 mt-3">

      <!-- Content -->

      <a class="navbar-brand" href="{{ url('/')}}">
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" style="width:170px;height:70px">
      </a>
      <ul class="list-inline">
        <li class="border-right list-inline-item pr-2 font-weight-bold" style="border-right: 1px solid black!important;"><a href="{{ url('/')}}"> Home </a></li>
        <li class="border-right list-inline-item pr-2 font-weight-bold" style="border-right: 1px solid black!important;"><a href="{{ url('/')}}"> Boutique </a></li>
        <li class="border-right list-inline-item pr-2 font-weight-bold" style="border-right: 1px solid black!important;"><a href="{{ url('/contact')}}"> Contact </a></li>
      </ul>
      <p>Here you can use rows and columns to organize your footer content.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase font-weight-bold text-center">Contact</h5>

      <ul class="list-unstyled">
        <li>
          <p href="#!"><i class="fas fa-map-marker fa-fw"></i> 70 Boulevard Ghandi ,Casablanca, Maroc</p>
        </li>
        <li>
          <p href="#!"><i class="fas fa-phone-alt fa-fw"></i> +212 690 8000 32</p>
        </li>
        <li>
          <p href="#!"> <i class="far fa-envelope fa-fw"></i> multi-boutique@gmail.com</p>
        </li>

      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase font-weight-bold text-center">Qui sommes-nous</h5>

      <p>Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.</p>
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a href="#!"><i class="fab fa-facebook-square fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#!"><i class="fab fa-twitter-square fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#!"><i class="fab fa-instagram-square fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#!"><i class="fab fa-youtube-square fa-2x"></i></i></a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="background-color:#d6cccc;">© 2020 Copyright:
  <a href="#"> Multi-Boutique</a>
</div>
<!-- Copyright -->

</footer>

<!-- footer -->




</body>
</html>
