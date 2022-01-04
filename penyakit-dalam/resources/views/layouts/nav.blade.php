<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Pakar Penyakit Dalam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is("/")? "active": "" }} " aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is("konsultasi")? "active": "" }}" aria-current="page" href="/konsultasi">Konsultasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is("about")? "active": "" }}" aria-current="page" href="/about">Tentang</a>
        </li>
      </ul>
      @auth
        <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hai, {{ auth()->user()->nama_depan }} <i class="bi bi-person-circle ms-1"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <form method="post" action="/logout">
                @csrf
                <li class="dropdown-item"><button type="submit" class="bg-transparent border-0">Logout</button></li>
              </form>
          </ul>
        </li>
    </ul>    
      @else
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item"><a class="nav-link {{ Request::is("login")? "active": "" }}" href="/login">Login</a></li>
          <li class="nav-item"><a class="nav-link {{ Request::is("register")? "active": "" }}" href="/register">Register</a></li>
        </ul>
      @endauth
    </div>
  </div>
</nav>