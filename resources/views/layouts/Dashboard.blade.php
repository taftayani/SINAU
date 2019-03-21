@extends('content.headerDashboard')
@extends('content.apps')
@section('contentDashboard')

<div id="home">
        <table>
                
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama depan</th>
                            <th>Nama Belakang</th>
                            <th>email</th>
                            <th>No telp</th>
                            <th>Tanggal kelahiran</th>
                            <th>alamat</th>
                            <th>jenis kelamin</th>
                        </tr>
                    </thead>
                    @foreach ($user as $key => $users)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$users->nama_depan}}</td>
                            <td>{{$users->nama_belakang}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->birthday}}</td>
                            <td>{{$users->address}}</td>
                            <td>{{$users->gender}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>

        </div>

<div id="guru">
    <h1>Guru</h1>
    
        <table>
                
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>ktp</th>
                            <th>Pendidikan</th>
                            <th>Status</th>
                            <th>File Sertifikasi</th>
                        </tr>
                    </thead>
                    @foreach ($teacher as $key => $teachers)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$teachers->SeeTeacher->nama_depan}}</td>
                            <td>{{$teachers->SeeTeacher->nama_belakang}}</td>
                            <td>{{$teachers->ktp}}</td>
                            <td>{{$teachers->pendidikan}}</td>
                            <td>
                            @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
                            <p>  {{$teachers->verifikasi}}</p>
                            @else
                                <form action="{{route('verifikasi_data',['teacher'=>$teachers->id])}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                 
                                   
                                 
                                    <button type="submit" name="verifikasi" value="Akun Sudah Diverifikasi">Verifikasi Akun</button> 
                                </form>
                                @endif
                            </td>

                            <td>
                                    @foreach ($teachers->File as $files)
                            <img src="{{asset($files->file)}}" alt="" class="materialboxed img-sertif">
                                    @endforeach
                                </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
</div>
<div id="matpel">
        <h1>Mata Pelajaran</h1>
        <table>
                
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                        </tr>
                    </thead>
                    @foreach ($matpel as $key => $subjects)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$subjects->SeeTeacher->SeeTeacher->nama_depan}} {{$subjects->SeeTeacher->SeeTeacher->nama_belakang}}</td>
                            <td>{{$subjects->mata_pelajaran}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
</div>

<div id="pesanan">
        <h1>Mata Pesanan</h1>
        <table class="center">
                
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Nama Murid</th>
                            <th>Mata Pelajaran</th>
                            <th>Waktu Les</th>
                            <th>Paket</th>
                            <th>Teman Yang Diajak</th>
                            <th>alamat les</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @foreach ($confirmSee as $key => $confirms)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$confirms->TeacherOrder->SeeTeacher->nama_depan}} {{$confirms->TeacherOrder->SeeTeacher->nama_belakang}}</td>
                            <td>{{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}}</td>
                            <td>{{$confirms->SubjectOrder->mata_pelajaran}}</td>
                            <td>{{$confirms->ShceduleOrder->day}} {{$confirms->ShceduleOrder->time_les}}</td>
                            <td>{{$confirms->packet}}</td>
                                <td>
                                    <ul>
                                        <li>{{$confirms->friends}}</li>
                                        <li>{{$confirms->friends2}}</li>
                                        <li>{{$confirms->friends3}}</li>
                                        <li>{{$confirms->friends4}}</li>
                                    </ul>
                                </td>
                                
                   
                            <td>{{$confirms->address_les}}</td>
                            <td>
                              @if ($confirms->pay == 'Belum Dibayar')
                              <h3 class="heading-warn-pay">Belum Adanya Pembayaran</h3> 
                              @else
                              <img src="{{asset($confirms->pay)}}" alt="" class="materialboxed img-pay-dash">
                              @endif
                            </td>
                            <td> 
                           
                                <a class="waves-effect waves-light btn modal-trigger" href="#{{$confirms->id}}">Lihat Status Les</a>
                               
                                <!-- Modal Structure -->
                               
                                <div id="{{$confirms->id}}" class="modal">
                                        <div class="modal-content">
                                  <h4>Data Les {{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}}</h4>
                                  <table class="tb-data">
                                        <thead class="head-tb-data">
                                        <tr class="center">
                                            <th>Jumlah Pertemuan</th>
                                            <th>Tanggal Les</th>
                                            <th>Keterangan Les</th>
                                            <th>Bukti Les</th>
                                        </tr>
                                        </thead>
                                        @foreach ($confirms->SeeStat as $key => $stats)    
                                        <tbody class="list-tb-data">
                                               
                                            <tr>           
                                                    <td>Pertemuan {{++$key}}</td>                                                 
                                                    <td>{{$stats->date_les}}</td>
                                                    <td>{{$stats->mention}}</td>
                                                    <td><img src="{{asset($stats->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                                             </tr>
                                           
                                             
                                     
                                        </tbody>
                                     @if ($key == 5)
                                        <h3 id="header_test_done">Soal Sudah dikirimkan</h3>
                                         <form class="col 12" action="{{route('tes_last',['confirm'=>$confirms->id])}}"  enctype="multipart/form-data" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}   
                                            <div class="file-field input-field" id="test_file_kolom">
                                                        <div class="btn">
                                                          <span>Upload Soal</span>
                                                          <input type="file" name="test_file" multiple required>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                          <input class="file-path validate" required>
                                                        </div>
                                                 </div>
                                            <button type="submit" id="btn_file_test">Upload Soal</button>
                                            
                                         </form>
                                    
                                     @endif
                                     @if ($confirms->test_file !== 'nul')
                                         @push('js')
                                             <script>
                                                 document.getElementById('btn_file_test').style.display="none";
                                                 document.getElementById('test_file_kolom').style.display="none";
                                                 document.getElementById('heading_test_done').style.display="block";
                                             </script>
                                         @endpush
                                    @else
                                    <script>
                                            document.getElementById('btn_file_test').style.display="block";
                                            document.getElementById('test_file_kolom').style.display="block";
                                            document.getElementById('heading_test_done').style.display="none";
                                        </script>
                                     @endif
                                        @endforeach
                                </table>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Keluar</a>
                                  </div>
                                </div>

                            <form action="{{route('payment_invoice', ['confirm'=>$confirms->id])}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('put') }}    
                                
                                @if ($confirms->stat_pay == 'Pembayaran Sudah Diterima')
                                    <h3 class="heading-warn-success">Pembayaran Diterima</h3>
                                @else
                                <button type="submit" value="Pembayaran Sudah Diterima" name="stat_pay" class="stat-pay-btn">Konfirmasi Pembayaran</button>
                                @endif
                             </form>
                               
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
        </table>
</div>


@endsection

