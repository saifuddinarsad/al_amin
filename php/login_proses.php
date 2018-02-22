<?php

include "connection.php";

$user = $_POST['username'];
$pass = $_POST['password'];

// $query = "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'";

/* Select queries return a resultset */
if ($result = mysqli_query($link, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'")) {
    $cek = mysqli_fetch_assoc($result);

    /* free result set */
    mysqli_free_result($result);
}
session_start();
$userid = $cek['id'];
$_SESSION['id'] = $userid;
$usertingkat = $cek['tingkat'];
$_SESSION['tingkat'] = $usertingkat;

if($cek > 0){
	$_SESSION['user'] = $user;
	$_SESSION['status'] = "login";
	
	if ($_SESSION['tingkat'] == "smk") {
		header("location:../views/formulir_smk");
	}else if($_SESSION['tingkat'] == "smp"){
		header("location:../views/formulir_smp");
	}else{
		header("location:../views/admin_panel");
	}
}else{
	header("location:../");
}

?>