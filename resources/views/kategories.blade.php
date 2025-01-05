@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-4 text-center">Daftar Kategori</h1>
            @foreach($kategories as $kategori)
            <article class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/artikel?kategori={{ $kategori->link_kategori }}" class="text-primary text-decoration-none">
                            {{ $kategori->nama }}
                        </a>
                    </h3>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
@endsection
