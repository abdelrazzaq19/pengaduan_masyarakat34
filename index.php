<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Pengaduan Masyarakat</h1>
    <form action="submit.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="isi">Isi Pengaduan:</label><br>
        <textarea id="isi" name="isi" required></textarea><br>
        <input type="submit" value="Kirim">
    </form>
    <h2>Daftar Pengaduan</h2>
    <a href="view.php">Lihat Pengaduan</a>
</body>
</html>