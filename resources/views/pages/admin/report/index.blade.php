@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Report</h1>
      </div>

    <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="/js/apexcharts.js"></script>
    <div class="row mt-5 ">
        <div class="card col-lg-7 me-5">
            <div class="card-body">
                <div id="chart">
                        <script>
                           var options = {
                            series: [{
                                name: "Desktops",
                                data: {{json_encode($order)}}
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
                            text: 'Transaksi Bulanan',
                            align: 'center'
                            },
                            grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                            },
                            xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
                        series: {{json_encode($total_buku)}},
                        labels: {!!json_encode(($judul_buku))!!},
                        // labels: {{json_encode($judul_buku)}},
                        // chartOptions: {
                        // labels: ['Apple', 'Mango', 'Orange', 'Watermelon']
                        // }
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
                        },
                        }]
                        };

                        var chart = new ApexCharts(document.querySelector("#chart1"), options);
                        chart.render();
                    </script>
                </div>
            </div>
        </div>
    </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>



@endsection
