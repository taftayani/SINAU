@extends('content.apps')
@section('content')
<style media="screen">
  h3{
    font-family: Keep Singing;
    color: #00cc99;
  }
</style>
<title>Login Murid</title>
  <div class="kontainer">
    <div class="container">
      <div class="row">
        <div class="col s6"><img class="responsive-img" src="/img/student_4_.ico"></div>
        <div class="col s6">
            <h3>Masuk Sebagai Murid</h3>
          <form class="col s12" method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="row">
              <div class="input-field col s12">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="input-field col s12">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="password" placeholder="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
              </div>
            </div>
                <button type="submit" name="button" class="btn">MASUK</button>
                <a href="{{ route('password.request') }}">Lupa Password ?</a>
          </form>
      </div>

    </div>

  </div>
@endsection
