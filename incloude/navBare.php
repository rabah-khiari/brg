<?php
// Allowed languages
$allowed_langs = ['fr', 'en'];

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
                    <a href="index.php" class="nav-item nav-link ">Accueil </a>
                    
                    <div class="nav-item dropdown">
                        <a href="about.php" class="nav-link dropdown-toggle" data-toggle="dropdown">à propos du BEREG</a>
                        <div class="dropdown-menu">
                            <a href="historique.php" class="dropdown-item">Historique </a>
                            <a href="international.php" class="dropdown-item">BEREG à l'international </a>
                            <a href="politique.php" class="dropdown-item">Politique qualité </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="service.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Domaines d'activité</a>
                        <div class="dropdown-menu">
                            <a href="etudeArchi.php" class="dropdown-item">Études Architecturales  </a>
                            <a href="etudeGC.php" class="dropdown-item">Études de Génie Civil  </a>
                            <a href="corpEtaTech.php" class="dropdown-item">Corps d’État Technique  </a>
                            <a href="etudeTopoVrd.php" class="dropdown-item">Études Topographiques et VRD </a>
                            <a href="suiviChantie.php" class="dropdown-item">Suivi des Chantiers  </a>
                        </div>
                    </div>
                    <a href="secteurActivite.php" class="nav-item nav-link ">Secteurs d'activité </a>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projets</a>
                        <div class="dropdown-menu">
                            <a href="portfolio.php" class="dropdown-item">Grands projets réalisés</a>
                            <a href="projetEnCours.php" class="dropdown-item">Projets en cours </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Moyens humains et techniques</a>
                        <div class="dropdown-menu">
                            <a href="ressourceHumain.php" class="dropdown-item">Effectifs</a>
                            <a href="ressourceTechnique.php" class="dropdown-item">Moyens techniques </a>
                           
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

                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Appel d’Offres </a>
                        <div class="dropdown-menu">
                            <a href="AppeldOffres1.php" class="dropdown-item">Ministère de l'Habitat</a>
                            <a href="AppeldOffres2.php" class="dropdown-item">N°01/BEREG EPE-SPA/2025</a>
                            <a href="AppeldOffres3.php" class="dropdown-item">Avis d'Infructuosité</a>
                        </div>
                       
                    </div>
                    <?php
                        $language = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'fr'; // default French

                        // save language choice in cookie for next pages
                        setcookie('lang', $language, time() + 3600 * 24 * 30, '/'); // 30 days

                        ?>
                        <!-- language -->
                    <?php if ($language == 'fr'): ?>
                        <a class="nav-item nav-link" href="?lang=en"><i class="fa fa-language" aria-hidden="true"></i> Englais</a>
                    <?php else: ?>
                        <a class="nav-item nav-link" href="?lang=fr"><i class="fa fa-language" aria-hidden="true"></i> Français</a>
                    <?php endif; ?>
                </div>
                
            </div>
        </nav>
    </div>
</div>

<!-- Nav Bar End -->
