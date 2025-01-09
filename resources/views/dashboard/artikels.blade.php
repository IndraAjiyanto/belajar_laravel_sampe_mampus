@extends('dashboard.layouts.main')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Artikel {{ auth()->user()->nama }}</h1>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Isi</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikels as $artikel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $artikel->judul }}</td>
                            <td>{{ $artikel->kategori->nama }}</td>
                            <td>{{ Str::limit($artikel->isi, 50, '...') }}</td>
                            <td class="text-center">
                                <a href="/dashboard/artikel/{{ $artikel->link }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-eye"></i> Lihat
                                </a>
                                <a href="/dashboard/artikel/{{ $artikel->link }}/edit" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="/dashboard/artikel/{{ $artikel->link }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus artikel ini?')">
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
</main>
@endsection
