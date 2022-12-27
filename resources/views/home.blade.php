
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
            height: 100vh;
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
     <body>
        <nav class="container-fluid navbar-expand d-flex justify-content-between py-2 fixed-top">
        
            <ul class="navbar-nav">
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="/"><i class="bi bi-alexa"></i> Ours</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('products') ? 'text-white' : '' }}" href="/products">| <i class="bi bi-bag-fill"></i></a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('cart') ? 'text-white' : '' }}" href="/cart"><i class="bi bi-cart-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('orders') ? 'text-white' : '' }}" href="/orders"><i class="bi bi-bell-fill"></i></a>
                </li>
            </ul>
        
        <div class="dropdown">
          <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person"></i>
        </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item">{{ auth()->user()->username }}</a></li>
              <hr>
              <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </div>
      </nav>

      {{-- carousel --}}

      <div>
        <div class="wrapper d-flex justify-content-center align-items-center text-light" style="height: 100vh">
            <div>
                <h3>Ours.</h3>
                <hr>
                <p>Ngapain Dibikin Ribet, Kan Ada Kita Disini!</p>
            </div>
        </div>
      </div>
      
    
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     </body>
   </html>
   
   
