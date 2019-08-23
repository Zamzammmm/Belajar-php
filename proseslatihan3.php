<?php
if (isset($_POST['submit'])) {
    $no_pendaftaran = $_POST['no_pendaftaran'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jenis_kelamin = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $nama_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_Ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_Ibu'];
    echo'<fieldset style="width : 40%">';
    echo '<h1 ><font color="blue"> <b>Anda Sudah Terdaftar<br></b></font></h1>';
    echo $no_pendaftaran."<br>";
    echo $nisn. "<br>";
    echo $nama. "<br>";
    echo $alamat. "<br>";
    if (isset($_POST['hobi1'])) {
        echo "+ ".$_POST['hobi1']. "<br>";
     }
     if (isset($_POST['hobi2'])) {
        echo "+ ".$_POST['hobi2']. "<br>";
     }
     if (isset($_POST['hobi3'])) {
        echo "+ ".$_POST['hobi3']. "<br>";
     }
     if (isset($_POST['hobi4'])) {
        echo "+ ".$_POST['hobi4']. "<br>";        
        }
    echo $tempat_lahir. "<br>";
    echo $tanggal_lahir. "<br>";
    echo $agama. "<br>";
    echo $asal_sekolah. "<br>";
    echo $jenis_kelamin. "<br>";
    echo $jurusan. "<br>";
    echo $no_hp. "<br>";
    echo $nama_ayah. "<br>";
    echo $pekerjaan_ayah. "<br>";
    echo $nama_ibu. "<br>";
    echo $pekerjaan_ibu. "<br>";
   }
?>