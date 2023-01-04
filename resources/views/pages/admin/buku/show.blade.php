@extends('layouts.dashboard')
@section('title')
    Dashboard - Details
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/dashboard/buku">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header text-center">
            <h2>Detail Buku</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-light table-striped">
                <tbody>
                    <tr>
                        <th width="240">Judul</th>
                        <th width="600">{{ $items->judul }}</th>
                    </tr>
                    <tr>
                        <th>Sinopsis</th>
                        <th>{{ $items->sinopsis }}</th>
                    </tr>
                    <tr>
                        <th>Cover</th>
                        <th><div class="img-fluid img-thumbnail gambar2" style="; overflow:hidden;">
                        <img src="{{ asset("storage/" . $items->image) }}" class="card-img-top" alt=" " >
                    </div></th>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <th>{{ $items->kategori->name }}</th>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <th>{{ $items->genre }}</th>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <th>{{ $items->stock }}</th>
                    </tr>
                    <tr>
                        <th>Alamat Rak</th>
                        <th>{{ $items->alamat }}</th>
                    </tr>
                    <tr>
                        <th>penerbit</th>
                        <th>{{ $items->penerbit }}</th>
                    </tr>
                    <tr>
                        <th>Pengarang</th>
                        <th>{{ $items->pengarang }}</th>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <th>{{ $items->tPenerbit }}</th>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>

</main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>

@endsection

