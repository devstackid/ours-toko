<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ours | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
      body {
          background: linear-gradient(45deg, #f22613, #ff4848, #ec38a4, #5868ec, #f54e80, #f7ca18, #d2527f);
          background-size: 500% 500%;
          width: 100%;
          animation: move 20s ease infinite;
      }
      @keyframes move {
          0%{background-position:0% 50%}
          50%{background-position:100% 50%}
          100%{background-position:0% 50%}
      }

      @keyframes fade{
          to{
              opacity: 1;
          }
      }

      .fade {
          opacity: 0;
          animation: 0.5s fade forwards;
      }
    </style>
  </head>
  <body class="py-5">
    
    <div class="container rounded shadow-lg py-5 px-5 position-relative">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="card">
                  @if ($product->image)
        
                <img src="{{ asset('storage/' . $product->image) }}" alt="gambar" class="card-img">
                  @endif
                    
                </div>
            </div>
            <div class="col-lg-7">
                <h1 class="mb-4 mt-4 text-white">{{ $product->nama_produk }}</h1>
                <p class="text-white text-capitalize lh-base">{{ $product->deskripsi_produk }}</p>
                <h3 class="text-white mb-5">IDR. {{ $product->harga_produk }},00</h3>

                <label for="range" class="text-white">Jumlah</label>
                <input type="number" name="range" id="range" class="border-0 col-lg-2">
                <label for="size" class="text-white ms-2">Size</label>
                <input type="text" name="size" id="size" placeholder="L" class="border-0 col-lg-1"><br><br>  
                
                <button class="btn btn-dark mt-4"><i class="bi bi-bag-plus"></i> | Masukkan Keranjang</button>
                <button class="btn btn-light mt-4"><i class="bi bi-heart"></i> | Suka</button>
                
                <a href="/products" class="btn text-white position-absolute top-0 end-0"><i class="bi bi-x-lg"></i></a>    
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

