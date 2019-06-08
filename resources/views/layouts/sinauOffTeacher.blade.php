@extends('content.masterTeacher')
@section('content')
   <div class="container-fluid bg-profile-off">
        @include('component.AfterLogin.PhotoProfileTeacher')
       <div class="container">
            <div class="row">
               <div class="col m12 center">
                  <h4 class="heading-step-teacher">Hal Yang Harus Diperhatikan Untuk Menjadi Pengajar</h4>
               </div>
               <div class="col m6">
                  <div class="card-step-teacher">
                        <div class="row ">
                              <div class="col m3">
                              <img src="{{asset('img/Product/folder.svg')}}" alt="">
                              </div>
                              <div class="col m9">
                                 <p class="paragraph-step-teacher">
                                    Lengkapi Data Menjadi Pengajar
                                 </p>
                                 <ul class="list-step-teacher">
                                    <li>Pilih Edit Data Pengajar</li>
                                    <li>Isikan Kelengkapan data pengajar seperti ktp, npwp, pendidikan, dan
                                       motivasi mengajar. apabila sudah, maka anda tidak perlu mengisi
                                    </li>
                                 </ul>
                              </div>
                           </div>
                  </div>
                 
               </div>
               <div class="col m6">
                     <div class="card-step-teacher">
                           <div class="row ">
                                 <div class="col m3">
                                 <img src="{{asset('img/Product/Materi.svg')}}" alt="">
                                 </div>
                                 <div class="col m9">
                                    <p class="paragraph-step-teacher">
                                       Lengkapi Materi Pengajaran
                                    </p>
                                    <ul class="list-step-teacher">
                                       <li>Pilih Edit Data Pengajar</li>
                                       <li>Pilih 3 materi untuk mengajar dalam satu bidang keilmuan saja.
                                          contoh anda ingin mengambil keilmuan sains, maka pilih matematika, biologi,
                                          dan fisika. apabila anda mengambil satu materi yang berbeda keilmuan anda harus mengulangnya kembali
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                     </div>
                  </div>
                  <div class="col m6">
                        <div class="card-step-teacher">
                              <div class="row ">
                                    <div class="col m3">
                                    <img src="{{asset('img/Product/Jadwal.svg')}}" alt="">
                                    </div>
                                    <div class="col m9">
                                       <p class="paragraph-step-teacher">
                                          Lengkapi Jadwal Mengajar Anda
                                       </p>
                                       <ul class="list-step-teacher">
                                          <li>Pilih Edit Data Pengajar</li>
                                          <li>Masukan jadwal mengajar anda, berupa hari dan jam untuk mengajar. 
                                             anda cukup memasukan maksimal 3 jadwal untuk mengajar. 
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                     </div>
                     <div class="col m6">
                           <div class="card-step-teacher">
                                 <div class="row ">
                                       <div class="col m3">
                                       <img src="{{asset('img/Product/Sertig.svg')}}" alt="">
                                       </div>
                                       <div class="col m9">
                                          <p class="paragraph-step-teacher">
                                             Lengkapi File Pencapaian atau Sertifikasi
                                          </p>
                                          <ul class="list-step-teacher">
                                             <li>Pilih Edit Data Pengajar</li>
                                             <li>Unggah file pencaipaian anda, sesuai dengan keilmuan yang anda ambil.
                                             Unggah maksimal 3 file pencapaian saja 
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                           </div>
                        </div>
            </div>
       </div>
       <div class="container">
            <div class="row">
                  <div class="col m12 center">
                        <h4 class="heading-step-teacher">Informasi Tambahan</h4>
                  </div>
                <div class="row">
                     <div class="col xl12">
                           <div class="card-info-teacher">
                                 <div class="row ">
                                       <div class="col m3">
                                       <img src="{{asset('img/Product/info.svg')}}" alt="">
                                       </div>
                                       <div class="col m9">
                                          <p class="paragraph-step-teacher">
                                             Kewajiban Saat Anda Menjadi Pengajar
                                          </p>
                                          <p class="paragraph-info-teacher">
                                                Saat anda sudah <b class="bold-info">menjadi pegajar</b>, 
                                                anda sudah <b class="bold-info">bertanggung jawab penuh dalam proses pembelajaraan
                                                 yang akan anda jalani. Dan anda wajib untuk memberi absen kepada 
                                                 murid dan kawan-kawannya </b> saat proses pembelajaran berlangsung. 
                                                 Anda <b class="bold-info">diwajibkan untuk membuat video anda bersama murid-murid anda</b>. 
                                                 Dan isi dari video tersebut yaitu berupa <b class="bold-info">pemecahan masalah/solusi dari 
                                                 soal yang akan diberikan oleh Sinau Yo bedasarkan materi yang akan anda 
                                                 ajarkan</b>. Dan anda wajib menjawab <b class="bold-info">memberikan solusi dari masalah tersebut 
                                                 dengan murid-murid anda</b>, sehingga akan terlihat kerja sama dalam pemecahan
                                                 soal tersebut.  

                                          </p>

                                          <p class="paragraph-extend-info">
                                             <b>TAMBAHAN : </b> Soal akan diberikan saat kontrak belajar anda berakhir, namun anda dapat  memulai pembuatan video
                                              saat anda memulai kontrak belajar diawal, atau  disaat anda memberikan materi pengajaran. buatlah video tersebut
                                              semenarik mungkin :))....
                                          </p>
                                       </div>
                                    </div>
                           </div>
                        </div>
                </div>
            </div>

       </div>
        @include('component.AfterLogin.ListSubject')
        @include('component.AfterLogin.ListSchedule')
        @include('component.AfterLogin.ListStudent')
   </div>
@endsection
