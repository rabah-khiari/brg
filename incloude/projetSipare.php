<?php
$text = [
    // Categories
    'Logements' => [
        'fr' => 'Logements',
        'en' => 'Housing'
    ],
    'Equipements Infrastructures' => [
        'fr' => 'Equipements et Infrastructures',
        'en' => 'Equipment and Infrastructure'
    ],
    'Hopitaux' => [
        'fr' => 'Hôpitaux',
        'en' => 'Hospitals'
    ],
    
    // Project: 3000 Logements Larabaa
    'Desc 3000' => [
        'fr' => 'Projet Réalisation des 3000 Logements à Larabaa',
        'en' => '3000 Housing Units Construction Project in Larabaa'
    ],
    'Title 3000' => [
        'fr' => '3000 Log à Larabaa',
        'en' => '3000 Units in Larabaa'
    ],
    
    // Project: 4000 Logements Sidi Hamed
    'Desc 4000' => [
        'fr' => 'Projet Réalisation des 4000 Logements à Sidi Hamed',
        'en' => '4000 Housing Units Construction Project in Sidi Hamed'
    ],
    'Title 4000' => [
        'fr' => '4000 Log à Sidi Hamed',
        'en' => '4000 Units in Sidi Hamed'
    ],
    
    // Project: R+14 Oran
    'Desc R14' => [
        'fr' => 'Etude et suivi de la REALISATION D’UNE TOUR EN R+14 AVEC 2 NIVEAUX SOUS SOL A ORAN',
        'en' => 'Study and supervision of the construction of a 14-story tower (R+14) with 2 basement levels in Oran'
    ],
    'Title R14' => [
        'fr' => 'R +14 | -2 ORAN',
        'en' => 'R +14 | -2 ORAN'
    ],
    
    // Project: CPA HQE
    'Desc CPA' => [
        'fr' => 'Etude nouveau siège social du Crédit Populaire d’Algérie (CPA) en Haute Qualité Environnementale (HQE)',
        'en' => 'Design of the new Credit Populaire d’Algerie (CPA) headquarters with High Environmental Quality (HQE) standards'
    ],
    'Title CPA' => [
        'fr' => 'Siège CPA en HQE',
        'en' => 'CPA HQE Headquarters'
    ],
    
    // Project: Finance Ministry
    'Desc Finance' => [
        'fr' => 'Siège du Ministère des Finances, Conception Architecturale – Calcul des Structures - Suivi de réalisation',
        'en' => 'Ministry of Finance Headquarters: Architectural Design, Structural Engineering, and Construction Supervision'
    ],
    'Title Finance' => [
        'fr' => 'Ministère des Finances',
        'en' => 'Ministry of Finance'
    ],
    
    // Project: Hotel Magistrats
    'Desc Hotel' => [
        'fr' => 'Conception d’étude et de suivi de réalisation',
        'en' => 'Design study and construction supervision'
    ],
    'Title Hotel' => [
        'fr' => 'Hôtel des Magistrats',
        'en' => 'Magistrates Hotel'
    ],
    
    // Project: Schools
    'Desc Schools' => [
        'fr' => 'Etablissements d’enseignement secondaires : Conception étude tous corps d’état – suivi et contrôle de la réalisation',
        'en' => 'Secondary Education Facilities: Full-service design (all trades), supervision, and construction control'
    ],
    'Title Schools' => [
        'fr' => 'Etablissements d’Enseignement secondaires',
        'en' => 'Secondary Education Facilities'
    ],
    
    // Project: General Hospitals
    'Desc Hospitals' => [
        'fr' => 'Programme de réalisation d’Etablissements hospitaliers à travers toute l’Algérie : Mission de Conception d’étude et de suivi et contrôle de réalisation',
        'en' => 'National Hospital Construction Program: Design study, supervision, and construction control'
    ],
    'Title Hospitals' => [
        'fr' => 'Etablissements hospitaliers',
        'en' => 'Hospital Facilities'
    ],
    
    // Project: 200 Log Chlef
    'Desc 200' => [
        'fr' => '200 logements Ouled Farès – Chlef: Conception d’étude et de suivi de réalisation',
        'en' => '200 Housing Units in Ouled Fares – Chlef: Design study and construction supervision'
    ],
    'Title 200' => [
        'fr' => '200 logements – Chlef',
        'en' => '200 Units – Chlef'
    ],
    
    // Project: Amizour Cancer Center
    'Desc Cancer' => [
        'fr' => 'Centre Anti Cancer Amizour - Bejaia Conception d’étude et suivi de réalisation',
        'en' => 'Amizour Oncology Center - Bejaia: Design study and construction supervision'
    ],
    'Title Cancer' => [
        'fr' => 'Centre Amizour - Bejaia',
        'en' => 'Amizour Center - Bejaia'
    ],
    
    // Project: Tlemcen Mosque
    'Desc Mosque' => [
        'fr' => 'Mosquée de Tlemcen : Conception d’étude et suivi de réalisation',
        'en' => 'Tlemcen Mosque: Design study and construction supervision'
    ],
    'Title Mosque' => [
        'fr' => 'Mosquée de Tlemcen',
        'en' => 'Tlemcen Mosque'
    ],
    
    // Project: Oncology Bab El Oued
    'Desc Oncology' => [
        'fr' => 'ONCOLOGIE DU CENTRE HOSPITALIER UNIVERSITAIRE DE BAB EL OUED : Conception d’étude et de suivi de réalisation',
        'en' => 'Oncology Department at Bab El Oued University Hospital Center: Design study and construction supervision'
    ],
    'Title Oncology' => [
        'fr' => 'ONCOLOGIE DU CENTRE HOSPITALIER',
        'en' => 'University Hospital Oncology'
    ],
];
?>
<div class="portfolio">
    <div class="container">
        <div class="section-header text-center"></div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li id="showButton" class="filter-active" style="background:white;" data-filter=".RIEN"></li>
                    <li data-filter=".first"><?= $text['Logements'][$language]; ?></li>
                    <li data-filter=".second"><?= $text['Equipements Infrastructures'][$language]; ?></li>
                    <li data-filter=".third"><?= $text['Hopitaux'][$language]; ?></li>
                </ul>
            </div>
        </div>
        
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/projet3000.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc 3000'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title 3000'][$language]; ?></h3>
                        <a class="btn" href="img/projet/projet3000.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/4000log.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc 4000'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title 4000'][$language]; ?></h3>
                        <a class="btn" href="img/projet/4000log.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/r14oran.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc R14'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title R14'][$language]; ?></h3>
                        <a class="btn" href="img/projet/r14oran.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.4s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/cpa1.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc CPA'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title CPA'][$language]; ?></h3>
                        <a class="btn" href="img/projet/cpa1.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/finance.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Finance'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title Finance'][$language]; ?></h3>
                        <a class="btn" href="img/projet/finance.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/hotel.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Hotel'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title Hotel'][$language]; ?></h3>
                        <a class="btn" href="img/projet/hotel.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/energie.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Schools'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3 style="font-size:16px;"><?= $text['Title Schools'][$language]; ?></h3>
                        <a class="btn" href="img/projet/energie.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/sanitair.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Hospitals'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3 style="font-size:18px;"><?= $text['Title Hospitals'][$language]; ?></h3>
                        <a class="btn" href="img/projet/sanitair.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/200log.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc 200'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $text['Title 200'][$language]; ?></h3>
                        <a class="btn" href="img/projet/200log.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/cancerBjaia.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Cancer'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3 style="font-size:17px;"><?= $text['Title Cancer'][$language]; ?></h3>
                        <a class="btn" href="img/projet/cancerBjaia.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/MosqueTelemcen.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Mosque'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3 style="font-size:18px;"><?= $text['Title Mosque'][$language]; ?></h3>
                        <a class="btn" href="img/projet/MosqueTelemcen.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/projet/ONCOLOGIE.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p><?= $text['Desc Oncology'][$language]; ?></p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3 style="font-size:15px; "><?= $text['Title Oncology'][$language]; ?></h3>
                        <a class="btn" href="img/projet/ONCOLOGIE.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 col-md-12 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.6s">
                <div class="row">
                    <div class="col-12 load-more">
                        <?php include ('incloude/atestationLogement.php'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                <div class="row">
                    <div class="col-12 load-more">
                        <?php include ('incloude/atestationEquipement.php'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                <div class="row">
                    <div class="col-12 load-more">
                        <?php include ('incloude/atestationHopitaux.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>