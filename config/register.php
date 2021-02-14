<?php
require_once "koneksi.php";
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `akun` (`_username`, `_email`, `_password`) VALUES ('$username', '$email','$password');");
$q->execute([$username,$email,$password]);
header("Location: ../login.php");
?>