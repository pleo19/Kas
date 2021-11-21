<?php

include 'koneksi.php';

if (isset($_GET['id']))
{
	$id = $_GET['id'];

	mysqli_query($conn,"DELETE FROM uangkas WHERE id_kas = '$id' ");
	header("location:tableview.php");

}

?>