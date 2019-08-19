<?php
// array key numerik
$a = array('Zamzam Ubaidilah', 16, true,14.45);
//  echo $a[0];

for ($i = 0; $i <= count($a); $i++ ){
    echo $a[$i] . "<br>";

}
// array key asosiatif
$aso = ['Nama' => 'Zamzam Ubaidilah','Umur' => 21, 'Alamat' => 'Bandung'];
foreach ($aso as $index =>$values){
    echo"<br>" .$index . " : $values <br>";
}
?>