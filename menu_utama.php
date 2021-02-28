<?php
include "config/data_post.php";

 
 
 



?>

<html>
    <head>
        <title>Menu Utama</title>

    </head>

    <body>
    <div class=".container-fluid">
        <nav class="navbar navbar-expand-sm">
            

            <a class="nav-link">Princess Connect </a>

            <div class="dropdown">
            
              <button type="button" class="btn" data-toggle="dropdown">
               <img src="icon/person-circle.svg">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="halaman_user.php">Profil</a>

                
                
                
              </div>
            </div>

           
             
                <div class="dropdown">
                  <button type="button" class="btn" data-toggle="dropdown">
                   <img class="three-dots"src="icon/three-dots.svg" alt="">
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="detail_informasi.php">Tentang Princess Connect</a> 
                  </div>
                </div>
               
               
            
             
           
               
          
          </nav>
          
    
          

           <!--Gambar-->
           
                   <img src="image/background2.png">
                   

                   <table class="table table-striped table-bordered" style="width:100%">
        <thead>
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
       
    <th>
</th>
</tr>
</thead>
<tbody>
    <?php
    
    while($row = $q->fetch()):
    $id = $row["id_gambar"];
    $image = $row["_image"];
    $name = $row["_nama"];
    
    ?>
    <tr>
       
        <td><?php echo $id;?></td>
        <td><?php echo "<img src='image/$image' width='70' height='90' />";?></td>
        <td><?php echo $name;?></td>
        <td>
            <form action="edit_konten.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>"/>
            <input type="hidden" name="image" value="<?php echo $image?>"/>
            <input type="hidden" name="name" value="<?php echo $name?>"/>
           
            
            <button type="submit" class="btn btn-primary">Edit</button>

           
            </form>

            <form action="config/delete_post.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>"/>
            <button type="submit" class="btn btn-primary">Hapus</button>
            </form>

           
                
                
      
            
        
    </td>
    </tr>
    <?php endwhile;?>
</tbody>
                   
               

          

          
          
        
      
       

       


      
              
                   </table>
    </div>

    <nav class="navbar navbar-expand-sm">
        <a class="floating-button" href="upload-konten.php">+</a>
            <a class="nav-link">@Copyright By 18111064_IlhamMaulana_TIFRP18CIDB</a>
           

                </nav>
               

        

        
    </body>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="custom/style_menu_utama.css">
    <link rel="stylesheet" href="custom/style.css">
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>