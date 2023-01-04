@extends('layouts.dashboard')
@section('title')
    Dashboard - Kategori, Edit
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/dashboard/buku-kategori">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
        </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header text-center">
            <h2>Edit Kategori</h2>
        </div>
        <div class="card-body">
            <form class="form-floating" action="/dashboard/buku-kategori/{{ ($items->id) }}" method="post">
                @method("PUT")
                @csrf
                <div class="form-floating mb-3">
                    <select class="form-select @error("kategoris_id") is-invalid @enderror" name="kategoris_id" id="kategoris_id" aria-label="Floating label select example" required" autofocus>
                        <option value="{{ $items->id }}">{{ $items->name }}</option>
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <label for="kategoris_id">Kategori</label>
                    @error("kategoris_id")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="d-flex justify-content-end">
                <button class="btn btn-dark mt-3" type="submit">Ubah Buku</button>
                </div>
            </form>

        </div>
    </div>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>


@endsection
