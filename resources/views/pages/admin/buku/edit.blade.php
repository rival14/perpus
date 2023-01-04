@extends('layouts.dashboard')
@section('title')
    Dashboard - UserEdit
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/dashboard/buku">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Buku</li>
        </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header text-center">
            <h2>Edit Buku</h2>
        </div>
        <div class="card-body">
            <form class="form-floating" action="/dashboard/buku/{{ $items->id }}" method="post" enctype="multipart/form-data">
                @method("PUT")
                @csrf

                <div class="form-floating mb-3">
                    <select class="form-select @error("kategoris_id") is-invalid @enderror" name="kategoris_id" id="kategoris_id" aria-label="Floating label select example" required" autofocus>
                        <option value="{{ ($items->kategori->id) }}">{{ ($items->kategori->name) }}</option>
                        @foreach ($kategori as $kategoris)
                            <option value="{{ $kategoris->id }}">{{ $kategoris->name }}</option>
                        @endforeach
                    </select>
                    <label for="kategoris_id">Kategori</label>
                    @error("kategoris_id")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-floating mb-3">
                    <input type="text" name="judul" class="form-control @error("judul") is-invalid @enderror" id="judul" placeholder="Nama" autofocus required value="{{ ($items->judul) }}">
                    <label for="floatingInput">Judul</label>
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea name="sinopsis" id="sinopsis" cols="" rows="4" class="form-control @error("sinopsis") is-invalid @enderror" placeholder="Sinopsis" required value="" style="height: 200px" >{{ $items->sinopsis }}</textarea>
                    <label for="username">Sinopsis</label>
                    @error("sinopsis")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="image" class="form-label">Cover</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5 mx-auto"  alt="">
                    <input type="file" class="form-control @error("image") is-invalid @enderror"  name="image" id="image" placeholder="Image" value="{{ $items->image }}">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="genre" class="form-control @error("genre") is-invalid @enderror" id="genre" placeholder="Genre"  required value="{{ ($items->genre) }}">
                    <label for="floatingInput">Genre</label>
                    @error('genre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="stock" class="form-control @error("stock") is-invalid @enderror" id="stock" placeholder="Stock Barang"  required value="{{ ($items->stock) }}">
                    <label for="floatingInput">Stock Barang</label>
                    @error('stock')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="alamat" class="form-control @error("alamat") is-invalid @enderror" id="alamat" placeholder="Alamat Rak Buku" required value="{{ ($items->alamat) }}">
                    <label for="floatingInput">Alamat Rak Buku</label>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="penerbit" class="form-control @error("penerbit") is-invalid @enderror" id="penerbit" placeholder="Penerbit" required value="{{ ($items->penerbit) }}">
                    <label for="floatingInput">Penerbit</label>
                    @error('penerbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="pengarang" class="form-control @error("pengarang") is-invalid @enderror" id="pengarang" placeholder="Pengarang" required value="{{ ($items->pengarang) }}">
                    <label for="floatingInput">Pengarang</label>
                    @error('pengarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="tPenerbit" class="form-control @error("tPenerbit") is-invalid @enderror" id="tPenerbit" placeholder="Tahun Penerbit" required value="{{ ($items->tPenerbit) }}">
                    <label for="floatingInput">Tahun Penerbit</label>
                    @error('tPenerbit')
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
