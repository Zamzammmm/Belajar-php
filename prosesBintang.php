<?php
if(isset($_POST['simpan'])){
   $input =$_POST['no'];

   for ($i=0; $i < $input ; $i++) {
   for ($j=$input; $j > $i; $j--) {
    echo "&nbsp;";
   }
   for ($k; $input < $i; $k++) {
   echo "*";
   }
   for ($l=0; $l <= $i ; $l++) {
   echo "*";
   }
   echo "<br>";
  }
  echo"Jumlah Bintang = <b>".$input;
}
?>