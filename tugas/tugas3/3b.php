<?php

function urutanAngka($angka) {
    $f = 1;
    for($i =1; $i <= $angka; $i++){
        for($j =1; $j <= $i; $j++){
            echo "$f";
            $f++;
            if($j == $i){
                echo "<br>";
            }
        }
    }
}
urutanAngka(5);