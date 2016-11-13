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
<div class="container">

    <!-- reservation -->
    <div class="height40"></div>
    <div class="centered"><h1>Mes réservations</h1></div>

    <!-- reservation 1 -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <button class="btn btn-default" id="boutonReservation1">Paris -> Bordeaux</button>
        </div>
    </div>
    <!-- detail reservation 1 -->
    <div id="reservation1" class="cacherReservation">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4>Date</h4>
                <p>15/11/2016 à 16:03</p>
                <h4>Nombre de passagers</h4>
                <p>1</p>
                <h4>Avion</h4>
                <p>DC-8</p>
                <h4>Classe en cabine</h4>
                <p>Economique</p>
                <h4>Options</h4>
                <p>Assurance</p>
                <p>Animal de compagnie</p>
                <div class="centered">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Modifier</button>
                        <button type="button" class="btn btn-default">Annuler</button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- reservation 2 -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <button class="btn btn-default" id="boutonReservation2">Bordeaux -> Paris</button>
        </div>
    </div>
    <!-- detail reservation 2 -->
    <div id="reservation2" class="cacherReservation">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4>Date</h4>
                <p>23/11/2016 à 10:24</p>
                <h4>Nombre de passagers</h4>
                <p>1</p>
                <h4>Avion</h4>
                <p>DC-8</p>
                <h4>Classe en cabine</h4>
                <p>Economique</p>
                <h4>Options</h4>
                <p>Assurance</p>
                <p>Animal de compagnie</p>
                <div class="centered">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Modifier</button>
                        <button type="button" class="btn btn-default">Annuler</button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- reservation 3 -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <button class="btn btn-default" id="boutonReservation3">Paris -> Toulouse</button>
        </div>
    </div>
    <!-- detail reservation 3 -->
    <div id="reservation3" class="cacherReservation">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4>Date</h4>
                <p>10/12/2016 à 09:20</p>
                <h4>Nombre de passagers</h4>
                <p>2</p>
                <h4>Avion</h4>
                <p>Boeing 707</p>
                <h4>Classe en cabine</h4>
                <p>Affaire</p>
                <h4>Options</h4>
                <p>Assurance</p>
                <p>Animal de compagnie</p>
                <p>Repas végétarien</p>
                <div class="centered">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Modifier</button>
                        <button type="button" class="btn btn-default">Annuler</button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
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

    /* Cacher - Afficher réservations */
    /* Reservation 1 */
    var test1 = document.getElementById("reservation1");
    $(document).ready(function(){

        $("#boutonReservation1").click(function(){
            if (test1.className == "cacherReservation"){
                $("#reservation1").removeClass('cacherReservation');
            }
            else{
                $("#reservation1").addClass('cacherReservation');
            }
        });
    });

    /* Reservation 2 */
    var test2 = document.getElementById("reservation2");
    $(document).ready(function(){

        $("#boutonReservation2").click(function(){
            if (test2.className == "cacherReservation"){
                $("#reservation2").removeClass('cacherReservation');
            }
            else{
                $("#reservation2").addClass('cacherReservation');
            }
        });
    });

    /* Reservation 3 */
    var test3 = document.getElementById("reservation3");
    $(document).ready(function(){

        $("#boutonReservation3").click(function(){
            if (test3.className == "cacherReservation"){
                $("#reservation3").removeClass('cacherReservation');
            }
            else{
                $("#reservation3").addClass('cacherReservation');
            }
        });
    });
</script>


</body>
</html>