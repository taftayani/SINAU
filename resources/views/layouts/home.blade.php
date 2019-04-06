@extends('content.apps')
@section('content')
@include('content.header')
  <div class="container-fluid first-section" >
    <div class="" data-indicators="true">
         <div class="">
            <b><h1 class="first-header">Selamat Datang</h1>
             <h2 class="first-paragraph">"MARI BERBAGI ILMU KEPADA SESAMA"</h2></b>
             <a href="#home" class="btn-pelajar-lanjut" id="get-learn" on>Pelajari Lebih Lanjut</a>
          </div>
    </div>
  </div>
 

      
      <div class="container second-layout" id="home">
      <div class="row">
            <div class="col xl12 s12 center"> <img class="responsive-img" src="/img/sinau.ico"></div>
            <div class="col m12 center">
              <h1 class="first-header">Apa itu SINAU YO ?</h1>
              <p class="first-paragraph">
                Sinau Yo! merupakan sarana yang menyediakan lingkungan belajar mengajar yang 
                seru dan asik, disini kamu dapat mencari banyak materi belajar yang tidak hanya
                ada di sekolah melainkan beragam materi lainnya seperti berenang, mengetik, 
                menggambar, dan masih banyak lagi. 
              </p>
            </div>
        </div>
      </div>

<div class="container-fluid third-layout" id="Produk">
  <div class="contianer content-group-product">
        <div class="container">
          <div class="row">
            <div class="third">
                <div class="col xl4 s12"><img class="responsive-img" src="/img/Product/sinauOffline.png"></div>
                <div class="col xl8 s12 row-section-product">
                  <div class="header-section">
                      <h3 class="center first-header">SINAU OFFLINE</h3>
                  </div>
                  <p class="paragraph-first">Sulitnya belajar di sekolah, tertinggal materi belajar ataupun ingin belajar 
                    hal yang baru bisa ditemukan di Sinau Offline, disini kamu dapat mencari guru
                    mengajar yang dapat membimbing kamu secara privat.Materi yang disediakan pun sangat 
                    beragam dan memberikan nuansa baru dalam kemudahan belajar mengajar.</p>
                </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="fourth">
              <div class="col xl4 s12"><img class="responsive-img" src="/img/Product/sinauBook.png"></div>
              <div class="col xl8 s12 row-section-product">
                <div class="header-section">
                  <h3 class="center first-header">SINAU BOOK</h3>
                </div>
                <p class="paragraph-first">Ingin mencari buku ataupun karya ilmiah tidak perlu susah, kami menyediakan 
                  jual beli Buku dan karya ilmiah hasil karya anggota sinau. Semua yang disediakan di Sinau Book 
                  tentunya berlisensi dan legal.</p>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="container fourth-layout">
    <div class="row">
      <div class="col l12">
          <h3 class="center heading-packet">Paket Belajar</h3>
      </div>
    </div>
    <div class="row">
        <div class="col s4">
            <div class="card-packet">
                <img src="/img/Background/hemat.png" class="img-card" alt="">
                <h4 class="heading-card center">PAKET 8 PERTEMUAN</h4>
                <p class="paragraph-card center">Dipaket ini kamu akan mendapatkan <b>8</b>
                  pertemuan dalam <b>1 bulan</b>, mulai dari awal kontrak belajar dimulai.</p>
                  <h5 class="heading-rupiah center">Rp.160.000</h5>
            </div>
        </div>
        <div class="col s4">
            <div class="card-packet-second">
                <img src="/img/Background/agakhemat.png" class="img-card" alt="">
                <h4 class="heading-card center">PAKET 12 PERTEMUAN</h4>
                <p class="paragraph-card center">Dipaket ini kamu akan mendapatkan <b>12</b>
                  pertemuan dalam <b>2 bulan</b>, mulai dari awal kontrak belajar dimulai.</p>
                <h5 class="heading-rupiah center">Rp.190.000</h5>
            </div>
        </div>
        <div class="col s4">
            <div class="card-packet-third">
                <img src="/img/Background/biasa.png" class="img-card" alt="">
                <h4 class="heading-card center">PAKET 16 PERTEMUAN</h4>
                <p class="paragraph-card center">Dipaket ini kamu akan mendapatkan <b>16</b>
                  pertemuan dalam <b>3 bulan</b>, mulai dari awal kontrak belajar dimulai.</p>
                <h5 class="heading-rupiah center">Rp.220.000</h5>
            </div>
        </div>
    </div>
  </div>
    <div class="container video-ces">
      <div class="sixth">
      <div class="row center">
        <div class="row z-depth-2">
          <div class="video-container">
            <iframe width="854" height="480" src="https://www.youtube.com/embed/V1jt30D6-7w" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="container-fluid fifth-layout" id="Feedback">
      <div class="row center">
        <div class="feedback">
        <h2 class="header-first">Tanggapan</h2>
      </div>
      <div class="row ">
      <form class="col s12" method="post" action="{{ route('survey') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <input id="nama_depan" name="nama_depan" type="text" class="validate" value="" placeholder="nama_depan">

            @if($errors->has('nama_depan'))
            <p class="red-text"><i class="material-icons">create</i></p>
            @endif

          </div>
          <div class="input-field col s6">
            <input id="nama_belakang" name="nama_belakang" type="text" class="validate" value="" placeholder="nama_belakang">

            @if($errors->has('nama_belakang'))
              <p class="red-text"><i class="material-icons">create</i></p>
            @endif


          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate" value="" placeholder="email">

            @if($errors->has('email'))
              <p class="red-text"><i class="material-icons">create</i></p>
            @endif
            
          </div>
        </div>
        <div class="tanggapan">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="tanggapan" name="tanggapan" class="materialize-textarea" placeholder="tanggapan"></textarea>

            @if($errors->has('tanggapan'))
              <p class="red-text"><i class="material-icons">create</i></p>
            @endif
              <button type="submit" name="button" class="btn btn-send">Kirim</button>
          </div>
        </div>
        </div>


      </form>
      </div>
    </div>
  </div>
  @include('content.footer')
@endsection

@push('js')
<script >
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
@endpush
