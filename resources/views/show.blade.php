<!DOCTYPE html>
<html>
<head>
    <title>Data Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Data Detail</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nomor HP: {{ $data->nomorhp }}</h5>
                <p class="card-text"><strong>Nama:</strong> {{ $data->nama }}</p>
                <p class="card-text"><strong>Tinggi Badan:</strong> {{ $data->tinggi_badan }}</p>
                <p class="card-text"><strong>Berat Badan:</strong> {{ $data->berat_badan }}</p>
                <p class="card-text"><strong>Kategori:</strong> {{ $kategori }}</p>
            </div>
        </div>

        <a href="{{ route('index') }}" class="btn btn-secondary mt-2">Kembali ke Data List</a>

        <a href="{{ route('edit',$data->id) }}" class="btn btn-danger mt-2">Edit</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
