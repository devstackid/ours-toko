@extends('dashboard.layouts.main')

@section('container')

    <div class="row my-5">
        @if ($product->image)
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="gambar" class="card-img">
            </div>
        </div>
        @endif
        
        <div class="col-lg-7">
            <h1 class="mb-2 mt-4">{{ $product->nama_produk }}</h1>

            <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></span></a>

            <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger border-0" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="bi bi-trash"></i></button>
            </form>
            <p class="text-muted text-capitalize lh-base">{{ $product->deskripsi_produk }}</p>
            <h3 class="mb-3">IDR. {{ $product->harga_produk }},00</h3>
            <button class="btn btn-outline-danger">{{ $product->category->nama_kategori }}</button>
            <button class="btn btn-outline-primary">{{ $product->catalogue->nama_katalog }}</button>
             
        </div>
    </div>

@endsection