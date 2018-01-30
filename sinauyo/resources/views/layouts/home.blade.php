@extends('content.apps')
@section('content')
  <style media="screen">
    .product{
      background-color: #F8F8F8;
    }
    .first h1{
      color: #00ffbf;
        font-family: Keep Singing;
    }
    .second h2{
      color: #00cc99;
        font-family: Keep Singing;
    }
    .third h3{
      color: #00ffbf;
      font-family: Keep Singing;
    }
    .fourth h3{
      color: #00cc99;
      font-family: Keep Singing;
    }
    .fifth h3{
      color: #00ffbf;
      font-family: Keep Singing;
    }
    .sixth h2{
      color: #00cc99;
      font-family: Keep Singing;
    }
    .feedback h2{
      color: #00cc99;
      font-family: Keep Singing;
    }
    .tanggapan button{
    width: 300px;
    }
  </style>
    <div class="container-fluid">
        <div class="row">
              <div class="carousel carousel-slider center" data-indicators="true">
                   <div class="carousel-item teal accent-3 white-text" href="#one!">
                       <h1>Selamat Datang</h1>
                       <h2>"MARI BERBAGI UNTUK SESAMA"</h2>
                    </div>
                   <div class="carousel-item teal accent-3 white-text" href="#two!">
                     <h2>MARILAH BELAJAR, KARENA DENGAN BELAJAR PENTING UNTUKMU</h2>
                     <h4>-SINAU YO!</h4>
                 </div>
            </div>
    </div>
    </div>

      <div class="first">
      <div class="container-fluid">
      <div class="row">
          <div class="col m6"> <img class="responsive-img" src="/img/sinau.ico"></div>
          <div class="col m6">
            <h1>Apa itu SINAU YO ?</h1>
            <p>Merpuakan sebuah wadah untuk siswa/siswi lulusan SMA, mahasiswa,
            serta guru-guru, dan masyarakat umum lainnya yang berprestasi dalam membagi ilmu mereka kepada masyarakat umum berupa sebuah les</p>
          </div>
      </div>
      </div>
      </div>

<div class="product">
  <div class="second">
      <div class="container-fluid">
        <div class="row center">
          <div class="col m12">
            <h2>PRODUK SINAU YO</h2>
          </div>
        </div>
        <div class="divider"></div>
      </div>
    </div>
      <div class="container-fluid grey lighten-4">
        <div class="row">
          <div class="third">
              <div class="col s6">
                <h3>SINAU OFFLINE</h3>
                <p>Apa sih yg kamu dapatkan disini ? disini kamu dapat memanggil guru kamu ke rumah. dan disini juga kamu
                belajar dengan teman kamu. sehingga belajar menjadi lebih menyenangkan </p>
              </div>
              <div class="col s6"><img class="responsive-img" src="/img/group.ico"></div>
          </div>
        </div>
        <div class="divider"></div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="fourth">
            <div class="col s6"><img class="responsive-img" src="/img/notebook.ico"></div>
            <div class="col s6">
              <h3>SINAU BOOK</h3>
              <p>Sinau Book? untuk kamu yang menjadi guru, kamu dapat menjual hasil karya tulis kamu dan juga dapat menjual buku untuk seluruh murid.
              Dan untuk kamu murid-murid dapat membeli buku disini dengan harga yang terjangkau</p>
            </div>
        </div>
        </div>
        <div class="divider"></div>
      </div>

      <div class="container-fluid grey lighten-4">
        <div class="row">
          <div class="fifth">
            <div class="col s6">
              <h3>SINAU ONLINE</h3>
              <p>Bingung saat belajar tidak ada tempat atau tidak waktu belajar dengan gurumu ?
                disini kamu dapat menonton video belajar yang telah diberikan oleh guru-guru berpotensi.
                kamu dapat memilih berbagai video yang kamu butuhkan, dan dari guru manapun. Dan juga, kamu dapat secara langsung belajar <b>face to face</b> melalui web cam.
              </p>
            </div>
            <div class="col s6"><img class="responsive-img" src="/img/student_3_.ico"></div>
        </div>
      </div>
      </div>
      <div class="divider"></div>
    </div>

    <div class="container">
      <div class="sixth">
      <div class="row center">
        <h2>Video Pengenalan</h2>
        <div class="row">
          <div class="video-container">
            <iframe width="854" height="480" src="https://www.youtube.com/embed/V1jt30D6-7w" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="container-fluid grey lighten-4">
      <div class="row center">
        <div class="feedback">
        <h2>Tanggapan</h2>
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
              <button type="submit" name="button" class="btn">Kirim</button>
          </div>
        </div>
        </div>


      </form>
      </div>
    </div>
  </div>

@endsection
@push('js')
<script type="text/javascript">
  $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
@endpush
