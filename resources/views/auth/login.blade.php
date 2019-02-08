@extends('content.apps')
@extends('content.headerThird')
@section('content')
    <div class="container-fluid img-login">
      <div class="container ">
          <form class="col s12 form-login" method="post" action="{{ route('login') }}">
              <h3 class="header-login center">Selamat Datang Kembali</h3>
              <p class="paragraph-login center">Ilmu adalah kunci kesuksesan hidupmu</p>
            {{ csrf_field() }}
            <div class="container center">
              <div class="input-field col xl12 s12">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input class="validate" id="email" type="email"  placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            
              <div class="input-field col xl12 s12">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" placeholder="password" type="password" class="validate" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
              </div>
            </div>
                <div class="row center">
                  <button type="submit" name="button" class="btn-login">MASUK</button>
                </div>
                <div class="row center">
                    <a href="{{ route('password.request') }}" class="link-forgot-password">Lupa Password ?</a>
                    <div class="paragraph-register">
                      <h5 class="paragraph-reg">Belum Punya Akun ? <a href="{{ route('register') }}" class="link-register">Daftar</a></h5>
                    </div>
                </div>
          </form>
          
      </div>

  </div>

@endsection
