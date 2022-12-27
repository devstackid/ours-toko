@extends('users.layouts.main')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap pt-3 pb-2 mb-3">
<div class="pt-3 pb-2 pe-5 mb-3 text-white">
    <h1 class="h2">Edit Profile</h1>
  </div>

  <div class="col-lg-4">
    <form method="post" action="{{ route('profile.update') }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', Auth::user()->username) }}" required>
          @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">No.Telpon</label>
            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
            @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Masukkan Gambar</label>
            <input type="hidden" name="oldImage" value="{{ auth()->user()->image }}">
            
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
          </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">No.Telpon</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', Auth::user()->alamat) }}">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
          
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form> 
  </div>
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