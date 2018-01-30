<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="{{asset('favico.ico')}}"/>
      <title>Mari berbagi untuk Sesama</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      {{--laravel auth for profile--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

      <style media="screen">
        nav a{
          font-family: Copperplate Gothic;
        }
      </style>
      <nav>
          <div class="nav-wrapper  teal darken-1">
           <a href="#!" class="brand-logo">SINAU YO</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
               <ul class="right hide-on-med-and-down">
              @guest
                   {{-- <li><a href="{{ route('login') }}">Login</a></li>
                   <li><a href="{{ route('register') }}">Register</a></li> --}}
                 @else
                   <li> <a href="#">Edit Data</a> </li>
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
               <ul class="side-nav" id="mobile-demo">
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
