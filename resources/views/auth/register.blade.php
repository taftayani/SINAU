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
                <div class="input-field col xl5 s12 m5 text-long" style="margin-right:10px;">
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
                <div class="input-field col xl5 s12 m5 text-long" style="margin-right:10px;">
                  <input id="email" name="email" type="email" class="validate text-long" value="{{ old('email') }}">

                  @if ($errors->has('email'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('email')  }}</p>
                  @endif

                  <label for="password">email</label>
                </div>

                <div class="input-field col xl5 s12 m5 text-long">
                    <input id="email" name="password" type="password" class="validate text-long">
                    @if ($errors->has('password'))
                      <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password')  }}</p>
                    @endif
  
                    <label for="password">password</label>
                  </div>
                  <div class="input-field col xl10 s12 m5 text-long" style="margin-top:40px;">
                    <select name="gender">
                        <option disabled selected>Jenis Kelamin</option>
                        <option value="Male" name="gender">Laki-Laki</option>
                        <option value="Female" name="gender">Perempuan</option>
                    </select>
                  </div>
              </div>

              {{-- <div class="row">
                  <div class="input-field col xl5 s12 m5 text-long">
                    <input id="email" name="phone" type="number" class="validate text-long" value="{{ old('phone') }}">
  
                    @if ($errors->has('phone'))
                      <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('phone')  }}</p>
                    @endif
  
                    <label for="password">No Telp</label>
                  </div>
  
                  <div class="input-field col xl5 s12 m5 text-long">
                      <input id="email" name="birthday" type="date" class="validate text-long" value="{{ old('birthday') }}">
    
                      @if ($errors->has('birthday'))
                        <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('birthday')  }}</p>
                      @endif
                    </div>
                </div> --}}

                {{-- <div class="row">
                    <div class="input-field col xl5 s12 m5 text-long">
                      <input id="email" name="address" type="text" class="validate text-long" value="{{ old('address') }}">
    
                      @if ($errors->has('address'))
                        <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('address')  }}</p>
                      @endif
    
                      <label for="password">Alamat Tinggal Anda</label>
                    </div>
    
                    <div class="input-field col xl5 s12 m5 text-long">
                        <select name="gender">
                            <option value="Pendidikan" disabled selected>Jenis Kelamin</option>
                            <option value="Male" name="gender">Laki-Laki</option>
                            <option value="Female" name="gender">Perempuan</option>
                        </select>
                  </div>
                 </div> --}}

              {{-- <div class="row">
              
                <div class="input-field col xl5 s12 m5 text-long">
                  <input id="email" name="password_confirmation" type="password" class="validate text-long">
                  @if ($errors->has('password_confirmed'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password_confirmed') }}</p>
                  @endif
                  <label for="password">Re-password</label>

                </div>
              </div> --}}
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
