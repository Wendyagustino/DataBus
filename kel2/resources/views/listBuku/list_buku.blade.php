<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Rekomendasi Buku</h1>
        <div class="row">
            @foreach ($listBuku as $buku)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($listBuku->image) }}" class="card-img-top" alt="{{ $listBuku->judul_buku }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $listBuku->judul_buku }}</h5>
                            <p class="card-text">{{ $listBuku->sipnosis }}</p>
                            <p class="card-text">Nama Penulis: {{ $listBuku->nama_penulis }}</p>
                            <p class="card-text">Nama Penerbit: {{ $listBuku->nama_penerbit }}</p>
                            <p class="card-text">tgl_rilis: {{ $listBuku->tgl_rilis }}</p>
                            <a href="/list_buku" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
