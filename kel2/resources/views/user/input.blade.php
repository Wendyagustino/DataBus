@extends('layout.app') <!-- Menggunakan template layout utama -->

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Anggota</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Anggota</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Form Tambah Anggota
        </div>
        <div class="card-body">
            <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                @csrf <!-- Token CSRF untuk keamanan -->
                <div class="form-group mt-1 mb-3">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama') }}">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas"
                        value="{{ old('kelas') }}">
                    <span class="text-danger">{{ $errors->first('kelas') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="nim">nim</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                        value="{{ old('nim') }}">   
                    <span class="text-danger">{{ $errors->first('nim') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="foto">foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                        name="foto" value="{{ old('foto') }}">
                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="laki-laki"
                        {{ old('jenis_kelamin') === 'laki-laki' ? 'checked' : '' }}>
                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"
                        {{ old('jenis_kelamin') === 'perempuan' ? 'checked' : '' }}>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/anggota') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
