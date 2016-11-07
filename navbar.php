<?php echo ' <nav class="navbar">
            <!-- premiere barre -->
            <div class="container-fluid blackened">
              <!-- logo -->
              <div class="logo">
                <a class="navbar-brand" href="#">
                   <img alt="logo" src="img/suggestion.svg">
                </a>
              </div>
            </div>

            <div class="container-fluid">
              <div class="navbar-header">
                <!-- version collapsée navbar -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- liens a gauche -->
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Accueil <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Réserver un vol</a></li>
                  <li><a href="#">Mes réservations</a></li>
                </ul>

                <!-- liens a droite -->
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Boutique</a></li>

                  <!-- sidenav -->
                  <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <h3>Panier</h3>
                    <a href="#">Exemple</a>
                    <a href="#">Ticket</a>
                    <a href="#">Porte-clé</a>
                    <a href="#">T-shirt</a>
                  </div>

                  <!-- dropdowns -->
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informations <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A propos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>

                  <!-- ouvrir sidenav -->
                  <li><span onclick="openNav()"><i class="fa fa-shopping-cart fa-2x" aria-hidden="false"></i></span></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>';    

         