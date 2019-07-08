@extends('content.apps')
@section('content')
@include('content.headerThird')
<div class="container second-layout" id="home">
    <div class="row">
          <div class="col xl12 s12 center"> <img class="responsive-img" src="/img/sinau.ico"></div>
          <div class="col m12 center">
            <h1 class="first-header">Apa itu Sinau Offline ?</h1>
            <p class="first-paragraph">
              Sinau Offline merupakan produk utama dari Sinau Yo. Apa yang ditawarkan oleh Sinau Offline ?
              <b>Belajar bersama dan berbagi ilmu bersama</b>. Disini kamu dapat belajar dengan teman-teman kamu dan dengan 
              pengajar dan materi yang kamu inginkan di rumah kamu, atau ditempat yang kamu ingikan. Pada Sinau Offline
              memiliki <b>3 paket, yaitu paket 8x, 12x, dan 16x</b>. Dan setiap paketnya memiliki harga yang terjangkau, dan juga
              setiap paketnya kamu dapat mengajak teman-teman kamu dengan maksimal ajakan bedasarkan paket. Dan setiap paket 
              hanya dapat belajar untuk satu materi pelajaran saja. 
            </p>
          </div>
      </div>
      <div class="row">
            <h1 class="first-header-sinauoff">Bagaimana proses untuk melakukan kontrak belajar ?</h1>
            <div class="col xl6 ">
                    <h1 class="first-header-sinauoff-second center">Untuk Murid</h1>
                    <div class="col xl12">
                        <ol class="list-sinauoffline">
                            <li>Membuat akun pada halaman <a href={{route('register')}}>Daftar</a></li>
                            <li>Apabila sudah memiliki akun, silahkan melakukan login pada halaman <a href={{route('login')}}>login</a></li>
                            <li>Silahkan lengkapi data anda pada halaman profile</li>
                            <li>Apabila sudah melengkapi data, silahkan lakukan pencarian pengajar pada "cari pengajar"</li>
                            <li>Pilih pengajar bedasarkan ruang lingkup pengajaran</li>
                            <li>Apabila sudah, silahkan isikan beberapa data untuk konfirmasi pengajar dan pilih kirim</li>
                            <li>Tunggulah sampai kontrak belajar dikonfirmasi oleh pengajar</li>
                            <li>Apabila sudah, silahkan lakukan pembayaran dan silahkan isikan data untuk ajak teman dengan maksimal
                                bedasarkan paket yang diambil
                            </li>
                            <li>Dan anda dapat menghubungi pengajar untuk memulai jadwal pelajaran</li>
                        </ol>
                    </div> 
            </div>
            <div class="col xl6">
                    <h1 class="first-header-sinauoff-second center">Untuk Pengajar</h1>
                    <div class="col xl12">
                        <ol class="list-sinauoffline">
                            <li>Membuat akun pada halaman <a href={{route('register')}}>Daftar</a></li>
                            <li>Apabila sudah memiliki akun, silahkan melakukan login pada halaman <a href={{route('login')}}>login</a></li>
                            <li>Silahkan lengkapi data anda pada halaman profile</li>
                            <li>Apabila sudah melengkapi data, silahkan pilih menjadi pengajar</li>
                            <li>Ikuti ketentuan menjadi pengajar, dan pilih setuju</li>
                            <li>isikan beberapa data untuk menjadi pengajar</li>
                            <li>Tunggu akun anda diverifikasi agar dapat menjadi pengajar</li>
                            <li>Apabila akun anda sudah diverifikasi, anda sudah menjadi pengajar</li>
                        </ol>
                    </div> 
            </div>
    </div>
</div>
@include('content.footer')
@endsection
