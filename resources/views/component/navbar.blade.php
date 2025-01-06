<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' : ''}}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'artikel') ? 'active' : ''}}" href="/artikel">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'kategori') ? 'active' : ''}}" href="/kategori">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'penulis') ? 'active' : ''}}" href="/penulis">Penulis</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link {{ ($active === 'login') ? 'login' : ''}}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>