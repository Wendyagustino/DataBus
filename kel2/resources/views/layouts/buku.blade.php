<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }
        h1 {
            color: #343a40;
            margin-bottom: 30px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05); /* Efek zoom pada hover */
        }
        .card-img-top {
            height: 200px;
            object-fit: cover; /* Agar gambar rapi di dalam card */
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Rekomendasi Buku</h1>
        <div class="row">
            @foreach ($listBuku as $buku)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($buku->image) }}" class="card-img-top" alt="{{ $buku->judul_buku }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $buku->judul_buku }}</h5>
                            <p class="card-text text-muted">{{ $buku->sipnosis }}</p>
                            <p class="card-text"><strong>Penulis:</strong> {{ $buku->nama_penulis }}</p>
                            <p class="card-text"><strong>Penerbit:</strong> {{ $buku->nama_penerbit }}</p>
                            <p class="card-text"><strong>Rilis:</strong> {{ $buku->tgl_rilis }}</p>
                            <a href="/list_buku/{{ $buku->id }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
