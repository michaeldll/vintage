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
  <link rel="icon" type="image/ico" href="img/favicon.ico">
  <title>Vintage Wings</title>
  <script src="https://use.fontawesome.com/ffa9c99182.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/baseStyle.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Taviraj" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!-- navbar -->
<?php include('navbar.php'); ?>

<!-- container carousel et resa -->
<div class="container-fluid marginBottom20">
  <div class="row">
    <div class="col-md-12 noPadding marginTopCarousel">

      <!-- carousel -->
      <div id="slider" class="carousel slide" data-ride="carousel" data-interval="20000">

        <!-- formulaire reservation -->
        <div class="col-md-4 form fondCuirBleu">
            <h2 class="whiteText text-uppercase">Reserver un vol</h2>
            <div class="centered">
              <ul class="nav nav-tabs">
                <li class="active"><a href=#volTraditionnel data-toggle="tab" class="onglet text-uppercase">Vol traditionnel</a></li>
                <li><a href=#volEvent data-toggle="tab" class="onglet text-uppercase">Vol événementiel</a></li>
              </ul>
            </div>

            <!-- contenu onglets -->
            <div class="tab-content">

              <!-- onglet vol traditionnel -->
              <div class="tab-pane active" id="volTraditionnel">
                <form action="#" method="post">
                  <p>
                  <div class="input-group">
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-plane" aria-hidden="true"></i></span>
                    <select class="form-control couleurBlanche blueText text-uppercase">
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
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-plane" aria-hidden="true"></i></span>
                    <select class="form-control couleurBlanche blueText text-uppercase">
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
                        <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control couleurBlanche blueText text-uppercase" type="date" min="2016-11-20" max="2017-01-01" value=>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control couleurBlanche blueText text-uppercase">
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
                        <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control couleurBlanche blueText text-uppercase" type="date" min="2016-11-20" max="2017-01-01" value=>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control couleurBlanche blueText text-uppercase">
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
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input class="form-control couleurBlanche blueText text-uppercase" type="number" step="1" min="1" value="1"/>
                  </div>
                  </p>
                  <p>
                  <div class="centered">
                    <input type="submit" value="Rechercher" class="btn btn-lg btn-gold text-uppercase"/>
                  </div>
                  </p>
                </form>
              </div>

              <!-- onglet vol evenement -->
              <div class="tab-pane" id="volEvent">
                <form action="#" method="post">
                  <p>
                  <div class="input-group">
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-star" aria-hidden="true"></i></span>
                    <select class="form-control couleurBlanche blueText text-uppercase">
                      <option value="1">Evénement :</option>
                      <option>Lune de Miel</option>
                      <option>Anniversaire</option>
                      <option>Départ en retraite</option>
                      <option>Musée volant</option>
                    </select>
                  </div>
                  </p>
                  <p>
                  <div class="input-group">
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-plane" aria-hidden="true"></i></span>
                    <select class="form-control couleurBlanche blueText text-uppercase">
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
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-plane" aria-hidden="true"></i></span>
                    <select class="form-control couleurBlanche blueText text-uppercase">
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
                        <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control couleurBlanche blueText text-uppercase" type="date" min="2016-11-20" max="2017-01-01" value=>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control couleurBlanche blueText text-uppercase">
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
                        <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control couleurBlanche blueText text-uppercase" type="date" min="2016-11-20" max="2017-01-01" value=>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control couleurBlanche blueText text-uppercase">
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
                    <span class="input-group-addon fondTransparent noBorder whiteText"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input class="form-control couleurBlanche blueText text-uppercase" type="number" step="1" min="1" value="1"/>
                  </div>
                  </p>
                  <p>
                  <div class="centered">
                    <input type="submit" value="Rechercher" class="btn btn-lg btn-gold text-uppercase"/>
                  </div>
                  </p>
                </form>
              </div>
            </div>

          </div>

        <div class="col-md-2"></div>
        <!-- cercles -->
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
        </ol>

        <!-- slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/hey.png" alt="here1">
          </div>
          <div class="item">
            <img src="img/hey.png" alt="here2">
          </div>
          <div class="item">
            <img src="img/hey.png" alt="here3">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- fin row -->

</div> <!-- fin container-fluid -->

<br/>

<!-- container contenu divers -->
<div class="container">

    <!-- contenu texte -->
  <div class="row marginBottom20">
    <div class="col-md-3 marginBottom10">
      <div class="col-md-12" id="collation">
        <div class="centered infoIndex">
          <h3 class="text-uppercase whiteText marginBottom10">Collation</h3>
        </div>
        <p class="tavirajFont whiteText marginBottom10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue vulputate mi quis molestie. Fusce fringilla, tortor id venenatis pharetra, enim massa euismod ex, egestas posuere lorem mi eget enim.</p>
        <div class="centered marginBottom10"><a href="#" class="whiteText footerLink">Voir plus</a></div>
      </div>
    </div>
    <div class="col-md-3 marginBottom10">
      <div class="col-md-12" id="bagage">
        <div class="centered infoIndex">
          <h3 class="text-uppercase whiteText marginBottom10">Bagages</h3>
        </div>
        <p class="tavirajFont whiteText marginBottom10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue vulputate mi quis molestie. Fusce fringilla, tortor id venenatis pharetra, enim massa euismod ex, egestas posuere lorem mi eget enim.</p>
        <div class="centered marginBottom10"><a href="#" class="whiteText footerLink">Voir plus</a></div>
      </div>
    </div>
    <div class="col-md-3 marginBottom10">
      <div class="col-md-12" id="siege">
        <div class="centered infoIndex">
          <h3 class="text-uppercase whiteText marginBottom10">Choix du siege</h3>
        </div>
        <p class="tavirajFont whiteText marginBottom10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue vulputate mi quis molestie. Fusce fringilla, tortor id venenatis pharetra, enim massa euismod ex, egestas posuere lorem mi eget enim.</p>
        <div class="centered marginBottom10"><a href="#" class="whiteText footerLink">Voir plus</a></div>
      </div>
    </div>
    <div class="col-md-3 marginBottom10">
      <div class="col-md-12" id="wingspoints">
        <div class="centered infoIndex">
          <h3 class="text-uppercase whiteText marginBottom10">Wings Points</h3>
        </div>
        <p class="tavirajFont whiteText marginBottom10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue vulputate mi quis molestie. Fusce fringilla, tortor id venenatis pharetra, enim massa euismod ex, egestas posuere lorem mi eget enim.</p>
        <div class="centered marginBottom10"><a href="#" class="whiteText footerLink">Voir plus</a></div>
      </div>
    </div>
  </div>

    <div class="row marginBottom20">
      <div class="col-md-1">
        <img src="img/5CEINTURE.png" class="img100">
      </div>
      <div class="col-md-4">
        <p class="tavirajFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel erat magna. Aenean iaculis neque et sapien auctor, sed facilisis arcu tempus. Vestibulum elementum, risus ac fringilla gravida, diam magna ultrices velit, in sollicitudin purus eros quis tortor. Nulla ut erat orci. Integer congue tristique porttitor.</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-1">
        <img src="img/6NONFUMEUR.png" class="img100">
      </div>
      <div class="col-md-4">
        <p class="tavirajFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel erat magna. Aenean iaculis neque et sapien auctor, sed facilisis arcu tempus. Vestibulum elementum, risus ac fringilla gravida, diam magna ultrices velit, in sollicitudin purus eros quis tortor. Nulla ut erat orci. Integer congue tristique porttitor.</p>
      </div>
      <div class="col-md-1"></div>
    </div>

  <!-- contenu chiffres -->
  <div class="row fondCuirJaune">
    <!-- <div class="centered">
      <h3 class="whiteText text-uppercase marginBottom20">Quelques chiffres</h3>
    </div> -->
    <div class="col-md-4 marginBottom20 marginTop20">
      <div class="row">
        <div class="col-md-3">
          <img src="img/7AVION.png" class="img100">
        </div>
        <div class="col-md-9">
          <h4 class="whiteText text-uppercase">4 modèles d'avion</h4>
          <h4 class="whiteText text-uppercase">20 avions</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 marginBottom20 marginTop20">
      <div class="row">
        <div class="col-md-3">
          <img src="img/8PILOTES.png" class="img100">
        </div>
        <div class="col-md-9">
          <h4 class="whiteText text-uppercase">60 pilotes</h4>
          <h4 class="whiteText text-uppercase">110 hotesses et stewards</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 marginBottom20 marginTop20">
      <div class="row">
        <div class="col-md-3">
          <img src="img/9DESTINATIONS.png" class="img100">
        </div>
        <div class="col-md-9">
          <h4 class="whiteText text-uppercase">30 destinations en France</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- boutique -->
  <br/>
  <div class="row">
    <div class="col-xs-3 col-sm-4 col-md-5 line couleurBleu verticalAlign"></div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="centered">
        <h2 class="text-uppercase">Boutique</h2>
      </div>
    </div>
    <div class="col-xs-3 col-sm-4 col-md-5 line couleurBleu verticalAlign"></div>
  </div>
  <br/>

  <div class="row">
    <div class="col-md-3 noPadding"><img src="img/hey.png" width="100%"></div>
    <div class="col-md-3 noPadding"><img src="img/hey.png" width="100%"></div>
    <div class="col-md-3 noPadding"><img src="img/hey.png" width="100%"></div>
    <div class="col-md-3 noPadding"><img src="img/hey.png" width="100%"></div>
  </div>

  <div class="row">
    <div class="col-md-12 line couleurBleu"></div>
  </div>
  <br/>

</div> <!-- fin container -->

<!-- footer -->
<?php include('footer.php'); ?>


<script
    src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
    crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js"></script>
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
</script>

</body>
</html>