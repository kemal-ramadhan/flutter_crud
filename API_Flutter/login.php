<?php 

include "koneksi.php";

$username = $_GET['user'];
$password = $_GET['pwd'];

try {
	$statement = $database_connection->prepare("SELECT 'name' FROM 'user' WHERE 'username'=? AND 'password' = sha1(?)");
	$statement->execute([$username, $password]);
	$cek = $statement->rowCount();

	if ($cek == 1) {
		$status = "Login Berhasil!";
	}else{
		$stati = "Login Gagal!";
	}
	$data = array();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		// code...
		$data[] = $row;
	}
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($data);

} catch (Exception $e) {
	die($cek_koneksi->getMessage());
}