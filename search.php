<?php
include_once "includes/connection.php";
if(!isset($_GET['s'])){
    header("Location: blog.php");
    exit();
}else{
    $search = mysqli_real_escape_string($conn, $_GET['s']);
  
    
    ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
	
		<!--NAVIGATION BAR HERE-->
		<?php include_once "includes/blogNav.php"; ?>
		<!--NAVIGATION BAR ENDS HERE-->
		
  
        
		<div class="container-fluid padding">
            <div class="row welcome text-center">
            <div class="col-12">
				<h1 class="display-4">Prikaz za pretragu <?php echo $search?></h1>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>
		<br />

		<div class="row mb-2">
		<?php 
            $sql = "SELECT * FROM `post` WHERE `post_title` LIKE '%$search%' OR `post_content` LIKE '%$search%' OR `post_keywords` LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)<=0){
				echo "</div><hr><br /><h1>Ništa nije pronađeno<h1></div>
						<br /> <hr> <br /> <br />";

				include_once "includes/footer.php";
				
            }else{
			while($row=mysqli_fetch_assoc($result)){
				$post_title = $row['post_title']; 
				$post_image = $row['post_image']; 
				$post_author = $row['post_author']; 
				$post_content = $row['post_content'];
				$post_id = $row['post_id'];
				$post_date = $row['post_date'];
				
			$sqlauth = "SELECT * FROM author WHERE author_id='$post_author'";
			$resultauth = mysqli_query($conn, $sqlauth);
			while($authrow=mysqli_fetch_assoc($resultauth)){
				$post_author_name = $authrow['author_name'];
			
			
		?>
			<div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <a class="text-dark" href="post.php?id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
			  </h3>
			  <div class="mb-1"><?php echo $post_author_name ?></div>
              <div class="mb-1 text-muted"><?php echo $post_date ?></div>
			  <p class="card-text"><?php echo substr(strip_tags($post_content),0,120)."..."; ?></p>
			  <a href="post.php?id=<?php echo $post_id; ?>" class="btn btn-primary">Nastavi sa čitanjem</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: 250px;" src="<?php echo $post_image ?>" data-holder-rendered="true">
          </div>
        </div>
			
			<?php }}?>
	<br><br>
	</div>
	</div>

	<?php include_once "includes/footer.php"; ?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>
	</body>
</html>



    <?php
}}


?>