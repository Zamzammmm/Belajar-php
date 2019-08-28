<?php
		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jalan = $_POST['jalan_kp'];
			$kecamatan = $_POST['kecamatan'];
			$kota = $_POST['kota'];
			$provinsi = $_POST['provinsi'];
			$kode_pos = $_POST['kode_pos'];
			$nama_barang = $_POST['nama_barang'];
			$harga = $_POST['harga'];
			$jumlah_barang = $_POST['jumlah_barang'];
			$total = $harga*$jumlah_barang;
			$diskon= 0;
			if ($jumlah_barang >= 5) {
				$diskon=(($harga*10)/100);
				$total=($total-$diskon);
			}
			if ($jumlah_barang >=10) {
				$diskon=(($harga*20)/100);
				$total=($total-$diskon);
			}
			if ($jumlah_barang <0) {
				echo "<b>Tidak Bisa Di Proses Karena Pemesanan Jumlah Barang Kamu Kurang Dari 0</b>";
				die;
			}
			$rp="Rp.";
			$deskripsi = $_POST['deskripsi'];
			$tanggal_pembelian = $_POST['tanggal_pembelian'];
            echo '<fieldset style="width : 40%, margin="center"">';
            echo '<legend align="center"><h1 > <b>Hasil Output Perhitungan<br></b></font></h1></legend>';
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hasil output Form</title>
</head>
<body>
	<table border="0">
	<tr>
	<td>Nama</td>
	<td>:</td>
	<td><?php echo $nama; ?></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
	<td>Jalan Kp</td>
	<td>:</td>
	<td><?php echo $jalan; ?></td>
	</tr>
	<tr>
	<td>Kecamatan</td>
	<td>:</td>
	<td><?php echo $kecamatan; ?></td>
	</tr>
	<tr>
	<td>Kota</td>
	<td>:</td>
	<td><?php echo $kota; ?></td>
	</tr>
	<tr>
	<td>Provinsi</td>
	<td>:</td>
	<td><?php echo $provinsi; ?></td>
	</tr>
	<tr>
	<td>Kode Pos</td>
	<td>:</td>
	<td><?php echo $kode_pos; ?></td>
	</tr>
	<tr>
	<td>Nama Barang</td>
	<td>:</td>
	<td><?php echo $nama_barang; ?></td>
	</tr>
	<tr>
	<td>Harga Satuan Barang</td>
	<td>:</td>
	<td>Rp.<?php echo $harga; ?></td>
	</tr>
	<tr>
	<td>Jumlah Barang</td>
	<td>:</td>
	<td><?php echo $jumlah_barang; ?></td>
	</tr>
	<tr>
	<td>Diskon</td>
	<td>:</td>
	<?php if ($diskon==0){
	$rp="";
	}?>
	<td><?php echo $rp.$diskon; ?></td>
	</tr>
	<tr>
	<td>Total Pembayaran</td>
	<td>:</td>
	<td>Rp.<?php echo $total; ?></td>
	</tr>
	<tr>
	<td>Deskripsi</td>
	<td>:</td>
	<td><?php echo $deskripsi; ?></td>
	</tr>
	<tr>
	<td>Tanggal Pembelian</td>
	<td>:</td>
	<td><?php echo $tanggal_pembelian; ?></td>
	</tr>
	</table>
	<br>
	<a href="form.php" style = "text-decoration : none">Kembali</a>
</body>
</html>