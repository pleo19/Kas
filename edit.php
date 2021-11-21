<?php

include 'koneksi.php';


if (isset($_GET['id'])){
	$id = $_GET['id'];

	$data = mysqli_query($conn,"SELECT * FROM uangkas Where id_kas='$id'");
	$data = mysqli_fetch_assoc($data);
 
	}
if (isset($_POST['update']))
{
	$id = $_GET['id'];
	$nama =$_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$setoran = $_POST['setoran'];

	mysqli_query($conn,"UPDATE uangkas SET nama ='$nama', tanggal='$tanggal',setoran='$setoran' where id_kas='$id' ");
	header("location:tableview.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Perbaruhi Pembayaran</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1>Perbaruhi Pembayaran</h1>
	<form method="post">
	
		<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control " placeholder="Nama" value="<?=$data['nama']?>">
		</div>
			<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" class="form-control " placeholder="Date" value="<?=$data['tanggal']?>">
			</div>
		<div class="form-group">
		<label>Setoran</label>
		<input type="number" name="setoran" class="form-control " placeholder="Setoran" value="<?=$data['setoran']?>">
		</div>
			<input type="submit" name="update" value="Perbaruhi" class="btn btn-primary">
			<a href="tableview.php" class="btn btn-warning">kembali</a>
			</form>

	</div>
</body>
</html>