<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Snack-Bar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
 <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #ed9cab;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }
        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        .navbar {
            margin-bottom: 0;
            background-color: #ffffff;
            z-index: 9999;
            border: 2;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #d73351 !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
        }
        @media screen and (max-width: 480px) {
        }
        .navbar-brand img{
            position: absolute;
            top: 3px;
            left: 100px;
            width: 60px;
            height: 40px;
        }
        .i1{
            color: #d73351;
        }
        .i2{
            color: #d73351;
        }
        .i3{
            color: #d73351;
        }
        .i4{
            color: #d73351;
        }
        .i5{
            color: #d73351;
        }
        .btn{
            background-color: #d73351;
            color: white;
            width: 200px;
        }
        footer .bar{
            position: relative;
            background-color: #d73351;
            left: 200px;
            width: 900px;
            height: 5px;
        }

    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage"><img src="images/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">A Propos</a></li>
                <li><a href="#produits">Produits</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteneur produits -->
<div id="produits" class="container-fluid">
    <h2>Produits</h2><br>
    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/img1.png" alt="Paris" width="400" height="300">
                <p><strong>Snack Cocktail</strong></p>
                <p> C'est le Cocktail Scooby Snack,
                    nommé <br>en l'honneur des célèbres
                    friandises <br>de Scooby-Doo
                    Le Scooby Snack <br>contient du
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/img2.png" alt="New York" width="400" height="300">
                <p><strong>Snack Fraise</strong></p>
                <p> C'est le Fraise Scooby Snack,
                    nommé <br>en l'honneur des célèbres
                    friandises <br>de Scooby-Doo
                    Le Scooby Snack <br>contient du
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/Screen4-2.png" alt="San Francisco" width="400" height="300">
                <p><strong>Snack Pomme</strong></p>
                <p>  C'est le pomme Scooby Snack,
                    nommé <br>en l'honneur des célèbres
                    friandises <br>de Scooby-Doo
                    Le Scooby Snack <br>contient du
                </p>
            </div>
        </div>
    </div>
</div>
<!-- CONTENEUR A pROPOS-->
<div id="apropos" class="container-fluid bg-grey">
    <h2>A Propos </h2><br>
    <div class="row">
        <div class="col-sm-4">
            <span> <img src="images/produit.png" class="img-fluid"></span>
        </div>
        <div class="col-sm-8">
            <h2>Snack Miam miam !!</h2><br>
            <h4> 1. Dans un shaker avec de la glace, mélanger <br>
                le rhum de noix de coco, la crème de banane, <br>
                la liqueur de melon, l'ananas et la crème fouettée. <br>
                Secoue vigoureusement. <br>
                2. Passer le mélange sur la glace dans le verre <br>
                de service.Garnir d'un coin d'ananas et de crème <br>
                fouettée
            </h4>
        </div>
    </div>
</div>


<!-- conteneur de contact -->
<div id="contact" class="container-fluid">
    <h2>CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact </p>
            <p class="i1"><a href="#"> <span><img src="images/tel.png" width="30" height="30"></span>     </a> +221 33 826 26 XX</p>
            <p class="i2"><a href="#"> <span><img src="images/mail.png" width="30" height="30"></span>    </a> Mockupsnack@gmail.com</p>
            <p class="i3"><a href="#"> <span><img src="images/facebook.png" width="30" height="30"></span></a> facebook/mockupsnack</p>
            <p class="i4"><a href="#"> <span><img src="images/twitter.png" width="30" height="30"></span> </a>@Mockupsnack</p>
            <p class="i5"><a href="#"> <span><img src="images/instagram.png" width="30" height="30"></span></a>@Mockupsnack</p>
        </div>
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="nom" name="nom" placeholder="Nom" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="prenom" name="prenom" placeholder="Prenom" type="text" required>
                </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center bg-grey">
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#accueil" style="color: #ffffff;">Accueil</a></li>
            <li><a href="#apropos" style="color: #ffffff;">A Propos</a></li>
            <li><a href="#produits"style="color: #ffffff;">Produits</a></li>
            <li><a href="#contact" style="color: #ffffff;">Contact</a></li>
        </ul>
    </div>
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <div class="bar"></div>
    <p>@2018</p>

</footer>
<script src="js/jQuery.js"></script>
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
