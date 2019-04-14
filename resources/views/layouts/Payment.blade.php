@extends('content.master2')
@section('content')
 <div class="container first-payment">
    <div class="row">
        <h4 class="heading-detail-les">Detail Les Anda</h4>
    </div>
    <div class="row">
     <div class="row">
         <div class="col xl6">
                <img src="{{asset($confirm->TeacherOrder->SeeTeacher->foto)}}" class="img-profile-payment"> 
         </div>
            <div class="col xl6 section-img">
                  
                    <h3 class="heading-payment"> <b>Nama Guru : </b> {{$confirm->TeacherOrder->SeeTeacher->nama_depan}} {{$confirm->TeacherOrder->SeeTeacher->nama_belakang}}</h3>
                    <h3 class="heading-payment"> <b>Materi Pembelajaran :</b> {{$confirm->SubjectOrder->mata_pelajaran}}</h3>
                    <h3 class="heading-payment"> <b> Jadwal les yang dipilih :</b>
                        {{$confirm->ShceduleOrder->day}} {{$confirm->ShceduleOrder->time_les}}
                    </h3>
                    <h3 class="heading-payment"> <b>Tempat Yang dipilih :</b> {{$confirm->address_les}}</h3>
                    @if ($confirm->pay == "Belum Dibayar")
                        <h3 class="heading-payment-red"> <b> Total yang harus dibayar :</b> Rp. {{$confirm->packet}}</h3>
                        <h3 class="heading-payment-red"> <b> Ke Rekening:</b> Bank Mandiri / 0829291829289 / a.n SINAUYO </h3>
                      @else 
                      <h3 class="heading-payment"> <b>Total Pertemuan Les:</b>
                          @if ($confirm->packet =="160.000")
                              8 kali dalam 1 bulan
                            @elseif($confirm->packet =="220.000")
                              12 kali dalam 1.5 bulan
                              @else 
                                16 kali dalam 2 bulan
                          @endif
                      </h3>
                    @endif
                    
            </div>
     </div>

      <div class="row">
            <div class="col xl12">
                    @if ($confirm->pay == 'Belum Dibayar')
                        <h1 class="heading-payment-second">Batas waktu pembayaran 30 menit setelah pemesanan di konfirmasi oleh pengajar</h1>
                        <a href="" class="link-pay">Lihat alur pembayaran Sinau Offline</a>
            
                   
                        <form action="{{route('payment_input',['confirm'=>$confirm->id])}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('put') }}  <h1></h1>
                            @if ($confirm->packet == "160.000")
                            <p>Karena anda mengambil paket pertemuan 8 kali, anda berhak mengajak teman anda ( <b>Max 2 orang</b> bersifat optional)</p>
                            <div class="row">
                                <div class="col xl6">
                                    <input id="email" name="friends" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                    <input id="email" name="friends2" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                </div>
                                <div class="col xl6">
                                    <input id="email" name="email_friend1" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                    <input id="email" name="email_friend2" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                </div>
                             </div>
                            @elseif($confirm->packet == "220.000")
                            <p>Karena anda mengambil paket pertemuan 12 kali, anda berhak mengajak teman anda  ( <b>Max 3 orang</b> bersifat optional)</p>
                               <div class="row">
                                  <div class="col xl6">
                                      <input id="email" name="friends" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                      <input id="email" name="friends2" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                      <input id="email" name="friends3" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                  </div>
                                  <div class="col xl6">
                                      <input id="email" name="email_friend1" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                      <input id="email" name="email_friend2" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                      <input id="email" name="email_friend3" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                  </div>
                               </div>
                            @elseif($confirm->packet == "280.000")
                            <p>Karena anda mengambil paket pertemuan 16 kali, anda berhak mengajak teman anda  ( <b>Max 4 orang</b> bersifat optional)</p>
                            <div class="row">
                                <div class="col xl6">
                                    <input id="email" name="friends" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                    <input id="email" name="friends2" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                    <input id="email" name="friends3" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                    <input id="email" name="friends4" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak" required>
                                </div>
                                <div class="col xl6">
                                    <input id="email" name="email_friend1" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                    <input id="email" name="email_friend2" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                    <input id="email" name="email_friend3" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                    <input id="email" name="email_friend4" type="text" class="validate" value="" placeholder="isi alamat email teman yang kamu ajak" required>
                                </div>
                             </div>
                            @endif
                                  <label for="">Upload Bukti Bayar</label>
                                    <div class="file-field input-field">
                                            <div class="btn">
                                              <span>File</span>
                                              <input type="file" name="pay" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                              <input class="file-path validate" required>
                                            </div>
                                          </div>
                                          <button type="submit" class="btn-file">Masukan</button>
                            </form>
                    @else
                       <div class="row">
                        @if ($confirm->stat_pay == "Pembayaran Sudah Diterima")
                            <div class="col xl12">
                                <h1 class="heading-payment-third">Pembayaran sudah kami konfirmasi, dan nikmati proses 
                                  belajar dan mengajar anda
                                </h1>
                            </div>
                            @else
                            <div class="col xl12">
                                <h1 class="heading-payment-third">Terima kasih sudah melakukan pembayaran, 
                                        Kami akan Mengubungi pengajar yang anda pilih. apabila dalam 30 menit
                                         hingga 1 jam belum ada kabar. kami akan menggembalikan uang anda</h1>
                            </div>
                              <div class="col xl12">
                                    <a href="" class="link-pay">Lihat alur pembayaran Sinau Offline</a>
                              </div>
                        @endif
                          <div class="row">
                            <div class="col xl6">
                              <img src="{{asset($confirm->pay)}}" alt="" class="img-pay-done">
                            </div>
                            <div class="col xl6">
                              <h3 class="heading-friend-taken">Anda Mengajak Teman Yang Bernama :  </h3>
                              <table>
                                <thead>
                                  <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td>{{$confirm->friends}}</td>
                                      <td>{{$confirm->email_friend1}}</td>
                                  </tr>
                                  <tr>
                                      <td>{{$confirm->friends2}}</td>
                                      <td>{{$confirm->email_friend2}}</td>
                                  </tr>
                                  <tr>
                                      <td>{{$confirm->friends3}}</td>
                                      <td>{{$confirm->email_friend3}}</td>
                                  </tr>
                                  <tr>
                                      <td>{{$confirm->friends4}}</td>
                                      <td>{{$confirm->email_friend4}}</td>
                                  </tr>
                                </tbody>
                              </table>
                            
                            
                            </div>
                          </div>
                       </div>
                    @endif
                    
            </div>
      </div>
    </div>

    <div class="row">
       @if ($confirm->stat_pay == "Pembayaran Sudah Diterima")
       {{-- 160.000 packet --}}
          @if ($confirm->packet == "160.000")
          <div class="container">
              <table class="tb-data">
                      <thead class="head-tb-data">
                      <tr >
                              <th>Pertemuan</th>
                              <th>Keterangan Les</th>
                              <th>Foto Les</th>
                      </tr>
                      </thead>
                      @foreach ($confirm->SeeStat as $key => $confirms)
                      <tbody class="list-tb-data">                    
                        <tr>
                            <td>Pertemuan {{++$key}}</td>
                            <td>{{$confirms->mention}}</td>
                            <td><img src="{{asset($confirms->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                        </tr>
                      </tbody>
                       @if ($key == 8)
                          <div class="row">
                              <div class="col xl6">
                                  <p>Proses pengajaran anda telah selesai. Silahkan berikan nilai dari <b>untuk sangat tidak baik
                                    sampai sangat baik</b> menurut pendapat anda dan teman-teman anda. serta berikan masukan untuk
                                  pengajaran beliau. <a href="{{$confirm->link_video}}">link video</a>
                                  </p>
                                </div>
                                <div class="col xl6">
                                    @if ($confirm->score_teaching != null)
                                      <label for="">Terima kasih telah memberikan pendapat anda. berikut nilai dan pendapat yang diberikan ::</label>
                                      <ul>
                                        <li>Pengajaran yang diajarjan : {{$confirm->score_teaching}}</li>
                                        <li>Opini anda tentang pengajaran : {{$confirm->feedback_teaching}}</li>
                                      </ul>
                                    @else
                                    <form class="col 12" action="{{route('feedback_teacher',['confirm'=>$confirm->id])}}" enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}  
                                        <label for="">Berikan Nilai</label> 
                                        <p>
                                            <input class="with-gap" value="sangat tidak baik" name="score_teaching" type="radio" id="test1" checked />
                                            <label for="test1">Sangat Tidak Baik</label>
                                          </p>
                                          <p>
                                              <input class="with-gap" value="tidak baik" name="score_teaching" type="radio" id="test2"/>
                                              <label for="test2">Tidak Baik</label>
                                            </p>
                                            <p>
                                                <input class="with-gap" value="baik" name="score_teaching" type="radio" id="test3"/>
                                                <label for="test3">Baik</label>
                                              </p>
                                              <p>
                                                  <input class="with-gap" value="sangat baik" name="score_teaching" type="radio" id="test4"/>
                                                  <label for="test4">Sangat Baik</label>
                                                </p>
                                        <label for="">Apa pendapatmu dan kawan-kawan dari pengajaran yang diberikan ?</label> 
                                        <input type="text" placeholder="Masukan Pendapat anda tentang pengajarannya" name="feedback_teaching">
                                        <button type="submit" >Kirim</button>                    
                                    </form>
                                    @endif
                                </div>
                          </div>
                       @endif
                     
                    
                      @endforeach
                  
              </table>

          </div>
          @endif
          {{-- 160.000 packet --}}
          {{-- 220.000 packet --}}
          @if ($confirm->packet == "220.000")
          <div class="container">
              <table class="tb-data">
                      <thead class="head-tb-data">
                      <tr >
                              <th>Pertemuan</th>
                              <th>Keterangan Les</th>
                              <th>Foto Les</th>
                      </tr>
                      </thead>
                      @foreach ($confirm->SeeStat as $key => $confirms)
                      <tbody class="list-tb-data">                    
                        <tr>
                            <td>Pertemuan {{++$key}}</td>
                            <td>{{$confirms->mention}}</td>
                            <td><img src="{{asset($confirms->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                        </tr>
                      </tbody>
                       @if ($key == 1)
                          <div class="row">
                              <div class="col xl6">
                                  <p>Proses pengajaran anda telah selesai. Silahkan berikan nilai dari <b>untuk sangat tidak baik
                                    sampai sangat baik</b> menurut pendapat anda dan teman-teman anda. serta berikan masukan untuk
                                    pengajaran beliau
                                  </p>
                                </div>
                                <div class="col xl6">
                                    @if ($confirm->score_teaching != null)
                                      <label for="">Terima kasih telah memberikan pendapat anda. berikut nilai dan pendapat yang diberikan ::</label>
                                      <ul>
                                        <li>Pengajaran yang diajarjan : {{$confirm->score_teaching}}</li>
                                        <li>Opini anda tentang pengajaran : {{$confirm->feedback_teaching}}</li>
                                      </ul>
                                    @else
                                    <form class="col 12" action="{{route('feedback_teacher',['confirm'=>$confirm->id])}}" enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}  
                                        <label for="">Berikan Nilai</label> 
                                        <p>
                                            <input class="with-gap" value="sangat tidak baik" name="score_teaching" type="radio" id="test1" checked />
                                            <label for="test1">Sangat Tidak Baik</label>
                                          </p>
                                          <p>
                                              <input class="with-gap" value="tidak baik" name="score_teaching" type="radio" id="test2"/>
                                              <label for="test2">Tidak Baik</label>
                                            </p>
                                            <p>
                                                <input class="with-gap" value="baik" name="score_teaching" type="radio" id="test3"/>
                                                <label for="test3">Baik</label>
                                              </p>
                                              <p>
                                                  <input class="with-gap" value="sangat baik" name="score_teaching" type="radio" id="test4"/>
                                                  <label for="test4">Sangat Baik</label>
                                                </p>
                                        <label for="">Apa pendapatmu dan kawan-kawan dari pengajaran yang diberikan ?</label> 
                                        <input type="text" placeholder="Masukan Pendapat anda tentang pengajarannya" name="feedback_teaching">
                                        <button type="submit" >Kirim</button>                    
                                    </form>
                                    @endif
                                </div>
                          </div>
                       @endif
                      
                    
                      @endforeach
                  
              </table>

          </div>
          @endif
          {{-- 220.000 packet --}}
          {{-- 260.000 packet --}}
          @if ($confirm->packet == "260.000")
          <div class="container">
              <table class="tb-data">
                      <thead class="head-tb-data">
                      <tr >
                              <th>Pertemuan</th>
                              <th>Keterangan Les</th>
                              <th>Foto Les</th>
                      </tr>
                      </thead>
                      @foreach ($confirm->SeeStat as $key => $confirms)
                      <tbody class="list-tb-data">                    
                        <tr>
                            <td>Pertemuan {{++$key}}</td>
                            <td>{{$confirms->mention}}</td>
                            <td><img src="{{asset($confirms->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                        </tr>
                      </tbody>
                       @if ($key == 16)
                          <div class="row">
                              <div class="col xl6">
                                  <p>Proses pengajaran anda telah selesai. Silahkan berikan nilai dari <b>untuk sangat tidak baik
                                    sampai sangat baik</b> menurut pendapat anda dan teman-teman anda. serta berikan masukan untuk
                                    pengajaran beliau
                                  </p>
                                </div>
                                <div class="col xl6">
                                    @if ($confirm->score_teaching != null)
                                      <label for="">Terima kasih telah memberikan pendapat anda. berikut nilai dan pendapat yang diberikan ::</label>
                                      <ul>
                                        <li>Pengajaran yang diajarjan : {{$confirm->score_teaching}}</li>
                                        <li>Opini anda tentang pengajaran : {{$confirm->feedback_teaching}}</li>
                                      </ul>
                                    @else
                                    <form class="col 12" action="{{route('feedback_teacher',['confirm'=>$confirm->id])}}" enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}  
                                        <label for="">Berikan Nilai</label> 
                                        <p>
                                            <input class="with-gap" value="sangat tidak baik" name="score_teaching" type="radio" id="test1" checked />
                                            <label for="test1">Sangat Tidak Baik</label>
                                          </p>
                                          <p>
                                              <input class="with-gap" value="tidak baik" name="score_teaching" type="radio" id="test2"/>
                                              <label for="test2">Tidak Baik</label>
                                            </p>
                                            <p>
                                                <input class="with-gap" value="baik" name="score_teaching" type="radio" id="test3"/>
                                                <label for="test3">Baik</label>
                                              </p>
                                              <p>
                                                  <input class="with-gap" value="sangat baik" name="score_teaching" type="radio" id="test4"/>
                                                  <label for="test4">Sangat Baik</label>
                                                </p>
                                        <label for="">Apa pendapatmu dan kawan-kawan dari pengajaran yang diberikan ?</label> 
                                        <input type="text" placeholder="Masukan Pendapat anda tentang pengajarannya" name="feedback_teaching">
                                        <button type="submit" >Kirim</button>                    
                                    </form>
                                    @endif
                                </div>
                          </div>
                       @endif
                      
                    
                      @endforeach
                  
              </table>

          </div>
          @endif
          {{-- 260.000 packet --}}
       @endif
    </div>
 </div>
@endsection