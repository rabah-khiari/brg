<?php
$text = [
    'Page_Title' => [
        'fr' => 'BEREG -À propos', 
        'en' => 'BEREG - About',
        'ar' => "عن مكتب \u{2067}BEREG\u{2069}",
    ],
    'Staff_Total' => [
        'fr' => 'Le B.E.R.E.G dispose de 210 travailleurs dont ', 
        'en' => 'B.E.R.E.G has 210 employees, including ',
        'ar' => "يوظف مكتب \u{2067}B.E.R.E.G\u{2069} ما مجموعه \u{2067}210\u{2069} عاملاً، من بينهم:",
    ],
    'Tech_Personnel' => [
        'fr' => ' Personnel Technique', 
        'en' => ' Technical Personnel',
        'ar' => 'طاقم تقني',
    ],
    'Admin_Personnel' => [
        'fr' => 'Personnel Administratif ', 
        'en' => 'Administrative Personnel ',
        'ar' => 'طاقم إداري',
    ],
    'Staff_Dist' => [
        'fr' => 'Le personel technique est réparti comme suit : ', 
        'en' => 'The technical staff is distributed as follows: ',
        'ar' => 'يتوزع الطاقم التقني كما يلي:',
    ],
    'GC_Eng' => [
        'fr' => ' Ingénieurs GC ', 
        'en' => ' Civil Engineers ',
        'ar' => 'مهندسون في الهندسة المدنية',
    ],
    'Tech_Sup' => [
        'fr' => ' Techniciens et Techniciens Supérieurs', 
        'en' => ' Technicians and Senior Technicians',
        'ar' => 'تقنيون وتقنيون سامون',
    ],
    'Arch' => [
        'fr' => 'Architects', 
        'en' => 'Architects',
        'ar' => 'مهندسون معماريون',
    ],
    'TCE_Eng' => [
        'fr' => ' Ingénieurs TCE', 
        'en' => ' All-Trades Engineers (TCE)',
        'ar' => "مهندسون في جميع تخصصات البناء (\u{2067}TCE\u{2069})",
    ],
];
?>

<!DOCTYPE html>
<html lang="<?= $language; ?>">
    <head>
        <meta charset="utf-8">
        <title ><?= $text['Page_Title'][$language]; ?></title>
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
                                 <h2 <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['Staff_Total'][$language]; ?></h2>
                          
                        </div>
                    
                    </div>
                </div>
            </div>
            <br>
<div class="row  ">
    <br><br>
    <div class="container ps-1 col-lg-7 col-md-10 col-sm-12 ">
        
        <br><br>
        <div class=" mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row col-lg-11 col-md-12 col-sm-12">
                        <div class="fact-icon col-lg-3 col-md-4 col-sm-12 ">
                            <img style="width:120px;" src="img/icon/tech.JPG" alt="Ressources Humaines" class="logo">
                        </div>
                        <div class="fact-text col-lg-9 col-md-8 col-sm-12 ">

                            <h1 style="color: #3A3A3A ;" data-toggle="counter-up"> 145</h1>
                            <h1 style="color: #3A3A3A ;" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Tech_Personnel'][$language]; ?></h1>
                        </div>

            </div>
        </div>
        <br>
        <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row col-lg-11 col-md-12 col-sm-12">
                        <div class="fact-icon   col-lg-3 col-md-4 col-sm-12 ">
                            <img style="width:80px;" src="img/icon/administration.JPG" alt="Ressources Humaines" class="logo">
                        </div>
                        <div class="fact-text  col-lg-9 col-md-8 col-sm-12 "> 
                            <h1  style="color: #f3d009;" data-toggle="counter-up">65</h1>
                            <h1  style="color: #f3d009;" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Admin_Personnel'][$language]; ?></h1>
                        </div>
            </div>
        </div>
    </div>
    

</div>
    <br><br><br>
 
<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 <h2 <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Staff_Dist'][$language]; ?></h2>
                          
                        </div>
                    
                    </div>
                </div>
            </div>
            <br>
<div class="row  ">
    <br><br>
    <div class="container ps-1 col-lg-4 col-md-4 col-sm-12 ">
        <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row col-lg-11 col-md-12 col-sm-12">
                        <div class="fact-icon  ">
                            <img style="width:90px;" src="img/icon/gc.jpg" alt="Ressources Humaines" class="logo">
                        </div>
                        <div class="fact-text col-lg-8"> 
                            <h2  style="color: #F4A261;" data-toggle="counter-up">55</h2>
                            <h2  style="color: #F4A261;" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['GC_Eng'][$language]; ?></h2>
                        </div>
            </div>
        </div>
        <br><br>
        <div class=" mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row col-lg-11 col-md-12 col-sm-12">
                        <div class="fact-icon col-lg-3 col-md-6 col-sm-12">
                            <img style="width:80px;" src="img/icon/technicien.JPG" alt="Ressources Humaines" class="logo">
                        </div>
                        <div class="fact-text col-lg-9 col-md-6 col-sm-12">
                            
                            <h2 style="color: #A4D3A2 ;" data-toggle="counter-up">34</h2>
                            <h2 style="color: #A4D3A2 ;" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Tech_Sup'][$language]; ?></h2>
                        </div>
            </div>
        </div>
        <br>
        
    </div>
    <div class="container  col-lg-4 col-md-4 col-sm-12   wow fadeInUp">
        
        <?php include ('incloude/relativeCircle.php'); ?>
        </div>
    <div class="container ps-1 col-lg-4 col-md-4 col-sm-12 ">
      
        <br><br>
        <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="ms-2 row col-lg-11 col-md-12 col-sm-12">
                        <div class="fact-icon">
                             <img style="width:70px;" src="img/icon/architect-icon.JPG" alt="Ressources Humaines" class="logo">
                        </div>
                        <div class="fact-text">
                           
                            <h2 style="color: #f3d009 ;" data-toggle="counter-up">40</h2>
                            <h2 style="color: #f3d009 ;" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Arch'][$language]; ?></h2>
                        </div>
            </div>
        </div>
        <br>

        <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row col-lg-11 col-md-12 col-sm-12">
                        <div class="fact-icon">
                        <img style="width:90px;" src="img/icon/engineer.JPG" alt="Ressources Humaines" class="logo">
                        </div>
                        <div class="fact-text">
                            
                            <h2  style="color: #88B7E3;" data-toggle="counter-up">16</h2>
                            <h2  style="color: #88B7E3;" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['TCE_Eng'][$language]; ?></h2>
                        </div>
            </div>
        </div>
        <br>
       
        
    </div>
</div>
    <?php include ('incloude/footer.php'); ?>
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