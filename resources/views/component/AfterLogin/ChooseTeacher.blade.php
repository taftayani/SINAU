<div class="layouts-choose">

        <div class="container"> 
            <div class="row"> 
                    <div class="col xl5" id="column-img">
                    <img src="{{asset($teacher->SeeTeacher->foto)}}" class="photo-profile-edit-teach">
                    <div class="link-column-profile"><h6 class="header-list-address">{{$teacher->SeeTeacher->address}}</h6></div>
                    </div>
                    <div class="col xl7"> 
                        <div class="container">
                              <div class="row">
                                    <h1 class="header-name">{{$teacher->SeeTeacher->nama_depan}} {{$teacher->SeeTeacher->nama_belakang}}</h1>
                                    <h1 class="header-contact">{{$teacher->SeeTeacher->email}} / {{$teacher->SeeTeacher->phone}} </h1>
                                    <p class="paragraph-biodata">
                                        {{$teacher->resume}}
                                    </p>      
                              </div>
                              <div class="right"><p class="paragraph-biodata">Jumlah Max Mengajar : <b>8 orang</b></p></div>
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
                        @foreach ($teacher->Subject as $subject) 
                        <div class="col xl2 "> 
                                <div class="div-list-subject">          
                                          <h1 id="list-subject">  
                                               {{$subject->mata_pelajaran}}
                                          </h1>      
                                       </div>
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
                        @foreach ($teacher->Schedule as $shcedule) 
                        <div class="col xl1 " id="column-subject"> 
                            <h6 class="header-list-schedule">{{$shcedule->day}}</h6>
                            <ul class="list-schedule">
                                <li>{{$shcedule->time_les}}</li>
                            </ul>
                        </div>
                        @endforeach
                </div>
            </div>

            <div class="row right" id="rows-btn-konfirmasi"> 
                <div class="col xl6"> <button class="btn-order-return"}}> <a href="{{route('home')}}" class="link-choose-teacher">Kembali</a> </button></div>
                <div class="col xl6"> <button class="btn-order-next"}}> <a href="{{route('confirm',['teacher' => $teacher->id])}}" class="link-choose-teacher">Berikutnya</a> </button></div>       
            </div>
          
            </div>
                 
         