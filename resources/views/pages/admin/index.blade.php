@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Judul Buku</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $jBuku }}</span>

                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green ">
                                <i class="fa fa-book mt-2" style="font-size: 350%;""></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">BUKU TERPINJAM</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $tBuku }}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green rounded-circle shadow">
                                <i class="fa fa-book" style="font-size: 350%;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Anggota</h5>
                            <span class="h2 font-weight-bold mb-0" >{{ $jAnggota }}</span>

                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green rounded-circle " style="font-size: 350%;">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-3">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">History</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $history }}</span>

                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green  rounded-circle ">
                                <i class="fa fa-history" style="font-size: 350%;"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-3">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Selesai</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $selesai }}</span>

                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green  rounded-circle ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"  height="60"><path d="M8 16A8 8 0 118 0a8 8 0 010 16zm3.78-9.72a.751.751 0 00-.018-1.042.751.751 0 00-1.042-.018L6.75 9.19 5.28 7.72a.751.751 0 00-1.042.018.751.751 0 00-.018 1.042l2 2a.75.75 0 001.06 0z"></path></svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-3">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Dipinjam</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $pinjam }}</span>

                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green  rounded-circle ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" height="60"><path d="M6 0a6 6 0 110 12A6 6 0 016 0zm3 5H3v2h6z"></path></svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="/js/apexcharts.js"></script>
    <div class="row mt-5 ">
        <div class="card col-lg-7 me-5">
            <div class="card-body">
                <div id="chart">
                        <script>
                           var options = {
                            series: [{
                                name: "Desktops",
                                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                            }],
                            chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                            },
                            dataLabels: {
                            enabled: false
                            },
                            stroke: {
                            curve: 'straight'
                            },
                            title: {
                            text: 'Transaksi Harian',
                            align: 'center'
                            },
                            grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                            },
                            xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                            }
                            };

                            var chart = new ApexCharts(document.querySelector("#chart"), options);
                            chart.render();
                        </script>
                </div>
            </div>
        </div>

        <div class="card col-lg-4 ms-5 d-flex justify-content-center">
            <div class="card-body ">
                <div id="chart1">
                    <h5 class="ps-5 mb-5 h5">Data Buku Terbanyak Dipinjam</h5>
                    <script>
                        var options = {
                        series: [44, 55, 41, 17, 15],
                        chart: {
                        type: 'donut',
                        },
                        responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                            width: 200
                            },
                            legend: {
                            position: 'bottom'
                            }
                        }
                        }]
                        };

                        var chart = new ApexCharts(document.querySelector("#chart1"), options);
                        chart.render();
                    </script>
                </div>
            </div>
        </div>
    </div> --}}


    </main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>



@endsection
