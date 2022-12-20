<?php 

$database_hostname = "localhost";
$database_user = "tiff9782_tujuh";
$database_password = "tujuhSTTB2020";
$database_name = "tiff9782_tujuh";

try {
	$database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name", $database_user, $database_password);
	// echo "Koneksi Berhasil!";
} catch (PDOException $cek_koneksi) {
	die($cek_koneksi->getMessage());
}

 ?>