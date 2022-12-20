<?php 

include 'keneksi.php';

$id=$_POST["id"];

try {
	$statement= $database_connection->prepare("DELETE FROM `catalog` WHERE `catalog`.`id` = ?");
	$statement->execute([$id]);
	$pesan="Data Berhasil Dihapus!";
	echo $pesan;
} catch (PDOException $cek_koneksi) {
	die($cek_koneksi->getMessage());
}