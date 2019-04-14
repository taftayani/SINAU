@extends('content.masterTeacher')
@section('content')
   <div class="container-fluid bg-profile-teacher">
            <div class="row">
                  <div class="col s3 center" id="tab-choose-section">
                     <a href="{{route('guru')}}" class="link-beranda-teach" style="color:white;"> <i class="medium material-icons">home</i> Kembali Ke Beranda</a>
                        
                     <ul class="tabs" id="tab-teacher">
                           <li class="col l12 tab"><a href="#EditDataTeacher" style="color:white;">Data Pengajar</a></li>
                           <li class="col l12 tab"><a href="#Subject" style="color:white;">Materi Pengajaran</a></li>
                           <li class="col l12 tab"><a href="#Shcedule" style="color:white;">Jadwal Pengajaran</a></li>
                           <li class="col l12 tab"><a href="#Filing" style="color:white;">Unggah Pencapaian yang didapat</a></li>
                        </ul>
                  </div>
                  {{-- <ul id="slide-out" class="side-nav">
                    <div class="col s12 center">
                          
                        </div>
                   </ul> --}}
                   {{-- <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a> --}}
                     
                  <div class="col s8" id="section-profile">
                        @include('component.UserData.EditTeacher')
                        @include('component.UserData.ListSubjectForm')
                        @include('component.UserData.ListScheduleForm')
                        @include('component.UserData.FileTeacher')
                  </div>
           </div>
   </div>
@endsection