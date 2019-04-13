
    @extends('content.apps')
    <div style="position: absolute; height: 70px; top: 0px; width: 100%; left: 0px; background:  #E9E9E9;">
    <ul class="right hide-on-med-and-down navbar-section-second">
            <li style="padding: 20px; margin-right: 20px;">
              <img src="{{asset('../img/logo/avatar.png')}}" alt="" width="25" height="25" style="margin-right: 10px; margin-top: -2px;">
              <span style="margin-right: 10px">{{ Auth::user()->nama_belakang }}</span>
              <a onClick="$('.dropdown-button').dropdown();" class='dropdown-button' href='#' data-activates='logout' style="text-decoration: none; color: #8b8b8b">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
            <img src="{{asset('../img/logo/avatar.png')}}" style="float: left; margin-right: 20px; margin-top: 5px;" alt="" width="35" height="35">
            <div>
              <p style="color: #d3d3d3; opacity: 0.90; margin-bottom: -5px;">Welcome</p>
              <p style="color: #ffffff;">{{ Auth::user()->nama_belakang }}</p>
            </div>
          </div>
            
          <p style="color: #FFFFFF; opacity: 0.65; margin: 22px;">Dashboard</p>

          <ul class="tabs" style="height: 200px;">
            <li class="tab nav-ver active"><a href="#home" style="color: #fff;">Data Murid</a></li>
            <li class="tab nav-ver"><a href="#guru" style="color: #fff;">Data Guru</a></li>
            <!-- <li class="tab"><a href="#matpel">Data Mata Pelajaran</a></li> -->
            <li class="tab nav-ver"><a href="#pesanan" style="color: #fff;">Data Pesanan</a></li>
            <li class="tab nav-ver"><a href="#statistika" style="color: #fff;">Statistika</a></li>
          </ul>
    </div>

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
    