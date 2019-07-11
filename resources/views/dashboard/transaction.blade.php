@extends('layouts.Dashboard')
@section('menuDashboard')

<div id="pesanan" style="margin-top: 100px;">
        <h3>Pesanan</h3>
        <div class="">
                <h6>Total Pesanan</h6>
                <p class="total">{{$confirmSee->count()}}</p>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" style="background: rgb(216, 216, 216);">
                        <a id="nav-pemesanan" class="nav-link active" href="#transaksi-pemesanan" role="tab" data-toggle="tab" style="color: black;">Transaksi Pemesanan</a>
                    </li>
                    <li class="nav-item" style="background: rgb(216, 216, 216);">
                        <a id="nav-pembelajaran" class="nav-link" href="#transaksi-pembelajaran" role="tab" data-toggle="tab" style="color: black;">Transaksi Pembelajaran</a>
                    </li>
                </ul>

                <div class="tab-content" style="padding: 20px; border-right: 1px solid #E9E9E9; border-left: 1px solid #E9E9E9; border-bottom: 1px solid #E9E9E9;">
                    <div id="" role="tabpanel" class="tab-pane active">
                        <table class="center" id="example">
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
                                    <th>Konfirmasi Pembayaran</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            @foreach ($confirmSee as $key => $confirms)
                                <tbody>
                                    <tr>
                                        <td class="td">{{++$key}}</td>
                                        <td class="td">{{$confirms->TeacherOrder->SeeTeacher->nama_depan}} {{$confirms->TeacherOrder->SeeTeacher->nama_belakang}}</td>
                                        <td class="td">{{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}}</td>
                                        <td class="td">{{$confirms->SubjectOrder->mata_pelajaran}}</td>
                                        <td class="td">{{$confirms->ShceduleOrder->day}} {{$confirms->ShceduleOrder->time_les}}</td>
                                        <td class="td">{{$confirms->packet}}</td>
                                            <td class="td">
                                                <ul>
                                                    <li>{{$confirms->friends}}</li>
                                                    <li>{{$confirms->friends2}}</li>
                                                    <li>{{$confirms->friends3}}</li>
                                                    <li>{{$confirms->friends4}}</li>
                                                </ul>
                                            </td>
                                            
                            
                                        <td class="td">{{$confirms->address_les}}</td>
                                        <td class="td">
                                        @if ($confirms->pay == 'Belum Dibayar')
                                        <p>Belum Adanya Pembayaran</p> 
                                        @else
                                        <img src="{{asset($confirms->pay)}}" alt="" class="materialboxed img-pay-dash">
                                        @endif
                                        </td>
                                    
                                        <td class="td">  
                                            @if ($confirms->stat_pay == 'Pembayaran Sudah Diterima')
                                            <p>Pembayaran Sudah Diterima</p>
                                            @else
                                            <form action="{{route('payment_invoice',['confirm'=>$confirms->id])}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}  
                                                <button type="submit" style="color: white; font-size: 12px; background-color:#26a69a;" name="stat_pay" value="Pembayaran Sudah Diterima">Konfirmasi Pembayaran</button>
                                                <button type="submit" style="color: white; font-size: 12px; width: 190px; margin-top: 10px;  background-color:#26a69a;" name="stat_pay" value="Pembayaran Ditolak">Tolak Pembayaran</button>
                                                
                                            </form>
                                            @endif
                                        </td>
                                        <td class="td tablehide">
                                            <img class="detailbtn_pemesanan"src="https://image.flaticon.com/icons/svg/149/149309.svg" alt="" width="20">
                                            <script>
                                                $('.detailbtn_pemesanan').click(function(){
                                                    $('#nav-pembelajaran').addClass('active');
                                                    $('#transaksi-pembelajaran').addClass('active');
                                                    $('#transaksi-pemesanan').removeClass('active');
                                                    $('#nav-pemesanan').removeClass('active');
                                                });
                                            </script>
                                        </td>   
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>

                    <div id="transaksi-pembelajaran" role="tabpanel" class="tab-pane">
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Nama Murid</th>
                                    <th>Status Les</th>
                                    <th>Pemberian Nilai</th>
                                    <th>Pembayaran Ke Guru</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaksi_pembelajaran as $key => $tp)
                                <tr>
                                    <td class="td">{{++$key}}</td>
                                    <td class="td">{{$tp->TeacherOrder->SeeTeacher->nama_depan}} {{$tp->TeacherOrder->SeeTeacher->nama_belakang}}</td>
                                    <td class="td">{{$tp->UserOrder->nama_depan}} {{$tp->UserOrder->nama_belakang}}</td>
                                    <td class="td">
                                        <a class="btn modal-trigger" href="#{{$tp->id}}">Lihat Status Les</a>
                                    </td>
                                    <td class="td">
                                        @if ($tp->link_video == 'nul')
                                            <p>Belum Mengirim Link</p>              
                                        @else
                                        <a href="{{$tp->link_video}}" target="_blank">Link Video</a>
                                        @endif
                                    </td>
                                    <td class="td">
                                        <form action="{{route('last_process',['confirm'=>$tp->id])}}"  enctype="multipart/form-data" method="post" style="width: 70%; margin-left: auto; margin-right: auto; margin-left: 50px;">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}   
                                                <div class="row" style="margin-bottom: -10px; margin-left: -30px;">
                                                    <div class="col-9">
                                                        @if ($tp->photo_last_pay=="nul")
                                                            <div class="file-field input-field" id="test_file_kolom">
                                                                <div class="btn">
                                                                    <span>Sisipkan Pembayaran</span>
                                                                    <input type="file" name="photo_last_pay" multiple required>
                                                                </div><br>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" required>
                                                                </div>
                                                            </div>
                                                            <input type="submit" value="Kirim">
                                                        @else 
                                                        <img src="{{asset($tp->photo_last_pay)}}" alt="" class="materialboxed img-pay-dash">
                                                        @endif
                                                   
                                                    </div>
                                                </div>
                                           
                                        </form>
                                    </td>
                                    <td class="td"><img class="detailbtn"src="https://image.flaticon.com/icons/svg/149/149309.svg" alt="" width="20"></td>
                                    <script>
                                        $('.detailbtn').click(function(){
                                            $('#transaksi-pemesanan').addClass('active');
                                            $('#nav-pemesanan').addClass('active');
                                            $('#nav-pembelajaran').removeClass('active');
                                            $('#transaksi-pembelajaran').removeClass('active');
                                        });
                                    </script>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
</div>

<!-- Modal Structure -->
@foreach($transaksi_pembelajaran as $tpmodal)
<div id="{{$tpmodal->id}}" class="modal">
    <div class="modal-content"  style=" height:100%; overflow-y: auto;">
        <div class="row">
            <div class="col-11">
                <h4 style="color: #12BF95; text-align:left;">Rekap Les ( {{$tpmodal->TeacherOrder->SeeTeacher->nama_depan}} {{$tpmodal->TeacherOrder->SeeTeacher->nama_belakang}} )</h4>
            </div>
            <div class="col-1">
                <a href="#!" class="modal-action modal-close" style="color: #F13838; font-weight: bold;">X</a>
            </div>
            <div class="col-12">
                <form action="{{route('tes_last',['confirm'=>$tpmodal->id])}}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}  
                    <div class="file-field input-field" id="test_file_kolom">
                        <div class="btn">
                            <span>PILIH SOAL</span>
                            <input type="file" name="test_file_last" multiple required>
                        </div><br>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" required>
                        </div>
                    </div>
                    <button type="submit"  value="Berhasil">Unggah Soal</button>
                </form>
            </div>  
          
        </div>
        <table class="tb-data " style="margin-top: 20px;">
            <thead class="head-tb-data">
                <tr class="center">
                    <th>Tanggal Les</th>
                    <th>Nama Murid</th>
                    <th>Keterangan Les</th>
                    <th>Foto Pembelajaran</th>
                </tr>
            </thead>
            <tbody class="list-tb-data">
                @if(!$tpmodal->SeeStat->isEmpty())
                @foreach ($tpmodal->SeeStat as $key => $stats)  
                    <tr>                              
                        <td class="td">{{$stats->date_les}}</td>
                        <td class="td">{{$tpmodal->UserOrder->nama_depan}} {{$tpmodal->UserOrder->nama_belakang}}</td>
                        <td class="td">{{$stats->mention}}</td>
                        <td class="td"><img src="{{asset($stats->prove)}}" alt="" class="materialboxed pay-stat-img"></td>
                    </tr>
                @endforeach
                @else
                    <tr><td colspan="4"><p align="center">No Records Available</p></td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endforeach

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollY":        "200px",
            "scrollCollapse": true,
        } );
    } );
</script>
<script>
    $(document).ready(function() {
        var pages = document.getElementById('pages').value;
        $("#transaksi_pembelajaran").fancyTable({
            pagination: true,
            searchable: false,
            sortable: true,
            paginationClass: "Page navigation example",
            paginationClassActive: "pageactive",
            perPage: pages,
            pagClosest: 3,
        });		
    });
    function pagination(){
        var pages = document.getElementById('pages').value;
        $(document).ready(function() {
            $("#transaksi_pembelajaran").fancyTable({
                pagination: true,
                searchable: false,
                sortable: true,
                paginationClass: "Page navigation example",
                paginationClassActive: "pageactive",
                perPage: pages,
                pagClosest: 3,
            });		
        });
    }
</script> 

@endsection('menuDashboard')