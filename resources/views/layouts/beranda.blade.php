@extends('content.master2')
<style media="screen">
  #welcome{
    width: 400px;
  }
  .parallax-container {
   height: "your height here";
   background-position: center;
  background-attachment: scroll;
  color:#fff;
  font-family: Keep Singing;
  text-transform: full-width;
  margin-bottom: 30px;
  }

  h4{
    color: #00cc99;
      font-family: Keep Singing;
  }
</style>
@section('content')
  <div class="parallax-container">
  <div class="parallax"><img src="/img/backround.png"></div>
</div>
    <div class="container-fluid">
        <div class="row">

      <div class="col s4 m4 l4 center">
          <img class="responsive-img" src="img/profile.ico" alt="">
          <h4> <b>SINAU OFFLINE</b> </h4>
          <p>Klik link</p>
          <a class="waves-effect waves-light btn grey darken-3" href="{{ route('sinau_offline') }}">SINAU OFFLINE</a>
      </div>

      <div class="col s4 center">
        <img class="responsive-img" src="/img/notebook.ico">
          <h4> <b>SINAU BOOK</b> </h4>
        <p>Klik link</p>
          <a class="waves-effect waves-light btn grey darken-3">SINAU BOOK</a>
      </div>

      <div class="col s4 center">
        <img class="responsive-img" src="/img/student_3_.ico">
          <h4> <b>SINAU ONLINE</b> </h4>
        <p>Klik link</p>
          <a class="waves-effect waves-light btn grey darken-3">SINAU ONLINE</a>
      </div>
    </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
    $(document).ready(function(){
    $('.parallax').parallax();
  });
    </script>
@endpush
