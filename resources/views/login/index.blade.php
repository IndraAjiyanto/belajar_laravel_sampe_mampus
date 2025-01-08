@extends('layouts.main')

@section('content')

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
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
            <h3 class="mb-5">{{ $tittle }}</h3>

            <form action="/login" method="post">
              @csrf
            <div class="form-floating mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
              <label for="typeEmailX-2">Email</label>
            </div>

            <div class="form-floating mb-4">
              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
              <label for="typePasswordX-2">Password</label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            </form>
            <div class="text-center">
            <p>Not a member? <a href="/registrasi">Register</a></p>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>

@endsection

