@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product</h1>
  </div>

  <div class="col-lg-8">
    <form method="post" action="/dashboard/products/{{ $product->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nama_produk" class="form-label">Nama Produk</label>
          <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $product->nama_produk) }}" required>
          @error('nama_produk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $product->slug) }}">
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
                @if (old('category_id', $product->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                @endif
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="catalogue" class="form-label">Katalog</label>
            <select class="form-select" name="catalogue_id">
                @foreach($catalogues as $catalogue)
                @if (old('catalogue_id', $product->catalogue_id) == $catalogue->id)
                <option value="{{ $catalogue->id }}" selected>{{ $catalogue->nama_katalog }}</option>
                @endif
                <option value="{{ $catalogue->id }}">{{ $catalogue->nama_katalog }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Masukkan Gambar</label>
          <input type="hidden" name="oldImage" value="{{ $product->image }}">
          @if ($product->image)
          <img src="{{ asset('storage/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
          @error('image')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk" value="{{ old('deskripsi_produk', $product->deskripsi_produk) }}" required>
        </div>

        <div class="mb-3">
            <label for="harga_produk" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="{{ old('harga_produk', $product->harga_produk) }}" required>
        </div>
          
        <button type="submit" class="btn btn-primary">Update Product</button>
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