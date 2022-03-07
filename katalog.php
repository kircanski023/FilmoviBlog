<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Klub/Katalog</title>
   <link rel="stylesheet" href="style/bootstrap.min.css">
    
    <!-- Ikone -->
    <script src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>

    <link href="style/style.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->

    <?php include_once "includes/navBar.php"; ?>

    
    <h1 class="text-center display-4 text-black py-2">Katalog proizvoda</h1>
    <!--Banner-->
    
    <figure>

        <div class="fixed-wrap ">
            <div id="fixed">
            </div>
        </div>
    </figure>
    <hr>
    </div>


    <!--Carousel Wrapper-->
    <button class="fun" data-toggle="collapse" data-target="#multi-item-example">
        <h4>Filmovi</h4>
    </button>
    <div id="multi-item-example" class="carousel slide carousel-multi-item bg-dark collapse" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top text-center pt-3">
            <a class="btn-floating px-5" href="#multi-item-example" data-slide="prev"><i
                    class="fas fa-chevron-left"></i></a>
            <a class="btn-floating px-5" href="#multi-item-example" data-slide="next"><i
                    class="fas fa-chevron-right"></i></a>
        </div>

        <!--Slides-->
        <div class="carousel-inner">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/godfather.jpeg">
                        <div class="card-body">
                            <h4 class="card-title">The Godfather</h4>
                            <p class="card-text">
                                John john john john john
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/The_Shawshank_Redemption.jpg">
                        <div class="card-body">
                            <h4 class="card-title">The Shawshank Redemption</h4>
                            <p class="card-text">
                                Marie marie marie marie
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/forest.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Forrest Gump</h4>
                            <p class="card-text">
                                John john john john john
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/pulpFiction.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Pulp Fiction</h4>
                            <p class="card-text">
                                Marie marie marie marie
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>

            </div>

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/goodBadUgly.jpg">
                        <div class="card-body">
                            <h4 class="card-title">The Good, the Bad and the Ugly</h4>
                            <p class="card-text">
                                Phil phil phil phil phil phil
                            </p>
                            <a href="#" class="btn btn-outline-secondary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/thematrix.jpg">
                        <div class="card-body">
                            <h4 class="card-title">The matrix</h4>
                            <p class="card-text">
                                Phil phil phil phil phil phil
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/inception.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Inception</h4>
                            <p class="card-text">
                                Phil phil phil phil phil phil
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="float:left">
                    <div class="card">
                        <img class="card-img-top" src="img/fightClub.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Fight Club</h4>
                            <p class="card-text">
                                Phil phil phil phil phil phil
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                        </div>
                    </div>
                </div>
            </div> 
            
        </div>

        <!--Bottom controls-->
        <div class="controls-bottom text-center pb-3 md-12">
            <a id="strelice" class="btn-floating px-5" href="#multi-item-example" data-slide="prev"><i
                    class="fas fa-chevron-left"></i></a>
            <a class="btn-floating px-5" href="#multi-item-example" data-slide="next"><i
                    class="fas fa-chevron-right"></i></a>                   
        </div>
        <button class="fun" data-toggle="collapse" data-target="#multi-item-example">
                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </button> 
    </div>
    <hr>

    <!--Carousel Wrapper-->

    <button class="fun" data-toggle="collapse" data-target="#odeca">
        <h4>Odeća</h4>
    </button>   
    <div id="odeca" class="bg-dark collapse">

        <div class="col-lg-3 col-md-6" style="float:left">
            <div class="card">
                <img class="card-img-top" src="img/vkDuks.png">
                <div class="card-body">
                    <h4 class="card-title">VIDEOKLUB&copy; duks</h4>
                    <p class="card-text">
                        John john john john john
                    </p>
                    <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6" style="float:left">
            <div class="card">
                <img class="card-img-top" src="img/pulp-fiction-shirt.jpg">
                <div class="card-body">
                    <h4 class="card-title">Pulp Fiction&copy; majica</h4>
                    <p class="card-text">
                        Marie marie marie marie
                    </p>
                    <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6" style="float:left">
            <div class="card">
                <img class="card-img-top" src="img/strangerThingsDuks.jpg">
                <div class="card-body">
                    <h4 class="card-title">Stranger Things&copy; duks</h4>
                    <p class="card-text">
                        John john john john john
                    </p>
                    <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6" style="float:left">
            <div class="card">
                <img class="card-img-top" src="img/starWarsShirt.jpg">
                <div class="card-body">
                    <h4 class="card-title">Star Wars&copy; majica</h4>
                    <p class="card-text">
                        Marie marie marie marie
                    </p>
                    <a href="#" class="btn btn-outline-secondary">Saznaj vise</a>
                </div>
            </div>
        </div>
        <button class="fun" data-toggle="collapse" data-target="#odeca">
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </button> 
    </div>


    <!--- Footer -->
    <?php include_once "includes/footer.php"; ?>
    
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>
</body>

</html>