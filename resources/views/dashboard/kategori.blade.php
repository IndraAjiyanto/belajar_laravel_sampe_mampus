@extends('dashboard.layouts.main')

@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2 text-primary">Kategori</h1>
</div>

<!-- Notifikasi -->
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Tombol Tambah Artikel -->
<div class="mb-3">
    <a href="/dashboard/kategori/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Kategori
    </a>
</div>

<!-- Tabel Artikel -->
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategoris as $kategori)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="fw-bold">{{ $kategori->nama }}</td>
                        <td class="text-center">
                            <!-- Tombol Aksi -->
                            <a href="/dashboard/kategori/{{ $kategori->link_kategori }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> Lihat
                            </a>
                            <a href="/dashboard/kategori/{{ $kategori->link_kategori }}/edit" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="/dashboard/kategori/{{ $kategori->link_kategori }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection