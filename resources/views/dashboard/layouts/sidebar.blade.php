

  <div class="d-flex flex-column flex-shrink-0 ps-3 pe-5 py-4 text-bg-dark" style="height:100vh">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      
      <span class="fs-4">Ours</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link text-white" aria-current="page">
          <i class="bi bi-house"></i>
          Home
        </a>
      </li>
      <li>
        <a href="/dashboard" class="nav-link text-white {{ Request::is('dashboard') ? 'bg-primary' : '' }}">
          <i class="bi bi-view-list"></i>
          Dashboard
        </a>
      </li>
      
      <li>
        <a href="/dashboard/products" class="nav-link text-white {{ Request::is('dashboard/products') ? 'bg-primary' : '' }}">
          <i class="bi bi-bag"></i>
          Products
        </a>
      </li>
      
    </ul>
    <hr>
    <div class="d-flex flex-column">
      <ul class="navbar-nav">
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 bg-danger border-0">Logout <i class="bi bi-box-arrow-right"></i></button>
        </form>
        </li>
        
      </ul>
    </div>
  </div>







  

