<?php
session_start();
if(isset($_GET['lang']))
{
    $language = $_GET['lang'];
    
    setcookie('lang', $language, time() + 3600*24*30, '/');
    $_SESSION['language'] = $language;

    header("Location: ".$_SERVER['PHP_SELF']);
}

// Allowed languages
$allowed_langs = ['fr', 'en','ar'];

// Read GET and COOKIE safely
$get_lang = filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING);
$cookie_lang = $_COOKIE['lang'] ?? null;

// 1️⃣ Check if GET param is valid
if ($get_lang && in_array($get_lang, $allowed_langs, true)) {
    $language = $get_lang;

    // Save choice in cookie for 30 days
    setcookie('lang', $language, [
        'expires' => time() + 3600 * 24 * 30,
        'path' => '/',
        'httponly' => true,
        // 'secure' => true, // uncomment if HTTPS
        // 'samesite' => 'Lax'
    ]);
}

// 2️⃣ If no valid GET, use valid COOKIE
elseif ($cookie_lang && in_array($cookie_lang, $allowed_langs, true)) {
    $language = $cookie_lang;
}

// 3️⃣ Otherwise fallback to default French
else {
    $language = 'fr';
}

// 4️⃣ If someone injected invalid ?lang= value, clean the URL
if (isset($_GET['lang']) && !in_array($_GET['lang'], $allowed_langs, true)) {
    $url = strtok($_SERVER["REQUEST_URI"], '?'); // Remove ?lang=
    header("Location: $url");
    exit;
}
?>

</style>
<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php?lang=<?= $language ?>" class="nav-item nav-link "> <?= $language == 'fr' ? 'Accueil' : ($language == 'ar' ? 'الرئيسية' : 'Home'); ?> </a>
                    
                    <div class="nav-item dropdown">

                        <a href="about.php?lang=<?= $language ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?> ><?= $language == 'fr' ? 'à propos du BEREG' : ($language == 'ar' ? 'عن مكتب BEREG' : 'About BEREG'); ?></a>
                        <div class="dropdown-menu">
                            <a href="historique.php?lang=<?= $language ?>" class="dropdown-item"> <?= $language == 'fr' ? 'Historique' : ($language == 'ar' ? 'لمحة تاريخية' : 'History'); ?> </a>
                            <a href="international.php?lang=<?= $language ?>" class="dropdown-item" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $language == 'fr' ? 'BEREG à l\'international' : ($language == 'ar' ? 'BEREG الدولية' : 'BEREG International'); ?> </a>
                            <a href="politique.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Politique qualité' : ($language == 'ar' ? 'سياسة الجودة' : 'Quality Policy'); ?> </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="service.php?lang=<?= $language ?>" class="nav-link dropdown-toggle" data-toggle="dropdown"><?= $language == 'fr' ? 'Domaines d\'activité' : ($language == 'ar' ? 'مجالات النشاط' : 'Fields of Activity'); ?></a>
                        <div class="dropdown-menu">
                            <a href="etudeArchi.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Études Architecturales' : ($language == 'ar' ? 'دراسات معمارية' : 'Architectural Studies'); ?>  </a>
                            <a href="etudeGC.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Études de Génie Civil' : ($language == 'ar' ? 'دراسات هندسة مدنية' : 'Civil Engineering Studies'); ?> </a>
                            <a href="corpEtaTech.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Corps d’État Technique' : ($language == 'ar' ? 'هيكل فني' : 'Technical Trade Bodies'); ?>  </a>
                            <a href="etudeTopoVrd.php?lang=<?= $language ?>" class="dropdown-item" <?= ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $language == 'fr' ? 'Études Topographiques et VRD' : ($language == 'ar' ? 'دراسات طوبوغرافية و VRD' : 'Topographic & VRD Studies'); ?> </a>
                            <a href="suiviChantie.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Suivi des Chantiers' : ($language == 'ar' ? 'مراقبة المواقع' : 'Site Supervision'); ?>  </a>
                        </div>
                    </div>
                    <a href="secteurActivite.php?lang=<?= $language ?>" class="nav-item nav-link "><?= $language == 'fr' ? 'Secteurs d\'activité' : ($language == 'ar' ? 'مجالات النشاط' : 'Activity Sectors'); ?> </a>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?= $language == 'fr' ? 'Projets' : ($language == 'ar' ? 'المشاريع' : 'Projects'); ?></a>
                        <div class="dropdown-menu">
                            <a href="portfolio.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Grands projets réalisés' : ($language == 'ar' ? 'المشاريع الكبرى المكتملة' : 'Major Completed Projects'); ?></a>
                            <a href="projetEnCours.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Projets en cours' : ($language == 'ar' ? 'المشاريع الجارية' : 'Ongoing Projects'); ?> </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?= $language == 'fr' ? 'Moyens humains et techniques' : ($language == 'ar' ? 'الأدوات البشرية والتقنية' : 'Human & Technical Resources'); ?></a>
                        <div class="dropdown-menu">
                            <a href="ressourceHumain.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Effectifs' : ($language == 'ar' ? 'الفريق العامل' : 'Staff'); ?></a>
                            <a href="ressourceTechnique.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Moyens techniques' : ($language == 'ar' ? 'الأدوات التقنية' : 'Technical Means'); ?> </a>
                           
                        </div>
                    </div>
                   
         

                    
                    <!--<a href="team.php" class="nav-item nav-link">équipe</a>-->
                    
                    <!--
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="blog.php" class="dropdown-item">Page 1</a>
                            <a href="single.php" class="dropdown-item">page 2</a>
                            <a href="blog.php" class="dropdown-item">Page 3</a>
                            <a href="single.php" class="dropdown-item">page 4</a>
                        </div>
                    </div>
                    -->

                    <a href="contact.php?lang=<?= $language ?>" class="nav-item nav-link"><?= $language == 'fr' ? 'Contact' : ($language == 'ar' ? 'اتصل بنا' : 'Contact'); ?></a>
                    <a href="recrutment.php?lang=<?= $language ?>" class="nav-item nav-link"><?= $language == 'fr' ? 'Recrutement' : ($language == 'ar' ? 'التوظيف' : 'Recruitment'); ?></a>
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?= $language == 'fr' ? 'Appel d’Offres' : ($language == 'ar' ? 'المزايدات' : 'Tenders'); ?> </a>
                        <div class="dropdown-menu">
                            <a href="AppeldOffres1.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Ministère de l\'Habitat' : ($language == 'ar' ? 'وزارة السكن' : 'Ministry of Housing'); ?></a>
                            <a href="AppeldOffres2.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'N°01/BEREG EPE-SPA/2025' : ($language == 'ar' ? 'رقم 01/BEREG EPE-SPA/2025' : 'No. 01/BEREG EPE-SPA/2025'); ?></a>
                            <a href="AppeldOffres3.php?lang=<?= $language ?>" class="dropdown-item"><?= $language == 'fr' ? 'Avis d\'Infructuosité' : ($language == 'ar' ? 'إشعار عدم النجاح' : 'Notice of Unsuccessful Tender'); ?></a>
                        </div>
                       
                    </div>
                    <?php
                        

                        //$language = $_SESSION['language'] ?? $_COOKIE['lang'] ?? 'fr';
                        
                        
                        ?>
                        <!-- language -->
                    
                    <?php
                    $languagetxt=['fr'=>'Français','en'=>'English','ar'=>'العربية'];
                    ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <?php echo $languagetxt[$language]; ?>
                        </a>
                        <div class="dropdown-menu">
                            <?php if($language!=='en') {?>
                            <a href="?lang=en" class="dropdown-item">English</a> <?php } ?>
                            <?php if($language!=='fr') {?>
                            <a href="?lang=fr" class="dropdown-item">Français</a><?php } ?>
                            <?php if($language!=='ar') {?>
                            <a href="?lang=ar" class="dropdown-item">العربية</a><?php } ?>
                        </div>
                       
                    </div>

                </div>
                
            </div>
        </nav>
    </div>
</div>

<!-- Nav Bar End -->
