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

      <?php  if($language=='ar'){

      
      ?>
<style>
  p{
    direction: "rtl";
    text-align: right; unicode-bidi: embed;
  };
</style>
<?php          
}     
?>
<?php


// text dictionary
$text = [
'Bâtir lavenir' => [
    'fr' => "Bâtir l'avenir",
    'en' => "Build the Future",
    'ar' => "بناء المستقبل",
  ],

  'HISTORIQUE DU B.E.R.E.G' => [
    'fr' => 'HISTORIQUE DU B.E.R.E.G',
    'en' => 'HISTORY OF B.E.R.E.G',
    'ar' => 'لمحة تاريخية عن بريج (B.E.R.E.G)',
  ],

  'Le Bureau d’Etudes,' => [
    'fr' => 'Le Bureau d’Etudes, de Recherche et d’Engineering Général (B.E.R.E.G) est une entreprise publique économique, société par actions au capital de 200.000.000 DA dont le siège est situé à BAB EZZOUAR ALGER, inscrit au registre de commerce sous le numéro RC 0014450 B00.',
    'en' => 'Engineering, Research and Studies Office (B.E.R.E.G) is a public economic enterprise, a joint-stock company with a capital of 200,000,000 DZD, headquartered in Bab Ezzouar, Algiers, registered in the Commercial Register under number RC 0014450 B00.',
    'ar' => 'مكتب الدراسات والبحث والهندسة العامة (B.E.R.E.G) هو مؤسسة اقتصادية عامة، شركة مساهمة برأس مال قدره 200.000.000 دينار جزائري، يقع مقرها في باب الزوار، الجزائر العاصمة، مسجلة في السجل التجاري تحت رقم RC 0014450 B00.',],

  'Le B.E.R.E.G a été créé' => [
    'fr' => 'Le B.E.R.E.G a été créé en 1968 pour servir d’outil d’étude et de suivi de la réalisation des programmes de construction lancés par l’état Algérien et inscrits dans ses différents plans économiques. Il est issu de la prestigieuse Direction Nationale de Construction (DNC). Il a ensuite été restructuré et agrée par le Décret Présidentiel N° 82-73 du 20/02/82. <br> Après avoir fait partie du portefeuille du Groupe INJACO, relevant de la SGP/INDJAB, il a été directement rattaché à la SGP INJAB (Société de Gestion des Participations).',
    'en' => 'B.E.R.E.G was established in 1968 to serve as a technical and supervisory body for the implementation of construction programs launched by the Algerian State and included in its various economic plans. It originated from the prestigious National Directorate of Construction (DNC). It was later restructured and approved by Presidential Decree No. 82-73 dated 20/02/1982. <br> After being part of the INJACO Group portfolio, under SGP/INDJAB, it was directly attached to SGP INJAB (Shareholding Management Company).',
    'ar' => 'تأسس مكتب (B.E.R.E.G) في عام 1968 ليكون أداة للدراسة والمتابعة في تنفيذ برامج البناء التي أطلقتها الدولة الجزائرية والمدرجة في خططها الاقتصادية المختلفة. وقد انبثق عن المديرية الوطنية للبناء (DNC) المرموقة. ثم تمت إعادة هيكلته واعتماده بموجب المرسوم الرئاسي رقم 82-73 المؤرخ في 20/02/82. <br> وبعد أن كان جزءاً من محفظة مجمع "إنجاكو" التابع لـ SGP/INDJAB، تم إلحاقه مباشرة بشركة تسيير المساهمات (SGP INJAB).',
  ],

  'Suite à la' => [
    'fr' => 'Suite à la restructuration des SGP, le B.E.R.E.G a été transféré à la SGP GENEST avant la transformation de cette dernière en « Groupe Etudes et Engineering » le 15 Février 2018. Le B.E.R.E.G a été associé, seul ou dans le cadre de partenariat, avec des groupes de différentes nationalités à la conception, au contrôle et au suivi de la réalisation dans la plupart des grandes infrastructures réalisées dans le cadre du programme de développement national. Il a été l’initiateur dans l’introduction de nouvelles techniques de construction en Algérie en collaboration avec des partenaires étrangers dans les domaines suivants :',
    'en' => 'Following the restructuring of the SGPs, B.E.R.E.G was transferred to SGP GENEST before its transformation into the “Studies and Engineering Group” on February 15, 2018. B.E.R.E.G has participated, independently or in partnership with international groups of various nationalities, in the design, supervision, and monitoring of the construction of most major infrastructures carried out under the national development program. It was a pioneer in introducing new construction techniques in Algeria in collaboration with foreign partners in the following fields:',
    'ar' => 'إثر إعادة هيكلة شركات تسيير المساهمات (SGP)، تم تحويل مكتب (B.E.R.E.G) إلى SGP GENEST قبل تحويل هذه الأخيرة إلى "مجمع الدراسات والهندسة" في 15 فيفري 2018. وقد ساهم المكتب، بمفرده أو في إطار شراكة مع مجمعات من جنسيات مختلفة، في تصميم ومراقبة ومتابعة الإنجاز في معظم البنى التحتية الكبرى المنجزة ضمن برنامج التنمية الوطنية. كما كان سباقاً في إدخال تقنيات بناء جديدة في الجزائر بالتعاون مع شركاء أجانب في المجالات التالية:',
  ],

  'Précontraint, Traditionnel, Tridimensionnel,' => [
    'fr' => 'Précontraint, Traditionnel, Tridimensionnel, Coffrage tunnel Préfabrication lourde et légère, Lamellé collé',
    'en' => 'Prestressed construction, Traditional construction, Three-dimensional construction, Tunnel formwork, Heavy and light prefabrication, Glulam (laminated timber)',
    'ar' => 'الخرسانة مسبقة الإجهاد، البناء التقليدي، الهياكل ثلاثية الأبعاد، القوالب النفقية، التصنيع المسبق الثقيل والخفيف، والخشب الرقائقي الملحم.',
  ],

  'Utilisation de fondations' => [
    'fr' => 'Utilisation de fondations spéciales (Pieux Etc.)',
    'en' => 'Use of special foundations (piles, etc.)',
    'ar' => 'استخدام الأساسات الخاصة (الخوازيق، إلخ.)',
  ],

  'Le B.E.R.E.G a été et' => [
    'fr' => 'Le B.E.R.E.G a été et demeure encore une « institution » d’encadrement de stages pratiques et d’appui à la formation dispensée par les universités et les grandes écoles spécialisées, tels que :',
    'en' => 'B.E.R.E.G has been and remains an “institution” for supervising practical internships and supporting training programs provided by universities and major specialized schools, such as:',
    'ar' => 'كان ولا يزال مكتب (B.E.R.E.G) "مؤسسة" رائدة في تأطير التربصات التطبيقية ودعم التكوين الذي تقدمه الجامعات والمدارس العليا المتخصصة، مثل:',
  ],

  'L’Ecole Nationale Polytechnique' => [
    'fr' => 'L’Ecole Nationale Polytechnique (E.N.P.A) ;',
    'en' => 'National Polytechnic School (ENPA)',
    'ar' => 'المدرسة الوطنية المتعددة التقنيات (E.N.P.A)؛',
  ],

  'L’Ecole Polytechnique d\'Architecture' => [
    'fr' => 'L’Ecole Polytechnique d\'Architecture et d\'Urbanisme (E.P.A.U) ;',
    'en' => 'Polytechnic School of Architecture and Urban Planning (EPAU)',
    'ar' => 'المدرسة المتعددة التقنيات للهندسة المعمارية والعمران (E.P.A.U)؛',
  ],

  'L’Ecole Nationale des' => [
    'fr' => 'L’Ecole Nationale des Travaux Publics (E.N.T.P) ;',
    'en' => 'National School of Public Works (ENTP)',
    'ar' => 'المدرسة الوطنية العليا للأشغال العمومية (E.N.T.P)؛',
  ],

  'L’Université des Sciences' => [
    'fr' => 'L’Université des Sciences et Technologies Houari-Boumédiène (USTHB) ;',
    'en' => 'Houari Boumediene University of Science and Technology (USTHB)',
    'ar' => 'جامعة العلوم والتكنولوجيا هواري بومدين (USTHB)؛',
  ],

  'L’Institut National de Formation' => [
    'fr' => 'L’Institut National de Formation en Bâtiment (INFORBA) ;',
    'en' => 'National Institute for Building Training (INFORBA)',
    'ar' => 'المعهد الوطني للتكوين في البناء (INFORBA)؛',
  ],

  'L’Institut National de l’Hydraulique' => [
    'fr' => 'L’Institut National de l’Hydraulique (I.N.H) ;',
    'en' => 'National Institute of Hydraulics (I.N.H)؛',
    'ar' => 'المعهد الوطني للري (I.N.H)؛',
  ],

  'L’Institut National d’Informatique' => [
    'fr' => 'L’Institut National d’Informatique (I.N.I)',
    'en' => 'National Institute of Computer Science (INI)',
    'ar' => 'المعهد الوطني للإعلام الآلي (I.N.I)',
  ],

  'Par ailleurs, la' => [
    'fr' => 'Par ailleurs, la plus grande fierté de l’entreprise est, sans conteste, la Reconnaissance du Mérite National, distinction que lui a été décernée par Monsieur Le Président de la République pour services rendus à la Nation.',
    'en' => 'Furthermore, the company’s greatest pride is undoubtedly the National Order of Merit, an honor awarded to it by the President of the Republic in recognition of services rendered to the Nation.',
    'ar' => 'علاوة على ذلك، فإن أكبر فخر للمؤسسة هو بلا شك وسام الاستحقاق الوطني، وهو تكريم منحه إياها السيد رئيس الجمهورية تقديراً للخدمات التي قدمتها للأمة.',
  ],

  'Distinction du mérite' => [
    'fr' => 'Distinction du mérite national délivré par Monsieur le Président de la République Algérienne',
    'en' => 'National Order of Merit awarded by the President of the Republic of Algeria.',
    'ar' => 'وسام الاستحقاق الوطني المسلم من طرف السيد رئيس الجمهورية الجزائرية.',
  ],
  
];
?>
<span></span>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 <h2 <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['Bâtir lavenir'][$language]; ?> </h2>
                         
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about wow fadeInUp shadow " data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-3">
                            <div class="about-img">
                                <img src="img/logoClairs.jpg" alt="Image">
                            </div>
                            
                        </div>
                        <div class="col-lg-8 col-md-9">
                            <div class="section-header text-left">
                                
                                <h2  <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['HISTORIQUE DU B.E.R.E.G'][$language]; ?> </h2>
                            </div>
                            <div class="about-text">
                                <p  <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['Le Bureau d’Etudes,'][$language]; ?>
                                </p>
                                <br/>
                                
                                <p <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['Le B.E.R.E.G a été créé'][$language]; ?></p>
                                <br/>
                                <p <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['Suite à la'][$language]; ?>
                             
                                <br/> &nbsp •  <?= $text['Précontraint, Traditionnel, Tridimensionnel,'][$language]; ?>
                                <br/> &nbsp •	<?= $text['Utilisation de fondations'][$language]; ?>
                                </p>
                                <p> <?= $text['Le B.E.R.E.G a été et'][$language]; ?>
                               
                                </p>
                                <p <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> > 
                                <br/> &nbsp •	<?= $text['L’Ecole Nationale Polytechnique'][$language]; ?>
                                <br/> &nbsp •	<?= $text['L’Ecole Polytechnique d\'Architecture'][$language]; ?>
                                <br/> &nbsp •	<?= $text['L’Ecole Nationale des'][$language]; ?>
                                <br/> &nbsp •	<?= $text['L’Université des Sciences'][$language]; ?>
                                <br/> &nbsp •	<?= $text['L’Institut National de Formation'][$language]; ?>
                                <br/> &nbsp •	<?= $text['L’Institut National de l’Hydraulique'][$language]; ?>
                                <br/> &nbsp •	<?= $text['L’Institut National d’Informatique'][$language]; ?>
                                </p>
                                <br/>
                                <p <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> >
                               
                               <?= $text['Par ailleurs, la'][$language]; ?> </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            
            <div class="   d-flex justify-content-center ">
                <h3 <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $text['Distinction du mérite'][$language]; ?> </h3>
            </div>                       
            <br><br>
            <div class="container" >
                <img style="max-width:90%;" src="img/boteflika-bereg.jpg" alt="Image">            
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
