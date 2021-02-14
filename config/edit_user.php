<?php
require_once "koneksi.php";
$id = $_POST["id_user"]; 
$email = $_POST["email"];
$password = $_POST["password"];
$username = $_POST["username"];


$q = $database_connection->prepare(
	"UPDATE `akun` SET _username = '$username', `_email` = '$email', `_password` = '$password'  WHERE `akun`.`_id` =$id; 
	");
	$q -> execute([$username,$email,$password,$id]);
header("Location: ../halaman_user.php");


?>