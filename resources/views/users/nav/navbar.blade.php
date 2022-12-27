
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
            <i class="bi bi-person-fill"></i>
        </a>
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/user">Account</a></li>
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

  <div class="container mt-5">
    <br>
    <br>
  </div>

