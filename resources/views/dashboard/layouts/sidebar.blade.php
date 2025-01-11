<div class="sidebar border-end col-md-3 col-lg-2 p-0 bg-light">
  <div class="offcanvas-md offcanvas-start bg-white shadow-sm h-100" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title text-primary fw-bold" id="sidebarMenuLabel">
        <i class="bi bi-building"></i> Company Name
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-3 pt-lg-4 overflow-y-auto">
      <!-- Navigation Links -->
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 text-dark fw-semibold {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
            <i class="bi bi-house-door"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 text-dark fw-semibold {{ Request::is('dashboard/artikel') ? 'active' : '' }}" href="/dashboard/artikel">
            <i class="bi bi-file-earmark-text"></i> Artikel
          </a>
        </li>
        <li class="nav-item">
        </li>
      </ul>
    </div>
  </div>
</div>
