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
      margin-top: -390px;
      z-index: 2;
      color: white;
    }
    .jumbotron{
        background: url("../img/bg44b.png") no-repeat center center;
        background-size: cover;
        height: 450px;
        width: 100%;
        overflow: hidden;
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
      height: 10px;
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
      margin-bottom: 10px;
    }
    .filtersBack{
      background-image: url("../img/categoriefiltre.svg");
      background-repeat: no-repeat;
      background-position: center center;
      z-index: 2;
      height: 450px;
      background-size: 260px 450px;
      margin-top: -20px;
    }
    table a{
      text-decoration: none;
      color: black;
    }
    .negativeMargin{
      margin-top: -300px;
    }
    .tabFiltres{
      text-align: left;
      padding-top: 10px;
      margin-left: 26px;
    }
    .tabCategories{
      padding-top: 7px;
      text-align: left;
      margin-left: -6px;
    }
    .h2Categories{
      padding-top: 30px;
      font-size: 24px;
      color: #CEAA5C;
    }
    .h2Filtres{
      padding-top: 43px;
      margin-left: -13px;
      font-size: 24px;
      color: #CEAA5C;
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
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="centered boutique"><h1>Boutique</h1></div>
      <div class="centered quote">"Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content."</div>
    </div>
  </div>


      <div class="row marginbot">
        <div class="col-xs-3 col-sm-4 col-md-4 line aileDoree verticalAlign flip"></div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="centered">
            <h2 class="">MIEUX NOTES</h2>
          </div>
        </div>
        <div class="col-xs-3 col-sm-4 col-md-4 line aileDoree verticalAlign"></div>
      </div>

      <div class="row">
        <div class="col-md-12">
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


    <div class="row ">
      <div class="col-xs-3 margintop">
        <div class="filtersBack">
          <table class="centered tabCategories">
            <tr>
              <h2 class="centered h2Categories">CATEGORIES</h2>
            </tr>
            <tr>
              <td><a href="#">Accessoires</a></td>
            </tr>
            <tr>
              <td><a href="#">Figurines</a></td>
            </tr>
            <tr>
              <td><a href="#">Gants</a></td>
            </tr>
            <tr>
              <td><a href="#">Lunettes</a></td>
            </tr>
            <tr>
              <td><a href="#">Maquettes</a></td>
            </tr>
            <tr>
              <td><a href="#">Posters</a></td>
            </tr>
          </table>
          <table class="centered tabFiltres">
            <tr>
              <h2 class="centered h2Filtres">FILTRES</a></h2>
            </tr>
            <tr>
              <td><a href="#">Pertinence</a></td>
            </tr>
            <tr>
              <td><a href="#">Prix croissants</a></td>
            </tr>
            <tr>
              <td><a href="#">Prix décroissants</a></td>
            </tr>
            <tr>
              <td><a href="#">Popularité</a></td>
            </tr>
            <tr>
              <td><a href="#">Promotions</a></td>
            </tr>
          </table>
        </div>
      </div>
        <div class="col-xs-9 margintop">
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

            </div>
          </div>
        </div>
      </div>


    <div class="row negativeMargin">
      <div class="col-xs-3">
        <div class="empty"></div>
      </div>

        <div class="col-xs-9">
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

            </div>
          </div>
        </div>
      </div>

    <div class="row negativeMargin">
      <div class="col-xs-3">
        <div class="empty"></div>
      </div>

        <div class="col-xs-9">
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
