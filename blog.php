<?php
include_once "includes/functions.php";
include_once "includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmovi/Blog</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!-- Ikone -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->

    <?php include_once "includes/blogNav.php"; ?>

    <div container-fluid padding>
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Blog</h1>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <?php
        $sql = "SELECT * FROM `post` ORDER BY post_id DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $post_title = $row['post_title'];
            $post_image = $row['post_image'];
            $post_author = $row['post_author'];
            $post_content = $row['post_content'];
            $post_id = $row['post_id'];
            $post_date = $row['post_date'];

            $sqlauth = "SELECT * FROM author WHERE author_id='$post_author'";
            $resultauth = mysqli_query($conn, $sqlauth);
            while ($authrow = mysqli_fetch_assoc($resultauth)) {
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
                            <p class="card-text"><?php echo substr(strip_tags($post_content), 0, 120) . "..."; ?></p>
                            <a href="post.php?id=<?php echo $post_id; ?>" class="btn btn-primary">Nastavi sa čitanjem</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: 250px;" src="<?php echo $post_image ?>" data-holder-rendered="true">
                    </div>
                </div>

        <?php }
        } ?>
        <br><br>
    </div>
    </div>
    <!--- Footer -->

    <?php include_once "includes/footer.php"; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scroll.js"></script>
</body>

</html>