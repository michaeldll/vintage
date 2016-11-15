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
            height: 450px;
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
            margin-top: -360px;
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
            background: #CDAA5C;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: all ease 0.5s;
            -webkit-transition: all ease 0.5s;
            -moz-transition: all ease 0.5s;
        }
        .slide5:hover, .slide4:hover, .slide3:hover, .slide2:hover, .slide1:hover, .slide0:hover{
            opacity: 0.5!important;
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
            margin-top: -190px;
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
		<div class="col-md-12">
			<div class="centered quote">"Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content."</div>
		</div>
	</div>

    <div class="row">
        <div class="col-md-12 depasserFond">
            <div class="card-deck-wrapper margintop">
                <div class="card-deck">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="texteCentre">
                                    <h2>ANNIVERSAIRES</h2>
                                </div>
                                <div class="slide0">
                                    <div class="slide0-content">
                                    </div>
                                </div>
                                <img src="../img/back.png" class="img-responsive" alt="Anniversaires">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="texteCentre">
                                    <h2>VISITES GUIDEES</h2>
                                </div>
                                <div class="slide1">
                                    <div class="slide1-content">
                                    </div>
                                </div>
                                <img src="../img/back.png" class="img-responsive" alt="Anniversaires">
                            </div>
                        </div>
                        <div class="col-md-12 panel0">
                            <div class="card">
                                <h2>Standards de sécurité</h2>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                                <h3>Sous titre ici</h3>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                            </div>
                        </div>
                        <div class="col-md-12 panel1">
                            <div class="card">
                                <h2>Standards de sécurité</h2>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                                <h3>Sous titre ici</h3>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-deck margintop">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="texteCentre">
                                    <h2>DEPARTS A LA RETRAITE</h2>
                                </div>
                                <div class="slide3">
                                    <div class="slide3-content">
                                    </div>
                                </div>
                                <img src="../img/back.png" class="img-responsive" alt="Anniversaires">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="texteCentre">
                                    <h2>SEMINAIRES</h2>
                                </div>
                                <div class="slide4">
                                    <div class="slide4-content">
                                    </div>
                                </div>
                                <img src="../img/back.png" class="img-responsive" alt="Anniversaires">
                            </div>
                        </div>
                        <div class="col-md-12 panel3">
                            <div class="card">
                                <h2>Standards de sécurité</h2>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                                <h3>Sous titre ici</h3>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                            </div>
                        </div>
                        <div class="col-md-12 panel4">
                            <div class="card">
                                <h2>Standards de sécurité</h2>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                                <h3>Sous titre ici</h3>
                                <p class="pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam felis ut condimentum facilisis. Phasellus nibh arcu, fringilla et turpis eget, lobortis dignissim ex. Maecenas pulvinar eros ipsum, quis dapibus velit feugiat a. Praesent molestie ut magna sed luctus. Sed maximus leo erat, ut laoreet augue rutrum ut. Proin id varius purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare leo bibendum erat hendrerit efficitur. Nullam varius orci hendrerit sodales aliquam. Maecenas et purus eros. Donec ultricies nisl non ex sagittis rutrum. Fusce in mollis magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        $(".securite-hover").click(function(){
            $(".panel").slideToggle("slow");
        });
        $(".slide0").click(function(){
            $(".panel0").slideToggle("slow");
        });
        $(".slide1").click(function(){
            $(".panel1").slideToggle("slow");
        });
        $(".slide2").click(function(){
            $(".panel2").slideToggle("slow");
        });
        $(".slide3").click(function(){
            $(".panel3").slideToggle("slow");
        });
        $(".slide4").click(function(){
            $(".panel4").slideToggle("slow");
        });
        $(".slide5").click(function(){
            $(".panel5").slideToggle("slow");
        });
    });

</script>
</body>
</html>
