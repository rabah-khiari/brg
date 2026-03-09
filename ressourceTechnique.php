<?php
$text =  [
    'Tech_Means_Title' => [
        'fr' => 'Moyens Techniques',
        'en' => 'Technical Resources',
        'ar' => 'الوسائل التقنية',
    ],
    'Software_Label' => [
        'fr' => 'Logiciels',
        'en' => 'Software',
        'ar' => 'البرمجيات',
    ],
    'Topo_Equipment' => [
        'fr' => 'Materiels de Topographie',
        'en' => 'Topography Equipment',
        'ar' => 'عتاد مساحة الأراضي (الطبوغرافيا)',
    ],
    'Repro_Equipment' => [
        'fr' => 'Matériels de Repographie',
        'en' => 'Reprography Equipment',
        'ar' => 'عتاد النسخ والطباعة (الريبروغرافيا)',
    ],
    'Project_In_Progress' => [
        'fr' => 'Projet en cours',
        'en' => 'Current Projects',
        'ar' => 'المشاريع الجاري تنفيذها',
    ],
];
?>
<!DOCTYPE html>
<html lang="<?= $language; ?>">
    <head>
        <meta charset="utf-8">
        <title <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Project_In_Progress'][$language]; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <link href="img/favicon.ico" rel="icon">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
           <?php include ('incloude/topBare.php'); ?>
            <?php include ('incloude/navBare.php'); ?>
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Tech_Means_Title'][$language]; ?></h2>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">

                    </div>
                    <div class="  row">
                        <div class="col-md-11">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft shadow" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOneh" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>>
                                        <?= $text['Software_Label'][$language]; ?> 
                                        </a>
                                    </div>
                                    <div id="collapseOneh" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                        <p> Produit Autodesk ,SCHEM BAT ,</p>
                                        <p> Lumion, Tekla,AutoFluid</p>
                                        <p> ROBOT MULLENIUM,FISA </p>
                                        <p> Qdevis, Caneco, Sketchup, SAP, ETABS, EPANET, Covadis,3D MAX</p>
                                        <p> Architecture Engineering & Construction Collection AEC </p>



                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft shadow" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapsetree" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>>
                                        <?= $text['Topo_Equipment'][$language]; ?> 
                                        </a>
                                    </div>
                                    <div id="collapsetree" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">

                                            <p>Station GPS LEICA </p>
                                            <p>Station LEICA</p>
                                            <p>Lasermètre leica disto d510</p>
                                            <p>Scanner 3D LEICA BLK 360</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft shadow" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapsetwo" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>> 
                                        <?= $text['Repro_Equipment'][$language]; ?> 
                                        </a>
                                    </div>
                                    <div id="collapsetwo" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                        <p> Traceur HP Designjet T520</p>
                                        <p> Traceur HP Designjet T500</p>
                                        <p> Traceur KIP980</p>
                                        <p> Plieuse 02 plis KIPFOLD 2800</p>
                                        <p> Traceur KIP860</p>
                                        <p> Plieuse KIPFOLD 1000</p>
                                        <p> Photocopieuse KYOCERA TASKALFA 65007</p>
                                        <p> Photocopieuse KYOCERA C8520</p>
                                        <p> Photocopieuse CANON F71010 </p>
                                        <p> Imprimante HP :2030, CM1215, CM1415, C7110,8520, CP1025</p>
                                        <p> Imprimante CANON : 2900, 2015, 04730, 8230 </p>
                                        <p> Imprimante EPSON : BX300F, LQ2090, XP, 312</p>

                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br><br><br><br>
            

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

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

        <script src="js/main.js"></script>
    </body>
</html>