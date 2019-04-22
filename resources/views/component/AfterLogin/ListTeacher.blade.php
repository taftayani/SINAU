
<div class="container-fluid rows-second-profile" id="tes2">
    <div class="row">
      <div class="container">
          <div class="row"> 
              <div class="col xl12">
                <h1 class="center header-profile-second">Daftar  Pengajar</h1>
              </div>
              <div class="col l12">
                 <p class="center paragraph-teacher-choose">Pilih salah satu pengajar untuk melakukan kontrak belajar </p>
              </div>
          </div>
        <form action="{{route('search_teacher')}}" method="GET">
          {{ csrf_field() }}
          <div class="row">
            <div class="col l3">
               
            </div>
           <div class="col l5">
              <label for="">Cari Materi</label>
              <select name="search">
                  <option value="" disabled>Materi Belajar</option>
                  <option value="matematika" name="search">Matematika</option> 
                  <option value="biologi" name="search">Biologi</option> 
                  <option value="fisika" name="search">Fisika</option> 
                  <option value="PKN" name="search">PKN</option>                         
          </select>
           </div>
           <div class="col l2">
              <button type="submit">Cari</button>
           </div>
        </div> 
      </form> 
      </div> 
{{-- list teacher --}}
   <div class="container">
      <div class="row">
          @foreach ($teacher as $teachers)
          @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
          <div class="col xl4">
                  <a class="modal-trigger" href="{{route('confirm', ['teacher' => $teachers->id])}}">
                      <div class="card-teacher col 12" id="column-profile-teach" >
                      <div class="row">
                      <div class="header-div-teach">
                          <div class="row">
                              <div class="col l5">
                                 <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                              </div>
                               <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                               <h6 class="header-location"><img src="{{asset('img/Logo/person.svg')}}" class="img-location">
                                @if ($teachers->SeeTeacher->gender == "Male")
                                    Laki-Laki
                                @else 
                                  Perempuan
                                @endif
                              </h6>
                               <h6 class="header-location"><img src="{{asset('img/Logo/location.svg')}}" class="img-location">{{$teachers->SeeTeacher->province}}</h6>
                               
                           </div>
                      </div>
                           <div class="row">
                            <div class="header-teaching">
                                <div class="col l12">
                                    <h4 class="header-status-subject-matpel">Mengajar :</h4>
                                 </div>
                                 <div class="col l12">
                                 @foreach ($teachers->Subject as $matpel)
                                    <div class="col s4">
                                        <p class="paragraph-title-educate-second">{{$matpel->mata_pelajaran}}</p>
                                    </div>
                                 @endforeach                
                                </div>
                            </div>
                           </div>
                      </div>
                  </div>
                </a>
            
          </div>
          @endif
          @endforeach
        
      </div>
   </div>
      <div class="container">
        <div class="row">
            {{$teacher->links()}}
        </div>
      </div>
</div>
{{-- sains and technology --}}
<div class="row">
    <div class="container">
        <div class="row"> 
            <div class="col xl12">
              <h1 class="center header-profile-second">Daftar  Pengajar Sains dan Teknologi</h1>
            </div>
            <div class="col l12">
               <p class="center paragraph-teacher-choose">Seorang pengajar yang mengajar materi tentang dasar sains dan teknologi</p>
            </div>
        </div>  
    </div> 
{{-- list teacher --}}
 <div class="container">
    <div class="row">
        @foreach ($teacher as $teachers)
        @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
        @foreach ($teachers->Subject as $subjects)
        @if ($subjects->mata_pelajaran == 'Biologi' || $subjects->mata_pelajaran == 'Kimia' || $subjects->mata_pelajaran == 'Fisika' || $subjects->mata_pelajaran == 'pemrogaman')
        <div class="col xl4">
                <a class="modal-trigger" href="{{route('confirm', ['teacher' => $teachers->id])}}">
                    <div class="card-teacher col 12" id="column-profile-teach" >
                    <div class="row">
                    <div class="header-div-teach">
                        <div class="row">
                            <div class="col l5">
                               <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                            </div>
                             <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                             <h6 class="header-location"><img src="{{asset('img/Logo/person.svg')}}" class="img-location">
                              @if ($teachers->SeeTeacher->gender == "Male")
                                  Laki-Laki
                              @else 
                                Perempuan
                              @endif
                            </h6>
                             <h6 class="header-location"><img src="{{asset('img/Logo/location.svg')}}" class="img-location">{{$teachers->SeeTeacher->province}}</h6>
                             
                         </div>
                    </div>
                         <div class="row">
                          <div class="header-teaching">
                              <div class="col l12">
                                  <h4 class="header-status-subject-matpel">Mengajar :</h4>
                               </div>
                               <div class="col l12">
                               @foreach ($teachers->Subject as $matpel)
                                  <div class="col s4">
                                      <p class="paragraph-title-educate-second">{{$matpel->mata_pelajaran}}</p>
                                  </div>
                               @endforeach                
                              </div>
                          </div>
                         </div>
                    </div>
                </div>
              </a>
          
        </div>
        @endif
        @endforeach
        @endif
        @endforeach
      
    </div>
 </div>
             {{-- {{$teacher->links()}} --}}
</div>
{{-- Sosial enterpreneur --}}
<div class="row">
    <div class="container">
        <div class="row"> 
            <div class="col xl12">
              <h1 class="center header-profile-second">Daftar  Pengajar Sosial dan Enterpreneur</h1>
            </div>
            <div class="col l12">
               <p class="center paragraph-teacher-choose">Seorang pengajar yang mengajar materi tentang dasar enterpreneur, Sosiologi, dan Kewarganegaraan</p>
            </div>
        </div>  
    </div> 
{{-- list teacher --}}
<div class="container">
    <div class="row">
        @foreach ($teacher as $teachers)
        @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
        @foreach ($teachers->Subject as $subjects)
        @if ($subjects->mata_pelajaran == 'PKN' || $subjects->mata_pelajaran == 'Marketing' || $subjects->mata_pelajaran == 'IPS')
        <div class="col xl4">
                <a class="modal-trigger" href="{{route('confirm', ['teacher' => $teachers->id])}}">
                    <div class="card-teacher col 12" id="column-profile-teach" >
                    <div class="row">
                    <div class="header-div-teach">
                        <div class="row">
                            <div class="col l5">
                               <img src="{{$teachers->SeeTeacher->foto}}" class="img-profile-teach">
                            </div>
                             <h6 class="header-teach">{{$teachers->SeeTeacher->nama_depan}} {{$teachers->SeeTeacher->nama_belakang}}</h6>
                             <h6 class="header-location"><img src="{{asset('img/Logo/person.svg')}}" class="img-location">
                              @if ($teachers->SeeTeacher->gender == "Male")
                                  Laki-Laki
                              @else 
                                Perempuan
                              @endif
                            </h6>
                             <h6 class="header-location"><img src="{{asset('img/Logo/location.svg')}}" class="img-location">{{$teachers->SeeTeacher->province}}</h6>
                             
                         </div>
                    </div>
                         <div class="row">
                          <div class="header-teaching">
                              <div class="col l12">
                                  <h4 class="header-status-subject-matpel">Mengajar :</h4>
                               </div>
                               <div class="col l12">
                               @foreach ($teachers->Subject as $matpel)
                                  <div class="col s4">
                                      <p class="paragraph-title-educate-second">{{$matpel->mata_pelajaran}}</p>
                                  </div>
                               @endforeach                
                              </div>
                          </div>
                         </div>
                    </div>
                </div>
              </a>
          
        </div>
        @endif
        @endforeach
        @endif
        @endforeach
      
    </div>
 </div>
</div>
             {{-- {{$teacher->links()}} --}}
</div>
</div>