<?php

include 'koneksi.php';


if (isset($_POST['simpan']))
{
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$setoran = $_POST['setoran'];

	mysqli_query($conn, "INSERT INTO uangkas VALUES('','$nama','$tanggal','$setoran')");
	header("location:tableview.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pembayaran</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1>Tambah Pembayaran</h1>
	<form method="post">
	
		<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama" class="form-control " placeholder="Nama Penyetor">
		</div>

			<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" class="form-control " placeholder="Tanggal">
			</div>

		<div class="form-group">
		<label>Setoran</label>
		<input type="text" name="setoran" class="form-control " placeholder="Jumlah Setoran">
		</div>

		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
		<a href="tableview.php" class="btn btn-warning">kembali</a>
	</form>

</div>

</body>
</html>