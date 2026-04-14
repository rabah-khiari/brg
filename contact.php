<?php
$text = [
    'Contact_Title_Tab' => [
        'fr' => 'BEREG - Contact',
        'en' => 'BEREG - Contact Us',
        'ar' => "مكتب \u{2067}BEREG\u{2069} - اتصل بنا",
    ],
    'Contact_Header' => [
        'fr' => 'Contactez-nous',
        'en' => 'Contact Us',
        'ar' => 'اتصل بنا',
    ],
    'Phone' => [
        'fr' => 'Téléphone',
        'en' => 'Phone',
        'ar' => 'الهاتف',
    ],
    'Email' => [
        'fr' => 'Email',
        'en' => 'Email',
        'ar' => 'البريد الإلكتروني',
    ],
    'Main_Office' => [
        'fr' => 'Direction Générale',
        'en' => 'General Management',
        'ar' => 'المديرية العامة',
    ],
    'Location_Label' => [
        'fr' => 'Localisation',
        'en' => 'Location',
        'ar' => 'الموقع',
    ],
    'Our_Units' => [
        'fr' => 'Nos Unités',
        'en' => 'Our Units',
        'ar' => 'وحداتنا',
    ],
    'recrutement' => [
        'fr' => 'Recrutement',
        'en' => 'Recruitment',
        'ar' => 'التوظيف',
    ],
    'Unit_Alger' => [
        'fr' => "Unité d'Alger",
        'en' => 'Algiers Unit',
        'ar' => 'وحدة الجزائر',
    ],
    'Construction_Msg' => [
        'fr' => 'en cours de construction',
        'en' => 'under construction',
        'ar' => 'قيد الإنجاز',
    ],
    'Pole_Prefix' => [
        'fr' => 'Pole de ',
        'en' => 'Pole of ',
        'ar' => 'قطب ',
    ],
    'Pole_setif' => [
        'fr' => "Pole de Sétif",
        'en' => 'Sétif Pole',
        'ar' => 'قطب سطيف',
    ],
    "Pole_Adrar" => [
        'fr' => "Pole d'Adrar",
        'en' => 'Adrar Pole',
        'ar' => 'قطب أدرار',
    ],
    "Pole_Tlemcen" => [
        'fr' => "Pole de Tlemcen",
        'en' => 'Tlemcen Pole',
        'ar' => 'قطب تلمسان',
    ],
    "Pole_Tiaret" => [
        'fr' => "Pole de Tiaret",
        'en' => 'Tiaret Pole',
        'ar' => 'قطب تيارت',
    ],
    "Pole_Chlef" => [
        'fr' => "Pole de Chlef",
        'en' => 'Chlef Pole',
        'ar' => 'قطب شلف',
    ],
    "Pole_Tizi-Ouzou" => [
        'fr' => "Pole de Tizi-Ouzou",
        'en' => 'Tizi-Ouzou Pole',
        'ar' => 'قطب تيزي وزو'
        ],
    "BEREG  is currently looking for" => [
        'fr' => "BEREG  est actuellement à la recherche d'ingénieurs et de professionnels talentueux dans divers domaines de la construction et de la conception.",
        'en' => "BEREG  is currently looking for talented engineers and professionals in various fields of construction and design.",
        'ar' => "يبحث مكتب الدراسات حاليا عن مهندسين وكفاءات موهوبة في مختلف مجالات البناء والتصميم.",
    ],
    "We are recruiting for" => [
        'fr' => "Nous recrutons pour des postes tels que Architectes, Ingénieurs GC, Ingénieurs VRD, et d'autres domaines techniques et d'études connexes.",
        'en' => "We are recruiting for positions such as Architects, Civil Engineers (GC), VRD Engineers, and other related technical and study fields.",
        'ar' => "نحن نوظف حالياً في تخصصات عدة، منها: مهندسون معماريون، مهندسون مدنيون، مهندسون طبوغرافيون، بالإضافة إلى تخصصات تقنية ودراسية أخرى ذات صلة.",],
        
    "If you are motivated, passionate" => [
        'fr' => "Si vous êtes motivé, passionné par l'ingénierie, et souhaitez contribuer à des projets majeurs, nous serions ravis de recevoir votre candidature.",
        'en' => " If you are motivated, passionate about engineering, and want to contribute to major projects, we would be happy to receive your application.",
        'ar' => "إذا كنت متحمسًا، شغوفًا بالهندسة، وترغب في المساهمة في مشاريع كبرى، فسيسعدنا استقبال طلبك.",],
    "Please send your CV and application to:" => [
        'fr' => "Veuillez envoyer votre CV et votre candidature à :",
        'en' => "Please send your CV and application to:",
        'ar' => "يرجى إرسال سيرتك الذاتية وطلبك إلى:",],
        

];
?>
 
 
<!DOCTYPE html>
<html lang="<?= $language; ?>">
    <head>
        <meta charset="utf-8">
        <title><?= $text['Contact_Title_Tab'][$language]; ?></title>
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
                            <h2><?= $text['Contact_Header'][$language]; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <h2><?= $text['Main_Office'][$language]; ?></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2><?= $text['Location_Label'][$language]; ?></h2>
                                        <p>Route Nationale N'5 -Bab Ezzouar ALGER </p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2> <?= $text['Phone'][$language]; ?> </h2>
                                        <p>020 41 60 14 - 020 41 60 15</p>
                                        <p>FAX : 020 41 60 16</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2><?= $text['Email'][$language]; ?></h2>
                                        <p>contact@bereg.dz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 ">
                            <div class="">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3802.9675628190103!2d3.1799649258065497!3d36.724919817453994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e51f134281c91%3A0x88d1ec24188bc0f9!2z2YXZg9iq2Kgg2KfZhNiv2LHYp9iz2KfYqiDYp9mE2YfZhtiv2LPZitipIEJFUkVH!5e0!3m2!1sfr!2sdz!4v1716202658869!5m2!1sfr!2sdz"
                                class="w-100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php  if($language=='ar'){?>
            <style>
                p{
                    direction: "rtl";
                    text-align: right; unicode-bidi: embed;
                };
            </style>
            <?php          
            }     
            ?>
            <div class="">
                <div class="section-header text-center">
                    <h2> 📢 <?= $text['recrutement'][$language]; ?> </h2>
                </div>
                <div class="about wow fadeInUp  " data-wow-delay="0.1s">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="about-img">
                                    <img src="img/hiring.jpg" alt="Image">
                                </div>
                                
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="section-header text-left">
                                    
                                   <p style="font-size: 18px; line-height: 1.6; color: #333;">
                                      <?= $text['BEREG  is currently looking for'][$language]; ?>  
                                    </p>

                                    <p style="font-size: 18px; line-height: 1.6; color: #333;">
                                       <?= $text['We are recruiting for'][$language]; ?>  
                                    </p>

                                    <p style="font-size: 18px; line-height: 1.6; color: #333;">
                                        <?= $text['If you are motivated, passionate'][$language]; ?> 
                                    </p>

                                    <p style="font-size: 18px; line-height: 1.6; color: #333;"> 
                                       <?= $text['Please send your CV and application to:'][$language]; ?> 
                                        <br>
                                        <strong style="text-align: center; font-size: 18px; line-height: 1.6; color: #333;">
                                            <a href="mailto:recrutement@bereg.dz">recrutement@bereg.dz</a>
                                        </strong>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">
                        <h2><?= $text['Our_Units'][$language]; ?> </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseAlger">
                                            <?= $text['Unit_Alger'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseAlger" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                 <p><i class="fa fa-map-marker-alt"></i> Wilaya de Alger  </p>
                                                 <p><i class="fa fa-phone-alt"></i> 020 41 60 14</p>
                                                 <p><i class="fa fa-phone-alt"></i> 020 41 60 15</p>
                                                 <p><i class="fa fa-envelope"></i> FAX: 020 41 60 16</p>
                                                 <p><i class="fa fa-envelope"></i> contact@bereg.dz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                            <?= $text['Pole_setif'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                <p><i class="fa fa-map-marker-alt"></i> Wilaya de Sétif </p>
                                                <p><i class="fa fa-phone-alt"></i> 036 53 75 00</p>
                                                <p><i class="fa fa-envelope"></i> setif@bereg.dz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne2">
                                            <?= $text['Pole_Adrar'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseOne2" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                <p><i class="fa fa-map-marker-alt"></i> Wilaya de Adrar </p>
                                                <p><i class="fa fa-phone-alt"></i> 049 96 64 25</p>
                                                <p><i class="fa fa-envelope"></i> adrar@bereg.dz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                        <?= $text['Pole_Tlemcen'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                <p><i class="fa fa-map-marker-alt"></i> Wilaya de Tlemcen </p>
                                                <p><i class="fa fa-phone-alt"></i> 043 22 15 40</p>
                                                <p><i class="fa fa-envelope"></i> telemcen@bereg.dz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                        <?= $text['Pole_Tiaret'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                <p><i class="fa fa-map-marker-alt"></i> Wilaya de Tiaret </p>
                                                <p><i class="fa fa-phone-alt"></i> 046 21 01 47</p>
                                                <p><i class="fa fa-envelope"></i> tiaret@bereg.dz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                            <?= $text['Pole_Chlef'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                <p><i class="fa fa-map-marker-alt"></i> Wilaya de Chlef </p>
                                                <p><i class="fa fa-phone-alt"></i> 027 77 12 22</p>
                                                <p><i class="fa fa-envelope"></i> Chlef@bereg.dz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseElv">
                                        <?= $text['Pole_Tizi-Ouzou'][$language]; ?>
                                        </a>
                                    </div>
                                    <div id="collapseElv" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="footer-contact">
                                                <p><i class="fa fa-map-marker-alt"></i> <?= $text['Construction_Msg'][$language]; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
