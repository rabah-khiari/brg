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
  'Politique qualité' => [
    'fr' => 'Politique qualité',
    'en' => 'Quality Policy'
],

'Système Management Qualité' => [
    'fr' => 'Système Management Qualité',
    'en' => 'Quality Management System'
],

'A l’instar de' => [
    'fr' => 'A l’instar de la quasi majorité des entreprises nationales et internationales, le BEREG, pour garantir la qualité de ses produits et services, a adopté le système management de la qualité (SMQ) ISO 9001 version d’abord 2008 ensuite version 2015 à compter de 2018.</p>',
    'en' => 'Like the vast majority of national and international companies, B.E.R.E.G has adopted the Quality Management System (QMS) ISO 9001, first in its 2008 version and later in the 2015 version starting from 2018, to ensure the quality of its products and services.</p>'
],

'Cette démarche a' => [
    'fr' => 'Cette démarche a contribué à renforcer la confiance de ses clients et à favoriser la culture d’amélioration continue dans un environnement économique de plus en plus exigeant et concurrentiel, incitant les entreprises à innover et à offrir les meilleures prestations possibles.',
    'en' => 'This approach has helped strengthen client confidence and promote a culture of continuous improvement in an increasingly demanding and competitive economic environment, encouraging the company to innovate and provide the best possible services.'
],

'A travers les' => [
    'fr' => 'A travers les processus du système management qualité, le BEREG peut désormais mesurer plusieurs indicateurs de performance parmi lesquels la satisfaction clients qui a atteint un taux appréciable en fin 2023 puisqu’il se situe à 86%.',
    'en' => 'Through the quality management system processes, B.E.R.E.G can now measure several performance indicators, including customer satisfaction, which reached a satisfactory rate of 86% at the end of 2023.'
],

];
?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 <h2><?= $text['Politique qualité'][$language]; ?></h2>
                            <h3> <?= $text['Système Management Qualité'][$language]; ?></h>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- qualité Start -->
            <div class="about wow fadeInUp shadow " data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img shadow">
                                <img src="img/beregIso.jpg" alt="Image">
                            </div>
                            
                        </div>
                        <div class="col-lg-7 col-md-6">
                            
                            <div class="about-text">
                                <p><?= $text['A l’instar de'][$language]; ?>
                                <br/><?= $text['Cette démarche a'][$language]; ?>
                                </p>
                                <br/>
                                <p><?= $text['A travers les'][$language]; ?>
                                 </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- qualité End -->
        
             
            <!-- qualite Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class=" align-items-center">
                        <div class="col-lg-12 col-md-10">
                            <div class="about-img">
                                <img src="img/qualiti.jpg" alt="Image">
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- qualite End -->
            
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
