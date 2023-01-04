@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')



    <div class="row justify-content-center my-5">
    <div class="col-lg-5">
        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <main class="form-registration w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Registrasion Form</h1>
          <form action="{{ route('register-confirm') }}" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error("name") is-invalid @enderror" id="name" placeholder="Name" required value="{{ old("name") }}">
              <label for="name">Name</label>
              @error("name")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="text" name="username" class="form-control @error("username") is-invalid @enderror" id="username" placeholder="UserName" required value="{{ old("username") }}">
              <label for="username">Username</label>
              @error("username")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <select class="form-select @error("jKelamin") is-invalid @enderror" name="jKelamin" id="jKelamin" aria-label="Floating label select example" required value="{{ old("jKelamin") }}">
                <option selected>Pilih Jenis Kelamin</option>
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

            <div class="form-floating">
              <textarea name="alamat" id="alamat" cols="" rows="4" class="form-control @error("alamat") is-invalid @enderror" placeholder="Alamat" required value="{{ old('alamat') }}" style="height: 100px" ></textarea>
              <label for="username">Alamat</label>
              @error("alamat")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="date" name="tLahir" class="form-control @error("tLahir") is-invalid @enderror" id="tLahir" placeholder="Tempat Tanggal Lahir" required value="{{ old("tLahir") }}">
              <label for="username">Tempat Tanggal Lahir</label>
              @error("tLahir")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="number" name="telp" class="form-control @error("telp") is-invalid @enderror" id="telp" placeholder="Tempat Tanggal Lahir" required value="{{ old("telp") }}">
              <label for="username">Nomor Telephone</label>
              @error("telp")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old("email") }}">
              <label for="email">Email address</label>
              @error("email")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error("password") is-invalid @enderror" id="Password" placeholder="Password" required>
              <input type="checkbox" onclick="myFunction()"><span class="text-muted">Tampilkan Password</span>
              <label for="floatingPassword">Password</label>
              @error("password")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Already Registed? <a href="{{ route('login') }}">Login Now!</a></small>
        </main>
    </div>
</div>

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
