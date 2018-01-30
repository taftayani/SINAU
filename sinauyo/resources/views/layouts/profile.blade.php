@extends('content.master2')

@section('content')
  <style media="screen">
    h3{
      font-family: Keep Singing;
    }
    img{
      width: 500px;
      height: 600px;
    }
  </style>

<div class="container-fluid">
  <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <img src="{{ Auth::user()->foto }}">
            <span class="card-title black-text"><h3><b>Hai {{ Auth::user()->username }}</b></h3></span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">create</i></a>
          </div>
          <div class="card-content">
            <p>Hallo siswa/siswi Sinau Yo, selamat datang di website sinau. Terima kasih kamu telah mendaftar
            sebagai murid Sinau Yo. </p>
            <div class="divider"></div>
            <h6>Nama saya : <b>{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} </b></h6>
            <h6>email saya : <b>{{ Auth::user()->email }}</b> </h6>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
