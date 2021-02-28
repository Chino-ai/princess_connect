<?php
 $id = $_POST["id_user"];
 $email = $_POST["email"];
 $username = $_POST["username"];
 $password = $_POST["password"];



?>
<html>
    <head>
        <title>Log in</title>
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
        

        <div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/sttb.jpg">

			
			<form action= "config/edit_user.php" method="POST" class="col-lg-6">
				<h5>Edit Profile</h5>
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username;?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
					</div>
				</div>
			
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Password</label>
						<input type="text" class="form-control" name="password" value="<?php echo $password;?>">
					</div>
					
					
				</div>
			
				<input type="hidden" name="id_user" value="<?php echo $id?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
			
		
		</div>
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