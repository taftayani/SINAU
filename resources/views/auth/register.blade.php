@extends('content.apps')
@section('content')
@include('content.header-second')

    <div class="container-fluid">
      <div class="row">
        <div class="col xl7 s12">
      <div class="row column-register">
          <div class="rows-column">
            <div class="col s12">
              <h3 class="header-register">BERGABUNG BERSAMA KAMI</h3>
            </div>
            <div class="col s12">
                <h3 class="header-register-second">Pendaftaran tidak dipungut biaya</h3>
            </div>
          </div>
        <div class="col s12">
          <div class="row">
            <form class="col s12" method="post" action="{{ route('register') }}">
               {{ csrf_field() }}
              <div class="row">
                <div class="input-field col xl5 s12 m5 text-long">
                  <input id="first_name" name="nama_depan" type="text" class="text-long" value="{{ old('nama_depan') }}">

                @if ($errors->has('nama_depan'))
                  <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_depan')  }}</p>
                @endif

                  <label for="first_name">Nama depan</label>
                </div>
                <div class="input-field col xl5 s12 m5 text-long">
                  <input id="last_name" name="nama_belakang" type="text" class="validate text-long" value="{{ old('nama_belakang') }}">

                  @if ($errors->has('nama_belakang'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_belakang')  }}</p>
                @endif
                  <label for="last_name">Nama belakang</label>


                </div>
              </div>
              <div class="row">
                <div class="input-field col xl5 s12 m5 text-long">
                  <input id="email" name="email" type="email" class="validate text-long" value="{{ old('email') }}">

                  @if ($errors->has('email'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('email')  }}</p>
                  @endif

                  <label for="password">email</label>
                </div>

                <div class="input-field col xl5 s12 m5 text-long">
                    <input id="email" name="username" type="text" class="validate text-long" value="{{ old('username') }}">
  
                    @if ($errors->has('username'))
                      <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('username')  }}</p>
                    @endif
  
                    <label for="password">Username</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col xl5 s12 m5 text-long">
                  <input id="email" name="password" type="password" class="validate text-long">
                  @if ($errors->has('password'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password')  }}</p>
                  @endif

                  <label for="password">password</label>
                </div>
                <div class="input-field col xl5 s12 m5 text-long">
                  <input id="email" name="password_confirmation" type="password" class="validate text-long">
                  @if ($errors->has('password_confirmed'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password_confirmed') }}</p>
                  @endif
                  <label for="password">Re-password</label>

                </div>
              </div>
              <button type="submit" name="button" class="button-reg center">Daftar</button>
          </form>
        </div>
        </div>
      </div>
        <div class="login-paragraph">
          <h5 class="paragraph-reg">Sudah Punya Akun ? <a href="{{ route('login') }}" class="link-register">Masuk</a></h5>
        </div>
      </div>

      <div class="col xl5 s12 img-background-reg">


      </div>
    </div>
</div>
@endsection
