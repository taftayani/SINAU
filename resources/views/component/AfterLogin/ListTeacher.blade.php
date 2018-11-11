<div class="container-fluid rows-second-profile" id="tes2">
    <div class="row"> 
        <div class="col xl12">
          <h1 class="header-profile-second">Daftar Pengajar</h1>
        </div>
    </div>
    <div class="row">
        
       @foreach ($teacher as $teachers)
    <a class="col xl2 center modal-trigger" id="column-profile-teach" href="#{{$teachers->id}}">
       <img src="{{$teachers->user_foto}}" class="img-profile-teach">
        <h6 class="header-teach">{{$teachers->user_nama_depan}} {{$teachers->user_nama_belakang}}</h6>
       <p class="paragraph-title-educate"></p>
    </a>
        
<div id="{{$teachers->id}}" class="modal container col xl12">
    <div class="modal-content">
             <div class="container"> 
                <div class="row"> 
                    
                        <div class="col xl5" id="column-img">
                                <img src="{{$teachers->user_foto}}" class="photo-profile-edit-teach">
                        <div class="link-column-profile"><h6 class="header-list-address"></h6></div>
                        </div>
                        <div class="col xl7"> 
                            <div class="container">
                                  <div class="row">
                                        <h1 class="header-name">{{$teachers->user_nama_depan}} {{$teachers->user_nama_belakang}}</h1>
                                        <h1 class="header-contact">{{$teachers->ktp}} / 08192929292929 </h1>
                                        <p class="paragraph-biodata">{{$teachers->resume}}
                                        </p>      
                                  </div>
                            </div>
                        </div>
                </div>
             </div>

             <div class="container-fluid rows-subject">
                    <div class="row">
                        <div>
                            <h1 class="header-subject">Materi Pengajaran</h1>
                        </div>
                    </div>
                    <div class="row">
                            @foreach ($subject as $subjects)
                        <div class="col xl2" >                         
                            <h6 class="list-subject">{{$subjects->mata_pelajaran}}</h6>
                        </div>
                        @endforeach
                    </div>
            </div>

             <div class="container-fluid rows-subject">
                    <div class="row">
                        <div>
                            <h1 class="header-subject">Jadwal Mengajar</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col xl1 " id="column-subject"> 
                            <h6 class="header-list-schedule">Senin</h6>
                            <ul class="list-schedule">
                                <li>08.30</li>
                                <li>09.00</li>
                                <li>10.00</li>
                            </ul>
                        </div>
                        <div class="col xl1 column-subject" id="column-subject"> 
                            <h6 class="header-list-schedule">Senin</h6>
                            <ul class="list-schedule">
                                <li>08.30</li>
                                <li>09.00</li>
                                <li>10.00</li>
                            </ul>
                        </div>
                        <div class="col xl1 column-subject" id="column-subject"> 
                            <h6 class="header-list-schedule">Senin</h6>
                            <ul class="list-schedule">
                                <li>08.30</li>
                                <li>09.00</li>
                                <li>10.00</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row right" id=""> 
                <div class="col xl6"> <button class="btn-order"}}> <a href="{{route('Pilih_guru')}}" class="link-choose-teacher">Pilih Guru</a> </button></div>
                        <div class="col xl6"><p class="paragraph-biodata">Jumlah Max Mengajar : <b>8 orang</b></p></div>
                   </div>
                
            </div>
            
          </div>
       @endforeach
    </div>
</div>