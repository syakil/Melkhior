<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Data</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('update', $data->id) }}">
            @csrf
            <div class="form-group">
                <label for="nomorhp">Nomor HP:</label>
                <input type="text" name="nomorhp" class="form-control" value="{{ $data->nomorhp }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
            </div>
            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan:</label>
                <input type="number" name="tinggi_badan" class="form-control" value="{{ $data->tinggi_badan }}" required>
            </div>
            <div class="form-group">
                <label for="berat_badan">Berat Badan:</label>
                <input type="number" name="berat_badan" class="form-control" value="{{ $data->berat_badan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
