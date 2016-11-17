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
    <link href="../css/reservation.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway|Taviraj" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php include("navbar.php"); ?>

<div class="container">
    <div class="page-header">
        <h1> Retrouvez vos billets ici.</h1>
    </div>
</div>
<div class="container">
    <!-- reservation 1 -->
    <div class="row">
        <div class="col-xs-12 billet">
            <div class="col-xs-8">
            <h2 class="numReservation">RESERVATION N°1</h2>
            <table class="aller">
            <tr>
                <th class="allerRetour">Aller</th>
            </tr>
            <tr>
                <td class="pad5">DE BOURGET</td>
                <td class="pad5">
                    <div class="modifGaucheGauche">
                        <a href="#"><img src="../img/modif.png"></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="pad5">A BORDEAUX</td>
                <td class="pad5">
                    <div class="modifGaucheGauche">
                        <a href="#"><img src="../img/modif.png"></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="pad5">24 DEC 2016   16:03</td>
                <td class="pad5">
                    <div class="modifGaucheGauche">
                        <a href="#"><img src="../img/modif.png"></a>
                    </div>
                </td>
            </tr>
            </table>
            <table class="retour">
                <tr>
                <th class="allerRetour">Retour</th>
                </tr>
                <tr>
                <td class="pad5">DE BORDEAUX</td>
                <td class="pad5">
                    <div class="modifGaucheDroite">
                        <a href="#"><img src="../img/modif.png"></a>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="pad5">A BOURGET</td>
                <td class="pad5">
                    <div class="modifGaucheDroite">
                        <a href="#"><img src="../img/modif.png"></a>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="pad5">29 DEC 2016   10:26</td>
                <td class="pad5">
                    <div class="modifGaucheDroite">
                        <a href="#"><img src="../img/modif.png"></a>
                    </div>
                </td>
                </tr>
                </table>
                <table class="details">
                <tr>
                <td class="classe"><span>Classe</span>: Economique</td>
                <td class="place"><span>Place</span>: 28B</td>
                <td class="prix"><span>Prix</span>: 80.00€</td>
                <td class="reference"><span>Référence</span>: 782563</td>
                </tr>
                </table>
            </div>
            <div class="col-xs-4">
                <table class="passager">
                    <tr>
                        <th>Nom du Passager</th>
                    </tr>
                    <tr>
                        <td>JOHN DOE</td>
                    <td>
                        <div class="modifDroite">
                            <a href="#"><img src="../img/modif.png"></a>
                        </div>
                    </td>
                    </tr>
                    <tr>
                        <th>Appareil</th>
                    </tr>
                    <tr>
                        <td>CARAVELLE</td>
                        <td>
                            <div class="modifDroite">
                                <a href="#"><img src="../img/modif.png"></a>
                            </div>
                        </td>   
                    </tr>
                    <tr>
                        <th>Place</th>
                    </tr>
                    <tr>
                        <td>28 B</td>
                    <td>
                        <div class="modifDroite">
                            <a href="#"><img src="../img/modif.png"></a>
                        </div>
                    </td>
                    </tr>
                    <tr>
                        <th>Option(s)</th>
                    </tr>
                    <tr>
                        <td>SANS</td>
                    <td>
                        <div class="modifDroite">
                            <a href="#"><img src="../img/modif.png"></a>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <!-- reservation 2 -->
    <div class="billetFond">

    </div>




</div> <!-- fin container -->
<?php include('footer.php'); ?>
<script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script>//hehe - mike
    function pleaseDontCrashBrowser(){
        // loop ici
        for (i = 0; i <= 1; i++) {
            // nouveau lol
            setTimeout(function(){
                $("#displayPanel").append('');
            }, 200*i);
        }
    }

    /*PANIER: Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    /*PANIER: Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }


    /* SLIDE SECURITE */
    $(document).ready(function(){
        $(".securite-hover").click(function(){
            $(".panel").slideToggle("slow");
        });
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
        $(".slide5").click(function(){
            $(".panel5").slideToggle("slow");
        });
    });

</script>
</body>
</html>