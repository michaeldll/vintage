<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Vintage Wings"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.vintagewings.com" />
    <meta property="og:image" content="http://www.vintagewings.com/images/og.jpg" />
    <meta name="description" content="Reservez un voyage dans un avion légéndaire!">
    <meta name="author" content="Vintage Wings">
    <meta name="keywords" content="Vintage, Wings, Vol, Reservation">
    <link rel="icon" type="image/ico" href="../img/favicon.ico">
    <title>Vintage Wings</title>
    <script src="https://use.fontawesome.com/ffa9c99182.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/baseStyle.css" rel="stylesheet">
    <link href="../zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @media screen and (max-width: 1200px){
            html{
                width: 1200px;
            }
        }
    </style>
</head>
<body>
<?php include("navbar.php"); ?>

<div class="jumbotron jumboCompte">
    <div class="container marginTop180">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="centered">
                    <img src="../img/user.svg" height="20%" width="20%">
                    <h2 class="whiteText marginL15">Mon compte</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- navbar compte -->
<nav class="navbar height60">
    <div class="container navCompte">
        <div class="navbar-header">
            <!-- version collapsée navbar -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCompte" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="row" id="navbarCompte">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="centered">
                    <ul class="nav navbar-nav">
                        <li><a class="text-uppercase monCompte cacherResa cacherMoyen boutonCompte gras"><h4>Mon compte</h4></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="centered">
                    <ul class="nav navbar-nav">
                        <li><a class="text-uppercase cacherMonCompte resa cacherMoyen boutonCompte"><h4>Mes reservations</h4></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="centered">
                    <ul class="nav navbar-nav">
                        <li><a class="text-uppercase cacherMonCompte cacherResa moyen boutonCompte"><h4>Moyens de paiements</h4></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- contenu compte -->
<div class="container">
    <div class="height40"></div>

    <!-- index compte -->
    <div class="affichMonCompte affichage">
        <div class="row borderedDiv">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-4 marginTop10">
                        <img src="../img/user.svg" height="100%" width="100%">
                    </div>
                    <div class="col-md-8 marginTop20">
                        <p><a href="#" class="footerLink">Modifier</a></p>
                        <p><a href="#" class="footerLink">Supprimer</a></p>
                    </div>
                </div>
                <p  class="marginTop10">
                    <input type="text" class="form-control" value="Prénom" disabled="disabled">
                </p>
                <p>
                    <input type="text" class="form-control" value="Nom" disabled="disabled">
                </p>
                <p>
                    <input type="date" class="form-control" value="1900-01-01" disabled="disabled">
                </p>
            </div>
            <div class="col-md-7">
                <div class="row">

                    <div class="col-md-8 marginTop10">
                        <form action="#" method="post">
                            <p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                                <input class="form-control" type="text" value="user@mail.com">
                            </div>
                            </p>
                            <p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input class="form-control" type="text" placeholder="Téléphone">
                            </div>
                            </p>
                            <p>
                            <div class="input-group">
                                <span class="input-group-addon">Nouveau mot de passe</span>
                                <input class="form-control" type="password">
                            </div>
                            </p>
                            <p>
                            <div class="input-group">
                                <span class="input-group-addon">Confirmer mot de passe</span>
                                <input class="form-control" type="password">
                            </div>
                            </p>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">Abonnement</span>
                                        <select class="form-control">
                                            <option value="1">Aucun</option>
                                            <option>Carte week-end</option>
                                            <option>Carte vols réguliers</option>
                                            <option>Carte "première"</option>
                                            <option>Carte jeune</option>
                                            <option>Carte famille</option>
                                            <option>Carte club</option>
                                            <option>Carte militaires</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="newsletter">Newsletter</label>
                                    <input type="checkbox" name="newsletter">
                                </div>
                            </div>
                            <p>
                            <div class="centered marginTop20">
                                <input type="submit" value="Modifier" class="btn btn-gold"/>
                            </div>
                            </p>
                        </form>
                    </div>

                    <div class="col-md-4 marginTop50">
                        <div class="centered">
                            <img src="../img/user.svg" height="45%" width="45%">
                        </div>
                        <div class="centered">
                            <h4>300</h4>
                        </div>
                        <div class="centered">
                            <p><a href="#" class="footerLink">Comment en avoir plus ?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- moyens de paiements -->
    <div class="affichMoyen height298">
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <div class="input-group">
                        <span class="input-group-addon">Moyens de paiement</span>
                        <select class="form-control">
                            <option value="1">Visa</option>
                            <option>Mastercard</option>
                            <option>American Express</option>
                        </select>
                    </div>
                    </p>
                    <p>
                        <div class="input-group">
                            <span class="input-group-addon">Numéro de carte</span>
                            <input type="number" class="form-control">
                        </div>
                    </p>
                    <p>
                    <div class="input-group">
                        <span class="input-group-addon">Date d'expiration</span>
                        <input type="month" class="form-control" min="11-2016">
                    </div>
                    </p>
                    <div class="input-group">
                        <span class="input-group-addon">Code de sécurité</span>
                        <input type="number" class="form-control" min="1" max="999">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>
                        <div class="input-group">
                            <span class="input-group-addon">Nom</span>
                            <input type="text" class="form-control">
                        </div>
                    </p>
                    <p>
                        <div class="input-group">
                            <span class="input-group-addon">Adresse</span>
                            <input type="text" class="form-control">
                        </div>
                    </p>
                    <p>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">Ville</span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">CP</span>
                                <input type="number" class="form-control" max="99999">
                            </div>
                        </div>
                    </div>
                    </p>
                    <p>
                    <div class="input-group">
                        <span class="input-group-addon">Adresse</span>
                        <input type="text" class="form-control">
                    </div>
                    </p>
                </div>
                <div class="centered marginTop20">
                    <input type="submit" value="Valider" class="btn btn-gold"/>
                </div>
            </div>
        </form>
    </div>

    <!-- réservations -->
    <div class="affichResa affichage">
        <div class="row borderedDiv">
            <div class="col-md-3 borderedRightDiv height298">
                <nav class="nav-sidebar">
                    <ul class="nav tabs">
                        <li class="active"><a href="#tab0" class="footerLink" data-toggle="tab">Mes réservations</a></li>
                        <li class=""><a href="#tab1" class="footerLink" data-toggle="tab">Historique billets</a></li>
                        <li class=""><a href="#tab2" class="footerLink" data-toggle="tab">Historique boutique</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9 scrollDiv">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab0">
                        <div class="row borderedDiv">
                            <div class="col-md-6">
                                <h3>Aller</h3>
                                <h4>Paris <i class="fa fa-arrow-right" aria-hidden="true"></i> Bordeaux</h4>
                                <h4>Date</h4>
                                <p>24/12/2016 à 16:03</p>
                                <h4>Nombre de passagers</h4>
                                <p>1</p>
                                <h4>Avion</h4>
                                <p>Caravelle</p>
                                <h4>Classe en cabine</h4>
                                <p>Economique</p>
                            </div>
                            <div class="col-md-6">
                                <h3>Retour</h3>
                                <h4>Bordeaux <i class="fa fa-arrow-right" aria-hidden="true"></i> Paris</h4>
                                <h4>Date</h4>
                                <p>29/11/2016 à 10:26</p>
                                <h4>Nombre de passagers</h4>
                                <p>1</p>
                                <h4>Avion</h4>
                                <p>Caravelle</p>
                                <h4>Classe en cabine</h4>
                                <p>Economique</p>
                            </div>
                        </div>
                        <div class="centered">
                            <a href="reservation.php" class="footerLink">Voir plus</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab1">
                        <div class="row borderedDiv">
                            <div class="col-md-6">
                                <h3>Aller</h3>
                                <h4>Paris <i class="fa fa-arrow-right" aria-hidden="true"></i> Lyon</h4>
                                <h4>Date</h4>
                                <p>08/11/2016 à 16:03</p>
                                <h4>Nombre de passagers</h4>
                                <p>1</p>
                                <h4>Avion</h4>
                                <p>DC-3</p>
                                <h4>Classe en cabine</h4>
                                <p>Economique</p>
                            </div>
                            <div class="col-md-6">
                                <h3>Retour</h3>
                                <h4>Lyon <i class="fa fa-arrow-right" aria-hidden="true"></i> Paris</h4>
                                <h4>Date</h4>
                                <p>15/11/2016 à 10:24</p>
                                <h4>Nombre de passagers</h4>
                                <p>1</p>
                                <h4>Avion</h4>
                                <p>DC-3</p>
                                <h4>Classe en cabine</h4>
                                <p>Economique</p>
                            </div>
                        </div>
                        <div class="row borderedDiv">
                            <div class="col-md-6">
                                <h3>Aller</h3>
                                <h4>Paris <i class="fa fa-arrow-right" aria-hidden="true"></i> Toulouse</h4>
                                <h4>Date</h4>
                                <p>02/11/2016 à 09:20</p>
                                <h4>Nombre de passagers</h4>
                                <p>2</p>
                                <h4>Avion</h4>
                                <p>Boeing 707</p>
                                <h4>Classe en cabine</h4>
                                <p>Affaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="borderedDiv">
                            <h3>15/11/2016</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="#" data-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                </div>
                                            </div>
                                            <img src="../img/ticket.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="card-block">
                                            <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                                            <h4 class="card-title">TICKET D'OR</h4>
                                            <p class="card-text heart">34€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="#" data-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                </div>
                                            </div>
                                            <img src="../img/ticket.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="card-block">
                                            <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                                            <h4 class="card-title">TICKET D'OR</h4>
                                            <p class="card-text heart">34€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="#" data-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                </div>
                                            </div>
                                            <img src="../img/ticket.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="card-block">
                                            <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                                            <h4 class="card-title">TICKET D'OR</h4>
                                            <p class="card-text heart">34€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="#" data-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                </div>
                                            </div>
                                            <img src="../img/ticket.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="card-block">
                                            <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                                            <h4 class="card-title">TICKET D'OR</h4>
                                            <p class="card-text heart">34€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="borderedDiv">
                            <h3>05/11/2016</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="#" data-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                </div>
                                            </div>
                                            <img src="../img/ticket.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="card-block">
                                            <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                                            <h4 class="card-title">TICKET D'OR</h4>
                                            <p class="card-text heart">34€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="#" data-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                </div>
                                            </div>
                                            <img src="../img/ticket.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="card-block">
                                            <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                                            <h4 class="card-title">TICKET D'OR</h4>
                                            <p class="card-text heart">34€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="height40"></div>
<!-- footer -->
<?php include('footer.php'); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../zoombox/zoombox.js"></script>
<script>//hehe - mike
    function pleaseDontCrashBrowser(){
        // loop ici
        for (i = 0; i <= 1; i++) {
            // nouveau lol
            setTimeout(function(){
                $("#hehe").append('<div class="rotate"><div class="lol"><h2>BOOTSTRAP LOL</h2></div></div>');
            }, 200*i);
        }
    }

    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    /* Affichage compte */
    $(document).ready(function(){
        /* Compte */
        $(".cacherMonCompte").click(function(){
            $(".affichMonCompte").addClass('affichage');
            $(".monCompte").removeClass('gras');
        });
        $(".monCompte").click(function(){
            $(".affichMonCompte").removeClass('affichage');
            $(this).addClass('gras');
        });

        /* Resa */
        $(".cacherResa").click(function(){
            $(".affichResa").addClass('affichage');
            $(".resa").removeClass('gras');
        });
        $(".resa").click(function(){
            $(".affichResa").removeClass('affichage');
            $(this).addClass('gras');
        });

        /* Paiement */
        $(".cacherMoyen").click(function(){
            $(".affichMoyen").addClass('affichage');
            $(".moyen").removeClass('gras');
        });
        $(".moyen").click(function(){
            $(".affichMoyen").removeClass('affichage');
            $(this).addClass('gras');
        });

        /* Curseur au survol */
        $(".boutonCompte").addClass(function(){
            $(this).css('cursor','pointer');
        });
    });

</script>

</body>
</html>