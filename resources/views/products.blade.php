@extends('layouts.main')

@section('container')

<main>
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Welcome, <span class="fw-semibold text-light">{{ auth()->user()->username }}</span></h1>
          <p class="lead text-white">Temukan Berbagai Produk Fashion Dari Kami Dengan Penawaran Harga Menarik Dan Pastinya Dengan Produk Yang Berkualitas.</p>
          <p>
            @foreach ($categories as $category)
                <a href="/categories/{{ $category->slug }}" class="btn btn-light my-2 px-5">{{ $category->nama_kategori }}</a>
            @endforeach
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
            @foreach ($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                <img src="{{ $product->image }}" alt="gambar" class="card-img-top p-1">
    
                <div class="card-body">
                    <p class="card-title mb-3 fs-5 fw-semibold"><a href="/products/{{ $product->slug }}" class="text-decoration-none text-dark">{{ $product->nama_produk }}</a></p>
                    <h3 class="card-text text-danger">IDR. {{ $product->harga_produk }}</h3>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-primary" >Lihat</button>
                        <button type="button" class="btn btn-sm btn-outline-danger">Beli Sekarang</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  
  </main>


@endsection
