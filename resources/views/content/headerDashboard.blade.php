
    {{-- <ul id="dropdown2" class="dropdown-content">
      <li><a href="">Daftar Sebagai Murid</a></li>
      <li><a href="{{ route('guru') }}">Daftar Sebagai Guru</a></li>
    </ul> --}}
@extends('content.apps')
    <div class="navbar-fixed">
    <ul class="tabs" id="navbar-section-first">
        <nav>
        <div class="nav-wrapper nav-header">
          <a href="{{ route('survey.index') }}" class="brand-logo" > <img src="../img/Logo/logo.png" alt=""class="logo"> </a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="center hide-on-med-and-down" id="navbar-section-first">
           
              <li class="tab"><a href="#home">Data Murid</a></li>
              <li class="tab"><a href="#guru">Data Guru</a></li>
              <li class="tab"><a href="#matpel">Data Mata Pelajaran</a></li>
              <li class="tab"><a href="#pesanan">Data Pesanan</a></li>
          </ul>

          <ul class="right hide-on-med-and-down navbar-section-second">
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
        </div>
    </ul>
    </div>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="{{ route('register') }}">Daftar</a></li>
            <li><a href="{{ route('login') }}">Masuk</a></li>
            <li><a href="">Tentang Kami</a></li>
            <li><a href="">Produk Kami</a></li>
            <li><a href="">Forum</a></li>
          </ul>
    
        </nav>

@yield('contentDashboard')
      
     
    
      @push('js')
      <script type="text/javascript">
        // $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        
      </script>
      <script>
           $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      </script>
      @endpush
    