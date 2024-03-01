<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
   echo "jari-jari =$r cm <br>";
   $l = (3.14) * ($r * $r);
   echo "Luas Lingkaran = $l cm²";
}
hitungLuasLingkaran(10);

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r) {
    echo "jari-jari =$r cm <br>";
    $k = 2*3.14 *$r;
    echo "Keliling Lingkaran = $k cm";
}
hitungKelilingLingkaran(20);