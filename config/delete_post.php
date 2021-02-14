<?php
require_once "koneksi.php";
$id_gambar = $_POST["id"];


$q = $database_connection->prepare("DELETE FROM `post` WHERE `post`.`id_gambar` =$id_gambar ");
$q->execute([$id_gambar]);
header("Location: ../menu_utama.php");

?>
