<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Koleksi Buku</title>
</head>
<body>

    <h2>Daftar Buku Perpustakaan</h2>

    <ul>
        @foreach ($data_buku as $buku)
            <li>{{ $buku }}</li>
        @endforeach
    </ul>

</body>
</html>