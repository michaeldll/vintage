<?php echo '<nav class="navbar">
    <!-- premiere barre -->
    <div class="container-fluid couleurBlanche height80">
        <!-- logo -->
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img alt="logo" src="img/logo.svg">
            </a>
        </div>
    </div>

    <div class="container-fluid fondCuirBleu">
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
            <ul class="nav navbar-nav navbar-left">
                <li class="active text-uppercase"><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
                <li class="text-uppercase"><a href="pages/volevenementiel.php">Réserver un vol</a></li>
                <li class="text-uppercase"><a href="pages/reservation.php">Mes réservations</a></li>
                
                <!-- Vintage wings typo -->
                <img src="img/vw_typo.svg" id="typoVW">
                
                <!-- reseau sociaux -->
                <a href="https://www.facebook.com"><img src="img/RS_fb.png" id="reseauFB" class="reseau"></a>
                <a href="https://www.twitter.com"><img src="img/RS_twitter.png" id="reseauTwitter" class="reseau"></a>
                <a href="https://www.instagram.com"><img src="img/RS_insta.png" id="reseauInsta" class="reseau"></a>
                <a href="https://www.youtube.com"><img src="img/RS_youtube.png" id="reseauYT" class="reseau"></a>
            </ul>

            <!-- liens a droite -->
            <ul class="nav navbar-nav navbar-right">
                <li class="text-uppercase"><a href="pages/boutique.php">Boutique</a></li>

                <!-- Lien modal -->
                <a href="#myModal" type="button" class="compte btn btn-sm btn-blue text-uppercase" data-toggle="modal">Mon Compte</a>
                
                <!-- langue -->
                <div class="btn-group" id="choixLangue">
                    <button type="button" class="btn btn-blue btn-sm text-uppercase dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Langue <span class="caret"></span>   
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Français</a></li>
                        <li><a href="#">Anglais</a></li>
                    </ul>
                </div>
                
                <!-- recherche -->
                <form action="#" method="post" id="recherche">
                    <div class="input-group input-group-sm">
                        <input class="form-control couleurBlanche blueText" type="text" placeholder="RECHERCHE">
                        <span class="input-group-btn">
                            <button class="btn btn-blue" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </form>

                <!-- Modal connexion-->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content connexion-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Identification</h4>
                            </div>
                            <div class="modal-body">
                                <form action="pages/compte.php" method="post">
                                    <p><label for="login">Identifiant</label></p>
                                    <p><input class="form-control" type="text" placeholder="Mail" name="login"></p>
                                    <div class="row">
                                        <div class="col-md-6"><p><label for="password">Mot de passe</label></p></div>
                                        <div class="col-md-6" id="motDeP"><a href="#" class="blueText">Mot de passe oublié</a></div>
                                    </div>
                                    <p><input class="form-control" type="password" placeholder="Mot de passe" name="password"></p>
                                    <div class="centered"><input type="submit" class="btn btn-lg btn-blue" value="Me connecter"></div>
                                </form>
                                <div class="centered marginTop10">
                                    <p><a href="#modalCreer" class="blueText" data-dismiss="modal" data-toggle="modal">Créer votre compte</a></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-gold" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal création compte -->
                <div id="modalCreer" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        
                        <!-- Modal content création -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Créer un nouveau compte</h4>
                            </div>
                            <div class="modal-body">
                                <form action="pages/compte.php" method="post">
                                    <p><label for="mail">Mail</label></p>
                                    <p><input class="form-control" type="text" placeholder="Mail" name="mail"></p>
                                    <p><label for="passwd">Mot de passe</label></p>
                                    <p><input class="form-control" type="password" placeholder="Mot de passe" name="passwd"></p>
                                    <p><label for="passwdVerif">Confirmer le mot de passe</label></p>
                                    <p><input class="form-control" type="password" placeholder="Mot de passe" name="passwdVerif"></p>
                                    <div class="centered"><input type="submit" class="btn btn-lg btn-blue" value="Créer le compte"></div>
                                </form>
                                <div class="centered marginTop10">
                                    <p><a href="#myModal" class="blueText" data-dismiss="modal" data-toggle="modal">Se connecter</a></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-gold" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- sidenav -->
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <h3>Panier</h3>
                    <a href="#">Ticket</a>
                    <a href="#">Porte-clé</a>
                    <a href="#">T-shirt</a>
                    <a href="pages/paiement.php">Commander</a>
                </div>

                <!-- dropdowns -->
                <li class="dropdown text-uppercase">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informations <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="text-uppercase"><a href="pages/preparer.php">Bien se préparer</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-uppercase"><a href="pages/infovols.php">Informations vols</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-uppercase"><a href="pages/aeroport.php">Aéroport Paris - Le Bourget</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-uppercase"><a href="pages/securite.php">Sécurité</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-uppercase"><a href="pages/wingsPoints.php">Les Wings Points</a></li>
                    </ul>
                </li>
                <li class="dropdown text-uppercase">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A propos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="text-uppercase"><a href="pages/historique.php">Historique</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-uppercase"><a href="pages/flotte.php">Notre flotte</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-uppercase"><a href="pages/villes.php">Villes desservies</a></li>
                    </ul>
                </li>

                <!-- ouvrir sidenav -->
                <li><span onclick="openNav()"><i class="fa fa-shopping-cart fa-2x" aria-hidden="false"></i></span></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>';

         