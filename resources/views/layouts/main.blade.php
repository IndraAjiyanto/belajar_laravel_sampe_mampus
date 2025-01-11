<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $tittle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <style>
    .navbar-nav .nav-link {
  transition: color 0.3s ease, transform 0.3s ease;
}
.navbar-nav .nav-link:hover {
  color: #0d6efd;
  transform: scale(1.05);
}
.navbar-brand {
  transition: transform 0.3s ease;
}
.navbar-brand:hover {
  transform: rotate(-5deg);
}

.btn-primary:hover {
  background-color: #0056b3;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  transform: scale(1.02);
}

.form-control:focus {
  border-color: #0d6efd;
  box-shadow: 0px 0px 8px rgba(13, 110, 253, 0.5);
}


  </style>
  <body>
    @include('component.navbar')
  <div class="container">
    @yield('content')
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>