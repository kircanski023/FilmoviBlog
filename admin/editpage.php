<?php
include_once "../includes/connection.php";
include_once "../includes/functions.php";
session_start();
if(!isset($_GET['id'])){
    header("Location: page.php?message=Pleace+click+edit+button");
    exit();
}else{
    if(!isset($_SESSION['author_role'])){
        header("Location: page.php?message=Pleace+Login");
        exit(); 
    }else{
    if($_SESSION['author_role']!="admin"){
        echo "You can not access this page"; 
    }else{
        $page_id = $_GET['id'];
        $sql = "SELECT * FROM page WHERE page_id='$page_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)<=0){
          header("Location: page.php?message=Stanica+nije+pronadjena");
          exit();  
        }else{
            ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../style/bootstrap.min.css">
		<link rel="stylesheet" href="../style/style.css">
	</head>
	<body>
	
	 <nav class="navbar navbar-dark sticky-top bg-dark   shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../blog.php">Blog</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Odjava</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include_once "nav.inc.php"; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Izmeni stranicu</h1>
            <h6>Dobrodošli, <?php echo $_SESSION['author_name']; ?> | Vaša uloga je <?php echo $_SESSION['author_role']; ?></h6>
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
			<?php
				$page_id = $_GET['id'];
				$FormSql = "SELECT * FROM page WHERE page_id='$page_id'";
				$FormResult = mysqli_query($conn, $FormSql);
				while($FormRow=mysqli_fetch_assoc($FormResult)){
					
					$pageTitle = $FormRow['page_title'];
					$pageContent = $FormRow['page_content'];

			?>
				<form method="post" enctype="multipart/form-data">
					Naslov stranice
					 <input type="text" name="page_title" class="form-control" placeholder="Naslov stranice" value="<?php echo $pageTitle; ?>"><br>
					 
					
					
					Sadržaj stranice
					<textarea name="page_content" class="form-control" id="exampleFormControlTextarea1" rows="9"><?php echo $pageContent ?></textarea><br>

				    <button name="submit" type="submit" class="btn btn-primary">Ažuriraj</button>
				</form>
				<?php } ?>
				<?php
					if(isset($_POST['submit'])){
						$page_title = mysqli_real_escape_string($conn, $_POST['page_title']);
						$page_content = mysqli_real_escape_string($conn, $_POST['page_content']);
						
						//checking if above fields are empty
						if(empty($page_title) OR empty($page_content)){
							echo '<script>window.location = "page.php?message=Empty+Fields";</script>';
							exit();
						}
						
				
							//user dont want to update the file
							$sql = "UPDATE page SET page_title='$page_title',  page_content='$page_content' WHERE page_id='$page_id'";
							if(mysqli_query($conn, $sql)){
								echo '<script>window.location = "page.php?message=Post+Updated";</script>';
							}else{
								echo '<script>window.location = "page.php?message=Error";</script>';
							}
						}
						
						
				
							
				?>
				
			</div>
        
          </div>
        </main>
      </div>
    </div>

		<?php include_once "footer.php"; ?>	

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/scroll.js"></script>
    	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ey5ln3e6qq2sq6u5ka28g3yxtbiyj11zs8l6qyfegao3c0su"></script>

	<script>tinymce.init({ selector:'textarea' });</script>

	</body>
</html>

            <?php
            
        }
    }
}
} 
?>