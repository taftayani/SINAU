<div class="container-fluid" id="tes">
    <div class="img-parralax">         
       <div class="container rows-login-home">
          <div class="row ">
              <div class="col xl2" id="column-img">
                <img src="{{$teacher->SeeTeacher->foto}}" class="photo-profile">
                <div class="link-column-profile"><a href="{{route ('shown_teacher') }}" class="link-profile">Data Anda Mengajar</a></div>
              </div>
              <div class="col xl8 column-paragraph">
                  <h6 class="heading-profile" style="white-space: nowrap;"><b>{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} </b>
                    @if ($teacher->verifikasi == "Belum Verifikasi")
                        (Akun Belum Diverifikasi)
                    @elseif($teacher->verifikasi == "Akun Sudah Diverifikasi") 
                        (Akun Sudah Diverifikasi)
                    @elseif($teacher->verifikasi == "Verifikasi Akun Ditolak")
                        (Akun Anda Ditolak)
                    @endif
                  </h6>
                  <h6 class="heading-second-profile"> <i class="tiny material-icons">location_on</i>{{ Auth::user()->address}}</h6>
                  <h6 class="heading-second-profile"><i class="tiny material-icons">email</i> {{ Auth::user()->email}}</h6>
                  <h6 class="heading-second-profile"><i class="tiny material-icons">local_phone</i> {{ Auth::user()->phone}}</h6>
                  <p class="paragraph-profile">{{$teacher->resume}}
                </p>
              </div>
          </div>

       </div>
    </div>
</div>