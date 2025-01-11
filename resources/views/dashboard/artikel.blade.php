@extends('dashboard.layouts.main')

@section('main')

<div class="col-lg-8 mx-auto">
    <h1 class="mb-4 text-center fw-bold text-primary">Artikel Detail</h1>

    <!-- Kategori Artikel -->
    <p class="mb-3 text-muted text-center">
        Kategori: 
        <a href="/artikel?kategori={{ $artikel->kategori->link_kategori }}" class="text-decoration-none fw-semibold text-primary">
            {{ $artikel->kategori->nama }}
        </a>
    </p>

    <!-- Card Artikel -->
    <article class="card border-0 shadow-sm rounded-4">
        <img src="https://source.unsplash.com/random/800x400/?{{ $artikel->kategori->nama }}" 
             class="card-img-top rounded-top-4" 
             alt="{{ $artikel->kategori->nama }}" 
             style="height: 300px; object-fit: cover;">
        <div class="card-body p-4">
            <h3 class="card-title fw-bold text-center mb-3 text-dark">{{ $artikel->judul }}</h3>
            <h6 class="card-subtitle text-muted text-center mb-4">
                Ditulis oleh: 
                <a href="/artikel?penulis={{ $artikel->penulis->username }}" class="text-secondary text-decoration-none">
                    {{ $artikel->penulis->nama }}
                </a>
            </h6>
            <p class="card-text text-justify" style="line-height: 1.8; font-size: 1.1rem;">
                {{ $artikel->isi }}
            </p>
        </div>
    </article>

    <!-- Tombol Kembali -->
    <div class="mt-4 text-center">
        <a href="/dashboard/artikel" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
    </div>
</div>

@endsection
