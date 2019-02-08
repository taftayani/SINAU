
<div class="container-fluid rows-second-profile" id="tes2">
   <div class="row">
               <div class="col xl12">
                    <div class="row"> 
                            <div class="col xl12">
                              <h1 class="header-profile-second">Daftar Pengajar</h1>
                            </div>
                        </div>
                        <div class="row">
                           @foreach ($teacher as $teachers)
                           @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
                            @foreach ($teachers->Subject as $subjects)
                                @if ($subjects->mata_pelajaran == 'Biologi')
                                    <a class="col xl2 center modal-trigger" id="column-profile-teach" href="#{{$teachers->id}}">
                                            <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                                            <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                                            <p class="paragraph-title-educate">{{$teachers->verifikasi }}</p>
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