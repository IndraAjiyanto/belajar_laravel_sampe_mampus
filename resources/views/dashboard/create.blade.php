@extends('dashboard.layouts.main')

@section('main')

<div class="col-lg-8 mx-auto">
    <h1 class="mb-4 text-center text-primary fw-bold">Buat Artikel Baru</h1>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="/dashboard/artikel" method="post">
                @csrf
                <!-- Judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul</label>
                    <input type="text" 
                           class="form-control @error('judul') is-invalid @enderror" 
                           id="judul" 
                           name="judul" 
                           value="{{ old('judul') }}" 
                           placeholder="Masukkan judul artikel">
                    @error('judul')
                        <div class="invalid-feedback text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Link -->
                <div class="mb-3">
                    <label for="link" class="form-label fw-semibold">Link</label>
                    <input type="text" 
                           readonly 
                           class="form-control @error('link') is-invalid @enderror" 
                           id="link" 
                           name="link" 
                           value="{{ old('link') }}" 
                           placeholder="Link otomatis dihasilkan">
                    @error('link')
                        <div class="invalid-feedback text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label for="kategori" class="form-label fw-semibold">Kategori</label>
                    <select class="form-select @error('kategori_id') is-invalid @enderror" id="kategori" name="kategori_id">
                        <option value="" selected disabled>Pilih kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                        <div class="invalid-feedback text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Isi -->
                <div class="mb-3">
                    <label for="isi" class="form-label fw-semibold">Isi</label>
                    <textarea class="form-control @error('isi') is-invalid @enderror" 
                              name="isi" 
                              id="isi" 
                              rows="5" 
                              placeholder="Tulis isi artikel">{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-pill px-5">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const judul = document.querySelector('#judul');
    const link = document.querySelector('#link');

    judul.addEventListener('change', function() {
        fetch('/dashboard/artikel/checkLink?judul=' + judul.value)
            .then(response => response.json())
            .then(data => link.value = data.link);
    });
</script>

@endsection
