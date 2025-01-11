@extends('layouts.main')

@section('content')

<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-lg border-0" style="border-radius: 1rem; background: linear-gradient(145deg, #ffffff, #f7f7f7);">
        <div class="card-body p-5 text-center">
          <h3 class="mb-5 text-primary fw-bold">{{ $tittle }}</h3>

          <form action="/registrasi" method="post">
            @csrf

            <!-- Nama Input -->
            <div class="form-floating mb-4">
              <input type="text" name="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" placeholder="Nama" value="{{ old('nama') }}" />
              <label><i class="bi bi-person me-1"></i>Nama</label>
              @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Username Input -->
            <div class="form-floating mb-4">
              <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" />
              <label><i class="bi bi-person-badge me-1"></i>Username</label>
              @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Email Input -->
            <div class="form-floating mb-4">
              <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" />
              <label><i class="bi bi-envelope me-1"></i>Email</label>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Password Input -->
            <div class="form-floating mb-4">
              <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" />
              <label><i class="bi bi-lock me-1"></i>Password</label>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Submit Button -->
            <button class="btn btn-primary btn-lg btn-block w-100 rounded-pill" type="submit">
              <i class="bi bi-box-arrow-in-right me-1"></i>Register
            </button>
          </form>

          <div class="text-center mt-4">
            <p class="mb-1">Already have an account? <a href="/login" class="text-decoration-none fw-semibold text-primary">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
