@extends('layouts.dashboard')
@section('title')
    Dashboard - UserCreate
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/dashboard/buku">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
        </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header text-center">
            <h2>Tambah Buku</h2>
        </div>


        <div class="card-body">
            <form class="form-floating" action="/dashboard/buku" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <select class="form-select @error("kategoris_id") is-invalid @enderror" name="kategoris_id" id="kategoris_id" aria-label="Floating label select example" required" autofocus>
                        <option value="">Pilih Kategori</option>
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
                    <input type="text" name="judul" class="form-control @error("judul") is-invalid @enderror" id="judul" placeholder="Judul" autofocus required value="{{ old('judul') }}">
                    <label for="judul">Judul</label>
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea name="sinopsis" id="sinopsis" cols="" rows="4" class="form-control @error("sinopsis") is-invalid @enderror" placeholder="Sinopsis" required value="{{ old('sinopsis') }}" style="height: 100px" ></textarea>
                    <label for="username">Sinopsis</label>
                    @error("sinopsis")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Cover</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5 mx-auto" alt="">
                    <input type="file" class="form-control @error("image") is-invalid @enderror"  name="image" id="image" placeholder="Image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-floating mb-3">
                    <input type="text" name="genre" class="form-control @error("genre") is-invalid @enderror" id="genre" placeholder="Genre" autofocus required value="{{ old('genre') }}">
                    <label for="genre">Genre</label>
                    @error('genre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="stock" class="form-control @error("stock") is-invalid @enderror" id="stock" placeholder="Stock" autofocus required value="{{ old('stock') }}">
                    <label for="stock">Stock</label>
                    @error('stock')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="alamat" class="form-control @error("alamat") is-invalid @enderror" id="alamat" placeholder="Alamat" autofocus required value="{{ old('alamat') }}">
                    <label for="alamat">Alamat</label>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="penerbit" class="form-control @error("penerbit") is-invalid @enderror" id="penerbit" placeholder="Penerbit" autofocus required value="{{ old('penerbit') }}">
                    <label for="penerbit">Penerbit</label>
                    @error('penerbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="pengarang" class="form-control @error("pengarang") is-invalid @enderror" id="pengarang" placeholder="Pengarang" autofocus required value="{{ old('pengarang') }}">
                    <label for="pengarang">Pengarang</label>
                    @error('pengarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="tPenerbit" class="form-control @error("tPenerbit") is-invalid @enderror" id="tPenerbit" placeholder="Tahun Penerbit" autofocus required value="{{ old('tPenerbit') }}">
                    <label for="tPenerbit">Tahun Penerbit</label>
                    @error('tPenerbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



                <div class="d-flex justify-content-end">
                <button class="btn btn-dark mt-3" type="submit">Tambah</button>
                </div>
            </form>

        </div>

    </div>


</main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script>
    function myFunction() {
            var x = document.getElementById("Password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>



@endsection
