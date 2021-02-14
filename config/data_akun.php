<?php include("login_akun.php"); ?>
<?php
require_once "koneksi.php";


  

  
  
 
 
$person = new person();
 
$email = $person->get_email();
$password = $person->get_password();
  echo  "<script>alert('$email');</script>";
  
  

 try{
  
 
  
 $sql = "SELECT * FROM akun";
 $q = $database_connection -> query($sql);
 $q->setFetchMode(PDO::FETCH_ASSOC);


 }catch(PDOException $e){
 die("Tidak bisa Membuka Datbase $database_name:" . $e->getMessage());

 }




?>