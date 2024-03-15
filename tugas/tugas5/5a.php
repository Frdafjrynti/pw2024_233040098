<?php
$mahasiswa = [
    [
        "nama" => "Firda Faridatul Fajriyanti",
        "nrp" => "233040098",
        "jurusan" => "Teknik Informatika",
        "email" => "firdafaridatul27@gmail.com",
        "gambar" => "puku.jpg"
    ],
    [
        "nama" => "Karin Nurlaila",
        "nrp" => "234040005",
        "jurusan" => "Teknik Informatika",
        "email" => "karinNRL@gmail.com",
        "gambar" => "bung.jpg"
    ],
    [
        "nama" => "Andra Yunandra",
        "nrp" => "234040004",
        "jurusan" => "Teknik Informatika",
        "email" => "andranandra@gmail.com",
        "gambar" => "cat.jpg"
    ],
    [
        "nama" => "Vennyta",
        "nrp" => "23040001",
        "jurusan" => "Teknik Informatika",
        "email" => "venny@gmail.com",
        "gambar" => "rintik.jpg"
    ],
    [
        "nama" => "Bintang Januar",
        "nrp" => "234040009",
        "jurusan" => "Teknik Informatika",
        "email" => "binatangjanuar@gmail.com",
        "gambar" => "ball.jpg"
    ],
    [
        "nama" => "Vanny",
        "nrp" => "234040003",
        "jurusan" => "Teknik Informatika",
        "email" => "vanny@gmail.com",
        "gambar" => "biru.jpg"
    ],
    [
        "nama" => "Garuda Ganandra",
        "nrp" => "234040008",
        "jurusan" => "Teknik Informatika",
        "email" => "ganandradaru@gmail.com",
        "gambar" => "air.jpg"
    ],
    [
        "nama" => "Ocean Kayro",
        "nrp" => "234040007",
        "jurusan" => "Teknik Informatika",
        "email" => "ocenankayro@gmail.com",
        "gambar" => "nga.jpg"
    ],
    [
        "nama" => "Bulan Gemilang",
        "nrp" => "234040006",
        "jurusan" => "Teknik Informatika",
        "email" => "bulanang@gmail.com",
        "gambar" => "bulan.jpg"
    ],
    [
        "nama" => "sky keynandra",
        "nrp" => "234040002",
        "jurusan" => "Teknik Informatika",
        "email" => "langitandra@gmail.com",
        "gambar" => "kupu.jpg"
    ],
]
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
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>E-mail : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>