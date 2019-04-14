@extends('content.headerDashboard')
@extends('content.apps')
@section('contentDashboard')
<div id="home" class="container" style="margin-left: 250px; margin-top: 100px;">
<h3>Data Murid</h3>
    <div class="datastat">
        <h6>Total Murid</h6>
        <p class="total">60</p>
        <table>
                
                <thead>
                        <tr>
                            <th>ID</th>
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

        </div>

<div id="guru" class="container" style="margin-left: 250px; margin-top: 100px;">
    <h3>Guru</h3>
    <div class="datastat">
            <h6>Total Murid</h6>
            <p class="total">60</p>
        <table>
                
                <thead>
                        <tr>
                            <th>ID</th>
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
</div>
<!-- <div id="matpel">
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
</div> -->

<div id="pesanan" class="container" style="margin-left: 250px; margin-top: 100px;">
        <h3>Mata Pesanan</h3>
        <div class="datastat">
                <h6>Total Murid</h6>
                <p class="total">60</p>
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
                            <th>Link Video</th>
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
                           
                                <a class="waves-effect waves-light btn modal-trigger" href="#{{$confirms->id}}" style="white-space:nowrap">Lihat Status Les</a>
                                
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
                                        {{-- upload file --}}
                                     @if ($key == 1)
                                        <h3 id="header_test_done">Kirim File Soal</h3>
                                         <form class="col 12" action="{{route('tes_last',['confirm'=>$confirms->id])}}" id="form-file"enctype="multipart/form-data" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}   
                                            <div class="file-field input-field" id="test_file_kolom">
                                                        <div class="btn">
                                                          <span>Unggah Soal</span>
                                                          <input type="file" name="test_file" multiple required>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                          <input class="file-path validate" required>
                                                        </div>
                                                 </div>
                                            <button type="submit" id="btn_file_test">Kirim Soal</button>
                                            
                                         </form>
                                                @if ($stats->ConfirmOrder->test_file != "nul")
                                            
                                                @push('js')
                                                    <script>   
                                                        document.getElementById('tes').style.display="none";
                                                            document.getElementById('test_file_kolom').style.display="none";
                                                            document.getElementById('heading_test_done').style.display="none";
                                                    </script>
                                                @endpush
                                            @else
                                            @push('js')
                                                    <script>
                                                        document.getElementById('btn_file_test').style.display="none";
                                                            document.getElementById('test_file_kolom').style.display="none";
                                                            document.getElementById('heading_test_done').style.display="none";
                                                    </script>
                                                @endpush
                                            @endif
                                     @endif
                                     {{-- end upload --}}
                                    

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
                            <td>
                            @if ($confirms->link_video != "nul")
                               @push('js')
                               <script>
                                    document.getElementById('link-soal').style.color="red";
                                </script>
                               @endpush
                            @endif
                            <a href="{{$confirms->link_video}}" target="_blank" id="link-soal">link video</a>
                                <form class="col 12" action="{{route('last_process',['confirm'=>$confirms->id])}}"  enctype="multipart/form-data" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}   
                                            <input type="number" name="score" id="" placeholder="Masukan Score" required> 
                                            <div class="file-field input-field" id="test_file_kolom">
                                                <div class="btn" style="white-space:nowrap">
                                                <span>Kirim Bukti Bayar</span>
                                                <input type="file" name="photo_last_pay" multiple required>
                                                </div>
                                                <div class="file-path-wrapper">
                                                <input class="file-path validate" required>
                                                </div>
                                        </div>
                                            <button type="submit" >Kirim</button>                    
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
        </table>
        </div>
</div>

<div id="statistika" class="container" style="margin-left: 250px; margin-top: 100px;">
    
    <h5>Statistika</h5>
    <div class="datastat">
    <div style="padding: 20px;">
        <h5>Bagian Statistik</h5>
        <hr>
        <h6>Deskirpsi</h6>
        <div id="statistika-data-pelajaran">

            <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                <img id="print-data-pelajar" src="{{asset('img/printer.png')}}" width="20" height="20" alt="" style="float: right;">
                <script type="text/javascript">
                    $('#print-data-pelajar').click(function(){
                        var canvas = document.getElementById("myChart");
                        var div = document.getElementById("statistika-data-pelajaran").innerHTML;
                        
                        var image = new Image();
                        image.src = canvas.toDataURL("image/png");
                        var win = window.open();
                        win.document.write(div)
                        win.document.write("<br><img style='margin-top: -800px; margin-left: 500px;' src='" + image.src + "'/>");
                        setTimeout(function(){ 
                            // win.print();
                        }, 10);
                        
                    });
                </script>  
                <script>
                    var labels = new Array();
                    var datas = new Array();
                    @foreach($mata_pelajaran_fav as $mpv)
                        labels.push('{{$mpv->nama}}');
                        datas.push('{{$mpv->jumlah}}');
                    @endforeach
                </script>

                <h5 align="center">Mata Pelajaran Favorit</h5>
                <div class="row">
                    <div class="col-2">
                        <p style=" margin-top: 150px; transform: rotate(-90deg);">Jumlah Murid</p>
                    </div>
                    <div class="col-2" style="margin-left: -70px">
                        <canvas id="myChart" width="600" height="400"></canvas>
                        <script>
                        
                        var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'Mata Pelajaran Favorit',
                                    data: datas,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                                legend:{
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
                    </div>
                </div>
                <table>
                    @foreach($mata_pelajaran_fav as $mpv)
                    <tr>
                        <td width="70px"><p>{{$mpv->nama}}</p></td>
                        <td width="80px">{{$mpv->jumlah}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div id="statistika-data-paket" style="margin-top: 100px;">
            <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                <a href="" style="float: right;"><img src="{{asset('img/printer.png')}}" width="20" height="20" alt=""></a>
                <script>
                    var labelspaket = new Array();
                    var dataspaket = new Array();
                    @foreach($paket_belajar_favorit as $pbf)
                        labelspaket.push('{{$pbf->nama}}');
                        dataspaket.push('{{$pbf->jumlah}}');
                    @endforeach
                </script>
                
                <h5 align="center">Paket Belajar Favorit</h5>
                <div class="row">
                    <div class="col-2">
                        <p style=" margin-top: 150px; transform: rotate(-90deg);">Jumlah Murid</p>
                    </div>
                    <div class="col-2" style="margin-left: -70px">
                        <canvas id="chart-murid" width="600" height="400"></canvas>
                        <script>
                        var chart_murid = document.getElementById("chart-murid");
                        var myChart = new Chart(chart_murid, {
                            type: 'bar',
                            data: {
                                labels: labelspaket,
                                datasets: [{
                                    label: 'Paket Belajar Favorit',
                                    data: dataspaket,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                                legend:{
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
                    </div>
                </div>
                <table>
                    @foreach($paket_belajar_favorit as $pbf)
                    <tr>
                        <td width="70px"><p>{{$pbf->nama}}</p></td>
                        <td width="80px">{{$pbf->jumlah}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div id="statistika-data-guru" style="margin-top: 100px;">
            <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                <a href="" style="float: right;"><img src="{{asset('img/printer.png')}}" width="20" height="20" alt=""></a>
                <h5 align="center">Guru Favorit</h5>
                <script>
                    var labelsguru = new Array();
                    var datasguru = new Array();
                    @foreach($guru_fav as $gf)
                        labelsguru.push('{{$gf->nama}}');
                        datasguru.push('{{$gf->jumlah}}');
                    @endforeach
                </script>

                <div class="row">
                    <div class="col-2">
                        <p style=" margin-top: 150px; transform: rotate(-90deg);">Jumlah Murid</p>
                    </div>
                    <div class="col-2" style="margin-left: -70px">
                        <canvas id="chart-guru" width="600" height="400"></canvas>
                        <script>
                        var chart_guru = document.getElementById("chart-guru");
                        var myChart = new Chart(chart_guru, {
                            type: 'bar',
                            data: {
                                labels: labelsguru,
                                datasets: [{
                                    label: 'Guru Favorit',
                                    data: datasguru,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                                legend:{
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
                    </div>
                </div>
                <table>
                    @foreach($guru_fav as $gf)
                    <tr>
                        <td width="70px"><p>{{$gf->nama}}</p></td>
                        <td width="80px">{{$gf->jumlah}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div id="statistika-data-kontrak" style="margin-top: 100px;">
                <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                    <a href="" onclick="printDiv('#statistika-data-kontrak')" style="float: right;"><img src="{{asset('img/printer.png')}}" width="20" height="20" alt=""></a>
                    <h5 align="center">Total Kontrak Belajar</h5>
                    <script>
                        var labelskontrak = new Array();
                        var dataskontrak = new Array();
                        @foreach($months as $monthss)
                            labelskontrak.push('{{$monthss->name}}');
                            dataskontrak.push('{{$monthss->jumlah}}');
                        @endforeach
                    </script>
                    <div class="row">
                        <div class="col-2">
                            <p style=" margin-top: 150px; transform: rotate(-90deg);">Jumlah Murid</p>
                        </div>
                        <div class="col-2" style="margin-left: -70px">
                            <canvas id="chart-kontrak" width="600" height="400"></canvas>
                            <script>
                            var chart_kontrak = document.getElementById("chart-kontrak");
                            var myChart = new Chart(chart_kontrak, {
                                type: 'line',
                                data: {
                                    labels: labelskontrak,
                                    datasets: [{
                                        label: 'Total Kontrak Belajar',
                                        data: dataskontrak,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: false,
                                    maintainAspectRatio: false,
                                    legend:{
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero:true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                    <table>
                        @foreach($months as $months)
                        <tr>
                            <td width="70px"><p>{{$months->name}}</p></td>
                            <td width="80px">{{$months->jumlah}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</div>
</div>


@endsection

