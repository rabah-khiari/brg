<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BEREG -À propos</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
 
             <!-- Top Bar Start -->
           <?php include ('incloude/topBare.php'); ?>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            
            <?php include ('incloude/navBare.php'); ?>
            <!-- Nav Bar End -->
    
<?php

// text dictionary
$text = [
  'Etudes architecturales' => [
    'fr' => 'Etudes architecturales',
    'en' => 'Architectural Studies'
],

'L’étude architecturale est' => [
    'fr' => 'L’étude architecturale est une étape importante dans le processus de conception et de construction d’un bâtiment. Elle consiste à élaborer un projet de construction en prenant en compte de nombreux paramètres, tels que l’aspect esthétique, l’optimisation des espaces, les contraintes techniques et réglementaires, les caractéristiques géotechniques …etc.',
    'en' => 'Architectural study is a key stage in the design and construction process of a building. It involves developing a construction project while taking into account numerous parameters such as aesthetic aspects, space optimization, technical and regulatory constraints, and geotechnical characteristics, among others.'
],

'L’étude architecturale peut' => [
    'fr' => 'L’étude architecturale peut également inclure la réalisation de maquettes, de dessins en 3D et de simulations de l’environnement futur de l’ouvrage.',
    'en' => 'Architectural study may also include the development of scale models, 3D drawings, and simulations of the future environment of the project.'
],

'Elle donne, par' => [
    'fr' => 'Elle donne, par conséquent, au maître d’ouvrage, un aperçu virtuel sur la fonctionnalité de la construction, sur les normes de sécurité à respecter, sur la qualité de vie procurée par l’ouvrage et sur l’aspect économique et environnemental de l’ouvrage.',
    'en' => 'It therefore provides the project owner with a virtual overview of the building’s functionality, the applicable safety standards, the quality of life offered by the project, as well as its economic and environmental aspects.'
],

'A ce titre,' => [
    'fr' => 'A ce titre, le BEREG, à travers ses expériences cumulées tout au long des années de son existence, offre ses compétences en la matière et assure des prestations à la hauteur des exigences les plus élevés',
    'en' => 'In this regard, B.E.R.E.G, drawing on its accumulated experience over the years, offers its expertise in this field and delivers services that meet the highest standards and requirements.'
],


];
?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 
                            <h2><?= $text['Etudes architecturales'][$language]; ?> </h2>
                          
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about wow fadeInUp shadow " data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/services/service-1.jpg" alt="Image">
                            </div>
                            
                        </div>
                        <div class="col-lg-7 col-md-6">
                            
                            <div class="about-text">
                                <p><?= $text['L’étude architecturale est'][$language]; ?> </p>
                                <p><?= $text['L’étude architecturale peut'][$language]; ?> </p>
                                <p><?= $text['Elle donne, par'][$language]; ?> </p>
                                <p><?= $text['A ce titre,'][$language]; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Footer Start -->
            <?php include ('incloude/footer.php'); ?>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
