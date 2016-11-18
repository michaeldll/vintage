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
    <link href="https://fonts.googleapis.com/css?family=Roboto|Taviraj" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include("navbar.php"); ?>
<div class="container-fluid">

    <div class="row">
        <!-- contact partie gauche -->
        <div class="col-md-6 sidebar fondCuirBleu whiteText">
            <div class="height40"></div>
            <h1 class="marginBottom20">Vous souhaitez en savoir plus ?</h1>
            <h4>Notre équipe est prête à répondre à vos questions.</h4></h3>
            <div class="row marginTop40">
                <div class="col-md-3">
                    <h4 class="marginTop20">Email :</h4>
                    <h4 class="marginTop20">Téléphone :</h4>
                    <h4 class="marginTop20">Réseaux<br/>sociaux :</h4>
                </div>
                <div class="col-md-9">
                    <h4 class="marginTop20">vintage@wings.fr</h4>
                    <h4 class="marginTop20">+33 (0)1.02.03.04.05</h4>
                    <div class="row marginTop20">
                        <div class="col-md-2 noPadding"><img src="../img/blancfb.svg" class="logoReseau"></div>
                        <div class="col-md-2 noPadding"><img src="../img/blanctwitter.svg" class="logoReseau"></div>
                        <div class="col-md-2 noPadding"><img src="../img/blancinsta.svg" class="logoReseau"></div>
                        <div class="col-md-2 noPadding"><img src="../img/blancyt.svg" class="logoReseau"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4><a href="https://www.google.fr/maps/place/A%C3%A9roport+de+Paris+-+Le+Bourget/@48.9588697,2.4270812,13.5z/data=!4m5!3m4!1s0x47e66b16c1305e17:0xb73c3697323e1c05!8m2!3d48.9614725!4d2.437202" id="gMaps" class="footerLink whiteText"><img src="../img/map-marker.svg" class="mapMarker">Retrouver nous sur Google Maps</a></h4>
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=14k3BYZL9IZGecGBzq9i37SAz_Go&z=13" width="640" height="480" class="margintop"></iframe>
                </div>
            </div>
        </div>

        <!-- contact partie droite -->
        <div class="col-md-6">
            <div class="height40"></div>
            <h1 class="marginBottom20">Faites nous savoir vos envies.</h1>
            <h4>Grâce à vous, nous pourrons améliorer notre compagnie pour votre bonheur.</h4>
            <form action="#" method="post" class="marginTop50">
                <p>
                    <div class="input-group marginBottom20">
                        <span class="input-group-addon couleurBleu whiteText"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control couleurBleu whiteText" type="text" placeholder="Nom">
                    </div>
                </p>
                <p>
                    <div class="input-group marginBottom20">
                        <span class="input-group-addon couleurBleu whiteText"><i class="fa fa-at" aria-hidden="true"></i></span>
                        <input class="form-control couleurBleu whiteText" type="text" placeholder="Email">
                    </div>
                </p>
                <p>
                <div class="input-group marginBottom20">
                    <span class="input-group-addon couleurBleu whiteText"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input class="form-control couleurBleu whiteText" type="text" placeholder="Téléphone">
                </div>
                </p>
                <p>
                    <div class="input-group">
                        <span class="input-group-addon couleurBleu whiteText"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <textarea class="form-control couleurBleu whiteText" rows="5" placeholder="Votre message"></textarea>
                    </div>
                </p>
                <p>
                    <div class="centered marginTop40">
                        <input type="submit" value="Envoyer" class="btn btn-lg btn-gold"/>
                    </div>
                </p>
            </form>
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

    /* ScrollTo */
    $(document).ready(function() {
        $('.js-scrollTo').on('click', function() {
            var page = $(this).attr('href');
            var speed = 750;
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed );
            return false;
        });
    });

</script>

</body>
</html>