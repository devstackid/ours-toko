@extends('dashboard.layouts.main')

@section('container')
<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Products</h1>
</div>

<div class="table-responsive">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Add New Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">Kategori</th>
          <th scope="col">Katalog</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $product->nama_produk }}</td>
          <td>{{ $product->harga_produk }}</td>
          <td>{{ $product->category->nama_kategori }}</td>
          <td>{{ $product->catalogue->nama_katalog }}</td>
          <td>
            <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>

            <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></span></a>

            <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection