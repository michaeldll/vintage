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
              <ul class="nav nav-tabs navResa">
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/decollage.png" height="34px"></span>
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/atterissage.png" height="34px"></span>
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
                        <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/calendrier.png" height="34px"></span>
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
                        <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/calendrier.png" height="34px"></i></span>
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/passager.png" height="34px"></span>
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/evenement.png" height="34px"></span>
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/decollage.png" height="34px"></span>
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/atterissage.png" height="34px"></span>
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
                        <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/calendrier.png" height="34px"></span>
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
                        <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/calendrier.png" height="34px"></i></span>
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
                    <span class="input-group-addon fondTransparent noBorder whiteText noPaddingTop"><img src="img/passager.png" height="34px"></span>
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

        <!-- cercles -->
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
        </ol>

        <!-- slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <div class="col-md-3 textAccueil">
                  <h1 class="marginBottom20">
                      Bonjour
                  </h1>
                  <h4 class="marginBottom20">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper porttitor odio rhoncus porta. Proin quis consectetur erat.
                  </h4>
                  <h4 class="marginBottom20">
                      <a href="#" class="blueText footerLink">En savoir plus</a>
                  </h4>
              </div>
            <img src="img/hey.png" alt="here1">
          </div>
          <div class="item">
              <div class="col-md-3 textAccueil">
                  <h1 class="marginBottom20">
                      Hello
                  </h1>
                  <h4 class="marginBottom20">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper porttitor odio rhoncus porta. Proin quis consectetur erat.
                  </h4>
                  <h4 class="marginBottom20">
                      <a href="#" class="blueText footerLink">En savoir plus</a>
                  </h4>
              </div>
            <img src="img/hey.png" alt="here2">
          </div>
          <div class="item">
              <div class="col-md-3 textAccueil">
                  <h1 class="marginBottom20">
                      Buenos Dias
                  </h1>
                  <h4 class="marginBottom20">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper porttitor odio rhoncus porta. Proin quis consectetur erat.
                  </h4>
                  <h4 class="marginBottom20">
                      <a href="#" class="blueText footerLink">En savoir plus</a>
                  </h4>
              </div>
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
  <div class="row marginBottom40">
    <div class="row-height">
      <div class="col-md-3 marginBottom10 col-height">
        <div class="col-md-12 imgHeight100" id="meilleursPrix">
          <div class="centered infoIndex">
            <h4 class="text-uppercase whiteText marginBottom10">Les meilleurs prix</h4>
          </div>
          <p class="tavirajFont whiteText marginBottom60 text-center">Des vols à prix toujours plus compétitifs. Inscrivez-vous et profiter de nos promotions pour économisez sur vos voyages !</p>
          <div class="centered positionBottom20"><a href="#" class="whiteText footerLink">Voir plus</a></div>
        </div>
      </div>
      <div class="col-md-3 marginBottom10 col-height">
        <div class="col-md-12 imgHeight100" id="experienceInedite">
          <div class="centered infoIndex">
            <h4 class="text-uppercase whiteText marginBottom10">Une expérience inédite</h4>
          </div>
          <p class="tavirajFont whiteText marginBottom60 text-center">Remontez le temps grâce à nos exceptionnels avions mythiques et vivez l’aventure des débuts de l’aviation !</p>
          <div class="centered positionBottom20"><a href="#" class="whiteText footerLink">Voir plus</a></div>
        </div>
      </div>
      <div class="col-md-3 marginBottom10 col-height">
        <div class="col-md-12 imgHeight100" id="equipeExpert">
          <div class="centered infoIndex">
            <h4 class="text-uppercase whiteText marginBottom10">Une équipe d'expert</h4>
          </div>
          <p class="tavirajFont whiteText marginBottom60 text-center">Des passionnés spécialisés dans l’aviation. A la pointe des mesures de sécurité, d’aérodynamique, et de services à la personne.</p>
          <div class="centered positionBottom20"><a href="#" class="whiteText footerLink">Voir plus</a></div>
        </div>
      </div>
      <div class="col-md-3 marginBottom10 col-height">
        <div class="col-md-12 imgHeight100" id="reveContinue">
          <div class="centered infoIndex">
            <h4 class="text-uppercase whiteText marginBottom10">Le rêve continue</h4>
          </div>
          <p class="tavirajFont whiteText marginBottom60 text-center">Les meilleurs hôtels et moyens de transports vintages ont été séléctionnés pour vous afin de vivre jusqu’au bout ce fascinant voyage dans le temps</p>
          <div class="centered positionBottom20"><a href="#" class="whiteText footerLink">Voir plus</a></div>
        </div>
      </div>
    </div>
  </div>

    <div class="row marginBottom20">
        <div class="col-md-1"></div>
      <div class="col-md-1">
        <img src="img/5CEINTURE.png" class="img100 marginTop50">
      </div>
      <div class="col-md-3">
        <h4 class="text-uppercase">sécurité et fiabilité</h4>
        <p class="tavirajFont">Avant et après le vol, nos techniciens spécialisés vérifient la conformité et l’état des pièces de l’appareil sur le moteur, les entretiennent, et révisent l’avion avec une rigueur absolue afin que vous puissiez partir en toute sécurité.</p>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-1">
        <img src="img/cochon.png" class="img100 marginTop20">
      </div>
      <div class="col-md-3">
        <h4 class="text-uppercase">Gagnez des wings points</h4>
        <p class="tavirajFont">Le programme de fidélité Wings Points vous permet de cumuler des points de fidélité et de les échanger contre des cadeaux gratuits. Nos premiers cadeaux sont accessibles dès 600 points ! </p>
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
          <h4 class="whiteText text-uppercase marginTop25">26 avions légendaires</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 marginBottom20 marginTop20">
      <div class="row">
        <div class="col-md-3">
          <img src="img/8PILOTES.png" class="img100">
        </div>
        <div class="col-md-9">
          <h4 class="whiteText text-uppercase marginTop25">50 mécaniciens habilités</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 marginBottom20 marginTop20">
      <div class="row">
        <div class="col-md-3">
          <img src="img/9DESTINATIONS.png" class="img100">
        </div>
        <div class="col-md-9">
          <h4 class="whiteText text-uppercase marginTop25">25 vols chaque jour</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- boutique -->
  <br/>
  <div class="row marginBottom20">
    <div class="col-xs-2 col-sm-3 col-md-4 line couleurBleu marginTop50"></div>
    <div class="col-xs-8 col-sm-6 col-md-4">
      <div class="centered">
        <h2 class="text-uppercase">Découvrez notre boutique</h2>
      </div>
    </div>
    <div class="col-xs-2 col-sm-3 col-md-4 line couleurBleu marginTop50"></div>
  </div>
  <br/>

  <div class="row marginBottom40">
    <div class="col-md-3 noPadding"><a href="pages/boutique.php"><img src="img/boutique2.jpg" width="100%"></a></div>
    <div class="col-md-3 noPadding"><a href="pages/boutique.php"><img src="img/boutique1.jpg" width="100%"></a></div>
    <div class="col-md-3 noPadding"><a href="pages/boutique.php"><img src="img/boutique3.jpg" width="100%"></a></div>
    <div class="col-md-3 noPadding"><a href="pages/boutique.php"><img src="img/boutique4.jpg" width="100%"></a></div>
  </div>
    <div class="row marginBottom20">
        <div class="col-offset-xs-1 col-offset-sm-1 col-md-offset-1 col-xs-2 col-sm-3 col-md-4 line couleurBleu marginTop30"></div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <div class="centered">
                <h3>Promotions</h3>
            </div>
        </div>
        <div class="col col-xs-2 col-sm-3 col-md-4 line couleurBleu marginTop30"></div>
    </div>

  <!-- Carousel Boutique -->
  <div class="row">
    <div class="col-md-12">
      <div class="well">
        <div id="myCarouselBoutique" class="carousel slide carouselBoutique">

          <!-- Carousel items -->
          <div class="carousel-inner">

            <div class="item active">
              <div class="row-fluid">
                <div class="col-md-4">
                    <a href="pages/boutique.php" class="thumbnail prixPromo">
                        <img src="img/slideBoutique1.png" alt="Image" style="max-width:100%;" />
                        <p class="text-right prixPromo"><span class="prixBarre">12€</span> - 9€</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="pages/boutique.php" class="thumbnail prixPromo">
                        <img src="img/slideBoutique2.png" alt="Image" style="max-width:100%;" />
                        <p class="text-right prixPromo"><span class="prixBarre">15€</span> - 10€</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="pages/boutique.php" class="thumbnail prixPromo">
                        <img src="img/slideBoutique3.png" alt="Image" style="max-width:100%;" />
                        <p class="text-right prixPromo"><span class="prixBarre">24€</span> - 19€</p>
                    </a>
                </div>
              </div><!--/row-fluid-->
            </div><!--/item-->

            <div class="item">
              <div class="row-fluid">
                <div class="col-md-4">
                    <a href="pages/boutique.php" class="thumbnail prixPromo">
                        <img src="img/slideBoutique4.png" alt="Image" style="max-width:100%;" />
                        <p class="text-right prixPromo"><span class="prixBarre">22€</span> - 18€</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="pages/boutique.php" class="thumbnail prixPromo">
                        <img src="img/slideBoutique5.png" alt="Image" style="max-width:100%;" />
                        <p class="text-right prixPromo"><span class="prixBarre">38€</span> - 27€</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="pages/boutique.php" class="thumbnail prixPromo">
                        <img src="img/slideBoutique6.png" alt="Image" style="max-width:100%;" />
                        <p class="text-right prixPromo"><span class="prixBarre">30€</span> - 25€</p>
                    </a>
                </div>
              </div><!--/row-fluid-->
            </div><!--/item-->

          </div><!--/carousel-inner-->

          <a class="left carousel-control carouselBoutique-control" href="#myCarouselBoutique" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control carouselBoutique-control" href="#myCarouselBoutique" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!--/myCarousel-->

      </div><!--/well-->
    </div>
  </div>
  <div class="row marginBottom40">
    <div class="col-md-12 line couleurBleu marginTop20">
    </div>
  </div>

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