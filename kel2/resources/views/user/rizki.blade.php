@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3>Profil Anggota</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="{{ \Storage::url($item->foto) }}" 
                             alt="Foto {{ $anggota->nama }}" 
                             class="rounded-circle img-thumbnail" 
                             width="150">
                    </div>
                    <h4 class="text-center">Nama: <strong>{{ $anggota->nama }}</strong></h4>
                    <p class="text-center text-muted">Kelas: {{ $anggota->kelas }}</p>
                    <p class="text-center text-muted">NIM: {{ $anggota->nim }}</p>
                    <p class="text-center text-muted">Jenis Kelamin: {{ ucfirst($anggota->jenis_kelamin) }}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
