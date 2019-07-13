@extends('layouts.Dashboard')
@section('menuDashboard')

<div id="statistika"  style="margin-top: 100px;">
    <h5>Dashboard</h5>
    <div style="padding: 10px;">
        <div class="row blue-text">
            <div class="col l5">
                <div class="card" style="width:28rem;position:relative;right:2rem">
                    <b>Total Kontrak Belajar</b>
                    <canvas id="myChart" width="400" height="250"></canvas>
                </div>
                <div class="card" style="width:28rem;position:relative;right:2rem">
                    <b>Paket Belajar Favorit</b>
                    <canvas id="myChart2" width="400" height="250"></canvas>
                </div>
            </div>
            <div class="col l5">
                <div class="card" style="width:28rem;position:relative;left:1rem">
                    <b>Guru Pilihan</b>
                    <canvas id="myChart3" width="400" height="250"></canvas>
                </div>
                <div class="card" style="width:28rem;position:relative;left:1rem">
                    <b>Mata Pelajaran Favorit</b>
                    <canvas id="myChart4" width="400" height="250"></canvas>
                </div>
            </div>
            <div class="col l1" style="position:relative;left:4rem">
                <div class="card center">
                    <h5>{{count($confirm)}}</h5>
                    <p>Konfirmasi Pembayaran</p>
                </div>
                <div class="card center">
                    <h5>{{count($pay)}}</h5>
                    <p>Penutup & Pembayaran</p>
                </div>
                <div class="card center">
                    <h5>{{count($question)}}</h5>
                    <p>Persiapan Soal</p>
                </div>
                <div class="card center">
                    <h5>{{count($teacher)}}</h5>
                    <p>Verifikasi Guru</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
  
</div>
{{-- ini mata pelajaran favorite --}}
<script type="text/javascript">
    $('#print-data-pelajar').click(function(){
        var canvas = document.getElementById("myChart4");
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
    
    var ctx = document.getElementById("myChart4");
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
                // text: 'Mata Pelajaran Favorit',
                fontSize: 16
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        // labelString: 'Jumlah Murid',
                        fontSize: 16
                    }
                }]
            }
        }
    });
    </script>
{{-- ini mata pelajaran favorite --}}
{{-- paket belajar --}}
<script type="text/javascript">
    $('#print-data-paket').click(function(){
        var canvas = document.getElementById("myChart2");
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
    <canvas id="myChart2" width="600" height="400"></canvas>
    <script>
    var chart_paket = document.getElementById("myChart2");
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
                // text: 'Paket Belajar Favorit',
                fontSize: 16
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        // labelString: 'Jumlah Murid',
                        fontSize: 16
                    }
                }]
            }
        }
    });
    </script>
{{-- paket belajar --}}
{{-- guru pilihan --}}
<script type="text/javascript">
    $('#print-data-guru').click(function(){
        var canvas = document.getElementById("myChart3");
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
    <canvas id="myChart3" width="600" height="400"></canvas>
    <script>
    var chart_guru = document.getElementById("myChart3");
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
                // text: 'Guru Favorit',
                fontSize: 16
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        // labelString: 'Jumlah Murid',
                        fontSize: 16
                    }
                }]
            }
        }
    });
    </script>
{{-- guru pilihan --}}
{{-- total kontrak belajar --}}
<script type="text/javascript">
    $('#print-data-kontrak').click(function(){
        var canvas = document.getElementById("myChart");
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
        <canvas id="myChart" width="600" height="400"></canvas>
        <script>
        var chart_kontrak = document.getElementById("myChart");
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
                    // text: 'Total Kontrak Belajar',
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
{{-- total kontrak belajar --}}
@endsection('menuDashboard')