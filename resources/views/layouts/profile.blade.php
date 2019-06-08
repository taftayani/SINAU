@extends('content.master2')

@section('content')
  <style media="screen">
    h3{
      font-family: Keep Singing;
    }
    .foto{
      width: 200px;
      height: 200px;
      margin-left: auto;
      margin-right: auto;
    }
    #button{
      width: 300px;
    }
    .user{
      font-size: 20px;
    }
    .content-edit{
      padding-top: 100px;
    }
  </style>

<div class="container content-edit">
  <div class="row">
    <h1 class="edit-data">Edit Foto</h1>
      <div class="col s12 m12 center">     
            <img src="{{Auth::user()->foto}}" class="foto">
            <form action="{{ route('change_photo',['user'=>Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}  
              <div class="file-field input-field">
                    <div class="btn">
                      <span>Photo</span>
                      <input type="file" name="foto" multiple>
                    </div>
                    <div class="file-path-wrapper">
                    <input class="file-path validate " id="input-form" placeholder="masukan foto sebelumnya/ masukan foto baru" required>
                    </div>
                    @if ($errors->has('foto'))
                    <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('foto')  }}</p>
                  @endif
                  </div>
                  <button type="submit" name="button" class="btn grey darken-3" id="button" >Ubah Foto<i class="material-icons">create</i></button>
            </form> 
      </div>
      <!-- edit profile-->
      <h1 class="edit-data">Edit Data Diri</h1>
    <form class="col s12 m12 center" action="{{ route('edit',['user'=>Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nama depan" id="input-form" name="nama_depan" type="text" class="validate" value="{{ Auth::user()->nama_depan }}">
        </div>
        @if ($errors->has('nama_depan'))
          <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_depan')  }}</p>
        @endif
        <div class="input-field col s6">
          <input id="input-form" name="nama_belakang" placeholder="nama belakang" type="text" class="validate" value="{{ Auth::user()->nama_belakang }}">
        </div>
        @if ($errors->has('nama_belakang'))
          <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('nama_belakang')  }}</p>
        @endif
      </div>

      <div class="row">
          <div class="input-field col xl6 s12 m5">
            <input id="input-form" placeholder="Nomor Telp Masih kosong" name="phone" type="number" value="{{ Auth::user()->phone }}">
            @if ($errors->has('phone'))
            <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('phone')  }}</p>
          @endif
          </div>

          <div class="input-field col xl6 s12 m5">
              <input id="input-form" name="birthday" type="date" value="{{ Auth::user()->birthday }}" required>

              @if ($errors->has('birthday'))
                <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('birthday')  }}</p>
              @endif
            </div>
        </div>
        

    <div class="row">
        <div class="input-field col s12">
        <input id="input-form" placeholder="nama jalan" name="address" type="text"  value="{{ Auth::user()->address }}" required>
        </div>
        <div class="input-field col s6">
        <input id="input-form" placeholder="Kecamatan" name="district" type="text"  value="{{ Auth::user()->district }}" required>
          </div>
          <div class="input-field col s6">
          <input id="input-form" placeholder="Kelurahan" name="region" type="text"  value="{{ Auth::user()->region }}" required>
            </div>
            <div class="input-field col s6">
            <input id="input-form" placeholder="Kota madya" name="province" type="text"  value="{{ Auth::user()->province }}" required>
              </div>
              <div class="input-field col s6">
              <input id="input-form" placeholder="Kode Pos" name="pos_code" type="number"  value="{{ Auth::user()->pos_code }}" required>
                </div>
      </div>

      
     
    <button type="submit" name="button" class="btn grey darken-3" id="button" >Edit Data Diri<i class="material-icons">create</i></button>
    </form>
    <h1 class="edit-data">Ubah Password</h1>
    <div class="col m12 s12 center">
        <form  action="{{ route('change_password',['user'=>Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="row">
                <div class="input-field col s12">
                <input id="input-form" placeholder="Ganti Password" name="password" type="password" required>
                @if ($errors->has('password'))
                  <p class="red-text"><i class="material-icons">create</i>{{ $errors->first('password')  }}</p>
                @endif
                </div>
              </div>
              <button type="submit" name="button" class="btn grey darken-3" id="button" >Edit Password<i class="material-icons">create</i></button>
        </form>
    </div>
    </div>
    </div>

@endsection
