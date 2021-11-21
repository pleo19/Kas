
<?php

include 'koneksi.php';

$view = $conn->query("SELECT * FROM uangkas");

?>
 

<!DOCTYPE html>
<html>
<head>
	<title>Uang Kas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">

	<h1>Uang Kas</h1>
	<a href="tambah.php" class="btn btn-primary">Tambah data</a>
	<a href="index.php" class="btn btn-warning">Home</a>

	<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Setoran</th>
			<th>Aksi</th>
		</tr>
		<?php
		while($row = $view->fetch_array()) { ?>
		<tr>
			<td> <?= $row['nama'] ?> </td>
			<td> <?= $row['tanggal'] ?> </td>
			<td> <?= $row['setoran'] ?> </td>
			<td>
				<a href="edit.php?id=<?= $row['id_kas']?>">Edit</a>    | 
				<a href="hapus.php?id=<?= $row['id_kas']?>" onclick="return confirm('Apakaah anda yakin hapus?')">Hapus</a>
			
			</td>
		</tr>
	<?php }
	?>
	<table>
</div>
</body>
</html>