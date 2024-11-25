@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3>List Buku</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                    <img src="{{ asset('storage/'.$listBuku->foto) }}" alt="Foto {{ $listBuku->judul_buku }}" class="rounded-circle img-thumbnail" width="300">
                    </div>
                    <h4 class="text-center">Judul Buku: <strong>{{ $listBuku->judul_buku }}</strong></h4>
                    <p class="text-center text-muted">Sipnosis: {{ $listBuku->sipnosis }}</p>
                    <p class="text-center text-muted">Nama Penulis: {{ $listBuku->nama_penulis }}</p>
                    <p class="text-center text-muted">Nama Penerbit: {{ $listBuku->nama_penerbit }}</p>
                    <p class="text-center text-muted">Tanggal Rilis: {{ $listBuku->tgl_rilis }}</p>
                    <p class="text-center text-muted">Halaman: {{ $listBuku->halaman }}</p>
                    <p class="text-center text-muted">Gambar Buku: {{ $listBuku->foto }}</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">Kembali ke Beranda</a>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $listBuku->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
