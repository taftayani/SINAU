<div class="container-fluid" id="tes">
    <div class="img-parralax">         
       <div class="container rows-login-home">
          <div class="row ">
              <div class="col xl2" id="column-img">
                <img src="{{Auth::user()->foto}}" class="photo-profile">
                <div class="link-column-profile"><a href="{{ route('layouts.profile') }}" class="link-profile">Data Diri Anda</a></div>
              </div>
              <div class="col xl8 column-paragraph">
                  <h6 class="heading-profile"><b>{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} </b></h6>
                  <h6 class="heading-second-profile"> <i class="tiny material-icons">location_on</i>{{ Auth::user()->address}}</h6>
                  <h6 class="heading-second-profile"><i class="tiny material-icons">email</i> {{ Auth::user()->email}}</h6>
                  <h6 class="heading-second-profile"><i class="tiny material-icons">local_phone</i> {{ Auth::user()->phone}}</h6>
                  {{-- <p class="paragraph-profile">{{Auth::user()->a}}.</p> --}}
              </div>
          </div>

       </div>
    </div>
</div>