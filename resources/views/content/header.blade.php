
    {{-- <ul id="dropdown2" class="dropdown-content">
      <li><a href="">Daftar Sebagai Murid</a></li>
      <li><a href="{{ route('guru') }}">Daftar Sebagai Guru</a></li>
    </ul> --}}

<div class="navbar-fixed">
    <nav>
    <div class="nav-wrapper nav-header">
      <a href="{{ route('survey.index') }}" class="brand-logo" > <img src="../img/Logo/logo.png" alt=""class="logo"> </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="center hide-on-med-and-down" id="navbar-section-first">
        <li><a href="#home">Tentang Kami</a></li>
        <li><a href="#Produk">Produk Kami</a></li>
        <li><a href="#Feedback">Forum</a></li>
      </ul>
      <ul class="right hide-on-med-and-down navbar-section-second">
          <li><a class="login-btn" href="{{ route('login') }}" >Masuk</a></li>  
          <li><a class="" href="{{ route('register') }}">Daftar</a></li>
      </ul>
    </div>
</div>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('register') }}">Daftar</a></li>
        <li><a href="{{ route('login') }}">Masuk</a></li>
        <li><a href="">Tentang Kami</a></li>
        <li><a href="">Produk Kami</a></li>
        <li><a href="">Forum</a></li>
      </ul>

    </nav>
    

 
  
 

  @push('js')
  <script type="text/javascript">
    // $(".dropdown-button").dropdown();
    $(".button-collapse").sideNav();
  </script>
  @endpush
