<?php
    // $mahasiswa = [
    // ["Alvi Geovanny", "081275782482", "Sistem Informasi", "alvigeovan29@gmail.com"],
    // ["Sandika Galih", "081275782567", "Teknik Informatika", "sandikagalih@unpas.ac.id"]
    // ];

    // Array Associative
    $mahasiswa = [
        [
        "nama" => "Alvi Geovanny", 
        "npm" => "081275782482",
        "email" => "alvigeovan29@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "user.png"
        ],
        [
        "nama" => "Sandhika Galih", 
        "npm" => "0812757824436",
        "email" => "sandikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "snoopy.jpg"
        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Mahasiswa <?= $mhs["nama"]; ?></li>
            <li>NPM: <?= $mhs["npm"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>