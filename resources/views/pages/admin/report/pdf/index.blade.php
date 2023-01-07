@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Report</h1>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Peminjam</th>
                    <th scope="col">Order No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Alamat Rak</th>
                    <th scope="col">Dari</th>
                    <th scope="col">Sampai</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $i => $item)
                    <tr>
                        <th scope="row">{{$i + 1}}</th>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->order_number}}</td>
                        <td>{{$item->buku->judul}}</td>
                        <td>{{$item->buku->alamat}}</td>
                        <td>{{$item->from}}</td>
                        <td>{{$item->to}}</td>
                        <td>{{$item->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>



@endsection
