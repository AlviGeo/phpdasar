<?php 

    $buku = [
        [
            "gambar" => "books.jpg",
            "judul" => "Matahari",
            "pengarang" => "Tere Liye",
            "tahun_terbit" => "Juli 2016",
            "jumlah_halaman" => "400 halaman"
        ],
        [
            "gambar" => "books1.jpg",
            "judul" => "Bumi",
            "pengarang" => "Tere Liye",
            "tahun_terbit" => "Januari 2014",
            "jumlah_halaman" => "440 halaman"
        ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resensi Novel</title>
</head>
<body>
    <h1>Resensi Novel </h1>

    <?php foreach($buku as $b) : ?>
        <ul>
            <li><img src=img/<?= $b["gambar"]; ?>></li>
            <li><?= $b["judul"]; ?></li>
            <li><?= $b["pengarang"]; ?></li>
            <li><?= $b["tahun_terbit"]; ?></li>
            <li><?= $b["jumlah_halaman"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>