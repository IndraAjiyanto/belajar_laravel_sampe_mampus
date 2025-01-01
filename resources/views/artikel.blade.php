@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-4 text-center fw-bold">Single Artikel</h1>
            
            <p class="mb-3 text-muted text-center">
                Kategori: 
                <a href="/kategori/{{ $artikel->kategori->link_kategori }}" class="text-primary text-decoration-none fw-semibold">
                    {{ $artikel->kategori->nama }}
                </a>
            </p>
            
            <article class="card shadow-lg border-0">
                <img src="https://source.unsplash.com/random/800x400/?{{ $artikel->kategori->nama }}" 
                     class="card-img-top" 
                     alt="{{ $artikel->kategori->nama }}" 
                     style="height: 300px; object-fit: cover;">
                
                <div class="card-body">
                    <h3 class="card-title fw-bold text-center mb-3">{{ $artikel->judul }}</h3>
                    
                    <h6 class="card-subtitle text-muted text-center mb-4">
                        Ditulis oleh: 
                        <a href="/penulis/{{ $artikel->penulis->username }}" class="text-secondary text-decoration-none">
                            {{ $artikel->penulis->nama }}
                        </a>
                    </h6>
                    
                    <p class="card-text text-justify" style="line-height: 1.8;">
                        {{ $artikel->isi }}
                    </p>
                </div>
            </article>
            
            <div class="mt-4 text-center">
                <a href="/artikel" class="btn btn-outline-secondary rounded-pill px-4">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
