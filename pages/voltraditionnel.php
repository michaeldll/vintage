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
    <link rel="icon" type="image/ico" href="http://195.83.128.55/~mmid116a05/img/icone1.ico">
    <title>Vintage Wings</title>
    <script src="https://use.fontawesome.com/ffa9c99182.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/baseStyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .body{
            z-index: 0;
        }
        .jumbotron{
            background: url("../img/bg44b.png") no-repeat center center;
            background-size: cover;
            height: 250px;
            width: 100%;
            overflow: hidden;
            background-attachment: fixed;
        }
        .page-header{
            border-bottom-color: #b9b9b9;
        }
        .quote{
        	z-index: 2;
        	font-size: 24px;
        	color: white;
        }
        .card-img-top{
        	width: 100%;
        }
        .panel, .securite-hover{
            text-align: center;
        }
        .panel{
            text-align: center;
            display: none;
            background-color: none!important;
            box-shadow: none!important;
            border: none!important;
        }
        .panel5, .panel4, .panel3, .panel2, .panel1, .panel0{
            text-align: center;
            display: none;
            margin-bottom: 20px;
        }
        .pad{
            padding: 20px 50px;
        }
        .slide5, .slide4, .slide3, .slide2, .slide1, .slide0{
            text-align: center;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 1;
            transition: all ease 0.5s;
            -webkit-transition: all ease 0.5s;
            -moz-transition: all ease 0.5s;
        }
        .slide5:hover, .slide4:hover, .slide3:hover, .slide2:hover, .slide1:hover, .slide0:hover{
            opacity: 1!important;
        }
        .slide5-content, .slide4-content, .slide3-content, .slide2-content, .slide1-content, .slide0-content{
            position: absolute;
            width: 100%;
            height: 20px;
            font-size: 20px;
            text-align: center;
            top: 50%;
            margin-top: -12px;
            color: white;
        }
        .slide5-content i, .slide4-content i, .slide3-content i, .slide2-content i, .slide1-content i, .slide0-content{
            margin-top: -12px;
        }
        .texteCentre{
            position: absolute;
            width: 100%;
            height: 20px;
            font-size: 20px;
            text-align: center;
            top: 50%;
            margin-top: -12px;
            color: white;
            opacity: 1;
            z-index: 1;
        }
        .texteCentre h2{
            margin: 0;
        }
        .depasserFond{
            margin-top: -90px;
        }
        .navTop {
          margin-top: -260px;
          z-index: 2;
          color: white;
        }
        .navTop h2{
            font-size: 18px;
            color: grey;
        }
        .navTop a{
            color: grey;
        }
        .navtop a:hover{
            color: white;
        }
        .active h2{
            color: white;
        }
        .active a{
            color: white;
        }
        .w17{
            width: 18%;
        }
        .volBack{
          background-image: url("../img/voltraditionnelback.png");
          background-repeat: no-repeat;
          background-position: center center;
          z-index: 2;
          height: 1000px;
          background-size: 100% 100%;
        }
        .validerVol{
          width: 100px;
          margin: 20px 50px;
        }
        .bouton{
          width: 100%;
        }
        .formulaire1{
            padding-top: 42%;
        }
        .formulaire2{
            padding-top: 10%;
        }
        .retourPlie{
          background-image: url("../img/retourPlie.png");
          background-repeat: no-repeat;
            background-position: center left;
            z-index: 2;
            height: 141px;
            background-size: 95% 100%;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Taviraj" rel="stylesheet">
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
