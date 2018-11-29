@extends('content.apps')
@section('content')
    @include('content.header')
        <div class="container" id="layout-faq">
            <div class="row">
                <div class="col xl12 center">
                    <h1 class="heading-faq">Tentang Kami</h1>
                </div>
            </div>

            <div class="row">
                <div class="col xl12 center">
                    <p class="paragraph-faq">Sinau Yo! merupakan sarana yang menyediakan lingkungan belajar mengajar yang seru dan asik, 
                        disini kamu dapat mencari banyak materi belajar yang tidak hanya ada di sekolah melainkan 
                        beragam materi lainnya seperti berenang, mengetik, menggambar, dan masih banyak lagi. </p>
                </div>
            </div>

            <div class="row">
                    <div class="col xl12 center">
                        <h1 class="heading-faq">Tanya Jawab</h1>
                    </div>
                </div>
            <div class="row">
                <div class="col xl12 justify">
                        <p class="heading-question">Q :Apa itu SINAU YO?</p>
                        <p class="hedaing-answer">A :SINAU YO adalah sarana yang menyediakan lingkungan belajar mengajar yang seru dan asik. 
                            Dimana Kamu dapat belajar   dengan mudah hanya memanggil gurumu ke rumah.</p>
                </div>
                <div class="col xl12 justify">
                        <p class="heading-question">Q :Kenapa Harus Sinau Yo?</p>
                        <p class="hedaing-answer">A :Pertama Harga terjangkau, guru dapat kerumah, dan ilmu yang diinginkan bervariasi..</p>
                </div>
                <div class="col xl12 justify">
                        <p class="heading-question">Q :Bagaimana Cara mendaftar Sinau Yo?</p>
                        <p class="hedaing-answer">A :pertama buka website sinauyo.com, kedua pilih tab daftar, dan kemudian anda akan diarahkan sebagai pengguna umum.</p>
                </div>
                <div class="col xl12 justify">
                        <p class="heading-question">Q :Bagaimana Cara mendaftar Sebagai Pencari Ilmu?</p>
                        <p class="hedaing-answer">A :saat anda pertama kali daftar, maka anda sudah diarahkan sebagai murid kami.</p>
                </div>
                <div class="col xl12 justify">
                        <p class="heading-question">Q :Bagaimana Cara mendaftar Sebagai Guru?</p>
                        <p class="hedaing-answer">A :Disaat anda sudah mendaftar sebagai murid. anda juga bisa membuka les anda, yaitu sebagai guru. tinggal pilih tab menjadi guru  ? dan ikuti langkah-langkahnya.</p>
                </div>
                <div class="col xl12 justify">
                        <p class="heading-question">Q : Apasih SINAU OFFLINE?</p>
                        <p class="hedaing-answer">A :Sinau Offline adalah salah satu platform kami berupa les ditempat yang anda inginkan dengan guru pilihan anda.</p>
                </div>
                <div class="col xl12 justify">
                        <p class="heading-question">Q :Apasih SINAU BOOK?</p>
                        <p class="hedaing-answer">A :Sinau Book adalah sebuah platform kami yang kedua, dimana baik guru ataupun murid dapat mempublikasikan karya tulis mereka dengan menjual</p>
                </div>
        </div>
        </div>
    @include('content.footer')
@endsection