<?php
include_once "includes/connection.php";
?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

	<a class="navbar-brand mr-4" href="index.php"><img src="img/logo.png"></a>

	<a class="navbar-brand text-light mb-0 h1" href="blog.php"></a>

	<button class="navbar-toggler btn btn-light" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link text-light" href="admin/index.php">Moj nalog</a>
			</li>
			<?php
			$sqlPage = "SELECT * FROM page";
			$resultPage = mysqli_query($conn, $sqlPage);
			while ($rowPage = mysqli_fetch_array($resultPage)) {
				$page_id = $rowPage['page_id'];
				$page_title = $rowPage['page_title'];

			?>
				<li class="nav-item">
					<a class="nav-link" href="page.php?id=<?php echo $page_id ?>"><?php echo $page_title ?></a>
				</li>
			<?php
			}
			?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Kategorije
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
					$sql = "SELECT * FROM category";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) {
						$category_id = $row['category_id'];
						$category_name = $row['category_name'];

					?>
						<a class="dropdown-item" href="category.php?id=<?php echo $category_id ?>"><?php echo $category_name; ?></a>
					<?php
					}
					?>
				</div>
			</li>
		</ul>
		<form action="search.php" class="form-inline my-2 my-lg-0">
			<input name="s" class="form-control mr-sm-2" type="search" placeholder="Pretraži blog" aria-label="Search">
			<button class="btn btn-outline-danger my-2 my-sm-0 text-light" type="submit">Search</button>
		</form>
	</div>
</nav>