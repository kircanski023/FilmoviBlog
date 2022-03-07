<?php 
include_once "../includes/functions.php"; 
include_once "../includes/connection.php"; 
session_start();
if(isset($_SESSION['author_role'])){
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <title>Admin Panel</title>  
    </head>
    <body>     
  
 <nav class="navbar navbar-dark sticky-top bg-dark  shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="../Blog.php">Blog</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Odjava</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
  <?php include_once "nav.inc.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dodaj nove postove</h1>
          <h6> Dobrodošli, <?php echo $_SESSION['author_name']; ?> | Vaša uloga je <?php echo $_SESSION['author_role']?>  </h6>
      </div>
        <div id="admin-index-form">
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
            <form method="post" enctype="multipart/form-data">
                Naslov posta
                <input type="text" name="post_title" class="form-control" aria-describedby="emailHelp" placeholder="Naslov posta"> <br>
                
                Kategorija posta
                 <select class="form-control" name="post_category" id="exampleFormControlSelect1">
                       <?php
						$sql = "SELECT * FROM `category`";
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_assoc($result)){
							$category_id = $row['category_id'];
							$category_name = $row['category_name'];
							?>
	<option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
							<?php
						}
					?>
                </select> <br>

                
                Sadržaj
                <textarea class="form-control" name="post_content"id="exampleFormControlTextarea1" rows="3"></textarea><br>
                
                Slika
                <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"> <br>
                
                Ključne reči
                <input type="text" name="post_keywords" class="form-control" aria-describedby="emailHelp" placeholder="Ključne reči"> <br>
                
                <button name="submit" type="submit" class="btn btn-primary">Potvrdi</button>
            </form>
            <?php
            
            if(isset($_POST['submit'])){
                
             $post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
             $post_category = mysqli_real_escape_string($conn, $_POST['post_category']);
             $post_content = mysqli_real_escape_string($conn, $_POST['post_content']);
             $post_keywords = mysqli_real_escape_string($conn, $_POST['post_keywords']);
             $post_author = $_SESSION['author_id'];
             $post_date = date("d/m/y");
                

             if(empty($post_title) OR empty($post_category) OR empty($post_content)){
							header("Location: newpost.php?message=Prazna+polja");
							exit();
						}
             $file = $_FILES['file'];
				
						$fileName = $file['name'];
						$fileType = $file['type'];
						$fileTmp = $file['tmp_name'];
						$fileErr = $file['error'];
						$fileSize = $file['size'];
						
						$fileEXT = explode('.',$fileName);
						$fileExtension = strtolower(end($fileEXT));
						
						$allowedExt = array("jpg", "jpeg", "png", "gif");
						
					if(in_array($fileExtension, $allowedExt)){
							if($fileErr === 0){
								if($fileSize < 3000000){
									$newFileName = uniqid('',true).'.'.$fileExtension;
									$destination = "../uploads/$newFileName";
									$dbdestination = "uploads/$newFileName";
									move_uploaded_file($fileTmp, $destination);
									$sql = "INSERT INTO post (`post_title`,`post_content`,`post_category`, `post_author`, `post_date`, `post_keywords`, `post_image`) VALUES ('$post_title', '$post_content', '$post_category', '$post_author', '$post_date', '$post_keywords', '$dbdestination');";
									if(mysqli_query($conn, $sql)){
										header("Location: posts.php?message=Post+objavljen");
									}else{
										header("Location: newpost.php?message=Greška");
									}
								} else {
									header("Location: newpost.php?message=PODATAK PREVELIK!");
									exit();
								}
							}else{
								header("Location: newpost.php?message=Greška u preuzimanju podatka");
								exit();
							}
						}else{
							header("Location: newpost.php?message=PODATAK PREVELIK!");
							exit();
						}
					}
						   
    			
				?>
				
			</div>
        
          </div>
        </main>
      </div>
    </div>
      
          <?php include_once "footer.php"; ?>	
        
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ey5ln3e6qq2sq6u5ka28g3yxtbiyj11zs8l6qyfegao3c0su"></script>

	<script>tinymce.init({ selector:'textarea' });</script>

    </body>
</html> 
<?php
}else{
    header("Location: login.php?message=Please+Login");
}
?>  
