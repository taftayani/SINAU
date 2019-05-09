@extends('content.headerDashboard')
@extends('content.appsDashboard')
@section('contentDashboard')

 

<div id="home" class="container" style="margin-left: 250px; margin-top: 100px;">
    <h3>Data Murid</h3>
    <div class="datastat">
            <h6>Total Murid</h6>
            <p class="total">{{$total_murid}}</p>

            <input type="text" id="search_name_student" onkeyup="filter_name_student()" placeholder="Search student names" style="width: 50%; float: right;"/>

            <div class="row" style="margin-top: 100px;">
                <div class="col-2">
                    <div class="sidenav-filter">
                        <strong><p>Gender</p></strong>
                        <button id="all_student" class="filter-btn filter-active">All</button>
                        <button id="male_student" class="filter-btn">Male</button>
                        <button id="female_student" class="filter-btn">Female</button>
                        <input type="hidden" id="keyword" onkeypress="filter_gender_student()">
                    </div>
                    <script>
                        $(function() {
                            $('.sidenav-filter').find('button').click(function(e) {
                                $('button').removeClass('filter-active');
                                $(this).addClass('filter-active');
                                
                            });
                            $('#all_student').click(function(){
                                document.getElementById("keyword").value = "";
                                $('#keyword').keypress();
                            });
                            $('#male_student').click(function(){
                                document.getElementById("keyword").value = "Male";
                                $('#keyword').keypress();
                            });
                            $('#female_student').click(function(){
                                document.getElementById("keyword").value = "Female";
                                $('#keyword').keypress();
                            });
                        });
                        function filter_gender_student() {
                            var input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("keyword");
                            filter = input.value;
                            table = document.getElementById("student_table");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[7];
                                if (td) {
                                    txtValue = td.textContent;
                                    if (txtValue.indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }       
                            }
                        }

                        function filter_name_student(){
                            var input, filter, table, tr, firstname, lastname, i, txtValue;
                            input = document.getElementById("search_name_student");
                            filter = input.value;
                            table = document.getElementById("student_table");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                firstname = tr[i].getElementsByTagName("td")[1];
                                lastname = tr[i].getElementsByTagName("td")[2];
                                if (firstname || lastname) {

                                    txtValuefirstname = firstname.textContent.toLowerCase();
                                    txtValuelastname = lastname.textContent.toLowerCase();

                                    if (txtValuefirstname.indexOf(filter) > -1 || txtValuelastname.indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }       
                            }
                        }
                    </script>
                    
                </div>
                <div class="col-10">
                    <table id="student_table">
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
                        @foreach ($user as $key => $users)
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
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="guru" class="container" style="margin-left: 250px; margin-top: 100px;">
        <h3>Guru</h3>
        <div class="datastat">
                <h6>Total Guru</h6>
                <p class="total">{{$total_guru}}</p>

                <input type="text" id="search_name_teacher" onkeyup="filter_name_teacher()" placeholder="Search student names" style="width: 50%; float: right;"/>
                <script>
                    function filter_name_teacher(){
                            var input, filter, table, tr, firstname, lastname, i, txtValue;
                            input = document.getElementById("search_name_teacher");
                            filter = input.value;
                            table = document.getElementById("teacher_table");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                firstname = tr[i].getElementsByTagName("td")[1];
                                lastname = tr[i].getElementsByTagName("td")[2];
                                if (firstname || lastname) {

                                    txtValuefirstname = firstname.textContent.toLowerCase();
                                    txtValuelastname = lastname.textContent.toLowerCase();

                                    if (txtValuefirstname.indexOf(filter) > -1 || txtValuelastname.indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }       
                            }
                        }
                </script>
                <table id="teacher_table">
                    <thead >
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
                    <h6>Total Pesanan</h6>
                    <p class="total">{{$total_pemesanan}}</p>
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
                            
                                    <a class="waves-effect waves-light btn modal-trigger" href="#{{$confirms->id}}">Lihat Status Les</a>
                                    
                                    <!-- Modal Structure -->
                                
                                    <div id="{{$confirms->id}}" class="modal">
                                            <div class="modal-content"  style=" height:100%; overflow-y: auto;">
                                    <!-- <h4>Data Les {{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}}</h4> -->
                                    
                                    
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 style="color: #12BF95;">Rekap Les ( {{$confirms->TeacherOrder->SeeTeacher->nama_depan}} {{$confirms->TeacherOrder->SeeTeacher->nama_belakang}} )</h4>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn primary-btn" style="width: 100%; background:#6A7BA9; float: left;">UPLOAD SOAL</button>
                                        </div>  
                                        <div class="col-1">
                                            <a href="#!" class="modal-action modal-close" style="color: #F13838; font-weight: bold;">X</a>
                                        </div>
                                    </div>
                                    <table class="tb-data " style="margin-top: 20px;">
                                            <thead class="head-tb-data">
                                            <tr class="center">
                                                <th>Tanggal Les</th>
                                                <!-- <th>Jumlah Pertemuan</th> -->
                                                <th>Nama Murid</th>
                                                <th>Keterangan Les</th>
                                                <!-- <th>Bukti Les</th> -->
                                                <th>Foto Pembelajaran</th>
            
                                            </tr>
                                            </thead>
                                            @foreach ($confirms->SeeStat as $key => $stats)    
                                            <tbody class="list-tb-data">
                                                
                                                <tr>           
                                                        <!-- <td>Pertemuan {{++$key}}</td>                                                  -->
                                                        <td>{{$stats->date_les}}</td>
                                                        <td></td>
                                                        <td>{{$stats->mention}}</td>
                                                        <td><img src="{{asset($stats->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                                                    
                                                </tr>
                                            
                                                
                                        
                                            </tbody>
                                        @if ($key == 4)
                                            <!-- <h3 id="header_test_done">Kirim File Soal</h3> -->
                                            <!-- <form class="col 12" action="{{route('tes_last',['confirm'=>$confirms->id])}}"  enctype="multipart/form-data" method="post">
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
                                                
                                            </form> -->
                                        
                                        @endif
                                        @if ($stats->ConfirmOrder->test_file != "nul")
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
                                    <!-- <div class="modal-footer" style="position: absolute; top: 10px; right: 10px; background: rgba(255, 255, 255, 0);"> -->
                                        <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Keluar</a> -->
                                    <!-- </div> -->
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
                                    <a href="{{$confirms->link_video}}" target="_blank">link video</a>
                                <form class="col 12" action="{{route('last_process',['confirm'=>$confirms->id])}}"  enctype="multipart/form-data" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}   
                                            <input type="number" name="score" id="" placeholder="Masukan Score" required> 
                                            <div class="file-field input-field" id="test_file_kolom">
                                                <div class="btn">
                                                <span>Sisipkan Pembayaran</span>
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
        <h5 style="color: #12BF95">Statistika</h5>
        <div class="datastat">
        <div style="padding: 10px;">
            <h5 style="color: #12BF95">Bagian Statistik</h5>
            <hr>
            <h6>Deskirpsi</h6>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" style="background: rgb(216, 216, 216);">
                    <a class="nav-link active" href="#statistika-data-pelajaran" role="tab" data-toggle="tab" style="color: black;">Mata Pelajaran Favorite</a>
                </li>
                <li class="nav-item" style="background: rgb(216, 216, 216);">
                    <a class="nav-link" href="#statistika-data-paket" role="tab" data-toggle="tab" style="color: black;">Paket Belajar Favorite</a>
                </li>
                <li class="nav-item" style="background: rgb(216, 216, 216);">
                    <a class="nav-link" href="#statistika-data-guru" role="tab" data-toggle="tab" style="color: black;">Guru Favorite</a>
                </li>
                <li class="nav-item" style="background: rgb(216, 216, 216);">
                    <a class="nav-link" href="#statistika-data-kontrak" role="tab" data-toggle="tab" style="color: black;">Total Kontrak Belajar</a>
                </li>
            </ul>

            <div class="tab-content" style="border-right: 1px solid #E9E9E9; border-left: 1px solid #E9E9E9; border-bottom: 1px solid #E9E9E9;">
                <div id="statistika-data-pelajaran" role="tabpanel" class="tab-pane active">
                    <div class="row" style="padding:20px;">
                        <div class="col-8">
                            <h5 style="color: #12BF95">Mata Pelajaran Favorit (Berdasarkan Kontrak Belajar)</h5>
                        </div>
                        <div class="col-2">
                            <img id="print-data-pelajar" src="{{asset('img/printer.png')}}" width="20" height="20" alt="" class="printbtn">
                            <script type="text/javascript">
                                $('#print-data-pelajar').click(function(){
                                    var canvas = document.getElementById("myChart");
                                    var image = new Image();
                                    image.src = canvas.toDataURL("image/png");
                                    var content = document.getElementById('statistika-data-pelajaran').innerHTML;
                                    var table_mata_pelajaran_fav = document.getElementById("table_mata_pelajaran_fav");
                                    var mywindow = window.open('', 'Print', 'height=600,width=800');

                                    mywindow.document.write('<html><head>');
                                    mywindow.document.write('<title>Print</title></head><body >');
                                    mywindow.document.write("<img style='display: block; margin-left: auto; margin-right: auto' src='" + image.src + "'/>");
                                    mywindow.document.write(table_mata_pelajaran_fav.outerHTML);
                                    mywindow.document.write('</body></html>');
                                    mywindow.focus()
                                    setTimeout(function(){ mywindow.print(); mywindow.close();}, 10);
                                    return true; 
                                });
                            </script>  
                        </div>
                    </div>
                    <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                        <script>
                            var labels = new Array();
                            var datas = new Array();
                            @foreach($mata_pelajaran_fav as $mpv)
                                labels.push('{{$mpv->nama}}');
                                datas.push('{{$mpv->jumlah}}');
                            @endforeach
                        </script>
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-2" style="margin-left: -70px">
                                <canvas id="myChart" width="600" height="400"></canvas>
                                <script>
                                
                                var ctx = document.getElementById("myChart");
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: labels,
                                        datasets: [
                                            {
                                            label: 'Jumlah Murid',
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
                                        }
                                    ]
                                    },
                                    options: {
                                        responsive: false,
                                        maintainAspectRatio: false,
                                        legend:{
                                            display: false,
                                            boxWidth: 0,
                                            position: 'bottom'
                                        },
                                        title: {
                                            display: true,
                                            text: 'Mata Pelajaran Favorit',
                                            fontSize: 16
                                        },
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                },
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Jumlah Murid',
                                                    fontSize: 16
                                                }
                                            }]
                                        }
                                    }
                                });
                                </script>
                            </div>
                        </div>
                        <table align="center" border="1" cellpadding="10" style="border-collapse: collapse; width: 70%; height: 20px;" id="table_mata_pelajaran_fav">
                            <tbody>
                                @foreach($mata_pelajaran_fav as $key => $mpv)
                                <tr>
                                    <td width="70px"><p>{{$mpv->nama}}</p></td>
                                    <td width="80px">{{$mpv->jumlah}}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="statistika-data-paket" role="tabpanel" class="tab-pane">
                    <div class="row" style=" padding:20px;">
                        <div class="col-8">
                            <h5 style="color: #12BF95">Paket Belajar Favorit (Berdasarkan Pemesanan)</h5>
                        </div>
                        <div class="col-2">
                            <img id="print-data-paket" src="{{asset('img/printer.png')}}" width="20" height="20" alt="" class="printbtn">
                            <script type="text/javascript">
                                $('#print-data-paket').click(function(){
                                    var canvas = document.getElementById("chart-paket");
                                    var image = new Image();
                                    image.src = canvas.toDataURL("image/png");
                                    var table_paket_belajar_favorit = document.getElementById("table_paket_belajar_favorit");
                                    var content = document.getElementById('statistika-data-paket').innerHTML;
                                    var mywindow = window.open('', 'Print', 'height=600,width=800');

                                    mywindow.document.write('<html><head>');
                                    mywindow.document.write('<title>Print</title></head><body >');
                                    mywindow.document.write("<img style='display: block; margin-left: auto; margin-right: auto' src='" + image.src + "'/>");
                                    mywindow.document.write(table_paket_belajar_favorit.outerHTML);
                                    mywindow.document.write('</body></html>');
                                    mywindow.focus()
                                    setTimeout(function(){ mywindow.print(); mywindow.close();}, 10);
                                    return true; 
                                });
                            </script> 
                        </div>
                    </div>
                    <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                        
                        <script>
                            var labelspaket = new Array();
                            var dataspaket = new Array();
                            var namapaket;
                            @foreach($paket_belajar_favorit as $pbf)
                                
                                if('{{$pbf->nama}}' == '100.000'){
                                    namapaket = "Paket 1";
                                }else if('{{$pbf->nama}}' == '150.000'){
                                    namapaket = "Paket 2";
                                }else if('{{$pbf->nama}}' == '160.000'){
                                    namapaket = "8 Pertemuan";
                                }else if('{{$pbf->nama}}' == '220.000'){
                                    namapaket = "12 Pertemuan";
                                }else if('{{$pbf->nama}}' == '280.000'){
                                    namapaket = "16 pertemuan";
                                }
                                
                                labelspaket.push(namapaket);
                                dataspaket.push('{{$pbf->jumlah}}');
                            @endforeach
                        </script>

                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-2" style="margin-left: -70px">
                                <canvas id="chart-paket" width="600" height="400"></canvas>
                                <script>
                                var chart_paket = document.getElementById("chart-paket");
                                var myChart = new Chart(chart_paket, {
                                    type: 'bar',
                                    data: {
                                        labels: labelspaket,
                                        datasets: [{
                                            label: 'Jumlah Murid',
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
                                        title: {
                                            display: true,
                                            text: 'Paket Belajar Favorit',
                                            fontSize: 16
                                        },
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                },
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Jumlah Murid',
                                                    fontSize: 16
                                                }
                                            }]
                                        }
                                    }
                                });
                                </script>
                            </div>
                        </div>
                        <table align="center" border="1" cellpadding="10" style="border-collapse: collapse; width: 70%; height: 20px;" id="table_paket_belajar_favorit">
                            <tbody>
                                @foreach($paket_belajar_favorit as $pbf)
                                <tr>
                                    <td width="70px"><p>
                                    <?php 
                                        if($pbf->nama == "100.000"){
                                            echo 'Paket 1';
                                        }else if($pbf->nama == "150.000"){
                                            echo 'Paket 2';
                                        }else if($pbf->nama == '160.000'){
                                            echo "8 Pertemuan";
                                        }else if($pbf->nama == '220.000'){
                                            echo "12 Pertemuan";
                                        }else if($pbf->nama == '280.000'){
                                            echo '16 pertemuan';
                                        }
                                    ?>
                                    </p></td>
                                    <td width="80px">{{$pbf->jumlah}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="statistika-data-guru" role="tabpanel" class="tab-pane">
                    <div class="row" style=" padding:20px;">
                        <div class="col-8">
                            <h5 style="color: #12BF95">Guru Favorit (Tahun 2019)</h5>
                        </div>
                        <div class="col-2">
                            <img id="print-data-guru" src="{{asset('img/printer.png')}}" width="20" height="20" alt="" class="printbtn">
                            <script type="text/javascript">
                                $('#print-data-guru').click(function(){
                                    var canvas = document.getElementById("chart-guru");
                                    var image = new Image();
                                    image.src = canvas.toDataURL("image/png");
                                    var content = document.getElementById('statistika-data-guru').innerHTML;
                                    var table_guru_fav = document.getElementById("table_guru_fav");
                                    var mywindow = window.open('', 'Print', 'height=600,width=800');

                                    mywindow.document.write('<html><head>');
                                    mywindow.document.write('<title>Print</title></head><body >');
                                    mywindow.document.write("<img style='display: block; margin-left: auto; margin-right: auto' src='" + image.src + "'/>");
                                    mywindow.document.write(table_guru_fav.outerHTML);
                                    mywindow.document.write('</body></html>');
                                    mywindow.focus()
                                    setTimeout(function(){ mywindow.print(); mywindow.close();}, 10);
                                    return true; 
                                });
                            </script> 
                        </div>
                    </div>
                    <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                        
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
                                            label: 'Jumlah Murid',
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
                                        title: {
                                            display: true,
                                            text: 'Guru Favorit',
                                            fontSize: 16
                                        },
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                },
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Jumlah Murid',
                                                    fontSize: 16
                                                }
                                            }]
                                        }
                                    }
                                });
                                </script>
                            </div>
                        </div>
                        <table align="center" border="1" cellpadding="10" style="border-collapse: collapse; width: 70%; height: 20px;" id="table_guru_fav">
                            <tbody>
                                @foreach($guru_fav as $gf)
                                <tr>
                                    <td width="70px"><p>{{$gf->nama}}</p></td>
                                    <td width="80px">{{$gf->jumlah}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="statistika-data-kontrak" role="tabpanel" class="tab-pane">
                    <div class="row" style=" padding:20px;">
                        <div class="col-8">
                            <h5 style="color: #12BF95">Total Kontrak Belajar (Tahun 2019)</h5>
                        </div>
                        <div class="col-2">
                            <img id="print-data-kontrak" src="{{asset('img/printer.png')}}" width="20" height="20" alt="" class="printbtn">
                                <script type="text/javascript">
                                $('#print-data-kontrak').click(function(){
                                    var canvas = document.getElementById("chart-kontrak");
                                    var image = new Image();
                                    image.src = canvas.toDataURL("image/png");
                                    var content = document.getElementById('statistika-data-kontrak').innerHTML;
                                    var table_total_kontrak = document.getElementById("table_total_kontrak");
                                    var mywindow = window.open('', 'Print', 'height=600,width=800');

                                    mywindow.document.write('<html><head>');
                                    mywindow.document.write('<title>Print</title></head><body >');
                                    mywindow.document.write("<img style='display: block; margin-left: auto; margin-right: auto' src='" + image.src + "'/>");
                                    mywindow.document.write(table_total_kontrak.outerHTML);
                                    mywindow.document.write('</body></html>');
                                    mywindow.focus()
                                    setTimeout(function(){ mywindow.print(); mywindow.close();}, 10);
                                    return true; 
                                });
                            </script> 
                        </div>
                    </div>
                    <div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
                            
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
                                            title: {
                                                display: true,
                                                text: 'Total Kontrak Belajar',
                                                fontSize: 16
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
                            <table align="center" border="1" cellpadding="10" style="border-collapse: collapse; width: 70%; height: 20px;" id="table_total_kontrak">
                            <tbody>
                                @foreach($months as $months)
                                <tr>
                                    <td width="70px"><p>{{$months->name}}</p></td>
                                    <td width="80px">{{$months->jumlah}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
    </div>
</div>


@endsection

