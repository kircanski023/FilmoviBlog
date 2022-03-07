<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Klub/O nama</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!-- Ikone -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->

    <?php include_once "includes/navBar.php"; ?>

    <!-- O NAMA -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>O NAMA</h1><br>
            Osnovna delatnost preduzeća je uvoz i distribucija filmova za prikazivanje u bioskopskoj i TV
            mreži, kao i izdavanje filmova i ostalih programa na DVD-u.<br><br>
            Osim izdavačke delatnosti, firma se bavi i pružanjem tehničkih usluga, izradom DVD autoringa,
            replikacijom DVD-a, prevođenjem filmova i raznih programa i izradom srpski titlovanih mastera na
            raznim formatima, kao i grafičkim dizajnom.<br><br>

            <h2>Često postavljana pitanja :</h2><br>
            <p>Koje su prednosti online prodavnice?<br><br>
                Online kupovina naših filmova je pre svega omogućena zbog teže dostupnosti Van većih gradova, kao i zbog
                nepotpune ponude, čak i u većim i dobro snabdevenim objektima. To je način da nabavite sve ono što ste
                propustili, a periodično će samo korisnicima naše online prodavnice biti ponuđene posebne akcije u
                kojima će biti stimulisani dodatnim popustima.<br>
                Moguće je takođe za neke najavljene naslove izvršiti narudžbinu unapred, tako da će Vam naručeni film
                biti isporučen onog dana kada se pusti u promet.<br><br>
                Kakva je procedura naručivanja filmova?<br><br>
                Korišćenjem sistema korpe i kompletiranjem Vaše narudžbine, uz popunjavanje svih obaveznih polja, Vaša
                narudžbina se uzima u postupak istog dana, ako stigne do 12:00 sati, ili sledećeg dana za porudžbine
                pristigle posle 12:00 sati. Za one koji prvi put poručuju preko online prodavnice, moguća je telefonska
                provera verodostojnosti narudžbine, kao i provera saglasnosti roditelja u slučaju kada je narudžbinu
                sačinilo maloletno lice.</p>
        </div>
    </div>

    <div container-fluid padding>
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Naše lokacije :</h1>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#zr">Zrejnanin<br>Pupinova 3</button>
                <div id="zr" class="container-fluid padding collapse">
                    <div class="card">
                        <img class="card-img-top" src="img/pupinova.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Zrejnanin, Pupinova 3</h4>
                            <p class="card-text">
                                Telefon:<br>060 123 412<br>Mail:<br>filmovi@zr.com<br>
                            </p>
                            <hr class="light">
                            <p>Radno vreme:</p>
                            <p>Ponedeljak 9-17h</p>
                            <p>Subota 10-16h</p>
                            <p>Nedeljom zatvoreno</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#bg">UŠĆE BEOGRAD -
                    TC
                    Ušce<br>Bulevar Mihajla Pupina</button>
                <div id="bg" class="container-fluid padding collapse">

                    <div class="card">
                        <img class="card-img-top" src="img/usce.jpg">
                        <div class="card-body">
                            <h4 class="card-title">UŠĆE BEOGRAD - TC
                                Ušce<br>Bulevar Mihajla Pupina</h4>
                            <p class="card-text">
                                Telefon:<br>064 123 123<br>Mail:<br>filmovi@bg.com<br>
                            </p>
                            <hr class="light">
                            <p>Radno vreme:</p>
                            <p>Ponedeljak 9-17h</p>
                            <p>Subota 10-16h</p>
                            <p>Nedeljom zatvoreno</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#ns">Novi Sad<br>BiG
                    Shopping Center</button>
                <div id="ns" class="container-fluid padding collapse">

                    <div class="card">
                        <img class="card-img-top" src="img/bigns.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Novi Sad, BiG
                                Shopping Center</h4>
                            <p class="card-text">
                                Telefon:<br>062 768 673<br>Mail:<br>filmovi@ns.com<br>
                            </p>
                            <hr class="light">
                            <p>Radno vreme:</p>
                            <p>Ponedeljak 9-17h</p>
                            <p>Subota 10-16h</p>
                            <p>Nedeljom zatvoreno</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Footer -->
    <?php include_once "includes/footer.php"; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scroll.js"></script>
</body>

</html>