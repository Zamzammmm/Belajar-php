<?php
for ($i= 1; $i <= 10; $i++) {
    echo"Hitung Perkalian $i<br><br>";
    for ($a= 1; $a <= 10; $a++) {
        $z=$a*$i;
        if ($z%2==1) {
            echo $a. "*".$i." = ".$z." => Bilangan Ganjil<br>";
        }
        else {
            echo $a. "*".$i." = ".$z." => Bilangan Genap<br>";
        }
    }
    echo"<br>";
}
?>