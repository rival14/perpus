@extends('layouts.dashboard')
@section('title')
    Dashboard - Buku
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Buku</li>
        </ol>
        </nav>
      </div>

         @if(session()->has("berhasil"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session("berhasil") }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has("gagal"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session("loginError") }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    <div class="d-sm-flex align-items-center  mb-4">
        <a href="/dashboard/buku/create" class="btn btn-primary shadow-sm">
            <span data-feather="plus-square" class="mb-1"></span> Tambah Buku
        </a>
    </div>

    <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="true" href="/dashboard/buku">Daftar Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/buku-kategori">Kategori</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-light table-hover" width="100%" cellspacing="0">
                <thead class="table table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Genre</th>
                        <th>Stock</th>
                        <th>Lokasi Rak</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->kategori->name}}</td>
                            <td>{{ $item->genre }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <a href="/dashboard/buku/{{ $item->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                <a href="/dashboard/buku/{{ $item->id }}" class="badge bg-primary"><span data-feather="eye"></span></a>
                                <form action="/dashboard/buku/{{ $item->id }}" method="post" class="d-inline">
                                @method("delete")
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" >
                                    <span data-feather="x-circle" ></span>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>

    <div class="row mt-2">
                <div class="col-auto">
                    <a class="btn btn-success" href="{{ route('buku_excel') }}" role="button">Export Excell</a>
                </div>
                <div class="col-auto">
                    <a class="btn btn-danger" href="{{ route('buku_pdf') }}" role="button">Export PDF</a>
                </div>
              </div>
            </div>

    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>



@endsection
