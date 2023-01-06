@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<main>
  <section class="py-5 text-center container-fluid border border-5 border-dark-subtle img-responsive img-thumbnail opacity-20" style="background-image: url('img/1.jpeg')">

    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto" id="home">
        <h1 class="text-white">Perpustakaan</h1>
        <p class="lead text-white font-weight-bold">Perpustakaan adalah tempat dimana setiap orang dapat menemukan sesuatu yang menginspirasi. Selamat datang di perpustakaan kami, tempat menemukan inspirasi melalui bacaan.</p>
        <p>
          <a href="#" class="btn btn-warning my-2">Get Started</a>

        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach ($items as $item)
        <div class="col">
          <div class="card text-bg-dark ">
            <a href="{{ route('order', $item->slug) }}"><img src="{{ asset("storage/" . $item->image) }}" class="card-img-top img-fluid" style="max-height: 500px"></a>
            <a href="{{ route('order', $item->slug) }}" class="text-decoration-none text-white"><div class="card-header text-center c-judul"><h3>{{ $item->judul }}</h3></div></a>
            <div class="card-body isi-body">
                <h5 class="card-title">Jenis : {{ $item->genre }}  </h5>
                <h5 class="card-title">Genre : {{ $item->kategori->name }}</h5>
              <p class="card-text">{{ $item->excerpt }}</p>
              <div class="d-flex justify-content-end pt-2">
                <small class="text">{{ $item->stock }}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center mt-5">
            <a class="btn btn-danger btn-lg " href="#home" role="button">Lihat Selengkapnya</a>
      </div>


    </div>
  </div>

</main>
@endsection
