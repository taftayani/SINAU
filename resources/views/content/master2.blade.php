<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
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

      <div class="navbar-fixed">
      <nav class=" nav-header">
          <div class="nav-wrapper">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  @guest
                  <a href="{{ route('survey.index') }}" class="brand-logo" > <img src="../img/Logo/logo.png" alt=""class="logo"> </a>
                  <ul class="right hide-on-med-and-down navbar-section-second">
                    <li><a class="login-btn" href="{{ route('login') }}" >Masuk</a></li>  
                    <li><a class="" href="{{ route('register') }}">Daftar</a></li>
                </ul>
                    <ul class="side-nav" id="mobile-demo">
                      <li><a href="">Daftar Sebagai Guru</a></li>
                      <li><a href="{{ route('register') }}">Daftar Sebagai Murid</a></li>
                      <li><a href="{{ route('login') }}">Masuk</a></li>
                    </ul>
                  @else
                  <a href="{{ route('beranda') }}" class="brand-logo"><img src="../img/Logo/logo.png" alt=""class="logo"></a>
                      <ul class="center hide-on-med-and-down log-user-header">
                        <li><a href="#Produk">SINAU OFFLINE</a></li>
                        <li><a href="#Packet">Paket Belajar</a></li>
                        <li>   
                          @if (Auth::user()->foto== 'img/profile.ico')
                          <a href="#modal3" class="modal-trigger">Menjadi Pengajar ?</a> 
                          <div id="modal3" class="modal container col xl12">
                              <div class="modal-content">
                                  <div class="container">
                                      <div class="row">
                                          <h1 class="heading-term">Lengkapi Profile Anda Terlebih Dahulu</h1>
                                      </div>
                                  </div> 
                              </div>
                          </div>

                          @else
                            @if (Auth::user()->Teacher)
                              
                              <a href="{{route('guru')}}" class="modal-trigger">Menjadi Pengajar ?</a> 
                              @else
                              <a href="#modal2" class="modal-trigger">Menjadi Pengajar ?</a> 
                            
                              @endif
                        @endif 
                      </li>        
                    
                      </ul>
                      <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">
                            <img src="{{asset(Auth::user()->foto)}}" class="profile-img">
                          <i class="material-icons right">arrow_drop_down</i></a></li>
                      </ul>
                  </div>
            </div>
            @include('component.AfterLogin.PopUpTerm')
               <ul class="side-nav" id="mobile-demo">
                 <li> <a href="{{ route('layouts.profile') }}">profile</a> </li>
                 <li>   <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
               </ul>
              @endguest
      </nav>

      @yield('content')
      @include('content.footerLogin')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script type="text/javascript">
      $( document ).ready(function(){$(".button-collapse").sideNav()});
      </script>
      <script type="text/javascript">
        $(".dropdown-button").dropdown();
      </script>
      <script>
          $(document).ready(function() {
            Materialize.updateTextFields();
          });  

            $(document).ready(function() {
            $('select').material_select();
          });


          $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });

          $('#modal1').modal('open');

            $('#modal1').modal('close');

            $('#modal2').modal('open');

              $('#modal2').modal('close');
      </script>
         <script>
            $(document).ready(function(){
            $('ul.tabs').tes();
          });
          </script>
          <script>
                $(document).ready(function(){
              $('ul.tabs').tes('select_tab', 'tab_id');
            });
            </script>
      @stack('js')
    </body>
  </html>
