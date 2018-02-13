<style media="screen">
  nav a{
    font-family: Copperplate Gothic;
  }
</style>
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('login') }}">Masuk Sebagai Murid</a></li>
    <li><a href="#!">Masuk Sebagai Guru</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="{{ route('register') }}">Daftar Sebagai Murid</a></li>
      <li><a href="#!">Daftar Sebagai Guru</a></li>
    </ul>
<nav>
    <div class="nav-wrapper  teal darken-1">
      <div class="H1">
      <a href="{{ route('survey.index') }}" class="brand-logo" >SINAU YO!</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Daftar<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Masuk<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="">Daftar Sebagai Guru</a></li>
        <li><a href="{{ route('register') }}">Daftar Sebagai Murid</a></li>
        <li><a href="">Masuk Sebagai Guru</a></li>
        <li><a href="{{ route('login') }}">Masuk Sebagai Murid</a></li>
      </ul>
    </div>
    </div>
  </nav>

  @push('js')
  <script type="text/javascript">
    $(".dropdown-button").dropdown();
  </script>
  @endpush
