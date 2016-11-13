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
  <div class="row">
    <div class="height40"></div>
    <div class="centered"><h1>Boutique</h1></div>
    <div class="col-md-12">
      <div class="card-deck-wrapper margintop">
        <div class="card-deck">
          <div class="card">
            <a href="#myModal1" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="../img/ticket.jpg" class="img-responsive" alt="">
            </a>
            <div class="card-block">
              <h4 class="card-title">TICKET D'OR</h4>
              <p class="card-text">Achetez un memorabilia collectible pour votre voyage vintage!</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../img/hey.png" alt="Card image cap" width="100%">
            <div class="card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
        </div>
        <div class="card-deck margintop">
          <div class="card">
            <img class="card-img-top" src="../img/hey.png" alt="Card image cap" width="100%">
            <div class="card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../img/hey.png" alt="Card image cap" width="100%">
            <div class="card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
        </div>
        <div class="card-deck margintop">
          <div class="card">
            <img class="card-img-top" src="../img/hey.png" alt="Card image cap" width="100%">
            <div class="card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../img/hey.png" alt="Card image cap" width="100%">
            <div class="card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modals -->
  <div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ticket d'or</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <img src="../img/ticket.jpg" width="100%">
            <p>Achetez votre ticket d'or pour un bonus collectible!</p>
          </div>
          <button type="button" class="btn btn-success panier">Ajouter au panier</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
        </div>
      </div>

    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <footer class="footer">
        <h5>&copy; Vintage Wings</h5>
      </footer>
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
<script src="../js/bootstrap.min.js"></script>
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