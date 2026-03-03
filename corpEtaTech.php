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
'Corps d’état technique' => [
    'fr' => 'Corps d’état technique',
    'en' => 'Technical Building Trades'
],

'Les corps d\'état' => [
    'fr' => 'Les corps d\'état techniques concernent les métiers du bâtiment suivants: ',
    'en' => 'Technical building trades include the following construction disciplines: '
],

'corps d\'état du gros-œuvre (GO)' => [
    'fr' => 'corps d\'état du gros-œuvre (GO)',
    'en' => 'Structural works (Shell & Core / Main structural works)'
],

'corps d\'état du clos' => [
    'fr' => 'corps d\'état du clos et couvert (CEC)',
    'en' => 'Envelope works (Building envelope – watertight structure)'
],

'corps d\'état secondaires (CES)' => [
    'fr' => 'corps d\'état secondaires (CES)',
    'en' => 'Secondary works (Finishing works)'
],

'corps d\'état Chauffage-Ventilation-Clim-Electricité' => [
    'fr' => 'corps d\'état Chauffage-Ventilation-Clim-Electricité (CVCE)',
    'en' => 'Heating, Ventilation, Air Conditioning and Electrical works (HVAC & Electrical)'
],

'Ce domaine fait' => [
    'fr' => 'Ce domaine fait aussi partie des maîtrises du BEREG. Ses ingénieurs et techniciens peuvent réaliser les études de tous corps d’état technique en toutes circonstances.',
    'en' => 'This field is also one of B.E.R.E.G’s areas of expertise. Its engineers and technicians are capable of carrying out studies covering all technical building trades under all circumstances.'
],

];
?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 
                            <h2><?= $text['Corps d’état technique'][$language]; ?>   </h2>
                          
                            
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
                                <img src="img/services/service-3.jpg" alt="Image">
                            </div>
                            
                        </div>
                        <div class="mt-0 col-lg-7 col-md-6">
                            
                            <div class="about-text">
                                <p><?= $text['Les corps d\'état'][$language]; ?>
                                
                                <br>
                                &nbsp; &nbsp; • &nbsp; <?= $text['corps d\'état du gros-œuvre (GO)'][$language]; ?> <br>
                                &nbsp; &nbsp; • &nbsp; <?= $text['corps d\'état du clos'][$language]; ?><br>
                                &nbsp; &nbsp; • &nbsp; <?= $text['corps d\'état secondaires (CES)'][$language]; ?><br>
                                &nbsp; &nbsp; • &nbsp; <?= $text['corps d\'état Chauffage-Ventilation-Clim-Electricité'][$language]; ?><br>

                                </p>
                                <p><?= $text['Ce domaine fait'][$language]; ?></p>

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
