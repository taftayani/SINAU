@extends('layouts.Dashboard')
@section('menuDashboard')

<div id="statistika"  style="margin-top: 100px;">
    <h5>Dashboard</h5>
    <div style="padding: 10px;">
        <div class="row blue-text">
            <div class="col l5">
                <div class="card">
                    <b>Total Kontrak Belajar</b>
                    <canvas id="myChart" width="400" height="250"></canvas>
                </div>
                <div class="card">
                    <b>Paket Belajar Favorit</b>
                    <canvas id="myChart2" width="400" height="250"></canvas>
                </div>
            </div>
            <div class="col l5">
                <div class="card">
                    <b>Guru Pilihan</b>
                    <canvas id="myChart3" width="400" height="250"></canvas>
                </div>
                <div class="card">
                    <b>Mata Pelajaran Favorit</b>
                    <canvas id="myChart4" width="400" height="250"></canvas>
                </div>
            </div>
            <div class="col l2">
                <div class="card center">
                    <h5>12</h5>
                    <p>Konfirmasi Pembayaran</p>
                </div>
                <div class="card center">
                    <h5>8</h5>
                    <p>Penutup & Pembayaran</p>
                </div>
                <div class="card center">
                    <h5>3</h5>
                    <p>Persiapan Soal</p>
                </div>
                <div class="card center">
                    <h5>20</h5>
                    <p>Verifikasi Guru</p>
                </div>
            </div>
            {{-- <div class="col l1">
                <div class="card center">
                    <h3>3</h3>
                    <b>Persiapan Soal</b>
                </div>
                <div class="card center">
                    <h3>20</h3>
                    <b>Verifikasi Guru</b>
                </div>
            </div> --}}
        </div>
    </div>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
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
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx2 = document.getElementById('myChart2');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Matematika', 'IPA', 'IPS', 'PKN', 'ALPRO', 'KALKULUS'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
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
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx3 = document.getElementById('myChart3');
                var myChart3 = new Chart(ctx3, {
                    type: 'bar',
                    data: {
                        labels: ['Adi', 'Budi', 'Maria', 'April', 'Mei', 'Jundi'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
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
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

                var ctx4 = document.getElementById('myChart4');
        var myChart4 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Matematika', 'IPA', 'IPS', 'PKN', 'ALPRO', 'KALKULUS'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
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
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</div>

@endsection('menuDashboard')