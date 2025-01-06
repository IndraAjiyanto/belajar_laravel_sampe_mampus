@extends('layouts.main')

@section('content')

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">{{ $tittle }}</h3>

            <form action="/registrasi" method="post">
              @csrf
            <div class="form-floating mb-4">
              <input type="text" name="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" value="{{ old('nama') }}"  />
              <label>Nama</label>
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-4">
              <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" value="{{ old('username') }}" />
              <label>Username</label>
              @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-4">
              <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" />
              <label>Email</label>
              @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-4">
              <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" />
              <label>Password</label>
              @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            </form>
        </div>
        </div>
      </div>
    </div>
  </div>

@endsection

