<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <!-- Brand / User Name -->
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white fw-bold" href="#">
    <i class="bi bi-person-circle"></i> {{ auth()->user()->nama }}
  </a>

  <!-- Search Bar and Toggle Buttons (Mobile) -->
  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <i class="bi bi-search"></i>
      </button>
    </li>
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
    </li>
  </ul>

  <!-- Search Bar (Desktop) -->
  <div id="navbarSearch" class="navbar-search w-100 collapse d-md-block">
    <input class="form-control w-100 rounded-0 border-0 bg-secondary text-white" type="text" placeholder="Search..." aria-label="Search">
  </div>

  <!-- Logout Button -->
  <ul class="navbar-nav ms-auto px-3">
    <li class="nav-item text-nowrap">
      <form action="/logout" method="post" class="mb-0">
        @csrf
        <button class="btn btn-sm btn-outline-light d-flex align-items-center gap-1" type="submit">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </form>
    </li>
  </ul>
</header>
