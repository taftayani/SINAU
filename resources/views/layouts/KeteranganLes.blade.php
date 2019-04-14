@extends('content.masterTeacher')
@section('content')
    <div class="container first-data-lay">
       <div class="row">
            <div class="row">
            <h1 class="heading-data-list">Silahkan Isi Kegiatan Les {{$confirm->UserOrder->nama_depan}} {{$confirm->UserOrder->nama_belakang}} / 
              @if ($confirm->packet == '160.000')
                Max Pertemuan <b>8 kali</b>

              @elseif($confirm->packet == '220.000')
              Max Pertemuan <b>12 kali</b>

              @elseif($confirm->packet == '260.000')
              Max Pertemuan <b>16 kali</b>
              @endif
            </h1>
            </div>
            <div class="row center" id="rows-data">
                 
                <form class="col s12" action="{{route('input_stat')}}" enctype="multipart/form-data" method="post">
                 
                  {{ csrf_field() }}
                  {{ method_field('post') }}
                    <div class="row">
                      <input type="hidden" name="confirm_id" id="" value="{{$confirm->id}}">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">date_range</i>
                          <input id="icon_prefix" type="date" class="validate" name="date_les" required>
                        </div>
      
                        <div class="input-field col s6">
                          <i class="material-icons prefix">description</i>
                          <input id="icon_telephone" type="tel" class="validate" name="mention" required>
                          <label for="icon_telephone">Keterangan Les</label>
                        </div>
                      </div>  
                      <div class="file-field input-field">
                          <div class="btn">
                            <span>Upload Foto Belajar</span>
                            <input type="file" name="prove" multiple required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" >
                          </div>
                        </div>
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
                <div class="container">
                  <table class="tb-data">
                          <thead class="head-tb-data">
                          <tr class="center">
                              <th>Pertemuan</th>
                              <th>Nama Lengkap</th>
                              <th>Tanggal Les</th>
                              <th>Keterangan Les</th>
                              <th>Bukti Foto Belajar</th>
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
                                  <td>{{$stats->date_les}}</td>
                                  <td>{{$stats->mention}}</td>
                                  <td><img src="{{asset($stats->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
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
            <div class="container">
                <table class="tb-data">
                        <thead class="head-tb-data">
                        <tr class="center">
                            <th>Pertemuan</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Les</th>
                            <th>Keterangan Les</th>
                            <th>Bukti Foto Belajar</th>
                        </tr>
                        </thead>
                        @foreach ($stat as $key => $stats)
                        <tbody class="list-tb-data">                    
                        <tr>
                            <td>Pertemuan {{++$key}} Selesai</td>
                                <td>
                                  <ul>
                                    <li>{{$stats->ConfirmOrder->UserOrder->nama_depan}} {{$stats->ConfirmOrder->UserOrder->nama_belakang}}</li>
                                    <li>{{$stats->ConfirmOrder->friends}}</li>
                                    <li>{{$stats->ConfirmOrder->friends2}}</li>
                                    <li>{{$stats->ConfirmOrder->friends3}}</li>
                                    <li>{{$stats->ConfirmOrder->friends4}}</li>
                                  </ul>
                                </td>
                                <td>{{$stats->date_les}}</td>
                                <td>{{$stats->mention}}</td>
                                <td><img src="{{asset($stats->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                          </tr>
                        </tbody>
                        @if ($key == 1)
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
{{-- paket 260rb --}}
            @elseif($confirm->packet == '260.000')
            <div class="container">
                <table class="tb-data">
                        <thead class="head-tb-data">
                        <tr class="center">
                            <th>Pertemuan</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Les</th>
                            <th>Keterangan Les</th>
                            <th>Bukti Foto Belajar</th>
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
                                <td>{{$stats->date_les}}</td>
                                <td>{{$stats->mention}}</td>
                                <td><img src="{{asset($stats->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
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