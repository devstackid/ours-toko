@extends('layouts.main')

@section('container')


<main>
    <div class="album">
        <div class="container">
          <div class="col-lg-8">
            <p class="lead text-muted">Semua Katalog</p>
            <p>
                @foreach ($catalogues as $catalogue)
                <a href="/catalogues/{{ $catalogue->slug }}" class="btn btn-outline-danger my-2">{{ $catalogue->nama_katalog }}</a>
            @endforeach
            </p>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              
              @foreach ($products as $product)
              <div class="col">
                  <div class="card shadow-sm">
                  <img src="/{{ $product->image }}" alt="gambar" class="card-img-top">
      
                  <div class="card-body">
                      <h5 class="card-title"><a href="/products/{{ $product->slug }}" class="text-decoration-none">{{ $product->nama_produk }}</a></h5>
                      <p class="card-text">{!! $product->deskripsi_produk !!}</p>
                      <h3 class="card-text">IDR. {{ $product->harga_produk }}</h3>
                      <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
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