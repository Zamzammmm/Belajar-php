<?php
for ($i= 1; $i <= 10; $i++) {
    echo"Perkalian $i<br><br>";
    for ($a= 1; $a <= 10; $a++) {
        $r=$a*$i;
        if ($r%2==1) {
            echo $a. "x".$i." = ".$r." Bilangan Ganjil<br>";
        }
        else {
            echo $a. "x".$i." = ".$r." Bilangan Genap<br>";
        }
    }
    echo"<br>";
}
?>