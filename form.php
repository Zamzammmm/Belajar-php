<html>
<head>
<h1 align = "center"><font face="Courier New">FORM</font></h1>
<title>FORM</title>
</head>

<body>
<font face="Courier New"/>
    <fieldset style="width : 50%, margin="center"" >
        <legend style="font-size:2vw" >PURCHASE ORDER BARANG</legend>
<FORM ACTION="prosesform.php" METHOD="POST" NAME="input">
<table border="0" style="center;">
             <tr>
                <td>NAMA</td>
                <td>:<input type="text"  name="nama" required></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>Jalan/Kp <input type="text"  name="jalan_kp" required></td>
				<td>Kecamatan <input type="text"  name="kecamatan" required></td>
				<td>Kota <input type="text"  name="kota" required></td>
				<td>Provinsi <input type="text"  name="provinsi" required></td>
				<td>Kode Pos <input type="number"  name="kode_pos" required></td>
            </tr>
            <tr>
				<td>Nama Barang</td>
				<td>:<input type="text" name="nama_barang" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:<input type="number" name="harga" required></td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
					<td>:<input type="number" name="jumlah_barang" required></td>
					<!-- <select name="jumlah_barang">
						<option value="">- QTY -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select> -->
				</td>
			</tr>
            <tr>
                <td>Deskripsi</td>
                <td>:<textarea name = "deskripsi" rows ="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>TANGGAL Pembelian</td>
                <td>:<input type="date"  name="tanggal_pembelian" required></td>
            </tr>

			<tr>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
		</table>


</table>
</body>
</html> 