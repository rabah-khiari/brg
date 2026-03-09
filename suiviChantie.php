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
  'Suivi des chantiers' => [
    'fr' => 'Suivi des chantiers',
    'en' => 'Construction Supervision',
    'ar' => 'متابعة الورشات',
],

'Dans le cadre' => [
    'fr' => 'Dans le cadre de projets de suivi, le BEREG, par le biais de ses architectes, ingénieurs et techniciens, dûment qualifiés, assurent pour le compte des maîtres d’ouvrage, le suivi d’exécution des réalisations des projets qui lui sont confiés par ces derniers. A ce titre, il garantit le bon déroulement des travaux de construction et ce en respectant les étapes suivantes :',
    'en' => 'As part of supervision assignments, B.E.R.E.G, through its duly qualified architects, engineers, and technicians, ensures on behalf of project owners the monitoring of project execution entrusted to it. In this regard, it guarantees the proper progress of construction works by following these key steps:',
    'ar' => "في إطار مشاريع المتابعة، يضمن مكتب \u{2067}BEREG\u{2069}، من خلال مهندسيه المعماريين ومهندسيه وتقنييه المؤهلين، ولحساب أصحاب المشاريع، متابعة تنفيذ المشاريع الموكلة إليه. وبهذه الصفة، يضمن السير الحسن لأشغال البناء من خلال احترام الخطوات التالية:",
],

'Établissement d’un planning' => [
    'fr' => 'Établissement d’un planning de chantier en identifiant les travaux et en structurant les tâches. ',
    'en' => 'Preparation of a site schedule by identifying works and structuring tasks.',
    'ar' => 'إعداد مخطط زمني للورشة من خلال تحديد الأشغال وهيكلة المهام.',
],

'Mobilisation des ressources' => [
    'fr' => 'Mobilisation des ressources nécessaires pour chaque étape des travaux. ',
    'en' => 'Mobilization of the necessary resources for each stage of the works.',
    'ar' => 'تعبئة الموارد اللازمة لكل مرحلة من مراحل الأشغال.',
],

'Communication avec les' => [
    'fr' => 'Communication avec les différentes parties prenantes notamment avec les conducteurs de travaux et ce en tenant des réunions de chantier à l’effet de faire le point.',
    'en' => 'Communication with the various stakeholders, particularly site managers, through regular site meetings to review progress.',
    'ar' => 'التواصل مع مختلف الأطراف المعنية، لا سيما مع مسيري الأشغال، وذلك من خلال عقد اجتماعات الورشة لتقييم الوضع.',
],

'S’assurer du respect des' => [
    'fr' => 'S’assurer du respect des normes techniques, le respect des cahiers des charges, les délais ainsi que les normes d’environnement et de sécurité et ce tout au long du chantier.',
    'en' => 'Ensuring compliance with technical standards, contractual specifications, deadlines, as well as environmental and safety regulations throughout the project.',
    'ar' => 'السهر على احترام المعايير التقنية، ودفاتر الشروط، والآجال، وكذا معايير البيئة والسلامة طوال فترة الورشة.',
],
];
?>       

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 
                            <h2 <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Suivi des chantiers'][$language]; ?> </h2>
                           
                          
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- About Start -->
            <div class="about wow fadeInUp shadow " data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 col-sm-11">
                            <div class="about-img">
                                <img src="img/services/service-5.jpg" alt="Image">
                            </div>

                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-11">
                            
                            <div class="about-text">
                                <p <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Dans le cadre'][$language]; ?></p>

                                    <p class="col-8 ms-4" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>> 1. <?= $text['Établissement d’un planning'][$language]; ?> </p> 
                                    <p class="col-8 ps-4" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>> 2. <?= $text['Mobilisation des ressources'][$language]; ?>  </p>
                                    <p class="col-8 ps-4" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>> 3. <?= $text['Communication avec les'][$language]; ?>  </p>
                                    <p class="col-8 ps-4" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>> 4. <?= $text['S’assurer du respect des'][$language]; ?></p>
                                
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
