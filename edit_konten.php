<?php

$nama = $_POST["name"];
$id = $_POST["id"];

?>

<html>
    <head>
        <title>Daftar</title>
    </head>
    <body>
        <div class=".container-fluid">
            <nav class="navbar navbar-expand-sm">

                <a class="nav-link">Princess Connect </a>
                
                
  
                 
                   
                      <div class="dropdown">
                        <button type="button" class="btn" data-toggle="dropdown">
                         <img class="three-dots"src="icon/three-dots.svg" alt="">
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="detail_informasi.php">Tentang PrincessConnect</a> 
                        </div>
                      </div>

               
                 
                    
                 
               
                   
              
              </nav>


        </div>
        

        
            <img class="kyaru-normal" src="image/Kyaru-newyear.png" alt="">

            <form action="config/edit.post.php" method="POST" enctype="multipart/form-data">
                <div class="container-form">
                <div class="form-group">
                        <label>Masukan gambar</label>
                        <input type="file" placeholder="Masukan gamabar"  name="file">
                      
                <div class="form-group">
                  <label >Nama Gambar</label>
                  <input type="text" class="form-control" placeholder="Masukan Nama Gambar" name="nama" value="<?php echo $nama?>">
                </div>
                
                  
                </div>
              
                <input type="hidden" name="id" value="<?php echo $id?>"/>
                <button type="submit" name= "submit" class="btn btn-primary">Upload</button>
                </div>
              </form>

              
            
        
        
    </body>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
  
</html>