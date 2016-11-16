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
    <style> 
    .boutique {
      margin-top: -90px;
      z-index: 2;
      color: white;
    }
    .panier{
      z-index: 2;
      color: white;
      width: 96%;
      height: 99%;
    }
    .paiement{
      margin-top: -90px;
      margin-left: 180px;
      z-index: 2;
      color: white;
    }
    .jumbotron{
      background: url("../img/fildarianedoreblanc.png") no-repeat center center;
      background-size: 100% 75px;
      height: 75px !important;
      width: 100%;
      overflow: hidden;
      padding-top: 0;
      padding-bottom: 0;
    }
    .page-header{
      border-bottom-color: #b9b9b9;
    }
    .quote{
      z-index: 2;
      font-size: 24px;
      color: white;
    }
    .aileDoree{
      background: url("../img/aileDoree.svg") no-repeat;
      height: 15px;
    }
    .flip{
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
    }
    .margintop{
      margin-top: 60px;
    }
    .marginbot{
      margin-bottom: 35px;
    }
    table a{
      text-decoration: none;
      color: black;
    }
    .negativeMargin{
      margin-top: -300px;
    }
    .heart{
      text-align: right;
      margin-top: -30px;
    }
    .card-text:last-child {
        margin-bottom: 5px;
    }
    .portfolio-hover{
      height: 0;
    }
    .panierBack{
      background-image: url("../img/cadrepanierpaiement.png");
      background-repeat: no-repeat;
      background-position: center center;
      z-index: 2;
      height: 500px;
      background-size: 100% 100%;
    }
    .imgPanier{
      width: 100px;
    }
    .croix{
      width: 20px;
      margin-top: -57%;
      position: relative;
      margin-left: 70%;
    }
    .bouton{
      width: 100%;
    }
    table td{
      color: black !important;
    }
    .ariane{
      list-style: none;
      padding-left: 78px;
      margin-top: 15px;
    }
    .ariane li{
      position: relative;
      display: inline-block;
      padding-right: 18px;
    }
    .ariane li a{
      color: white;
    }
    .ticketDore{
      width: 160px;
      margin: 20px 50px;
    }
    .total{
      display: flex;
      margin-top: -40px;
    }
    .w25{
      width: 25%;
    }
    .m7{
      margin-top: 7%;
    }
    @media screen and (max-width: 778px){
      .m7{
        margin-top: 8%;
      }
      .croix{
        width: 20px;
        margin-top: -125px;
        position: relative;
        margin-left: 72%;
      }
    }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include("navbar.php"); ?>

  <div class="jumbotron">
    <div class="container-fluid">
      <ul class="ariane">
        <li>
          <a href="#"><h4>Boutique</h4></a>
        </li>
        <li>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        </li>
        <li>
          <a href="#"><h4>Panier</h4></a>
        </li>
        <li>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        </li>
        <li>
          <a href="#"><h4>Paiement</h4></a>  
        </li>
      </ul>
    </div>
  </div>
      <div class="container">
      <div class="row marginbot">
        <div class="col-md-offset-1 col-xs-3 col-sm-3 col-md-3 line aileDoree verticalAlign flip"></div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="centered">
            <h2 class="">VOTRE PANIER</h2>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 line aileDoree verticalAlign"></div>
      </div>

      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          <div class="panierBack">
            <table class="panier">
              <tr>
                <td class="w25">
                  <a href="#" class="centered"><img src="../img/back.png" alt="placeholder" class="imgPanier"></a>
                </td>
                <td class="w25">
                  <p class="centered">NOM DU PRODUIT</p>
                </td>
                <td class="w25">
                  <p class="centered">QUANTITE</p>
                </td>
                <td class="w25">
                  <p class="centered m7">PRIX 75€</p>
                  <a href="#"><img src="../img/croix.png" alt="placeholder" class="croix"></a>
                </td>
              </tr>
              <tr>
                <td class="w25">
                  <a href="#" class="centered"><img src="../img/back.png" alt="placeholder" class="imgPanier"></a>
                </td>
                <td class="w25">
                  <p class="centered">NOM DU PRODUIT</p>
                </td>
                <td class="w25">
                  <p class="centered">QUANTITE</p>
                </td>
                <td class="w25">
                  <p class="centered m7">PRIX 75€</p>
                  <a href="#"><img src="../img/croix.png" alt="placeholder" class="croix"></a>
                </td>
              </tr>
              <tr>
                <td class="w25">
                  <a href="#" class="centered"><img src="../img/back.png" alt="placeholder" class="imgPanier"></a>
                </td>
                <td class="w25">
                  <p class="centered">NOM DU PRODUIT</p>
                </td>
                <td class="w25">
                  <p class="centered">QUANTITE</p>
                </td>
                <td class="w25">
                  <p class="centered m7">PRIX 75€</p>
                  <a href="#"><img src="../img/croix.png" alt="placeholder" class="croix"></a>
                </td>
              </tr>
              <tr>
                <td class="w25"></td>
                <td class="w25"></td>
                <td class="w25"></td>
                <td class="total centered">TOTAL 225€</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 centered">
          <a href="#" class="ticketDore"><img src="../img/ticketpoursuivremesachats.png" class="bouton"></a>
          
          <a href="#" class="ticketDore"><img src="../img/ticketdore2.png" class="bouton"></a>
          
        </div>
      </div>

      <div class="row marginbot">
        <div class="col-md-offset-1 col-xs-3 col-sm-3 col-md-3 line aileDoree verticalAlign flip"></div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="centered">
            <h2 class="">SUGGESTIONS</h2>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 line aileDoree verticalAlign"></div>
      </div>

      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          <div class="card-deck-wrapper">
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
                  <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                  <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                  <h4 class="card-title">TICKET D'OR</h4>
                  <p class="card-text heart">34€</p>
                </div>
              </div>

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
                  <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                  <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                  <h4 class="card-title">TICKET D'OR</h4>
                  <p class="card-text heart">34€</p>
                </div>
              </div>

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
                  <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                  <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                  <h4 class="card-title">TICKET D'OR</h4>
                  <p class="card-text heart">34€</p>
                </div>
              </div>

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
                  <p class="card-text"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                  <p class="card-text heart"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                  <h4 class="card-title">TICKET D'OR</h4>
                  <p class="card-text heart">34€</p>
                </div>
              </div>


            </div>
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

      <?php include("footer.php"); ?>

      </div> <!-- fin container -->
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
