<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>
<body>

    <h1>Profil Mahasiswa</h1>

    <p>
        Nama Mahasiswa yang Anda cari adalah:
        <strong>{{ $nama_mhs }}</strong>
    </p>

    <p>
        NIM Mahasiswa:
        <strong>{{ $nim_mhs }}</strong>
    </p>

    <a href="/dosen">⬅ Kembali ke Daftar Dosen</a>

</body>
</html>