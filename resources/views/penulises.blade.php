@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-4 text-center">Daftar Penulis</h1>
            @foreach($penulises as $penulis)
            <article class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/artikel?penulis={{ $penulis->username }}" class="text-primary text-decoration-none">
                            {{ $penulis->nama }}
                        </a>
                    </h3>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
@endsection
