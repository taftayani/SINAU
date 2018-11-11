<div class="container-fluid rows-second-profile">
    <div class="row"> 
        <div class="col xl12">
          <h1 class="header-profile-second">Riwayat Pengajaran</h1>
        </div>
    </div>
    <div class="row">
        <div class="col xl2 center" id="column-profile-teach">
            <img src="{{Auth::user()->foto}}" alt="" class="img-profile-teach">
            <h6 class="header-teach">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h6>
            <p class="paragraph-title-educate">Matematika</p>
        </div>
        <div class="col xl2 center" id="column-profile-teach">
          <img src="{{Auth::user()->foto}}" alt="" class="img-profile-teach">
          <h6 class="header-teach">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h6>
          <p class="paragraph-title-educate">Matematika</p>
      </div>
      <div class="col xl2 center" id="column-profile-teach">
        <img src="{{Auth::user()->foto}}" alt="" class="img-profile-teach">
        <h6 class="header-teach">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h6>
        <p class="paragraph-title-educate">Matematika</p>
    </div>
    <div class="col xl2 center" id="column-profile-teach">
      <img src="{{Auth::user()->foto}}" alt="" class="img-profile-teach">
      <h6 class="header-teach">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h6>
      <p class="paragraph-title-educate">Matematika</p>
  </div>
    </div>
</div>