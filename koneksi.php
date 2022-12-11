<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'rs_bhayangkara'; // Nama Database
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$koneksi) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}
?>