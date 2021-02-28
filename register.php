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

            <form action="config/register.php" method="POST">
                <div class="container-form">
                    <div class="form-group">
                        <label for="email">Nama Pengguna</label>
                        <input type="text" class="form-control" placeholder="Nama Pengguna"  name="username">
                      </div>
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="email" class="form-control" placeholder="Alamat Email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Sandi</label>
                  <input type="password" class="form-control" placeholder="Sandi" name="password">
                </div>
                <div class="form-group form-check">
                  
                </div>
                <a class="regis" href="login.php">Masuk</a>
               
                <button type="submit" class="btn btn-primary">Daftar</button>
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