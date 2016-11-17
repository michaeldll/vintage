<!DOCTYPE html>
<html lang="fr">
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
<div class="jumbotron jumboFlotte">
</div>

<nav class="navbar">
    <div class="container fondCuirJaune">
        <div class="navbar-header">
            <!-- version collapsée navbar -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarAvion" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarAvion">
            <div class="row">
                <ul class="nav nav-tabs navbarAvion center-block">
                    <li class="active"><a href="#affichAvion1" data-toggle="tab" class="text-uppercase"><h4>Boeing 707</h4></a></li>
                    <li><a href="#affichAvion2" data-toggle="tab" class="text-uppercase"><h4>Ford Trimotor</h4></a></li>
                    <li><a href="#affichAvion3" data-toggle="tab" class="text-uppercase"><h4>Caravelle</h4></a></li>
                    <li><a href="#affichAvion4" data-toggle="tab" class="text-uppercase"><h4>Douglas DC-3</h4></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="centered jumboTexteFlotte"><h1>Notre flotte</h1></div>
            <div class="centered quote">Notre compagnie est le refuge pour ces ingénieux appareils. Témoins rares des techniques aéronautiques les plus avancées de l’époque.</div>
        </div>
    </div>

    <div class="tab-content">
        <div class="height40"></div>

        <!-- description avion 1 -->
        <div class="tab-pane active" id="affichAvion1">
            <div class="row height60">
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign flip marginTop20"></div>
                </div>
                <div class="col-md-4">
                    <div class="centered">
                        <h3 class="text-uppercase blueText">Boeing 707</h3>
                    </div>
                </div>
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign marginTop20"></div>
                </div>
            </div>

            <div class="row marginBottom40">
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Histoire</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                </div>
                <div class="col-md-6">

                    <!-- carousel avion 1 -->
                    <div id="sliderAvion1" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#sliderAvion1" data-slide-to="0" class="active"></li>
                            <li data-target="#sliderAvion1" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="../img/hey.png" title="avion1" class="zoombox zgallery1"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                            <div class="item">
                                <a href="../img/hey.png" title="avion1" class="zoombox zgallery1"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                        </div>
                    </div>
                    <!-- fin carousel avion 1 -->

                </div>
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Embarqué !</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                    <div class="centered">
                        <button class="centered btn btn-blue slide1">Caractéristiques</button>
                    </div>
                </div>

                <!-- Caractéristique avion 1 -->
                <div class="row panel1 marginTop20">
                    <div class="col-md-offset-1 col-md-10">
                        <table class="table table-striped">

                            <tr><td><h3>Généralité</h3></td><td></td></tr>
                            <tr><td><p>Fabricant</p></td><td>Boeing</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>USA</td></tr>
                            <tr><td><p>Année de production</p></td><td>Lorem</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>Lorem</td></tr>
                            <tr><td><p>Type</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Dimensions</h3></td><td></td></tr>
                            <tr><td><p>Longueur x Hauteur</p></td><td>Lorem x Ipsum</td></tr>
                            <tr><td><p>Envergure</p></td><td>Lorem</td></tr>
                            <tr><td><p>Aire ailaire</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Masse et capacité</h3></td><td></td></tr>
                            <tr><td><p>Masse à vide</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en passager</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en fret</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité du réservoir</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Motorisation</h3></td><td></td></tr>
                            <tr><td><p>Moteur</p></td><td>Lorem</td></tr>
                            <tr><td><p>Poussées</p></td><td>Lorem</td></tr>
                            <tr><td><p>Réacteurs</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Performance</h3></td><td></td></tr>
                            <tr><td><p>Vitesse de croisière maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Vitesse maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Autonomie</p></td><td>Lorem</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- description avion 2 -->
        <div class="tab-pane" id="affichAvion2">
            <div class="row height60">
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign flip marginTop20"></div>
                </div>
                <div class="col-md-4">
                    <div class="centered">
                        <h3 class="text-uppercase blueText">Ford Trimotor</h3>
                    </div>
                </div>
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign marginTop20"></div>
                </div>
            </div>
            <div class="row marginBottom40">
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Histoire</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                </div>
                <div class="col-md-6">

                    <!-- carousel avion 2 -->
                    <div id="sliderAvion2" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#sliderAvion2" data-slide-to="0" class="active"></li>
                            <li data-target="#sliderAvion2" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="../img/hey2.png" title="avion2" class="zoombox zgallery2"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                            <div class="item">
                                <a href="../img/hey2.png" title="avion2" class="zoombox zgallery2"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                        </div>
                    </div>
                    <!-- fin carousel avion 2 -->

                </div>
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Embarqué !</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                    <div class="centered">
                        <button class="centered btn btn-blue slide2">Voir plus</button>
                    </div>
                </div>

                <!-- Caractéristique avion 2 -->
                <div class="row panel2">
                    <div class="centered">Caractéristiques</div>
                    <div class="col-md-offset-1 col-md-10">
                        <table class="table table-striped">

                            <tr><td><h3>Généralité</h3></td><td></td></tr>
                            <tr><td><p>Fabricant</p></td><td>Ford</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>USA</td></tr>
                            <tr><td><p>Année de production</p></td><td>Lorem</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>Lorem</td></tr>
                            <tr><td><p>Type</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Dimensions</h3></td><td></td></tr>
                            <tr><td><p>Longueur x Hauteur</p></td><td>Lorem x Ipsum</td></tr>
                            <tr><td><p>Envergure</p></td><td>Lorem</td></tr>
                            <tr><td><p>Aire ailaire</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Masse et capacité</h3></td><td></td></tr>
                            <tr><td><p>Masse à vide</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en passager</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en fret</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité du réservoir</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Motorisation</h3></td><td></td></tr>
                            <tr><td><p>Moteur</p></td><td>Lorem</td></tr>
                            <tr><td><p>Poussées</p></td><td>Lorem</td></tr>
                            <tr><td><p>Réacteurs</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Performance</h3></td><td></td></tr>
                            <tr><td><p>Vitesse de croisière maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Vitesse maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Autonomie</p></td><td>Lorem</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- description avion 3 -->
        <div class="tab-pane" id="affichAvion3">
            <div class="row height60">
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign flip marginTop20"></div>
                </div>
                <div class="col-md-4">
                    <div class="centered">
                        <h3 class="text-uppercase blueText">Caravelle</h3>
                    </div>
                </div>
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign marginTop20"></div>
                </div>
            </div>
            <div class="row marginBottom40">
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Histoire</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                </div>
                <div class="col-md-6 ">

                    <!-- carousel avion 3 -->
                    <div id="sliderAvion3" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#sliderAvion3" data-slide-to="0" class="active"></li>
                            <li data-target="#sliderAvion3" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="../img/hey.png" title="avion3" class="zoombox zgallery3"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                            <div class="item">
                                <a href="../img/hey.png" title="avion3" class="zoombox zgallery3"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                        </div>
                    </div>
                    <!-- fin carousel avion 3 -->

                </div>
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Embarqué !</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                    <div class="centered">
                        <button class="centered btn btn-blue slide3">Voir plus</button>
                    </div>
                </div>

                <!-- Caractéristique avion 3 -->
                <div class="row panel3">
                    <div class="centered">Caractéristiques</div>
                    <div class="col-md-offset-1 col-md-10">
                        <table class="table table-striped">

                            <tr><td><h3>Généralité</h3></td><td></td></tr>
                            <tr><td><p>Fabricant</p></td><td>Sud-Aviation</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>France</td></tr>
                            <tr><td><p>Année de production</p></td><td>Lorem</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>Lorem</td></tr>
                            <tr><td><p>Type</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Dimensions</h3></td><td></td></tr>
                            <tr><td><p>Longueur x Hauteur</p></td><td>Lorem x Ipsum</td></tr>
                            <tr><td><p>Envergure</p></td><td>Lorem</td></tr>
                            <tr><td><p>Aire ailaire</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Masse et capacité</h3></td><td></td></tr>
                            <tr><td><p>Masse à vide</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en passager</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en fret</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité du réservoir</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Motorisation</h3></td><td></td></tr>
                            <tr><td><p>Moteur</p></td><td>Lorem</td></tr>
                            <tr><td><p>Poussées</p></td><td>Lorem</td></tr>
                            <tr><td><p>Réacteurs</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Performance</h3></td><td></td></tr>
                            <tr><td><p>Vitesse de croisière maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Vitesse maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Autonomie</p></td><td>Lorem</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- description avion 4 -->
        <div class="tab-pane" id="affichAvion4">
            <div class="row height60">
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign flip marginTop20"></div>
                </div>
                <div class="col-md-4">
                    <div class="centered">
                        <h3 class="text-uppercase blueText">Boeing 707</h3>
                    </div>
                </div>
                <div class="col-md-4 noPadding">
                    <div class="line aileDoree verticalAlign marginTop20"></div>
                </div>
            </div>
            <div class="row marginBottom40">
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Histoire</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                </div>
                <div class="col-md-6">

                    <!-- carousel avion 4 -->
                    <div id="sliderAvion4" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#sliderAvion4" data-slide-to="0" class="active"></li>
                            <li data-target="#sliderAvion4" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="../img/hey.png" title="avion4" class="zoombox zgallery4"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                            <div class="item">
                                <a href="../img/hey.png" title="avion4" class="zoombox zgallery4"><img src="../img/hey.png" width="100%" height="100%"></a>
                            </div>
                        </div>
                    </div>
                    <!-- fin carousel avion 4 -->

                </div>
                <div class="col-md-3 paddingTop20">
                    <div class="centered">
                        <h4 class="text-uppercase blueText">Embarqué !</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
                    </p>
                    <div class="centered">
                        <button class="centered btn btn-blue slide4">Voir plus</button>
                    </div>
                </div>

                <!-- Caractéristique avion 4 -->
                <div class="row panel4">
                    <div class="centered">Caractéristiques</div>
                    <div class="col-md-offset-1 col-md-10">
                        <table class="table table-striped">

                            <tr><td><h3>Généralité</h3></td><td></td></tr>
                            <tr><td><p>Fabricant</p></td><td>Douglas</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>USA</td></tr>
                            <tr><td><p>Année de production</p></td><td>Lorem</td></tr>
                            <tr><td><p>Pays d'origine</p></td><td>Lorem</td></tr>
                            <tr><td><p>Type</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Dimensions</h3></td><td></td></tr>
                            <tr><td><p>Longueur x Hauteur</p></td><td>Lorem x Ipsum</td></tr>
                            <tr><td><p>Envergure</p></td><td>Lorem</td></tr>
                            <tr><td><p>Aire ailaire</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Masse et capacité</h3></td><td></td></tr>
                            <tr><td><p>Masse à vide</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en passager</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité en fret</p></td><td>Lorem</td></tr>
                            <tr><td><p>Capacité du réservoir</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Motorisation</h3></td><td></td></tr>
                            <tr><td><p>Moteur</p></td><td>Lorem</td></tr>
                            <tr><td><p>Poussées</p></td><td>Lorem</td></tr>
                            <tr><td><p>Réacteurs</p></td><td>Lorem</td></tr>

                            <tr><td><h3>Performance</h3></td><td></td></tr>
                            <tr><td><p>Vitesse de croisière maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Vitesse maximale</p></td><td>Lorem</td></tr>
                            <tr><td><p>Autonomie</p></td><td>Lorem</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- fin container -->

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

    /* Zoombox */
    jQuery(function($){
        $('a.zoombox').zoombox();
    });

    /* Curseur au survol */
    $(document).ready(function(){
        $(".boutonAvion").addClass(function(){
            $(this).css('cursor','pointer');
        });
    });

    /* Affichage caractéristiques avions */
    $(document).ready(function(){
        $(".slide1").click(function(){
            $(".panel1").slideToggle("slow");
        });

        $(".slide2").click(function(){
            $(".panel2").slideToggle("slow");
        });

        $(".slide3").click(function(){
            $(".panel3").slideToggle("slow");
        });

        $(".slide4").click(function(){
            $(".panel4").slideToggle("slow");
        });
    });
</script>

</body>
</html>