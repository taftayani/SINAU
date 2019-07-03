
    {{-- <ul id="dropdown2" class="dropdown-content">
      <li><a href="">Daftar Sebagai Murid</a></li>
      <li><a href="{{ route('guru') }}">Daftar Sebagai Guru</a></li>
    </ul> --}}
    @extends('content.apps')
    <div style="position: absolute; height: 70px; top: 0px; width: 100%; left: 0px; background:  #6A7BA9;">
    <ul class="right hide-on-med-and-down navbar-section-second">
            <li style="padding: 20px; margin-right: 20px;">
              <img src="{{asset('../img/logo/avatar.png')}}" alt="" width="25" height="25" style="margin-right: 10px; margin-top: -2px;">
              <span style="margin-right: 10px; color: #ffffff">{{ Auth::user()->nama_belakang }}</span>
              <a onclick="$('.dropdown-button').dropdown();" class='dropdown-button' href='#' data-activates='logout' style="text-decoration: none; color: #8b8b8b">
                <i class="fa fa-ellipsis-v" aria-hidden="true" style="color: #ffffff"></i>
              </a>
      </ul>
    </div>
    <ul id='logout' class='dropdown-content' style="margin-top: 40px;">
      <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            Keluar
        </a>
      </li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <div id="sidenav" class="sidenav">
          <a href="{{ route('survey.index') }}" style=" width: 80%; margin-top: -50px; margin-left: auto; margin-right:auto;"> 
            <img src="../img/Logo/logo.png" alt="" class="" width="130" height="40"> 
          </a>

          <div style="padding: 10px; border: 1px solid rgb(97, 97, 97);">
            <img src="{{asset('../img/logo/avatar.png')}}" style="float:   left; margin-right: 20px; margin-top: 5px;" alt="" width="35" height="35">
            <div>
              <p style="color: #d3d3d3; opacity: 0.90; margin-bottom: -5px;">Welcome</p>
              <p style="color: #ffffff;">{{ Auth::user()->nama_belakang }}</p>
            </div>
          </div>
            
          <p style="color: #FFFFFF; opacity: 0.65; margin: 22px;">Dashboard</p>

          <ul class="" style="height: 200px;">
            <li id="nv-murid" class="nav-ver"><a href="/home" style="color: #fff;">Data Murid</a></li>
            <li id="nv-guru" class="nav-ver"><a href="/home/teacher" style="color: #fff;">Data Guru</a></li>
            <!-- <li class="tab"><a href="#matpel">Data Mata Pelajaran</a></li> -->
            <li id="nv-transaction"class="nav-ver"><a href="/home/transaction" style="color: #fff;">Data Pesanan</a></li>
            <li id="nv-statistics" class="nav-ver"><a href="/home/statistics" style="color: #fff;">Statistika</a></li>
          </ul>

          @if(Request::url() === url('/home'))
              <script>
                $('.nav-ver').removeClass('navactive');
                $('#nv-murid').addClass('navactive')
              </script>
          @elseif(Request::url() === url('/home/teacher'))
              <script>
                $('.nav-ver').removeClass('navactive');
                $('#nv-guru').addClass('navactive')
              </script>
          @elseif(Request::url() === url('/home/transaction'))
              <script>
                $('.nav-ver').removeClass('navactive');
                $('#nv-transaction').addClass('navactive')
              </script>
          @elseif(Request::url() === url('/home/statistics'))
              <script>
                $('.nav-ver').removeClass('navactive');
                $('#nv-statistics').addClass('navactive')
              </script>
          @endif
    </div>
    <!-- <div class="navbar-fixed">
    <ul class="tabs" id="navbar-section-first">
        <nav>
        <div class="nav-wrapper nav-header">
          <a href="{{ route('survey.index') }}" class="brand-logo" > <img src="../img/Logo/logo.png" alt=""class="logo"> </a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="center hide-on-med-and-down" id="navbar-section-first">
              <li class="tab"><a href="#home">Data Murid</a></li>
              <li class="tab"><a href="#guru">Data Guru</a></li> -->
              <!-- <li class="tab"><a href="#matpel">Data Mata Pelajaran</a></li> -->
              <!-- <li class="tab"><a href="#pesanan">Data Pesanan</a></li>
              <li class="tab"><a href="#statistika">Statistika</a></li>
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
    
        </nav> -->

@yield('contentDashboard')
      
     
    
      <!-- @push('js')
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
      @endpush -->
    