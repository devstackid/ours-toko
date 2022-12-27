<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ours | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-fluid bg-light" style="height: 100vh">
        <div class="wrapper d-flex align-items-center justify-content-center" style="height: 100vh; width:100%">
            <div class="col-lg-5">
                <h1>Welcome To Ours</h1>
                <p class="lead text-muted">Harap Login Untuk Melanjutkan.</p>
            </div>
            <div class="row-lg-4">

              @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

                <button type="button" class="btn btn-primary px-2 ms-2 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Login
                </button>
                |
                <button type="button" class="btn btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#staticRegisterBackdrop">
                    Register
                </button>
            </div>
        </div>
        
        
    </div>



  <!-- Modal Login -->
  <div class="modal modal-sm fade border-0" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog border-0 modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-header justify-content-center border-bottom-0">
          <h1 class="modal-title my-2 fs-3 fw-bold" id="staticBackdropLabel">Login</h1>
        </div>
        <div class="modal-body">
          <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}" autocomplete="off">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating mt-1 mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
          
              
              <button class="w-40 btn btn-primary" type="submit">Sign in</button>
              <button class="w-40 btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#staticRegisterBackdrop">Register</button>
              
            </form>
          </main>
        </div>
      </div>
    </div>
  </div>


    <!-- Modal Register -->
    <div class="modal modal-sm fade border-0" id="staticRegisterBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-center">
              <h1 class="modal-title fs-4 fw-bold mt-3 mb-2" id="staticBackdropLabel">Sign Up</h1>
            </div>
            <div class="modal-body">
              <main class="form-signin w-100 m-auto">

                <form action="/register" method="post">
                    @csrf
                  <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="off">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" required autocomplete="off">
                    <label for="phone">Telp.</label>
                    @error('phone')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating mt-1 mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  
                  <button class="w-40 btn btn-danger" type="submit">Sign Up</button>
                  <button class="w-40 btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</button>
                  
                </form>
              </main>
            </div>
            
          </div>
        </div>
      </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>