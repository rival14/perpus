@extends('layouts.dashboard')
@section('title')
    Dashboard - Order
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
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

    <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="true" href="/dashboard/order">Daftar Order</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-light table-hover" width="100%" cellspacing="0">
                <thead class="table table-dark">
                    <tr>
                        <th>No</th>
                        <th>Order</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Dari</th>
                        <th>Sampai</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->order_number }}</td>
                            <td>{{ $item->user->name}}</td>
                            <td>{{ $item->buku->judul }}</td>
                            <td>{{ $item->from }}</td>
                            <td>{{ $item->to }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                @if ($item->status == 'Dipinjam')
                                    <a href="/dashboard/order/status/{{ $item->id }}/complete" class="badge bg-warning">
                                        Selesai
                                    </a>
                                @else
                                -
                                @endif
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
    </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>



@endsection
