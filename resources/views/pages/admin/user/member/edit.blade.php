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
            <li class="breadcrumb-item" aria-current="page"><a href="/dashboard/user-member">Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Member</li>
        </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header text-center">
            <h2>Member</h2>
        </div>
        <div class="card-body">
            <form class="form-floating" action="/dashboard/user-member/{{ $users->id }}" method="post">
                @method("PUT")
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" id="name" placeholder="Nama" autofocus required value="{{ ($users->name) }}">
                    <label for="floatingInput">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control @error("username") is-invalid @enderror" id="username" placeholder="Username"  required value="{{ ($users->username) }}">
                    <label for="floatingInput">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select @error("jKelamin") is-invalid @enderror" name="jKelamin" id="jKelamin" aria-label="Floating label select example" required">
                        <option value="{{ ($users->jKelamin) }}">{{ ($users->jKelamin) }}</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <label for="jKelamin">Jenis Kelamin</label>
                    @error("jKelamin")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea name="alamat" id="alamat" cols="2" rows="4" class="form-control @error("alamat") is-invalid @enderror" placeholder="Alamat" required>{{ ($users->alamat) }}</textarea>
                    <label for="username">Alamat</label>
                    @error("alamat")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="tLahir" class="form-control @error("tLahir") is-invalid @enderror" id="tLahir" placeholder="Tempat Tanggal Lahir" required value="{{ ($users->tLahir) }}">
                    <label for="username">Tempat Tanggal Lahir</label>
                    @error("tLahir")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="telp" class="form-control @error("telp") is-invalid @enderror" id="telp" placeholder="Nomor Telephone"  required value="{{ ($users->telp) }}">
                    <label for="floatingInput">Nomor Telephone</label>
                    @error('telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="email" placeholder="Email" required value="{{ ($users->email) }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error("password") is-invalid @enderror" id="Password" placeholder="Password"  required">
                    <label for="floatingInput">Password</label>
                    <input type="checkbox" class="mt-3 ms-1" onclick="myFunction()"><span class="text-muted text-align-center"> Tampilkan Password</span>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                <button class="btn btn-dark mt-3" type="submit">Ubah Member</button>
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
