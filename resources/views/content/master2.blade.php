<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="{{asset('cssSinauyo/master.css')}}">
      <link rel="stylesheet" href="/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
      <title>Mari berbagi ilmu kepada Sesama</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      {{--laravel auth for profile--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <style media="screen">
      nav a{
        font-family: Copperplate Gothic;
      }
      .logo{
        margin-top: 20px;
        width: 150px;
      }
    </style>
    <body>
      <ul id="dropdown2" class="dropdown-content">
          <li> <a href="{{ route('layouts.profile') }}">profile</a> </li>
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
      </ul>
      <nav class=" nav-header">
          <div class="nav-wrapper">
           <a href="{{ route('beranda') }}" class="brand-logo"><img src="../img/Logo/logo.png" alt=""class="logo"></a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="log-user-header">
                <li><a href="">SINAU OFFLINE</a></li>
                <li><a href="">SINAU BOOK</a></li>
              </ul>
               <ul class="right hide-on-med-and-down">
              @guest
                <ul class="right hide-on-med-and-down">
                  <li><a class="" href="{{ route('login') }}" >Masuk</a></li>
                  <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Daftar<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <li><a href="">Daftar Sebagai Guru</a></li>
                  <li><a href="{{ route('register') }}">Daftar Sebagai Murid</a></li>
                  <li><a href="{{ route('login') }}">Masuk</a></li>
                </ul>
                 @else
                 <li> <a href="{{ route('layouts.profile') }}">Rp.120.215</a> </li>
                 <li><a class="dropdown-button" href="#!" data-activates="dropdown2">
                    <img src="../img/Logo/avatar.png" alt=""class="profile-img">
                  <i class="material-icons right">arrow_drop_down</i></a></li>
               </ul>
               <ul class="side-nav" id="mobile-demo">
                 <li> <a href="{{ route('layouts.profile') }}">profile</a> </li>
                 <li>   <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
               </ul>
              @endguest
          </div>
      </nav>

      @yield('content')
      @include('content.footer')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript">
      $( document ).ready(function(){$(".button-collapse").sideNav()});
      </script>
      <script type="text/javascript">
        $(".dropdown-button").dropdown();
      </script>
      @stack('js')
    </body>
  </html>
