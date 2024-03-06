<?php
// 1. membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "fabruari", "maret"];
$mahasiswa = ["firda", 2.5, false];

// false kosong
// rue satu

// 2. mencetak isi array
// mencetak 1 elemen pada array, menggunakan index
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// mencetak seluruh isi rray
// digunakan khusus untuk debugging
// var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";


// 3. memanipulasi isi array
// menambah isi array
// di akhir array:[] atau array_push()
$hari[] = "kamis";
$hari[] = "jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);
echo "<br>";

// di awal array: array_unshift()
array_unshift($mahasiswa, "233040098");
print_r($mahasiswa);
echo "<hr>";

// menghapus isi array
// di akhir: array_pop()
// di awal: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);