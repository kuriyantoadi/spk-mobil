<?php
	session_start();
	$user=$_SESSION['username'];
	if (!isset($_SESSION['username'])){
		header("Location:./login.php");
	}
	include("connect.php");
	$user=$_GET['user'];

	$delete_kelas="DELETE FROM login WHERE user='$user'";
	mysql_query($delete_kelas,$koneksi);
	header("Location:user.php");
?>
