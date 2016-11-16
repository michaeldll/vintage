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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 noPadding">
            <img src="../img/hey.png" class="img100">
        </div>
    </div>
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
                <div class="col-md-3">
                    <div class="centered">
                        <ul class="nav navbar-nav">
                            <li><a class="text-uppercase avion1 cacherAvion2 cacherAvion3 cacherAvion4 boutonAvion"><h4>Boeing 707</h4></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="centered">
                        <ul class="nav navbar-nav">
                            <li><a class="text-uppercase avion2 cacherAvion1 cacherAvion3 cacherAvion4 boutonAvion"><h4>Ford Trimotor</h4></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="centered">
                        <ul class="nav navbar-nav">
                            <li><a class="text-uppercase avion3 cacherAvion2 cacherAvion1 cacherAvion4 boutonAvion"><h4>Caravelle</h4></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="centered">
                        <ul class="nav navbar-nav">
                            <li><a class="text-uppercase avion4 cacherAvion2 cacherAvion3 cacherAvion1 boutonAvion"><h4>Douglas DC-3</h4></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container">

    <!-- description flotte -->
    <!-- <div class="centered"><h1>Notre flotte</h1></div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam leo, tincidunt sed magna id, efficitur pulvinar leo. Donec neque mauris, placerat ac congue ac, scelerisque ac elit. Nullam dignissim metus elit, quis rhoncus libero molestie vel. Etiam aliquet, arcu quis tempor venenatis, ligula risus blandit mauris, aliquam scelerisque nisl arcu id lectus.
            </p>
        </div>
        <div class="col-md-1"></div>
    </div> -->

    <div class="height40"></div>

    <!-- description avion 1 -->
    <div class="row height60 affichAvion1">
        <div class="col-md-3 noPadding">
            <div class="imgFlotteGauche"></div>
        </div>
        <div class="col-md-6">
            <div class="centered">
                <h3 class="text-uppercase blueText">Boeing 707</h3>
            </div>
        </div>
        <div class="col-md-3 noPadding">
            <div class="imgFlotteDroite"></div>
        </div>
    </div>
    <div class="row marginBottom40 affichAvion1">
        <div class="col-md-3 paddingTop20">
            <div class="centered">
                <h4 class="text-uppercase blueText">Histoire</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
            </p>
        </div>
        <div class="col-md-6 noPadding">

            <!-- carousel avion 1 -->
            <div id="sliderAvion1" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#sliderAvion1" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderAvion1" data-slide-to="1"></li>
                    <li data-target="#sliderAvion1" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <a href="../img/hey.png" title="avion1" class="zoombox zgallery1"><img src="../img/hey.png" width="100%" height="100%"></a>
                    </div>
                    <div class="item">
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
        </div>
    </div>

    <!-- description avion 2 -->
    <div class="row height60 affichage affichAvion2 avionTitre">
        <div class="col-md-3 noPadding">
            <div class="imgFlotteGauche"></div>
        </div>
        <div class="col-md-6">
            <div class="centered">
                <h3 class="text-uppercase blueText">Ford Trimotor</h3>
            </div>
        </div>
        <div class="col-md-3 noPadding">
            <div class="imgFlotteDroite"></div>
        </div>
    </div>
    <div class="row marginBottom40 affichage affichAvion2 avionDescrip">
        <div class="col-md-3 paddingTop20">
            <div class="centered">
                <h4 class="text-uppercase blueText">Histoire</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
            </p>
        </div>
        <div class="col-md-6 noPadding">

            <!-- carousel avion 2 -->
            <div id="sliderAvion2" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#sliderAvion2" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderAvion2" data-slide-to="1"></li>
                    <li data-target="#sliderAvion2" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <a href="../img/hey2.png" title="avion2" class="zoombox zgallery2"><img src="../img/hey2.png" width="100%" height="100%"></a>
                    </div>
                    <div class="item">
                        <a href="../img/hey2.png" title="avion2" class="zoombox zgallery2"><img src="../img/hey2.png" width="100%" height="100%"></a>
                    </div>
                    <div class="item">
                        <a href="../img/hey2.png" title="avion2" class="zoombox zgallery2"><img src="../img/hey2.png" width="100%" height="100%"></a>
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
        </div>
    </div>

    <!-- description avion 3 -->
    <div class="row height60 affichage affichAvion3 avionTitre">
        <div class="col-md-3 noPadding">
            <div class="imgFlotteGauche"></div>
        </div>
        <div class="col-md-6">
            <div class="centered text-uppercase">
                <h3 class="text-uppercase blueText">Caravelle</h3>
            </div>
        </div>
        <div class="col-md-3 noPadding">
            <div class="imgFlotteDroite"></div>
        </div>
    </div>
    <div class="row marginBottom40 affichage affichAvion3 avionDescrip">
        <div class="col-md-3 paddingTop20">
            <div class="centered">
                <h4 class="text-uppercase blueText">Histoire</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
            </p>
        </div>
        <div class="col-md-6 noPadding">

            <!-- carousel avion 3 -->
            <div id="sliderAvion3" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#sliderAvion3" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderAvion3" data-slide-to="1"></li>
                    <li data-target="#sliderAvion3" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <a href="../img/hey.png" title="avion3" class="zoombox zgallery3"><img src="../img/hey.png" width="100%" height="100%"></a>
                    </div>
                    <div class="item">
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
        </div>
    </div>

    <!-- description avion 4 -->
    <div class="row height60 affichage affichAvion4 avionTitre">
        <div class="col-md-3 noPadding">
            <div class="imgFlotteGauche"></div>
        </div>
        <div class="col-md-6">
            <div class="centered text-uppercase">
                <h3 class="text-uppercase blueText">Douglas DC-3</h3>
            </div>
        </div>
        <div class="col-md-3 noPadding">
            <div class="imgFlotteDroite"></div>
        </div>
    </div>
    <div class="row marginBottom40 affichage affichAvion4 avionDescrip">
        <div class="col-md-3 paddingTop20">
            <div class="centered">
                <h4 class="text-uppercase blueText">Histoire</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo laoreet magna, quis sagittis est finibus vel. Quisque aliquam massa eros, quis facilisis ligula sollicitudin a. Duis nec convallis neque. Praesent pharetra, arcu a pharetra placerat, libero arcu fringilla turpis, eu porttitor justo velit ullamcorper odio.
            </p>
        </div>
        <div class="col-md-6 noPadding">

            <!-- carousel avion 4 -->
            <div id="sliderAvion4" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#sliderAvion4" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderAvion4" data-slide-to="1"></li>
                    <li data-target="#sliderAvion4" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <a href="../img/hey.png" title="avion4" class="zoombox zgallery4"><img src="../img/hey.png" width="100%" height="100%"></a>
                    </div>
                    <div class="item">
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

    /* Affichage avions */
    $(document).ready(function(){
        /* Boeing */
        $(".cacherAvion1").click(function(){
            $(".affichAvion1").addClass('affichage');
        });
        $(".avion1").click(function(){
            $(".affichAvion1").removeClass('affichage');
        });

        /* Trimotor */
        $(".cacherAvion2").click(function(){
            $(".affichAvion2").addClass('affichage');
        });
        $(".avion2").click(function(){
            $(".affichAvion2").removeClass('affichage');
        });

        /* Caravelle */
        $(".cacherAvion3").click(function(){
            $(".affichAvion3").addClass('affichage');
        });
        $(".avion3").click(function(){
            $(".affichAvion3").removeClass('affichage');
        });

        /* DC-3 */
        $(".cacherAvion4").click(function(){
            $(".affichAvion4").addClass('affichage');
        });
        $(".avion4").click(function(){
            $(".affichAvion4").removeClass('affichage');
        });

        /* Curseur au survol */
        $(".boutonAvion").addClass(function(){
            $(this).css('cursor','pointer');
        });
    });
</script>

</body>
</html>