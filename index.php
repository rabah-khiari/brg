<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BEREG -Accueil </title>
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
  'Bâtir lavenir' => [
    'fr' => "Bâtir l'avenir",
    'en' => "Build the Future"
  ],
  'Nous donnons vie à vos projets' => [
    'fr' => 'Nous donnons vie à vos projets',
    'en' => 'We Bring Your Projects to Life'
  ],
  'Votre confiance en nous' => [
    'fr' => 'Votre confiance en nous',
    'en' => 'Your Trust in Us'
  ],
  'La clé de votre réussite' => [
    'fr' => 'La clé de votre réussite',
    'en' => 'The Key to Your Success'
  ],
  'Expérience avérée' => [
    'fr' => 'Expérience avérée',
    'en' => 'Proven Experience'
  ],
  'Les 56 années d’existence' => [
    'fr' => 'Les 56 années d’existence du BEREG, lui ont permis d’acquérir une expérience indéniable et une notoriété dans le domaine des études d’ingénierie, de conception et d’architecture des ouvrages, 
                                        tout type confondu, ainsi que le contrôle et le suivi des réalisations de ces derniers.',
    'en' => 'With over 56 years of existence, BEREG has gained undeniable experience and a strong reputation in the fields of engineering studies, design, and architectural projects of all types, as well as in the supervision and quality control of their implementation.'
  ],
  'Personnel qualifié' => [
    'fr' => 'Personnel qualifié',
    'en' => 'Qualified Personnel'
  ],
  'Pour la réalisation des études' => [
    'fr' => 'Pour la réalisation des études et du suivi des projets acquis, le BEREG dispose d’un personnel technique qualifié doté de compétences avérées multidisciplinaires. Ces dernières permettent, à ce personnel,
            d’atteindre des performances optimales en termes de qualité et de délais.',
    'en' => 'To carry out project studies and supervision, BEREG relies on a highly qualified technical team with multidisciplinary expertise, enabling optimal performance in terms of quality and timelines.'
  ],
  'Formation continue' => [
    'fr' => 'Formation continue',
    'en' => 'Continuous Training'
  ],
  'Outre les exigences académiques' => [
    'fr' => 'Outre les exigences académiques et professionnelles au recrutement, le personnel du BEREG, et en particulier, le personnel 
                                        technique, bénéficie dans le cadre de la formation continue des formations courtes, recyclages et séminaires voire de formations diplômantes telle que la formation BIM ',
    'en' => 'Beyond academic and professional requirements at recruitment, BEREG’s staff, particularly the technical team, benefit from continuous professional development, including short training programs, refresher courses, seminars, and even degree programs such as BIM certification.'
  ],
  'Nos Unités' => [
    'fr' => 'Nos Unités',
    'en' => 'Our Units'
  ],
  'Direction Générale' => [
    'fr' => 'Direction Générale',
    'en' => 'Head Office'
  ],
  'Unité siège' => [
    'fr' => 'Unité siège',
    'en' => 'Main Unit'
  ],
  'Pôle de' => [
    'fr' => 'Pôle de',
    'en' => 'Division'
  ],
 
  'ccc' => [
    'fr' => 'aaa',
    'en' => 'aaa'
  ],
  
];
?>

            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" alt="Carousel Image">
                        
                        <div class="carousel-caption">
                            
                           
                            <h1 class="animated fadeInLeft">BEREG </h1>
                            <p class="animated fadeInRight"><?= $text['Bâtir lavenir'][$language]; ?></p>
                            
                            <!--<a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>-->
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="img/carousel-4.jpg" alt="Carousel Image">
                        
                        <div class="carousel-caption">
                            
                           
                            <h1 class="animated fadeInLeft"> <?= $text['Nous donnons vie à vos projets'][$language]; ?></h1>
                            
                            <!--<a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>-->
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight"><?= $text['Votre confiance en nous'][$language]; ?></p>
                            <h1 class="animated fadeInLeft"><?= $text['La clé de votre réussite'][$language]; ?></h1>
                           <!--  <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>-->
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3> <?= $text['Expérience avérée'][$language]; ?> </h3>
                                    <p> <?= $text['Les 56 années d’existence'][$language]; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3><?= $text['Personnel qualifié'][$language]; ?></h3>
                                    <p><?= $text['Pour la réalisation des études'][$language]; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3><?= $text['Formation continue'][$language]; ?></h3>
                                    <p><?= $text['Outre les exigences académiques'][$language]; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                <div class="section-header text-center">

                        <h2><?= $text['Nos Unités'][$language]; ?></h2>
                    </div>
                 
                    <div class="row align-items-center">
                
                        <div class="col-lg-8 col-md-6">
                            <div class="about-img">
                                <img style=" width: 100%; height: 100%;" src="img/DZmaps.jpg" alt="Image">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div  class="about-text">
                                    <h5><?= $text['Direction Générale'][$language]; ?> <span style="font-weight: bold;font-size: 20px;"> ALGER -Bab Ezzouar </span></h5>
                                    <p><?= $text['Unité siège'][$language]; ?><span style="font-weight: bold;font-size: 20px;">  Alger</span></p>
                                   <p><?= $text['Pôle de'][$language]; ?><span style="font-weight: bold;font-size: 20px;"> Telemcen </span></p>

                                   <p> <?= $text['Pôle de'][$language]; ?><span style="font-weight: bold;font-size: 20px;"> Tizi-Ouzou </span></p>
                                   <p> <?= $text['Pôle de'][$language]; ?><span style="font-weight: bold;font-size: 20px;"> Setif </span></p>
                                   <p> <?= $text['Pôle de'][$language]; ?><span style="font-weight: bold;font-size: 20px;"> Adrar </span></p>
                                   <p> <?= $text['Pôle de'][$language]; ?><span style="font-weight: bold;font-size: 20px;"> Chlef </span></p>
                                   <p> <?= $text['Pôle de'][$language]; ?><span style="font-weight: bold;font-size: 20px;"> Tiaret </span></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
           


           

            <!-- blog Start -->
            <?php include ('incloude/blog.php'); ?>
            <!-- blog End -->
            

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

