<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-primary" href="#">
      <i class="bi bi-hexagon-fill text-primary me-2"></i>MyWebsite
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' : ''}}" href="/home">
            <i class="bi bi-house-door me-1"></i>Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' : ''}}" href="/about">
            <i class="bi bi-info-circle me-1"></i>About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'artikel') ? 'active' : ''}}" href="/artikel">
            <i class="bi bi-file-earmark-text me-1"></i>Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'kategori') ? 'active' : ''}}" href="/kategori">
            <i class="bi bi-tags me-1"></i>Kategori
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'penulis') ? 'active' : ''}}" href="/penulis">
            <i class="bi bi-people me-1"></i>Penulis
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle me-1"></i>{{ auth()->user()->nama }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2 me-1"></i>Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
              @csrf
              <li>
                <button class="dropdown-item text-danger" type="submit">
                  <i class="bi bi-box-arrow-right me-1"></i>Log out
                </button>
              </li>
            </form>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'login') ? 'active' : ''}}" href="/login">
            <i class="bi bi-box-arrow-in-right me-1"></i>Login
          </a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
