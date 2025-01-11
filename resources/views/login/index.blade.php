@extends('layouts.main')

@section('content')

<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-lg border-0" style="border-radius: 1rem; background: linear-gradient(145deg, #ffffff, #f4f4f4);">
        <div class="card-body p-5 text-center">
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <h3 class="mb-4 text-primary fw-bold">{{ $tittle }}</h3>

          <form action="/login" method="post">
            @csrf
            <div class="form-floating mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" placeholder="Email" required />
              <label for="typeEmailX-2"><i class="bi bi-envelope me-1"></i>Email</label>
            </div>

            <div class="form-floating mb-4">
              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" placeholder="Password" required />
              <label for="typePasswordX-2"><i class="bi bi-lock me-1"></i>Password</label>
            </div>

            <button class="btn btn-primary btn-lg btn-block w-100 rounded-pill" type="submit">
              <i class="bi bi-box-arrow-in-right me-1"></i>Login
            </button>
          </form>

          <div class="text-center mt-4">
            <p class="mb-1">Not a member? <a href="/registrasi" class="text-decoration-none fw-semibold text-primary">Register</a></p>
            <a href="#" class="small text-muted">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
