<?php
echo "mulai <br>";
$nilai_awal = 2;
while ($nilai_awal <= 100) {
    echo "hello world! <br>";
    $nilai_awal = $nilai_awal + 2;
}
echo "selesai <br>";

/*while(kondisi) {aksi}, cara membuat berulang*/
/*false, tidak muncul*/
/*true, akan berulang terus*/
/*nilai awal, while(kondisi) {aksi}*/

echo "<hr>";

echo "mulai <br>";
for ($i = 1; $i <= 10; $i -= 1) {
    echo "hello world $i x! <br>";
}

echo "selesai <br>";