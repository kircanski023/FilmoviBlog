<?php
include_once "includes/connection.php";
include_once "includes/functions.php";
if(!isset($_GET['id'])){
	header("Location: index.php?geterr");
}else{
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	if(!is_numeric($id)){
		header("Location: index.php?numerror");
		exit();
	}else if(is_numeric($id)){
		$sql = "SELECT * FROM page WHERE page_id='$id'";
		$result = mysqli_query($conn, $sql);
		//Check if page exits
		if(mysqli_num_rows($result)<=0){
			//no page
			header("Location: index.php?noresult");
		}else if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$page_title = $row['page_title'];
				$page_content = $row['page_content'];
                $page_title2 = $row['page_title'];
				?>
				
				
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $page_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
	
		<!--NAVIGATION BAR HERE-->
		<?php include_once "includes/blogNav.php"; ?>
		<!--NAVIGATION BAR ENDS HERE-->
		
		<div container-fluid padding>
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"><?php echo $page_title2; ?></h1>
            </div>
            <div class="col-12">
                <hr>
			</div>
			<p><?php echo $page_content; ?></p>
        </div>
    </div>
		
	<?php include_once "includes/footer.php"; ?>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>
        
	</body>
</html>
							
				<?php
			}
		}
	}
}
?>