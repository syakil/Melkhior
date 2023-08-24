<!DOCTYPE html>
<html>
<head>
    <title>Data List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Data List</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nomor HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataList as $data)
                <tr>
                    <td>{{ $data->nomorhp }}</td>
                    <td><a href="{{ route('show', $data->id) }}" class="btn btn-primary">Lihat Data</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('create') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
