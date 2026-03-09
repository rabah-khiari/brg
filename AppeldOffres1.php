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
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                 
                            <h2>  <?= $language == 'fr' ? 'Appel d’Offres' : ($language == 'ar' ? 'طلبات العروض' : 'Tenders'); ?> </h2>
                          
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

<style>
    .offre-container {
  background-color:rgb(255, 255, 255);
  padding: 30px;
  border-radius: 10px;
  /* border-left: 4px solid #007bff; */
  max-width: 90;
  margin: 40px auto;
  font-family: 'Segoe UI', sans-serif;
}

.offre-container a {
  color: #007bff;
  font-weight: bold;
  text-decoration: none;
}

.offre-container a:hover {
  text-decoration: underline;
}

</style>
            <!-- About Start -->
            <div class="about wow fadeInUp shadow " data-wow-delay="0.3s">
                <div class="container">
                    <!-- Appel d'offre - Section bilingue -->

                    <section class="offre-container shadow">

                    <!-- Version française -->
                    <div style="text-align: left; direction: ltr;">
                        <h2>📢 Appel d’Offres - Ministère de l'Habitat</h2>
                        <p>
                        le BEREG EPE/SPA, filiale du groupe <strong>G.E.E</strong>  sous tutelle du <strong>Ministère de l'Habitat ,
                        de l'Urbanisme et de la Ville </strong> informe les entreprises ayant la qualité de fournisseurs ou 
                        distributeurs de mobilier, que: 
                        </p>
                        <p>
                        le ministère de l'habitat , de l'urbanisme et de la ville a lancé le  07/07/2025 un appel d'offres national ouvert avec 
                        exigences de capacités minimales N°07/M.H.U.V/2025 portant " la fourniture, le montage, la pose et l'installation des 
                        mobiliers et équipements au nouveau siège du ministère de l'habitat, de l'urbanisme et de la ville sis à DELY IBRAHIM, ALGER." <br>
                        <strong>
                        a fourniture, le montage, la pose et l'installationdes mobiliers et équipements au nouveau siège du ministère de 
                        l'habitat, de l'urbanisme et de la ville sis à DELY IBRAHIM, ALGER.
                        </strong>
                       
                        </p>
                        <p>
                        Les entreprises désireuses de soumissionner à cet appel d'offres peuvent  consulter l'intégralité de la publication directement 
                        sur le site du ministère de l'hbitat de l'urbanisme et de la ville via ce lien:
                        <a href="https://www.mhuv.gov.dz/?p=4493" target="_blank">www.mhu.gov.dz</a> <br>
                        Ci-joint la publication en format PDF téléchargeable <a href="pdf/Avis_N07_2025_Fr-Ar.pdf" target="_blank">télécharger le document PDF complet ici</a>.
                        </p>
                    </div>

                    <hr style="margin: 30px 0;">

                    <!-- النسخة العربية -->
                    <div style="text-align: right; direction: rtl;">
                         <h2>📢 إعلان عن طلب عروض - وزارة السكن</h2>

                        <p>
                            تُعلم مؤسسة <strong>BEREG EPE/SPA</strong>، وهي فرع تابع للمجمع <strong>G.E.E</strong> تحت وصاية 
                            <strong>وزارة السكن والعمران والمدينة</strong>، كافة المؤسسات التي تملك صفة موردين أو موزعين للأثاث، بما يلي:
                        </p>

                        <p>
                            لقد أطلقت وزارة السكن والعمران والمدينة بتاريخ <strong>07/07/2025</strong> طلب عروض وطني مفتوح مع اشتراط قدرات دنيا 
                            تحت رقم N°07/M.H.U.V/2025، والمتعلق بـ:
                        </p>

                        <p>
                            <strong>
                            اقتناء وتركيب ووضع وتنصيب أثاث وتجهيزات المقر الجديد لوزارة السكن والعمران والمدينة الواقع بدالي إبراهيم – الجزائر
                            </strong>
                        </p>

                        <p>
                            يمكن للمؤسسات الراغبة في المشاركة في هذا الطلب الاطلاع على كامل الإعلان من خلال الموقع الرسمي لوزارة السكن والعمران والمدينة عبر الرابط التالي:
                            <a href="https://www.mhuv.gov.dz/?p=4493" target="_blank">www.mhu.gov.dz</a><br>
                            كما يمكن تحميل نسخة من الإعلان بصيغة PDF عبر الرابط التالي:
                            <a href="pdf/Avis_N07_2025_Fr-Ar.pdf" target="_blank">تحميل الوثيقة الكاملة بصيغة PDF</a>.
                        </p>

                    </div>

                    </section>

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
