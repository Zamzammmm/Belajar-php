<?php
// array key asosiatif
$aso = ['Barang' => 'Buku Tulis','Harga' => 4000, 'Berat' => "100 gram",];
foreach ($aso as $index =>$values){
    echo"<br>" .$index . " : $values <br>";
}
?>