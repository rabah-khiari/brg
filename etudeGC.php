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

'Etudes de Génie Civil' => [
    'fr' => 'Etudes de Génie Civil',
    'en' => 'Civil Engineering Studies'
],

'Les études de génie civil représentent' => [
    'fr' => 'Les études de génie civil représentent l\'ensemble des techniques de constructions en respect des normes des constructions (DTR).',
    'en' => 'Civil engineering studies encompass all construction techniques carried out in compliance with building standards and regulations (DTR).'
],

'Les études de génie civil s’occupent' => [
    'fr' => 'Les études de génie civil s’occupent de la conception, la réalisation, l’exploitation et la réhabilitation d’ouvrages de construction d’infrastructure et ce tout en assurant la sécurité du public et la protection de l’environnement.',
    'en' => 'Civil engineering studies deal with the design, execution, operation, and rehabilitation of infrastructure projects while ensuring public safety and environmental protection.'
],

'Ces études font' => [
    'fr' => 'Ces études font appel dans leurs  réalisations aux études de structures (béton armé et charpente métallique), aux études géotechniques, aux études d’hydraulique et à celles relatives à l’environnement.',
    'en' => 'These studies involve structural engineering (reinforced concrete and steel structures), geotechnical studies, hydraulic studies, as well as environmental assessments.'
],

'Le BEREG de' => [
    'fr' => 'Le BEREG de par les compétences de ses ingénieurs qualifiés dont le savoir-faire et les compétences sont avérées, peut réaliser les études de génie civil quelle que soit la nature et l’envergure des ouvrages dont il a la charge.',
    'en' => 'Thanks to the expertise of its highly qualified engineers, whose know-how and competencies are well established, B.E.R.E.G is capable of carrying out civil engineering studies regardless of the nature and scale of the projects entrusted to it.'
],

];
?>

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">       
                            <h2><?= $text['Etudes de Génie Civil'][$language]; ?></h2>
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
                                <img src="img/services/service-2.jpg" alt="Image">
                            </div>
                            
                        </div>
                        <div class="col-lg-7 col-md-6">
                            
                            <div class="about-text">
                                <p><?= $text['Les études de génie civil représentent'][$language]; ?></p>
                                <p><?= $text['Les études de génie civil s’occupent'][$language]; ?> </p>
                               
                                <p><?= $text['Ces études font'][$language]; ?></p>
                                 <p><?= $text['Le BEREG de'][$language]; ?></p>
                                
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
