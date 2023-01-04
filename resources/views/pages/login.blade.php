@extends('layouts.app')

@section('name')
    Login
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row justify-content-center my-5">
    <div class="col-md-4">
        @if(session()->has("berhasil"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session("berhasil") }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has("loginError"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session("loginError") }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old("email") }}">
              <label for="email">Email address</label>
              @error("email")
                <div class="div invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="password" name ="password" class="form-control" id="password" placeholder="Password">
              <label for="password" required>Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Not Registered? <a href="{{ route('register') }}">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection
