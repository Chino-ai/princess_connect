<?php
include "config/data_akun.php";

?>
<html>
    <head>
        <title>Halaman User </title>
    </head>
    <body>
      
        <div class=".container-fluid">
            <nav class="navbar navbar-expand-sm">

                <a class="nav-link">Princess Connect </a>

                <div class="dropdown">
                  <button type="button" class="btn" data-toggle="dropdown">
                   <img class="person-circle"src="icon/person-circle.svg" alt="">
                  </button>
                 
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="halaman_user.php">Profil</a>
                  <a class="dropdown-item" href="index.php">Keluar</a>
                      </div>
                </div>
                    <div class="dropdown">
                      <button type="button" class="btn" data-toggle="dropdown">
                       <img class="three-dots"src="icon/three-dots.svg" alt="">
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="detail_informasi.php">Tentang PrincessConnect</a> 
                      </div>
                    </div>
                   
                   
                
                 
               
                   
              
              </nav>
             
              <table id = "dataregister" class="table table-striped table-bordered" style="width:100%">
        <thead>
    <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Username</th>
        <th>Aksi</th>
    <th>
</th>
</tr>
</thead>
<tbody>
    <?php
    
    while($row = $q->fetch()):
    $id = $row["_id"];
    $email = $row["_email"];
    $username = $row["_username"];
    $password = $row["_password"];
    ?>
    <tr>
       
        <td><?php echo $email;?></td>
        <td><?php echo $password;?></td>
        <td><?php echo $username;?></td>
        <td>
            <form action="halaman_edit_user.php" method="POST">
            <input type="hidden" name="id_user" value="<?php echo $id?>"/>
            <input type="hidden" name="username" value="<?php echo $username?>"/>
            <input type="hidden" name="email" value="<?php echo $email?>"/>
            <input type="hidden" name="password" value="<?php echo $password?>"/>
            <button type="submit" class="btn btn-primary">Edit</button>
            </form>

           
                
                
      
            
        
    </td>
    </tr>
    <?php endwhile;?>
</tbody>


        </div>
        

        
              
            
        <nav class="navbar navbar-expand-sm">

<a class="nav-link">@Copyright By 18111064_IlhamMaulana_TIFRP18CIDB</a>


    </nav>
             
    </body>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 

</html>