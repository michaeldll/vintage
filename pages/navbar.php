<?php echo '<nav class="navbar">
    <!-- premiere barre -->
    <div class="container-fluid couleurBlanche">
        <!-- logo -->
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img alt="logo" src="img/logo.svg">
            </a>
        </div>
    </div>

    <div class="container-fluid couleurBleu">
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
                <li class="active"><a href="../index.php">Accueil <span class="sr-only">(current)</span></a></li>
                <li><a href="reserver.php">Réserver un vol</a></li>
                <li><a href="reservation.php">Mes réservations</a></li>
            </ul>

            <!-- liens a droite -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="boutique.php">Boutique</a></li>

                <!-- Lien modal -->
                <a href="#myModal" class="compte" data-toggle="modal">Mon Compte</a>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Identification</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post">
                                    <p><label for="login">Identifiant</label></p>
                                    <p><input class="form-control" type="text" placeholder="Mail" name="login"></p>
                                    <div class="row">
                                        <div class="col-md-6"><p><label for="password">Mot de passe</label></p></div>
                                        <div class="col-md-6" id="motDeP"><a href="#">Mot de passe oublié</a></div>
                                    </div>
                                    <p><input class="form-control" type="password" placeholder="Mot de passe" name="password"></p>
                                    <div class="centered"><input type="submit" class="btn btn-lg btn-primary" value="Me connecter"></div>
                                </form>
                                <div class="centered">
                                    <p><a href="#">Créer votre compte</a></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <li><a href="#">Bien se préparer</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Informations vols</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Aéroport Paris - Le Bourget</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Bagages</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Trouver les meilleurs prix</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sécurité</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Les Wings Points</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A propos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Historique</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="flotte.php">Notre flotte</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Villes desservies</a></li>
                    </ul>
                </li>

                <!-- ouvrir sidenav -->
                <li><span onclick="openNav()"><i class="fa fa-shopping-cart fa-2x" aria-hidden="false"></i></span></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>';

         