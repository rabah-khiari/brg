
    <div id="myDiv">
      
    </div>

    <script>
        // Simulate a button click after the page loads to hide all item in the first load 
        document.addEventListener('DOMContentLoaded', (event) => {
            const button = document.getElementById('showButton');
            const div = document.getElementById('myDiv');

            if (button && div) {
                button.addEventListener('click', function() {
                    div.style.display = 'block';
                });

                // Simulate a button click after the page loads
                button.click();
            } else {
                console.error('Button or div not found');
            }
        });
    </script>

<!-- Portfolio Start -->
 <div class="portfolio">
                <div class="container">
                    <div class="section-header text-center">
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                 <li id="showButton" class="filter-active" style="background:white;" data-filter=".RIEN" > </li>
                                 
                                <li data-filter=".first" >Logements</li>
                                <li data-filter=".second">Equipements et Infrastructures</li>
                                <li data-filter=".third">Hôpitaux</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">

                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item RIEN wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-warp">
                                
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/projet3000.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>Projet Réalisation des 3000 Logements à Larabaa </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>3000 Log à Larabaa</h3>
                                    <a class="btn" href="img/projet/projet3000.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/4000log.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>Projet Réalisation des 4000 Logements à Sidi Hamed </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>4000 Log à Sidi Hamed</h3>
                                    <a class="btn" href="img/projet/4000log.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/ECNbechar.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>Etude et suivi de la realisation de Ecoles des Cadets de BECHAR </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3  style="font-size:18px;">Ecoles des Cadets BECHAR</h3>
                                    <a class="btn" href="img/projet/ECNbechar.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/ECNblida.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                        Etude et suivi de la REALISATION de Ecoles des Cadets de BLIDA
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Ecoles des Cadets BLIDA</h3>
                                    <a class="btn" href="img/projet/ECNblida.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/r14oran.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                        Etude et suivi de la REALISATION	D’UNE	TOUR	EN	R+14	AVEC	2	NIVEAUX SOUS SOL A ORAN 
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>R +14 | -2  ORAN</h3>
                                    <a class="btn" href="img/projet/r14oran.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.4s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/cpa1.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                        Etude nouveau siège social du Crédit Populaire d’Algérie (CPA) en Haute Qualité Environnementale (HQE)
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Siège CPA en HQE</h3>
                                    <a class="btn" href="img/projet/cpa1.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/finance.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                        Siège du Ministère des Finances,
                                        Conception Architecturale – Calcul des Structures- Suivi de réalisation
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Ministère des Finances</h3>
                                    <a class="btn" href="img/projet/finance.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/kolea.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>Pénitencier 2000 pensionnaires  Koléa- Algérie : <br>
                                          Etude et Suivi de la Réalisation
                                        </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Pénitencier 2000 -Koléa</h3>
                                    <a class="btn" href="img/projet/kolea.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/hotel.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                       <p>Conception d’étude et de suivi de réalisation</p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Hôtel des Magistrats</h3>
                                    <a class="btn" href="img/projet/hotel.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/energie.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>Etablissements d’enseignement secondaires : Conception étude tous corps d’état – suivi et contrôle de la réalisation
                                        </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3 style="font-size:16px; pading-left:0;marging-left:0;">Etablissements d’Enseignement secondaires</h3>
                                    <a class="btn" href="img/projet/energie.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/sanitair.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>Programme de réalisation d’Etablissements hospitaliers  à travers toute l’Algérie : <br>
                                        Mission de Conception d’étude et de suivi et contrôle de réalisation
                                        </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3 style="font-size:18px;">Etablissements hospitaliers</h3>
                                    <a class="btn" href="img/projet/sanitair.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/200log.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>200 logements Ouled Farès – Chlef: <br> Conception d’étude et de suivi de réalisation
                                        </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>200 logements – Chlef</h3>
                                    <a class="btn" href="img/projet/200log.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/cancerBjaia.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>Centre Anti Cancer Amizour - Bejaia <br> Conception d’étude et suivi de réalisation 
                                        </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3 style="font-size:17px;">Centre Amizour -Bejaia</h3>
                                    <a class="btn" href="img/projet/cancerBjaia.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/MosqueTelemcen.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>Mosquée de Tlemcen : <br> Conception d’étude et suivi de réalisation
                                        </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3 style="font-size:18px;">Mosquée de Tlemcen</h3>
                                    <a class="btn" href="img/projet/MosqueTelemcen.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/projet/ONCOLOGIE.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        
                                        <p>ONCOLOGIE DU CENTRE HOSPITALIER UNIVERSITAIRE DE BAB EL OUED : <br> Conception d’étude et de suivi de réalisation </p>
                                      
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3 style="font-size:15px; ">ONCOLOGIE DU CENTRE HOSPITALIER</h3>
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
            <!-- Portfolio End -->

           