<?php
	session_start();
	include "connection.php";

	$id = $_SESSION["id"];
	$nama = $_POST["nama"];
	$nisn = $_POST["nisn"];
	$alamat = $_POST["alamat"];

	echo $sql = "INSERT INTO tb_smk (id, nama, nisn, alamat) VALUES ('$id','$nama','$nisn','$alamat')";

	$res = mysqli_query($link, $sql);

?>