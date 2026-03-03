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
'Etudes Topographiques et VRD' => [
    'fr' => ' Etudes Topographiques et VRD',
    'en' => 'Topographic Studies and External Works (Roads & Utilities)'
],

'Le BEREG assure,' => [
    'fr' => 'Le BEREG assure, dans le cadre de l’implantation de certains projets, les études topographiques et ce sous différents domaines : topographie d\'exécution et de contrôle, acquisition de données, cartographie, récolement, implantation.',
    'en' => 'As part of the implementation of certain projects, B.E.R.E.G provides topographic studies in various areas, including execution and control surveying, data acquisition, mapping, as-built surveys, and site layout setting-out.'
],

'Le matériel numérique' => [
    'fr' => 'Le matériel numérique dont dispose le BEREG permet de réaliser tout type d\'études topographiques et d\'en extraire des données très précises. Ces données font, ensuite, l’objet de traitement en utilisant des logiciels dédiés qui permettent de créer des modèles adaptés et d\'anticiper de nombreux besoins tels que l’ancrage des bâtiments, le traçage routier…etc.',
    'en' => 'The digital equipment available at B.E.R.E.G enables the execution of all types of topographic studies and the extraction of highly accurate data. These data are then processed using dedicated software to create suitable models and anticipate various requirements such as building anchoring, road alignment, and other planning needs.'
],

'Pour les VRD' => [
    'fr' => 'Pour les VRD (Voirie Réseaux Divers), le BEREG assure l’ensemble des aménagements nécessaires à la viabilisation des terrains au niveau des raccordements et branchements d’un projet de construction d’un ouvrage quelle que soit sa nature.',
    'en' => 'Regarding external works (roads and utility networks), B.E.R.E.G ensures all necessary developments for land servicing, including connections and utility link-ups for construction projects, regardless of their nature.'
],
  
];
?>

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 
                            <h2><?= $text['Etudes Topographiques et VRD'][$language]; ?> </h2>
                          
                            
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
                                <img src="img/services/service-4.jpg" alt="Image">
                            </div>
                            
                        </div>
                        <div class="col-lg-7 col-md-6">
                            
                            <div class="about-text">
                                <p><?= $text['Le BEREG assure,'][$language]; ?>
                               
                                </p>
                                <p><?= $text['Le matériel numérique'][$language]; ?> </p>
                                <p><?= $text['Pour les VRD'][$language]; ?> </p>

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
