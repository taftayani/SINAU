@extends('content.masterTeacher')
@section('content')
    <div class="container first-data-lay">
       <div class="row">
            <div class="row">
            <h1 class="heading-data-list">Silahkan Isi Kegiatan Les <b class="header-name-status-student">{{$confirm->UserOrder->nama_depan}} {{$confirm->UserOrder->nama_belakang}} </b> / 
              @if ($confirm->packet == '160.000')
                Max Pertemuan <b class="header-name-status-student"> 8 kali</b>

              @elseif($confirm->packet == '220.000')
              Max Pertemuan <b class="header-name-status-student"> 12 kali</b>

              @elseif($confirm->packet == '260.000')
              Max Pertemuan <b class="header-name-status-student">16 kali</b>
              @endif
            </h1>
            </div>
            <div class="row center" id="rows-data">
                 
                <form class="col s12" action="{{route('input_stat')}}" enctype="multipart/form-data" method="post">
                 
                  {{ csrf_field() }}
                  {{ method_field('post') }}
                    <div class="row">
                      <input type="hidden" name="confirm_id" id="" value="{{$confirm->id}}">
                        <div class="left col s2">
                            <label for="">Tanggal Les</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">date_range</i>
                          <input id="icon_prefix" type="date" class="validate" name="date_les" required>
                        </div>
      
                        <div class="input-field col s12">
                          <i class="material-icons prefix">description</i>
                          <input id="icon_telephone" type="tel" class="validate" name="mention" required>
                          <label for="icon_telephone">Keterangan Les</label>
                        </div>
                      </div>  
                      {{-- <div class="file-field input-field">
                          <div class="btn">
                            <span>Upload Foto Belajar</span>
                            <input type="file" name="prove" multiple required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" >
                          </div>
                      </div> --}}
                    <div class="row">
                      <div class="col xl6">
                        <h4 class="header-name-student-absen">{{$confirm->UserOrder->nama_depan}} {{$confirm->UserOrder->nama_belakang}}</h4>
                      </div>
                      <div class="col xl6">
                        <div class="row">
                          <div class="col xl4">
                            <p>
                              <input name="student_stat" value="Tidak Masuk" type="radio" id="stu1" />
                              <label for="stu1" class="label-no-absen">Tidak Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="student_stat" value="Masuk" type="radio" id="stu2" />
                              <label for="stu2" class="label-ya-absen">Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="student_stat" value="Sakit" type="radio" id="stu3" />
                              <label for="stu3" class="label-sick-absen">Sakit</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="student_stat" value="Izin" type="radio" id="stu4" />
                              <label for="stu4"  class="label-permit-absen">Izin</label>
                            </p>                              
                          </div>
                        </div>
                      </div>
                    </div>
          {{-- friends  --}}
                @if ($confirm->friends == null)

                 @else
                 <div class="row">
                    <div class="col xl6">
                      <h4 class="header-name-student-absen">{{$confirm->friends}}</h4>
                    </div>
                    <div class="col xl6">
                      <div class="row">
                        <div class="col xl4">
                          <p>
                            <input name="friends_stat" value="Tidak Masuk" type="radio" id="fst1" />
                            <label for="fst1" class="label-no-absen">Tidak Masuk</label>
                          </p>                              
                        </div>
                        <div class="col xl2">
                          <p>
                            <input name="friends_stat" value="Masuk" type="radio" id="fst2" />
                            <label for="fst2" class="label-ya-absen">Masuk</label>
                          </p>                              
                        </div>
                        <div class="col xl2">
                          <p>
                            <input name="friends_stat" value="Sakit" type="radio" id="fst3" />
                            <label for="fst3" class="label-sick-absen">Sakit</label>
                          </p>                              
                        </div>
                        <div class="col xl2">
                          <p>
                            <input name="friends_stat" value="Izin" type="radio" id="fst4" />
                            <label for="fst4" class="label-permit-absen">Izin</label>
                          </p>                              
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
          {{-- friends 2 --}}
                  @if ($confirm->friends2 == null)
                  @else 
                  <div class="row">
                      <div class="col xl6">
                        <h4 class="header-name-student-absen">{{$confirm->friends2}}</h4>
                      </div>
                      <div class="col xl6">
                        <div class="row">
                          <div class="col xl4">
                            <p>
                              <input name="friends2_stat" value="Tidak Masuk" type="radio" id="f2st1" />
                              <label for="f2st1" class="label-no-absen">Tidak Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends2_stat" value="Masuk" type="radio" id="f2st2" />
                              <label for="f2st2" class="label-ya-absen">Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends2_stat" value="Sakit" type="radio" id="f2st3" />
                              <label for="f2st3" class="label-sick-absen">Sakit</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends2_stat" value="Izin" type="radio" id="f2st4" />
                              <label for="f2st4" class="label-permit-absen">Izin</label>
                            </p>                              
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
          {{-- friend 3 --}}
                  @if ($confirm->friends3 == null)
                  
                  @else 
                  <div class="row">
                      <div class="col xl6">
                        <h4 class="header-name-student-absen">{{$confirm->friends3}}</h4>
                      </div>
                      <div class="col xl6">
                        <div class="row">
                          <div class="col xl4">
                            <p>
                              <input name="friends3_stat" value="Tidak Masuk" type="radio" id="f3st1" />
                              <label for="f3st1" class="label-no-absen">Tidak Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends3_stat" value="Masuk" type="radio" id="f3st2" />
                              <label for="f3st2" class="label-ya-absen">Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends3_stat" value="Sakit" type="radio" id="f3st3" />
                              <label for="f3st3" class="label-sick-absen">Sakit</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends3_stat" value="Izin" type="radio" id="f3st4" />
                              <label for="f3st4" class="label-permit-absen">Izin</label>
                            </p>                              
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
        {{-- friends 4 --}}
                  @if ($confirm->friend4 == null)
                    @else 
                    <div class="row">
                      <div class="col xl6">
                        <h4 class="header-name-student-absen">{{$confirm->friends4}}</h4>
                      </div>
                      <div class="col xl6">
                        <div class="row">
                          <div class="col xl4">
                            <p>
                              <input name="friends4_stat" value="Tidak Masuk" type="radio" id="f4st1" />
                              <label for="f4st1" class="label-no-absen">Tidak Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends4_stat" value="Masuk" type="radio" id="f4st2" />
                              <label for="f4st2" class="label-ya-absen">Masuk</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends4_stat" value="Sakit" type="radio" id="f4st3" />
                              <label for="f4st3 "class="label-sick-absen">Sakit</label>
                            </p>                              
                          </div>
                          <div class="col xl2">
                            <p>
                              <input name="friends4_stat" value="Izin" type="radio" id="f4st4" />
                              <label for="f4st4" class="label-permit-absen">Izin</label>
                            </p>                              
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                      <button type="submit" class="btn-input-data">Masukan Data</button>
                   
                    </form>      
                 
                </div> 
       </div>
{{-- paket 160rb --}}
       @if ($confirm->packet == '160.000')
       @push('js')
           <script>
           document.getElementById('rows-data').style.display="block";
           </script>
       @endpush
                <div class="container-fluid">
                  <table class="tb-data">
                          <thead class="head-tb-data">
                          <tr class="center">
                            <th class="header-table-status-absen">Pertemuan</th>
                            <th>Nama Murid</th>
                            <th class="header-table-status-absen">Tanggal Les Kehadiran</th>
                            <th >Keterangan Les</th>
                            <th class="header-table-status-absen">Konfirmasi Murid</th>
                          </tr>
                          </thead>
                          @foreach ($stat as $key => $stats)
                          <tbody class="list-tb-data">                    
                          <tr>
                              <td>Pertemuan {{++$key}}</td>
                                  <td>
                                    <ul>
                                      <li>{{$stats->ConfirmOrder->UserOrder->nama_depan}} {{$stats->ConfirmOrder->UserOrder->nama_belakang}}</li>
                                      <li>{{$stats->ConfirmOrder->friends}}</li>
                                      <li>{{$stats->ConfirmOrder->friends2}}</li>
                                      <li>{{$stats->ConfirmOrder->friends3}}</li>
                                      <li>{{$stats->ConfirmOrder->friends4}}</li>
                                    </ul>
                                  </td>
                                  <td>
                                      <ul>
                                        <li>{{$stats->student_stat}}</li>
                                        <li>{{$stats->friends_stat}}</li>
                                        <li>{{$stats->friends2_stat}}</li>
                                        <li>{{$stats->friends3_stat}}</li>
                                        <li>{{$stats->friends4_stat}}</li>
                                      </ul>
                                    </td>
                                  <td>{{$stats->date_les}}</td>
                                  <td>{{$stats->mention}}</td>
                                  <td>
                                      @if ($stats->confirm_student == null)
                                      <h4>Belum Dikonfirmasi</h4>
                                    @else 
                                      <h4>{{$stats->confirm_student}}</h4>
                                  @endif
                                  </td>
                            </tr>
                          </tbody>
                          @if ($key == 7)
                          @push('js')
                              <script>
                              document.getElementById('rows-data').style.display="none";
                              </script>
                            
                          @endpush
                          <p id="paragraph-video">kegiatan proses pembelajaran sudah diujung akhir. untuk mengakhiri proses terakhir, anda harus membuat sebuah
                            video kreatif dengan tema soal yang akan diberikan oleh Sinau Yo mengenai materi <b>{{$stats->ConfirmOrder->SubjectOrder->mata_pelajaran}}</b>.
                            Pecahkan jawabanmu dengan murid-murid kamu dan upload videomu di youtube. Soal akan dikirimkan paling telat 1 hari sebelum materi terakhir disampaikan.
                            dan pembuatan video diberikan waktu 1 hingga 2 hari setelah materi akhir telah anda berikan kepada murid
                          </p>
                          <form class="col 12" action="{{route('link_tes',['confirm'=>$stats->ConfirmOrder->id])}}"  enctype="multipart/form-data" method="post">
                              {{ csrf_field() }}
                              {{ method_field('put') }}   
                              <input type="text" name="link_video" id="input-video" placeholder="Masukan Link Video" required> 
                              <button type="submit" id="link-upload-disabled" disabled>Upload Link</button>
                              <button type="submit" id="link-upload">Upload Link</button>
                              
                           </form>
                        @endif
                           @if ($key== 8)
                            @if ($stats->ConfirmOrder->test_file == "nul")
                                  @push('js')
                                    <script>
                                      document.getElementById("link-upload").style.display="none";
                                      document.getElementById("link-upload-disabled").style.display="block";
                                    </script>
                                  @endpush
                                    <h3>Soal Belum Diberikan, Silahkan Hubungi Admin</h3>
                                @else
                                    @push('js')
                                    <script>
                                      document.getElementById("link-upload").style.display="block";
                                      document.getElementById("link-upload-disabled").style.display="none";
                                    </script>
                                @endpush
                                  <h3>Lihat Soal</h3>
                              @endif
                              <img src="{{asset($stats->ConfirmOrder->test_file)}}" alt="" class="materialboxed pay-stat-img">

                              @if ($stats->ConfirmOrder->link_video != "nul")
                                  @push('js')
                                  <script>
                                    document.getElementById("link-upload").style.display="none";
                                    document.getElementById("link-upload-disabled").style.display="none";
                                    document.getElementById("input-video").style.display="none";
                                    document.getElementById("paragraph-video").style.display="none";
                                  </script>
                                 @endpush
                                <p>Terima kasih atas pengiriman video kerja kelompok anda dengan murid-murid anda. Penilaian pengajaran dan belajar
                                  kelompok akan dibagi 2 yaitu penilaian dari murid, dan dari Sinau Yo itu sendiri. Dan penilaian akan diinformasikan kepada anda
                                  selama 2 hari setelah proses belajar dan mengajar berakhir
                                  Dengan ini, kami nyatakan proses belajar dna mengajar telah selesai. Pembayaran akan kami 
                                bayarkan segera kepada anda sebesar <b>90%</b> dari harga les, dan pembayaran akan dikirimkan paling telat 2 jam setelah video dikirimkan. <a href="{{$stats->ConfirmOrder->link_video}}" target="_blank">link video</a>
                                </p>
                              @endif
                           @endif
                        
                          @endforeach
                          </form>   
                  </table>
    
              </div>
{{-- paket 220rb --}}
          @elseif($confirm->packet == '220.000')
            <div class="container-fluid">
                <table class="tb-data">
                        <thead class="head-tb-data">
                        <tr class="center">
                            <th class="header-table-status-absen">Pertemuan</th>
                            <th>Nama Murid</th>
                            <th class="header-table-status-absen">Tanggal Les Kehadiran</th>
                            <th >Keterangan Les</th>
                            <th class="header-table-status-absen">Konfirmasi Murid</th>
                        </tr>
                        </thead>
                        @foreach ($stat as $key => $stats)
                        <tbody class="list-tb-data">                    
                            <tr>
                                <td class="header-gather-absen">Pertemuan {{++$key}}</td>
                                    <td>
                                      <ul class="list-name-gather">
                                        <li>{{$stats->ConfirmOrder->UserOrder->nama_depan}} {{$stats->ConfirmOrder->UserOrder->nama_belakang}}
                                            @if ($stats->student_stat == "Tidak Masuk")
                                              <label for="" class="label-no-absen-gather">{{$stats->student_stat}}</label>
                                            @elseif($stats->student_stat == "Masuk")
                                              <label for="" class="label-ya-absen-gather">{{$stats->student_stat}}</label>
                                            @elseif($stats->student_stat == "Sakit")
                                              <label for="" class="label-sick-absen-gather">{{$stats->student_stat}}</label>
                                            @elseif($stats->student_stat == "Izin")
                                              <label for="" class="label-absen-gather">{{$stats->student_stat}}</label>
                                            @endif
                                        </li>
                                        @if ($stats->ConfirmOrder->friends != null)
                                            <li>{{$stats->ConfirmOrder->friends}}
                                                @if ($stats->friends_stat == "Tidak Masuk")
                                                  <label for="" class="label-no-absen-gather">{{$stats->friends_stat}}</label>
                                                @elseif($stats->friends_stat == "Masuk")
                                                  <label for="" class="label-ya-absen-gather">{{$stats->friends_stat}}</label>
                                                @elseif($stats->friends_stat == "Sakit")
                                                  <label for="" class="label-sick-absen-gather">{{$stats->friends_stat}}</label>
                                                @elseif($stats->student_stat == "Izin")
                                                  <label for="" class="label-absen-gather">{{$stats->friends_stat}}</label>
                                              @endif
                                              </li>
                                        @endif
                                        @if ($stats->ConfirmOrder->friends2 != null)
                                          <li>{{$stats->ConfirmOrder->friends2}}
                                              @if ($stats->friends_stat == "Tidak Masuk")
                                                <label for="" class="label-no-absen-gather">{{$stats->friends2_stat}}</label>
                                              @elseif($stats->friends_stat == "Masuk")
                                                <label for="" class="label-ya-absen-gather">{{$stats->friends2_stat}}</label>
                                              @elseif($stats->friends_stat == "Sakit")
                                                <label for="" class="label-sick-absen-gather">{{$stats->friends2_stat}}</label>
                                              @elseif($stats->student_stat == "Izin")
                                                <label for="" class="label-absen-gather">{{$stats->friends2_stat}}</label>
                                            @endif
                                            </li>
                                        @endif
                                        @if ($stats->ConfirmOrder->friends3 != null)
                                            <li>{{$stats->ConfirmOrder->friends3}}
                                                @if ($stats->friends_stat == "Tidak Masuk")
                                                <label for="" class="label-no-absen-gather">{{$stats->friends3_stat}}</label>
                                              @elseif($stats->friends_stat == "Masuk")
                                                <label for="" class="label-ya-absen-gather">{{$stats->friends3_stat}}</label>
                                              @elseif($stats->friends_stat == "Sakit")
                                                <label for="" class="label-sick-absen-gather">{{$stats->friends3_stat}}</label>
                                              @elseif($stats->student_stat == "Izin")
                                                <label for="" class="label-absen-gather">{{$stats->friends3_stat}}</label>
                                            @endif
                                              </li>
                                        @endif
                                        @if ($stats->ConfirmOrder->friends4 != null)                                             
                                          <li>{{$stats->ConfirmOrder->friends4}}
                                              @if ($stats->friends_stat == "Tidak Masuk")
                                              <label for="" class="label-no-absen-gather">{{$stats->friends4_stat}}</label>
                                            @elseif($stats->friends_stat == "Masuk")
                                              <label for="" class="label-ya-absen-gather">{{$stats->friends4_stat}}</label>
                                            @elseif($stats->friends_stat == "Sakit")
                                              <label for="" class="label-sick-absen-gather">{{$stats->friends4_stat}}</label>
                                            @elseif($stats->student_stat == "Izin")
                                              <label for="" class="label-absen-gather">{{$stats->friends4_stat}}</label>
                                          @endif
                                            </li>                              
                                        @endif
                                      </ul>
                                    </td>
                                    <td class="header-gather-absen">{{$stats->date_les}}</td>
                                    <td>{{$stats->mention}}</td>
                                    <td>
                                        @if ($stats->confirm_student == null)
                                        <h4 class="status-confirm-student">Belum Dikonfirmasi</h4>
                                      @else 
                                        <h4 class="header-confirm-student">{{$stats->confirm_student}}</h4>
                                    @endif
                                    </td>
                              </tr>
                        </tbody>
                        @if ($key == 5)
                        @push('js')
                            <script>
                            document.getElementById('rows-data').style.display="none";
                            </script>
                          
                        @endpush
                        <p id="paragraph-video">Kegiatan proses pembelajaran sudah diujung akhir. <b class="bold-status">untuk mengakhiri proses terakhir</b>, anda harus membuat sebuah
                          <b class="bold-status">video kreatif</b> dengan tema soal yang akan diberikan oleh Sinau Yo mengenai materi <b class="bold-status">{{$stats->ConfirmOrder->SubjectOrder->mata_pelajaran}}</b>.
                            Pecahkan jawabanmu <b class="bold-status">dengan murid-murid kamu</b> dan <b class="bold-status">upload videomu di youtube</b>. Soal akan dikirimkan <b class="bold-status">paling telat 1 hari sebelum materi terakhir disampaikan</b>.
                            dan pembuatan video diberikan <b class="bold-status">waktu 1 hingga 2 hari</b> setelah materi akhir telah anda berikan kepada murid
                          </p>
                        <div class=" form-video">
                          <form class="col 12" action="{{route('link_tes',['confirm'=>$stats->ConfirmOrder->id])}}"  enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            {{ method_field('put') }}   
                            <input type="text" name="link_video" id="input-video" placeholder="Masukan Link Video" required> 
                            <button type="submit" id="link-upload-disabled" disabled>Upload Link</button>
                            <button type="submit" id="link-upload">Upload Link</button>
                            
                         </form>
                        </div>
                      @endif
                         @if ($key== 5)
                         
                          @if ($stats->ConfirmOrder->test_file == "nul")
                            @push('js')
                              <script>
                                document.getElementById("link-upload").style.display="none";
                                document.getElementById("link-upload-disabled").style.display="block";
                              </script>
                            @endpush
                              <h3 class="status-danger-test">Soal Belum Diberikan, Silahkan Hubungi Admin</h3>
                            @else
                            @push('js')
                              <script>
                                document.getElementById("link-upload").style.display="block";
                                document.getElementById("link-upload-disabled").style.display="none";
                              </script>
                            @endpush
                            <h3>Lihat Soal</h3>
                          @endif
                            <img src="{{asset($stats->ConfirmOrder->test_file)}}" alt="" class="materialboxed pay-stat-img">

                            @if ($stats->ConfirmOrder->link_video != "nul")
                                  @push('js')
                                  <script>
                                    document.getElementById("link-upload").style.display="none";
                                    document.getElementById("link-upload-disabled").style.display="none";
                                    document.getElementById("input-video").style.display="none";
                                    document.getElementById("paragraph-video").style.display="none";
                                  </script>
                                 @endpush
                                <p>Terima kasih atas pengiriman video kerja kelompok anda dengan murid-murid anda. Penilaian pengajaran dan belajar
                                  kelompok akan dibagi 2 yaitu penilaian dari murid, dan dari Sinau Yo itu sendiri. Dan penilaian akan diinformasikan kepada anda
                                  selama 2 hari setelah proses belajar dan mengajar berakhir
                                  Dengan ini, kami nyatakan proses belajar dna mengajar telah selesai. Pembayaran akan kami 
                                bayarkan segera kepada anda sebesar <b>90%</b> dari harga les, dan pembayaran akan dikirimkan paling telat 2 jam setelah video dikirimkan. <a href="{{$stats->ConfirmOrder->link_video}}" target="_blank">link video</a>
                                </p>
                              @endif
                        
                         @endif
                        
                      @endforeach
                     
                </table>
              
            </div>
{{-- paket 260rb --}}
            @elseif($confirm->packet == '260.000')
            <div class="container-fluid">
                <table class="tb-data">
                        <thead class="head-tb-data">
                        <tr class="center">
                          <th class="header-table-status-absen">Pertemuan</th>
                          <th>Nama Murid</th>
                          <th class="header-table-status-absen">Tanggal Les Kehadiran</th>
                          <th >Keterangan Les</th>
                          <th class="header-table-status-absen">Konfirmasi Murid</th>
                        </tr>
                        </thead>
                        @foreach ($stat as $key => $stats)
                        <tbody class="list-tb-data">                    
                            <tr>
                                <td>Pertemuan {{++$key}}</td>
                                    <td>
                                      <ul>
                                        <li>{{$stats->ConfirmOrder->UserOrder->nama_depan}} {{$stats->ConfirmOrder->UserOrder->nama_belakang}}</li>
                                        <li>{{$stats->ConfirmOrder->friends}}</li>
                                        <li>{{$stats->ConfirmOrder->friends2}}</li>
                                        <li>{{$stats->ConfirmOrder->friends3}}</li>
                                        <li>{{$stats->ConfirmOrder->friends4}}</li>
                                      </ul>
                                    </td>
                                    <td>
                                        <ul>
                                          <li>{{$stats->student_stat}}</li>
                                          <li>{{$stats->friends_stat}}</li>
                                          <li>{{$stats->friends2_stat}}</li>
                                          <li>{{$stats->friends3_stat}}</li>
                                          <li>{{$stats->friends4_stat}}</li>
                                        </ul>
                                      </td>
                                    <td>{{$stats->date_les}}</td>
                                    <td>{{$stats->mention}}</td>
                                    <td>
                                      @if ($stats->confirm_student == null)
                                          <h4>Belum Dikonfirmasi</h4>
                                        @else 
                                          <h4>{{$stats->confirm_student}}</h4>
                                      @endif
                                    </td>
                              </tr>
                        </tbody>
                      
                        @if ($key == 1)
                        @push('js')
                            <script>
                            document.getElementById('rows-data').style.display="none";
                            </script>
                          
                        @endpush
                        <p>kegiatan proses pembelajaran anda sudah selesai. untuk mengakhiri proses terakhir, anda harus membuat sebuah
                          video kreatif dengan tema soal yang akan diberikan oleh Sinau Yo mengenai materi <b>{{$stats->ConfirmOrder->SubjectOrder->mata_pelajaran}}</b>.
                          Pecahkan jawabanmu dengan murid-murid kamu dan upload videomu di youtube
                        </p>
                        <form class="col 12" action="{{route('link_tes',['confirm'=>$stats->ConfirmOrder->id])}}"  enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            {{ method_field('put') }}   
                            <input type="text" name="link_video" id="" placeholder="Masukan Link Video" required> 
                            <button type="submit" id="link-upload-disabled" disabled>Upload Link</button>
                            <button type="submit" id="link-upload">Upload Link</button>
                            
                         </form>
                      @endif
                         @if ($key== 1)
                         
                          @if ($stats->ConfirmOrder->test_file == "nul")
                            @push('js')
                              <script>
                                document.getElementById("link-upload").style.display="none";
                                document.getElementById("link-upload-disabled").style.display="block";
                              </script>
                          @endpush
                              <h3>Soal Belum Diberikan, Silahkan Hubungi Admin</h3>
                            @else
                            @push('js')
                            <script>
                              document.getElementById("link-upload").style.display="block";
                              document.getElementById("link-upload-disabled").style.display="none";
                            </script>
                        @endpush
                            <h3>Lihat Soal</h3>
                          @endif
                            <img src="{{asset($stats->ConfirmOrder->test_file)}}" alt="" class="materialboxed pay-stat-img">
                            @if ($stats->ConfirmOrder->link_video != "nul")
                                  @push('js')
                                  <script>
                                    document.getElementById("link-upload").style.display="none";
                                    document.getElementById("link-upload-disabled").style.display="none";
                                    document.getElementById("input-video").style.display="none";
                                    document.getElementById("paragraph-video").style.display="none";
                                  </script>
                                 @endpush
                                <p>Terima kasih atas pengiriman video kerja kelompok anda dengan murid-murid anda. Penilaian pengajaran dan belajar
                                  kelompok akan dibagi 2 yaitu penilaian dari murid, dan dari Sinau Yo itu sendiri. Dan penilaian akan diinformasikan kepada anda
                                  selama 2 hari setelah proses belajar dan mengajar berakhir
                                  Dengan ini, kami nyatakan proses belajar dna mengajar telah selesai. Pembayaran akan kami 
                                bayarkan segera kepada anda sebesar <b>90%</b> dari harga les, dan pembayaran akan dikirimkan paling telat 2 jam setelah video dikirimkan. <a href="{{$stats->ConfirmOrder->link_video}}" target="_blank">link video</a>
                                </p>
                              @endif
                         @endif
                        @endforeach
                        
                </table>
              
            </div>
       @endif
       
    </div>
@endsection