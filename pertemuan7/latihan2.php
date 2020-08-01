<?php

//cek apakah tidak ada data di $_GET
if( !isset($_GET["judul"]) || 
    !isset($_GET["pengarang"]) ||
    !isset($_GET["tahun_terbit"]) ||
    !isset($_GET["jumlah_halaman"]) ||
    !isset($_GET["gambar"])) {
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>
    
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["pengarang"]; ?></li>
        <li><?= $_GET["tahun_terbit"]; ?>/li>
        <li><?= $_GET["jumlah_halaman"]; ?></li>
    </ul>

    <a href="Latihan1.php">Kembali ke daftar novel</a>
</body>
</html>