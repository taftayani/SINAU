@extends('content.master2')

@section('content')
  <style media="screen">
    h3{
      font-family: Keep Singing;
    }
    .foto{
      width: 300px;
      height: 400px;
    }
    #button{
      width: 300px;
    }
    .user{
      font-size: 20px;
    }
  </style>

<div class="container-fluid">
  <div class="row">
      <div class="col s12 m6">
        <div class="card z-depth-3">
          <div class="card-image">
            {{-- @php
              dd(Auth::user()->)
            @endphp --}}
            <img src="{{Auth::user()->foto}}" class="foto">
            {{-- <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('user',['id'=>$baris->id]) }}"><i class="material-icons">create</i></a> --}}
          </div>
          <div class="card-content">
            <p>Hallo <b class="user">{{ Auth::user()->username }}</b>, selamat datang di website sinau. Terima kasih kamu telah mendaftar
            sebagai murid Sinau Yo. </p>
            <div class="divider"></div>
            <h6>Nama saya : <b>{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} </b></h6>
            <h6>email saya : <b>{{ Auth::user()->email }}</b> </h6>
          </div>
        </div>
      </div>
      <!-- edit profile-->
    <form class="col s12 m6" action="{{ route('edit',['user'=>Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nama depan" id="first_name" name="nama_depan" type="text" class="validate" value="{{ Auth::user()->nama_depan }}">
        </div>
        @if ($errors->has('nama_depan'))
          <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_depan')  }}</p>
        @endif
        <div class="input-field col s6">
          <input id="last_name" name="nama_belakang" placeholder="nama belakang" type="text" class="validate" value="{{ Auth::user()->nama_belakang }}">
        </div>
        @if ($errors->has('nama_belakang'))
          <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_belakang')  }}</p>
        @endif
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="username" id="username" name="username" type="text" class="validate" value="{{ Auth::user()->username }}">
        </div>
      </div>
      @if ($errors->has('username'))
        <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('username')  }}</p>
      @endif
      <div class="row">
        <div class="input-field col s6">
          <input id="password" placeholder="password"  name="password" type="password" class="validate" >
          @if ($errors->has('password'))
            <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password')  }}</p>
          @endif
        </div>
        <div class="input-field col s6">
        <input id="repassword" name="password_confirmation" type="password" class="validate" placeholder="re-password">
        @if ($errors->has('password_confirmed'))
          <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password_confirmed') }}</p>
        @endif
        </div>
      </div>

      <div class="file-field input-field">
      <div class="btn">
        <span>Photo</span>
        <input type="file" name="foto" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate"  value="{{ Auth::user()->foto }}">
      </div>
      @if ($errors->has('foto'))
        <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('foto')  }}</p>
      @endif
    </div>
    <button type="submit" name="button" class="btn grey darken-3" id="button" >Edit <i class="material-icons">create</i></button>

    </form>
    </div>
    </div>

@endsection
