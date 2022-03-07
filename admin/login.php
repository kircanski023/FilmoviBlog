<?php
session_start();
include_once "../includes/functions.php";
include_once "../includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign in</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../style/bootstrap.min.css">
		<link rel="stylesheet" href="../style/style.css">
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
		
		<div style="width:500px;margin:auto auto;  margin-top:250px;">
		<form method="post" class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Ulogujte se</h1>
      
	  
      <input type="email" name="author_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      
      <input type="password" name="author_password" id="inputPassword" class="form-control" placeholder="Password" required>
  
	  <button class="mt-2 btn btn-lg btn-outline-danger btn-block" name="signup" type="submit">Prijava</button>
	
	<a href="signup.php"><button class="mt-2 btn btn-lg btn-outline-info btn-block" name="novinalogsignup" type="button">Novi nalog</button></a>


	  <a href="../index.php"><button class="mt-2 mb-5 btn btn-lg btn-outline-secondary btn-block" name="cancel" type="button">Odustani</button>
    </form>
		</div>
		
		<?php 
			if(isset($_POST['signup'])){
				
			
				$author_email = mysqli_real_escape_string($conn, $_POST['author_email']);
				$author_password = mysqli_real_escape_string($conn, $_POST['author_password']);
				
				//checking for empty fields
				if(empty($author_email) OR empty($author_password)){
					header("Location: login.php?message=Prazna+polja");
					exit();
				}
				
				//checking for validity of email
				if(!filter_var($author_email,FILTER_VALIDATE_EMAIL)){
					header("Location: login.php?message=Unesite+validan+email");
					exit();
				}else{
					//If email exists
					$sql = "SELECT * FROM `author` WHERE `author_email`='$author_email'";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result)<=0){
						header("Location: login.php?message=Login+error");
						exit();
					} else {
						while($row = mysqli_fetch_assoc($result)){
							//checking if password matches
							if(!password_verify($author_password, $row['author_password'])){
								header("Location: login.php?message=Login+error");
								exit();
							} else if(password_verify($author_password, $row['author_password'])) {
								$_SESSION['author_id'] = $row['author_id'];
								$_SESSION['author_name'] = $row['author_name'];
								$_SESSION['author_email'] = $row['author_email'];
								$_SESSION['author_bio'] = $row['author_bio'];
								$_SESSION['author_role'] = $row['author_role'];
								header("Location: index.php");
								exit();
							}
						}
					}
				}
			}
		?>
	
	<?php include_once "footer.php"; ?>	
	
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/scroll.js"></script>
	</body>
</html>