<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A modern dashboard template built with Bootstrap 5.">
  <meta name="author" content="Your Name">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Dashboard · Bootstrap 5</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Custom CSS -->
  <link href="/css/dashboard.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico">

  <style>
    .nav-link.active {
  background-color: #0d6efd;
  color: #fff !important;
  border-radius: 0.5rem;
}
.card-title {
  font-size: 1.1rem;
  color: #6c757d;
}
.table-primary th {
  color: #fff;
}
.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}

.btn-outline-warning:hover {
    background-color: #ffc107;
    color: black;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    color: white;
}
.btn-primary:hover {
    background-color: #0d6efd;
    box-shadow: 0px 4px 12px rgba(13, 110, 253, 0.4);
}




  </style>
</head>
<body>

  <!-- Header -->
  @include('dashboard.layouts.header')

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      @include('dashboard.layouts.sidebar')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('main')
      </main>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Custom JS -->
  <script src="/js/dashboard.js"></script>
</body>
</html>
