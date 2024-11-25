<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?? "Busway Agadir" ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- les style ajoute (Mohamed) -->
    <link rel="stylesheet" href="css/nada.css">

    <style>
    .scroll-item {
        transition: transform 0.2s;
    }

    .scroll-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    /* Basic styling for items */
    /* .scroll-item {
			min-height: 200px;
			border-radius: 10px;
			transition: transform 0.3s, width 0.3s;
		} */

    /* Hover effect */
    /* .scroll-item:hover {
			transform: scale(1.05);
		}
	 */
    /* Custom colors */
    .bg-black {
        background-color: black;
    }

    .bg-orange {
        background-color: white;
        border: black 1px solid;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .scroll-item {
            width: 100%;
            /* Full width on small screens */
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .scroll-item {
            width: 80%;
            /* Slightly smaller on medium screens */
        }
    }

    @media (min-width: 992px) {
        .scroll-item {
            width: 100%;
            /* Full width on large screens */
        }
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">AGADIR<span style="color: chocolate;">Way</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Lignes & stations </a></li>
                    <li class="nav-item"><a href="pricing.html" class="nav-link">abonnements & tarifs</a></li>

                    <?php
                    if (!session()->get('user_id')) {
                    ?>
                    <li class="nav-item"><a href="/login" class="nav-link">se connecter</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link">s'inscrire</a></li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->


    <div class="hero-wrap" style="background-image: url('img/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        <!-- Rendred content -->
        <?= $this->renderSection('content'); ?>
    </div>






    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Roulez avec nous</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Planifier mon itinéraire</a></li>
                            <li><a href="#" class="py-2 d-block">Explorer le réseau</a></li>
                            <li><a href="#" class="py-2 d-block">Horaires et fréquences</a></li>
                            <li><a href="#" class="py-2 d-block">Signaler un incident</a></li>
                        </ul>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Tickets et tarifs</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Titres de transport disponibles</a></li>
                            <li><a href="#" class="py-2 d-block">Tarifs par ligne</a></li>
                            <li><a href="#" class="py-2 d-block">Sélectionner un titre de transport</a></li>
                            <li><a href="#" class="py-2 d-block">Où acheter</a></li>
                            <li><a href="#" class="py-2 d-block">Demandez votre carte de transport</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">À votre service</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Rapporter un incident ou un objet perdu</a></li>
                            <li><a href="#" class="py-2 d-block">Réclamations et suggestions</a></li>
                            <li><a href="#" class="py-2 d-block">Confort et sécurité à bord</a></li>
                            <li><a href="#" class="py-2 d-block">Nous voulons votre avis</a></li>
                            <li><a href="#" class="py-2 d-block">Évaluer la qualité du service</a></li>
                            <li><a href="#" class="py-2 d-block">Appels d'offres en cours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Nous contacter</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Rue Fictive,
                                        Agadir, Maroc</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@agadirway.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Tous droits réservés | Ce service est propulsé par <i class="icon-heart color-danger"
                            aria-hidden="true"></i> <a href="https://agadirway.com" target="_blank">AgadirWay</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>