@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center">{{ $tittle }}</h1>
    @if($artikels->count())
    <div class="row">
        @foreach($artikels as $artikel)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="https://source.unsplash.com/random/400x300/?{{ $artikel->kategori->nama }}" 
                     class="card-img-top" 
                     alt="{{ $artikel->kategori->nama }}" 
                     style="height: 200px; object-fit: cover;">
                
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/artikel/{{ $artikel->link }}" 
                           class="text-primary text-decoration-none">
                           {{ $artikel->judul }}
                        </a>
                    </h5>
                    <p class="card-text text-truncate" style="max-height: 3.6em; overflow: hidden;">
                        {{ $artikel->isi }}
                    </p>
                    <p class="card-subtitle text-muted mb-2">
                        Ditulis oleh: 
                        <a href="/penulis/{{ $artikel->penulis->username }}" 
                           class="text-secondary">
                           {{ $artikel->penulis->nama }}
                        </a>
                    </p>
                    <p class="card-subtitle text-muted">
                        Kategori: 
                        <a href="/kategori/{{ $artikel->kategori->link_kategori }}" 
                           class="text-secondary">
                           {{ $artikel->kategori->nama }}
                        </a>
                    </p>
                </div>
                
                <div class="card-footer bg-light d-flex justify-content-between">
                    <a href="/artikel/{{ $artikel->link }}" class="btn btn-sm btn-primary">
                        Baca Selengkapnya
                    </a>
                    <small class="text-muted">{{ $artikel->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-center fs-4">Tidak Bisa Menemukan Artikel</p>
    @endif
</div>
@endsection
