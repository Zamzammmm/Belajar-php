<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>latihan 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
       Nama : <input type="text" name="nama" size="50"required placeholder="Masukan Nama Anda"><br>
       <label>Nilai 1 </label>
       <input type="text" name="satu" required><br>
       <label>Nilai 2 </label> 
       <input type="text" name="dua" required><br><br>
       <input type="submit"name="Simpan" Value="Simpan">
       <input type="reset"name="Hapus" Value="Hapus">
       
   </FORM>
   <?php
   if(isset($_POST['Simpan'])){
       $nama = $_POST['nama'];
       $nilai1 = $_POST['satu'];
       $nilai2 = $_POST['dua'];
       $rata = ($nilai1+$nilai2)/2;
       echo "Nama :<b>$nama</b></br>";
       echo "Nilai 1 : <b>$nilai1</b><br>";
       echo "Nilai 2 : <b>$nilai2</b><br>";
       echo "Nilai Rata-Rata : <b>$rata</b><br>";
   }
   ?>
</body>
</html>