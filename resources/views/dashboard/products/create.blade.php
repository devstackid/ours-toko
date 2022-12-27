@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Product</h1>
  </div>

  <div class="col-lg-8">
    <form method="post" action="/dashboard/products" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama_produk" class="form-label">Nama Produk</label>
          <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" required>
          @error('nama_produk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="catalogue" class="form-label">Katalog</label>
            <select class="form-select" name="catalogue_id">
                @foreach($catalogues as $catalogue)
                <option value="{{ $catalogue->id }}">{{ $catalogue->nama_katalog }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Masukkan Gambar</label>
            <img class="img-preview img-fluid">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
          </div>

        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk" value="{{ old('deskripsi_produk') }}" required>
        </div>

        <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="{{ old('harga_produk') }}" required placeholder="IDR.">
        </div>
          
        <button type="submit" class="btn btn-primary">Add</button>
      </form> 
  </div>

  <script>

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }

    }
  </script>
@endsection