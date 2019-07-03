@extends('layouts.Dashboard')
@section('menuDashboard')

<div id="statistika"  style="margin-top: 100px;">
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
                                <td class="td" width="70px"><p>{{$mpv->nama}}</p></td>
                                <td class="td" width="80px">{{$mpv->jumlah}}</td>
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
                            
                             if('{{$pbf->nama}}' == '160.000'){
                                namapaket = "8 Pertemuan";
                            }else if('{{$pbf->nama}}' == '220.000'){
                                namapaket = "12 Pertemuan";
                            }else if('{{$pbf->nama}}' == '260.000'){
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
                                            // 'rgba(255, 99, 132, 0.2)',
                                            // 'rgba(54, 162, 235, 0.2)',
                                            // 'rgba(255, 206, 86, 0.2)',
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
                                <td class="td" width="70px"><p>
                                <?php 
                                   if($pbf->nama == '160.000'){
                                        echo "8 Pertemuan";
                                    }else if($pbf->nama == '220.000'){
                                        echo "12 Pertemuan";
                                    }else if($pbf->nama == '260.000'){
                                        echo '16 pertemuan';
                                    }
                                ?>
                                </p></td>
                                <td class="td" width="80px">{{$pbf->jumlah}}</td>
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
                                <td class="td" width="70px"><p>{{$gf->nama}}</p></td>
                                <td class="td" width="80px">{{$gf->jumlah}}</td>
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
                                <td class="td" width="70px"><p>{{$months->name}}</p></td>
                                <td class="td" width="80px">{{$months->jumlah}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
</div>

@endsection('menuDashboard')