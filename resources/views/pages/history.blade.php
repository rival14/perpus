@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<main>
  <section class="py-5 text-center container-fluid border border-5 border-dark-subtle img-responsive img-thumbnail opacity-20" style="background-image: url('{{url('img/1.jpeg')}}')">

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
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Alamat Rak</th>
                    <th scope="col">Dari</th>
                    <th scope="col">Sampai</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $i => $item)
                    <tr>
                        <th scope="row">{{$i + 1}}</th>
                        <td>{{$item->order_number}}</td>
                        <td>{{$item->buku->judul}}</td>
                        <td>{{$item->buku->alamat}}</td>
                        <td>{{$item->from}}</td>
                        <td>{{$item->to}}</td>
                        <td>{{$item->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-end mt-3">
            {{ $items->links() }}
      </div>


    </div>
  </div>

</main>
@endsection
