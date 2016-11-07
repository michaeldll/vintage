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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/baseStyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- navbar -->
          <?php include('navbar.php'); ?>

          <!-- carousel -->
          <div id="slider" class="carousel slide" data-ride="carousel" data-interval="20000">
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

      <div class="row">
        <div class="centered"><h1>Voyagez Vintage</h1></div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <h3>Les wings points</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue vulputate mi quis molestie. Fusce fringilla, tortor id venenatis pharetra, enim massa euismod ex, egestas posuere lorem mi eget enim. Ut scelerisque, nisi quis suscipit auctor, ante libero tempus velit, a imperdiet libero elit nec augue. Etiam venenatis maximus justo, nec lacinia enim bibendum ac. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus cursus, urna eu tincidunt sodales, risus lorem interdum massa, id volutpat quam eros nec magna. Aliquam ullamcorper arcu orci, at imperdiet nunc ultricies fermentum. Nullam tincidunt suscipit orci vitae varius. Curabitur blandit, nibh quis varius laoreet, erat metus mattis dolor, at porttitor sem est ac enim.
          </p>
        </div>
        <div class="col-md-5">
          <h3>Se préparer au voyage</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue vulputate mi quis molestie. Fusce fringilla, tortor id venenatis pharetra, enim massa euismod ex, egestas posuere lorem mi eget enim. Ut scelerisque, nisi quis suscipit auctor, ante libero tempus velit, a imperdiet libero elit nec augue. Etiam venenatis maximus justo, nec lacinia enim bibendum ac. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus cursus, urna eu tincidunt sodales, risus lorem interdum massa, id volutpat quam eros nec magna. Aliquam ullamcorper arcu orci, at imperdiet nunc ultricies fermentum. Nullam tincidunt suscipit orci vitae varius. Curabitur blandit, nibh quis varius laoreet, erat metus mattis dolor, at porttitor sem est ac enim.
          </p>
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
      </script>
  </body>
</html>
