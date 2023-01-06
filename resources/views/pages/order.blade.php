@extends('layouts.app')

@section('name')
    Order
@endsection



@section('content')

<main>
    <div class="container my-5 ">
        <div class="row row-cols-1  d-flxe justify-content-center">
        <div class="col-8">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Your Order</h1>
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <table class="table table-borderless text-center mt-5">
                            <thead>
                                <tr>
                                    <th>Buku</th>
                                    <th>Judul</th>
                                    <th>Alamat Buku</th>
                                    <th>Durasi Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <input type="hidden" class="form-control mr-sm-2" name="buku_id" value="{{$items->id}}" required>
                                <input type="hidden" class="form-control mr-sm-2" name="user_id" value="{{auth()->user()->id}}" required>
                                <tr class="align-middle">
                                    <th>
                                        <img src="{{ asset("storage/" . $items->image) }}" class="card-img-top img-fluid img-thumbnail gambar3" alt=" " style="; overflow:hidden;">
                                    </th>
                                    <th>{{ $items->judul }}</th>
                                    <th>{{ $items->alamat }}</th>
                                    <th>
                                        <input type="date" class="form-control mr-sm-2" name="from" id="pinjam"  required>
                                        TO
                                        <input type="date" class="form-control mb-2 mr-sm-2" name="to" id="balik"  required>
                                    </th>
                                </tr>
                            </tbody>
                        </table>

                        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Order Now</button>
                    </form>

            </div>
            </div>
        </div>
        </div>
</main>

@endsection
