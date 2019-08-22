<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $Jenis_kelamin = $_POST['jenis_kelamin'];
    $Agama = $_POST['agama'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
 if ($Email == "zamzamzuba2017@gmail.com" &&  $password == "123") {
    echo $nama. "<br>";
    echo $alamat. "<br>";
    echo $Jenis_kelamin. "<br>";
    echo $Agama. "<br>";
    echo $Email. "<br>";
    echo "<h2>STATUS AKUN AKTIF</h2>";  
    } else {
    echo "<h2>TIDAK AKTIF</h2>";
    }
 }
 ?>