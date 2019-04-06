@extends('content.masterTeacher')
@section('content')
    <div class="container first-data-lay">
       <div class="row">
            <div class="row">
            <h1 class="heading-data-list">Silahkan Isi Kegiatan Les {{$confirm->UserOrder->nama_depan}} {{$confirm->UserOrder->nama_belakang}} / 
              @if ($confirm->packet == '50.000')
                Max Pertemuan <b>5 kali</b>

              @elseif($confirm->packet == '100.000')
              Max Pertemuan <b>10 kali</b>

              @elseif($confirm->packet == '150.000')
              Max Pertemuan <b>15 kali</b>
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

       @if ($confirm->packet == '50.000')
       @push('js')
           <script>
           document.getElementById('rows-data').style.display="none";
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
                        
                          @endforeach
                          <form class="col s12" action="{{route('input_stat')}}" enctype="multipart/form-data" method="post" >
                            @if ($key == 5)
                              <button type="submit" name="contract" value="Kontrak Dibatalkan">Kontrak Berakhir</button>
                            @endif
                          </form>   
                  </table>
                
              </div>

          @elseif($confirm->packet == '100.000')
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
                        @if ($key == 4)
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
                            <button type="submit" >Upload Link</button>
                            
                         </form>
                      @endif
                         @if ($key== 4)
                          @if ($stats->ConfirmOrder->test_file == "nul")
                              <h3>Soal Belum Diberikan, Silahkan Hubungi Admin</h3>
                            @else
                            <h3>Lihat Soal</h3>
                          @endif
                           
                            <img src="{{asset($stats->ConfirmOrder->test_file)}}" alt="" class="materialboxed pay-stat-img">
                         @endif
                      @endforeach
                      

                </table>
              
            </div>

            @elseif($confirm->packet == '150.000')
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
                      
                        @if ($key == 3)
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
                            <button type="submit" >Upload Link</button>
                            
                         </form>
                          <button type="submit" name="contract" value="Kontrak Dibatalkan">Kontrak Berakhir</button>
                      @endif
                        @endforeach
                        <form class="col s12" action="{{route('input_stat')}}" enctype="multipart/form-data" method="post" >
                      
                        </form>   
                </table>
              
            </div>
       @endif
       
    </div>
@endsection