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
</head>
<body>
<?php include("navbar.php"); ?>
<div class="container-fluid">

    <div class="row">
        <!-- contact partie gauche -->
        <div class="col-md-6 sidebar contact">
            <div class="height40"></div>
            <h1>Vintage Wings</h1>
            <br/>
            <h3>Vous souhaitez en savoir plus ?</h3>
            <div class="row">
                <div class="col-md-3">
                    <h3>Email :</h3>
                    <h3>Téléphone :</h3>
                    <h3>Réseaux sociaux :</h3>
                </div>
                <div class="col-md-9">
                    <h3>vintagewings@airfrance.fr</h3>
                    <h3>+33 (0)1.02.03.04.05</h3>
                    <span><img src="../img/facebook-logo.svg" class="logoReseau"><img src="../img/twitter-logo.svg" class="logoReseau"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3><a href="https://www.google.fr/maps/place/A%C3%A9roport+de+Paris+-+Le+Bourget/@48.9588697,2.4270812,13.5z/data=!4m5!3m4!1s0x47e66b16c1305e17:0xb73c3697323e1c05!8m2!3d48.9614725!4d2.437202" id="gMaps"><img src="../img/map-marker.svg" class="mapMarker">Retrouver nous sur Google Maps</a></h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29638.712950371195!2d2.427081169215751!3d48.95886970181454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66b16c1305e17%3A0xb73c3697323e1c05!2sA%C3%A9roport+de+Paris+-+Le+Bourget!5e0!3m2!1sfr!2sfr!4v1478615795206" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- contact partie droite -->
        <div class="col-md-6">
            <div class="height40"></div>
            <h1>Faites nous savoir vos envies</h1>
            <br/>
            <form action="#" method="post">
                <p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control" type="text" placeholder="Nom">
                    </div>
                </p>
                <p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                        <input class="form-control" type="text" placeholder="Email">
                    </div>
                </p>
                <p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <textarea class="form-control" rows="5" placeholder="Votre message"></textarea>
                    </div>
                </p>
                <p>
                    <div class="centered">
                        <input type="submit" value="Envoyer" class="btn btn-lg btn-primary"/>
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