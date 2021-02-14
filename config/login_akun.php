
<?php
 require_once "koneksi.php";
 
 
 
 
  
 
  
   
   

  

if(isset($_POST['submit'])) {
  
  $email = $_POST['email']; 
  $password = $_POST['password'];
  
  
  
  
  
 
  
  
  try {
      $sql = "SELECT * FROM akun WHERE _email = '$email' AND _password = '$password'"; 
      $stmt = $database_connection->prepare($sql); 
      $stmt->execute([$email,$password]); 

      $count = $stmt->rowCount(); 
      if($count == 1) { 
          $_SESSION['email'] = $email;
          
         
         
          header("Location: ../menu_utama.php");
          return;
      }else{
       
        
        echo "<script> alert('Email atau Password salah atau tidak di isi'); </script>";
        header("Location: ../login.php");
       
        return ;
      }



      }catch(PDOException $e) {
      echo $e->getMessage();
  }
}





?>
