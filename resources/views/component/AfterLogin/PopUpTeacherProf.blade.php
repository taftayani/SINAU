<div id="{{$teachers->id}}" class="modal container col xl12">
    <div class="modal-content">
             <div class="container"> 
                <div class="row"> 
                    
                        <div class="col xl5" id="column-img">
                                <img src="{{$teachers->SeeTeacher->foto}}" class="photo-profile-edit-teach">
                        <div class="link-column-profile"><h6 class="header-list-address"></h6></div>
                        </div>
                        <div class="col xl7"> 
                            <div class="container">
                                  <div class="row">
                                        <h1 class="header-name">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h1>
                                        <p class="paragraph-biodata">MOTIVASI MENGAJAR : </p>
                                        <p class="paragraph-biodata">{{$teachers->resume}}
                                        </p>      
                                  </div>
                            </div>
                        </div>
                </div>
             </div>

             <div class="container-fluid rows-subject">
                    <div class="row" id="">
                        <div>
                            <h1 class="header-subject">Materi Pengajaran</h1>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($teachers->Subject as $subject)
                        <div class="col xl2 ">                         
                            <h6 class="list-subject" {{$subject->id}}>{{$subject->mata_pelajaran}}</h6>
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
                        @foreach ($teachers->Schedule as $shcedule) 
                        <div class="col xl1 " id="column-subject"> 
                            <h6 class="header-list-schedule">{{$shcedule->day}}</h6>
                            <ul class="list-schedule">
                                <li>{{$shcedule->time_les}}</li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                   
                </div>

                <div class="row right" id=""> 
                <div class="col xl12"> <button class="btn-order"> <a href="{{route('confirm', ['teacher' => $teachers->id])}}" class="link-choose-teacher">Pilih Guru</a> </button></div>
                   </div>
                
            </div>
            
          </div>