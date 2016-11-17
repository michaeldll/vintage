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
    <link href="../css/voltraditionnel.css" rel="stylesheet">
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


<div class="jumbotron">
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-12 centered">
            <div class="col-sm-2 w17">
                <div class="navTop active"><a href="voltraditionnel.php"><h2>VOL TRADITIONNEL</h2></a></div>
            </div>
            <div class="col-sm-2 w17">
                <div class="navTop"><a href="volevenementiel.php"><h2>VOL EVENEMENTIEL</h2></a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="volBack">
            <!-- formulaire reservation -->
            <div class="col-md-offset-1 col-md-10">
            <div class="formulaire1">
                <ul class="nav nav-tabs">
                  <li class="active"><a href=#volTraditionnel data-toggle="tab"></a></li>
                  <li><a href=#volEvent data-toggle="tab"></a></li>
                </ul>

                <!-- contenu onglets -->
                <div class="tab-content">

                  <!-- onglet vol traditionnel -->
                  <div class="tab-pane active" id="volTraditionnel">
                    <form action="#" method="post">
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Départ de :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Arrivée à :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control" type="number" step="1" min="1" value="1"/>
                      </div>
                      </p>
                      <p>
                      <div class="centered">
                        <input type="submit" value="Rechercher" class="btn btn-lg btn-primary"/>
                      </div>
                      </p>
                    </form>
                  </div>
                </div>
                </div>

            <div class="formulaire2">
                <ul class="nav nav-tabs">
                  <li class="active"><a href=#volTraditionnel data-toggle="tab"></a></li>
                  <li><a href=#volEvent data-toggle="tab"></a></li>
                </ul>

                <!-- contenu onglets -->
                <div class="tab-content">

                  <!-- onglet vol traditionnel -->
                  <div class="tab-pane active" id="volTraditionnel">
                    <form action="#" method="post">
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Départ de :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Arrivée à :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control" type="number" step="1" min="1" value="1"/>
                      </div>
                      </p>
                      <p>
                      <div class="centered">
                        <input type="submit" value="Rechercher" class="btn btn-lg btn-primary"/>
                      </div>
                      </p>
                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="slide0 retourPlie"></div>
            <div class="panel0">
            <div class="volBack">
            <!-- formulaire reservation -->
            <div class="col-md-offset-1 col-md-10">
            <div class="formulaire1">
                <ul class="nav nav-tabs">
                  <li class="active"><a href=#volTraditionnel data-toggle="tab"></a></li>
                  <li><a href=#volEvent data-toggle="tab"></a></li>
                </ul>

                <!-- contenu onglets -->
                <div class="tab-content">

                  <!-- onglet vol traditionnel -->
                  <div class="tab-pane active" id="volTraditionnel">
                    <form action="#" method="post">
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Départ de :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Arrivée à :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control" type="number" step="1" min="1" value="1"/>
                      </div>
                      </p>
                      <p>
                      <div class="centered">
                        <input type="submit" value="Rechercher" class="btn btn-lg btn-primary"/>
                      </div>
                      </p>
                    </form>
                  </div>
                </div>
                </div>

            <div class="formulaire2">
                <ul class="nav nav-tabs">
                  <li class="active"><a href=#volTraditionnel data-toggle="tab"></a></li>
                  <li><a href=#volEvent data-toggle="tab"></a></li>
                </ul>

                <!-- contenu onglets -->
                <div class="tab-content">

                  <!-- onglet vol traditionnel -->
                  <div class="tab-pane active" id="volTraditionnel">
                    <form action="#" method="post">
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Départ de :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        <select class="form-control">
                          <option value="1">Arrivée à :</option>
                          <option>Paris</option>
                          <option>Lyon</option>
                          <option>Bordeaux</option>
                          <option>Nantes</option>
                          <option>Toulouse</option>
                        </select>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input class="form-control" type="date" min="2016-11-07" max="2016-12-31" value=>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control">
                            <option>+/- 3 jours</option>
                            <option>+/- 2 jours</option>
                            <option>+/- 1 jour</option>
                            <option>+/- 0 jour</option>
                          </select>
                        </div>
                      </div>
                      </p>
                      <p>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control" type="number" step="1" min="1" value="1"/>
                      </div>
                      </p>
                      <p>
                      <div class="centered">
                        <input type="submit" value="Rechercher" class="btn btn-lg btn-primary"/>
                      </div>
                      </p>
                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col-xs-12 centered">
          <a href="paiement.php" class="validerVol"><img src="../img/validerTraditionnel.png" class="bouton"></a>
        </div>
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
        $(".slide0").click(function(){
            $(".panel0").slideToggle("slow");
        });
    });

</script>
</body>
</html>
