<?php
	session_start();
	$user=$_SESSION['username'];
	if (!isset($_SESSION['username'])){
		header("Location:./login.php");
	}
	include("connect.php");
	$id=$_GET['id_analisa'];
	
	$delete_kelas="DELETE FROM tb_analisa WHERE id_analisa='$id'";
	mysql_query($delete_kelas,$koneksi);
	header("Location:./analisa.php");
?>