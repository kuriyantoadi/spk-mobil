<?php
	session_start();
	$user=$_SESSION['username'];
	if (!isset($_SESSION['username'])){
		header("Location:./login.php");
	}
	include("connect.php");
	$id_a=$_GET['id_a'];

	$delete_alternative = "DELETE FROM tb_alternative WHERE id_alternative='$id_a'";
	mysql_query($delete_alternative,$koneksi);
	header("Location:alternative.php");
?>
