<?php
// $_GET


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
    <title>GET</title>
</head>
<body>
    <h1>Resensi Novel</h1>

    <ul>
    <?php foreach($buku as $b ) : ?>
        <li>
            <a href="Latihan2.php?judul=<?= $b["judul"]; ?>
            &gambar=<?= $b["gambar"]; ?>
            &pengarang=<?= $b["pengarang"]; ?>
            &tahun_terbit=<?= $b["tahun_terbit"]; ?>
            &jumlah_halaman=<?= $b["jumlah_halaman"]; ?>"><?= $b["judul"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>