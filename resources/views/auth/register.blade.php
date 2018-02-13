@extends('content.apps')
@section('content')

<style media="screen">
h3{
  font-family: Keep Singing;
  color:#00ffbf;
}
h4{
  font-family: Keep Singing;
  color:  #00cc99;
  margin-left: 350px;
}
.daftar{
  background-color: #f2f2f2;
}
button{
  width: 300px;
}
</style>
  <div class="daftar-video">
    <div class="container">
      <div class="row">
        <div class="col s12 center">
           <h3><i class="material-icons">add_box</i>Daftar Murid</h3>
        </div>
      </div>
      <div class="row">
        <div class="col s6"><img class="responsive-img" src="/img/student_4_.ico"></div>
        <div class="col s6">
          <p>Belajar di SINAU YO, kamu akan mendapatkan pembelajaran yang berbeda. Disini,
          kamu tidak hanya belajar materi di sekolah pada umumnya. Namun semuanya ada, seperti dibidang olahraga
        ,bidang kesenian, bidang kuliner, dan lainnya. Lalu, disini kamu dapat memilih metode belajar yang kamu inginkan.
      Dengan SINAU OFFLINE ataupun SINAU ONLINE. Tunggu apalagi ? segera daftarkan dirimu!!! </p>
        </div>
      </div>
</div>
</div>
      <div class="daftar">
        <div class="container-fluid">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <form class="col s12" method="post" action="{{ route('register') }}">
               {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" name="nama_depan" type="text" class="validate" value="{{ old('nama_depan') }}">

                @if ($errors->has('nama_depan'))
                  <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_depan')  }}</p>
                @endif

                  <label for="first_name">Nama depan</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" name="nama_belakang" type="text" class="validate" value="{{ old('nama_belakang') }}">

                  @if ($errors->has('nama_belakang'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_belakang')  }}</p>
                @endif
                  <label for="last_name">Nama belakang</label>


                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}">

                  @if ($errors->has('email'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('email')  }}</p>
                  @endif

                  <label for="password">email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="username" type="text" class="validate" value="{{ old('username') }}">

                  @if ($errors->has('username'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('username')  }}</p>
                  @endif

                  <label for="password">Username</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="email" name="password" type="password" class="validate">
                  @if ($errors->has('password'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password')  }}</p>
                  @endif

                  <label for="password">password</label>
                </div>
                <div class="input-field col s6">
                  <input id="email" name="password_confirmation" type="password" class="validate">
                  @if ($errors->has('password_confirmed'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password_confirmed') }}</p>
                  @endif
                  <label for="password">Re-password</label>

                </div>
              </div>
            <button type="submit" name="button" class="btn center">Daftar</button>
          </form>
        </div>
        </div>
      </div>
      </div>
    </div>

  </div>
@endsection
