<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

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
    
    
    echo'<fieldset style="width : 40%, margin="center"">';
    echo '<legend align="center"><h1 > <b>Anda Sudah Terdaftar<br></b></font></h1></legend>';
    echo "No Pendaftaran : ". $no_pendaftaran."<br>";
    echo "Nisn : ".$nisn. "<br>";
    echo "Nama : ".$nama. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Hobby :<br>";
    if (isset($_POST['hobi1'])) {
        echo "- ".$_POST['hobi1']. "<br>";
     }
     if (isset($_POST['hobi2'])) {
        echo "- ".$_POST['hobi2']. "<br>";
     }
     if (isset($_POST['hobi3'])) {
        echo "- ".$_POST['hobi3']. "<br>";
     }
     if (isset($_POST['hobi4'])) {
        echo "- ".$_POST['hobi4']. "<br>";        
        }
    echo "Tempat Lahir : ".$tempat_lahir. "<br>";
    echo "Tanggal Lahir : ".$tanggal_lahir. "<br>";
    echo "Agama : ".$agama. "<br>";
    echo "Asal Sekolah : ".$asal_sekolah. "<br>";
    echo "Jenis kelamin : ".$jenis_kelamin. "<br>";
    echo "Jurusan : ".$jurusan. "<br>";
    echo "No Hp : ".$no_hp. "<br>";
    echo "Nama Ayah : ".$nama_ayah. "<br>";
    echo "Pekerjaan Ayah : ".$pekerjaan_ayah. "<br>";
    echo "Nama Ibu : ".$nama_ibu. "<br>";
    echo "Pekerjaan Ibu : ".$pekerjaan_ibu. "<br>";
   }
?>

    </body>
</html>
