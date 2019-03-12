
<div class="container-fluid rows-second-profile" id="tes2">
   <div class="row">
               <div class="col xl12">
                    <div class="row"> 
                            <div class="col xl12">
                              <h1 class="header-profile-second">Daftar  Pengajar</h1>
                            </div>
                        </div>
                        <div class="row">
                           @foreach ($teacher as $teachers)
                           @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
                         <a class="col xl2 center modal-trigger" id="column-profile-teach" href="#{{$teachers->id}}">
                               <div class="row">
                                <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                                <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                                <p class="paragraph-title-educate">{{$teachers->verifikasi }}</p>
                               
                                    <div class="row">
                                      <h4 class="header-status-subject-matpel">Mengajar :</h4>
                                      @foreach ($teachers->Subject as $matpel)
                                  
                                              <div class="col s4">
                                                  <p class="paragraph-title-educate-second">{{$matpel->mata_pelajaran}}</p>
                                              </div>
                                        
                                      @endforeach
                                    </div>

                                    <div class="row">
                                      <h4 class="header-status-subject-matpel">Lihat Pencapaian :</h4>
                                      @foreach ($teachers->File as $files)
                                  
                                      <div class="col s4">
                                      <img src="{{$files->file}}" class="img-sertified-prove">
                                      </div>
                                
                              @endforeach
                                    </div>
                               </div>
                         </a>
                    
                              
                           @endif
                                  @include('component.AfterLogin.PopUpTeacherProf')           
                           @endforeach
                        </div>
               </div>
   </div>
{{-- sains and technology --}}
   <div class="row">
    <div class="col xl12">
         <div class="row"> 
                 <div class="col xl12">
                   <h1 class="header-profile-second">Daftar Katagori Pengajar Teknologi dan Science</h1>
                 </div>
             </div>
             <div class="row">
                @foreach ($teacher as $teachers)
                @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
                 @foreach ($teachers->Subject as $subjects)
                     @if ($subjects->mata_pelajaran == 'Biologi' || $subjects->mata_pelajaran == 'Kimia' || $subjects->mata_pelajaran == 'Fisika' || $subjects->mata_pelajaran == 'Pemrogaman')
                         <a class="col xl2 center modal-trigger" id="column-profile-teach" href="#{{$teachers->id}}">
                               <div class="row">
                                <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                                <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                                <p class="paragraph-title-educate">{{$teachers->verifikasi }}</p>
                               
                                    <div class="row">
                                      <h4 class="header-status-subject-matpel">Mengajar :</h4>
                                      @foreach ($teachers->Subject as $matpel)
                                  
                                              <div class="col s4">
                                                  <p class="paragraph-title-educate-second">{{$matpel->mata_pelajaran}}</p>
                                              </div>
                                        
                                      @endforeach
                                    </div>

                                    <div class="row">
                                      <h4 class="header-status-subject-matpel">Lihat Pencapaian :</h4>
                                      @foreach ($teachers->File as $files)
                                  
                                      <div class="col s4">
                                      <img src="{{$files->file}}" class="img-sertified-prove">
                                      </div>
                                
                              @endforeach
                                    </div>
                               </div>
                         </a>
                     @endif
                     
                     @endforeach
                @endif
                       @include('component.AfterLogin.PopUpTeacherProf')           
                @endforeach
             </div>
    </div>
  </div>

{{-- Sosial enterpreneur --}}
  <div class="row">
    <div class="col xl12">
         <div class="row"> 
                 <div class="col xl12">
                   <h1 class="header-profile-second">Daftar Katagori Pengajar Sosial dan Enterpreneur </h1>
                 </div>
             </div>
             <div class="row">
                @foreach ($teacher as $teachers)
                @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
                 @foreach ($teachers->Subject as $subjects)
                     @if ($subjects->mata_pelajaran == 'PKN' || $subjects->mata_pelajaran == 'Marketing' || $subjects->mata_pelajaran == 'IPS')
                     <a class="col xl2 center modal-trigger" id="column-profile-teach" href="#{{$teachers->id}}">
                      <div class="row">
                       <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                       <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                       <p class="paragraph-title-educate">{{$teachers->verifikasi }}</p>
                      
                           <div class="row">
                             <h4 class="header-status-subject-matpel">Mengajar :</h4>
                             @foreach ($teachers->Subject as $matpel)
                         
                                     <div class="col s4">
                                         <p class="paragraph-title-educate-second">{{$matpel->mata_pelajaran}}</p>
                                     </div>
                               
                             @endforeach
                           </div>

                           <div class="row">
                             <h4 class="header-status-subject-matpel">Lihat Pencapaian :</h4>
                             @foreach ($teachers->File as $files)
                         
                             <div class="col s4">
                             <img src="{{$files->file}}" class="img-sertified-prove">
                             </div>
                       
                     @endforeach
                           </div>
                      </div>
                </a>
                     @endif
                     
                     @endforeach
                @endif
                       @include('component.AfterLogin.PopUpTeacherProf')           
                @endforeach
             </div>
    </div>
  </div>

</div>