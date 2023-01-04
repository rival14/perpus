@extends('layouts.dashboard')
@section('title')
    Dashboard - Kategori, Create
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/dashboard/buku">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
        </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header text-center">
            <h2>Tambah Kategori</h2>
        </div>


        <div class="card-body">
            <form class="form-floating" action="/dashboard/kategori" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" id="name" placeholder="Kategori" autofocus required value="{{ old('name') }}">
                    <label for="floatingInput">Masukan Kategori Baru</label>
                    @error('name')
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
