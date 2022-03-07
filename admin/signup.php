<?php 
include_once "../includes/functions.php"; 
include_once "../includes/connection.php";
?>  
<!DOCTYPE html>
<html lang="en">
	<head>
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <title>Blog</title>  
    </head>
    <body>   
        
     
		<?php
			if(isset($_GET['message'])){
				$msg = $_GET['message'];
				echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				'.$msg.'
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			}
		?>
        
        <div style="width:350px;margin:auto auto; margin-top:150px";> 
         <form method="post" class="form-signin">
                  <h1 class="h3 mb-3 font-weight-normal">Kreirajte novi nalog</h1>
                  
             
                  <input type="text" id="input" name="author_name" class="form-control mb-2" placeholder="Unesi ime" required autofocus>
             
                  <input type="email" id="inputEmail" name="author_email" class="form-control mb-2" placeholder="Unesi e-mail" required autofocus>
                 
                  <input type="password" id="inputPassword" name="author_password" class="form-control mb-2" placeholder="Unesi lozinku" required>
             
                  <button class="btn my-5 btn-lg btn-outline-success btn-block" name="signup" type="submit">Potvrdi</button>
		</form>   
   </div> 
        
 <?php 
			if(isset($_POST['signup'])){
				
				$author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
				$author_email = mysqli_real_escape_string($conn, $_POST['author_email']);
				$author_password = mysqli_real_escape_string($conn, $_POST['author_password']);
				
				//checking for empty fields
				if(empty($author_name) OR empty($author_email) OR empty($author_password)){
					header("Location: signup.php?message=Empty+Fields");
					exit();
				}
				
				//checking for validity of email
				if(!filter_var($author_email,FILTER_VALIDATE_EMAIL)){
					header("Location: signup.php?message=Please+Enter+A+Valid+email");
					exit();
				}else{
					//If email exists
					$sql2 = "SELECT * FROM `author` WHERE `author_email`='$author_email'";
					$result = mysqli_query($conn, $sql2);
					if(mysqli_num_rows($result)>0){
						header("Location: signup.php?message=Email+Already+Exists");
						exit();
					} else {
						//hashing password
						$hash = password_hash($author_password, PASSWORD_DEFAULT);
						
						//Signing Up the USER
						$sql = "INSERT INTO `author` (`author_name`, `author_email`, `author_password`, `author_bio`, `author_role`) VALUES ('$author_name', '$author_email', '$hash', 'Enter Bio', 'author')";
						
						if(mysqli_query($conn, $sql)){
							header("Location: login.php?message=SuccessFully+Registered");
							exit();
						}else{
							header("Location: signup.php?message=Registration+Failed");
							exit();
						}
					}
				} 
			}
		?>

		<div class="margin: 0; padding: 0;" ><?php include_once "footer.php"; ?></div>
		
<script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/scroll.js"></script>
    </body>
</html>