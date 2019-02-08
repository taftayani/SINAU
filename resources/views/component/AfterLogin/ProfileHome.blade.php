<div class="container-fluid first-section" >
    <div class="" data-indicators="true">
         <div class="">
            <b><h1 class="first-header">Selamat Datang, <b>{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} </b></h1>
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
                    <div class="row">
                    
                       
                    @if (Auth::user()->foto== 'img/profile.ico')
                         <a href="#modal3" class="modal-trigger btn-search-teach">Cari Pengajar</a>
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
                        <a href="{{route('name_teacher')}}" class="btn-search-teach">Cari Pengajar</a>
                    @endif
                        <button type="submit" class="btn-become-teach">Bagaimana Menjadi Pengajar ?</button>
                        <button type="submit" class="btn-process-study">Bagaimana Proses Belajar dan Mengajar</button>
                    </div>
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
                <h5>Masih Dalam Pembangunan</h5>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
