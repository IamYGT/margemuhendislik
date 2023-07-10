<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>İletişim - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
  <?php include 'css.php'; ?>
</head>
<body>
     <div class="page-wrapper">
       <?php include 'ust.php'; ?>
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>İletişim</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li>İletişim</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-location"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Adres</h2>
                                            <p><?php echo $ayarlar["strAddress"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-email-1"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Eposta</h2>
                                            <p><a style="color: #687693;" href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?> </a></p>
                                            <p><a style="color: #687693;" href="mailto:muhasebe@margemuhendislik.com">muhasebe@margemuhendislik.com </a></p>
                                         </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-phone-call-1"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Telefon</h2>
                                            <p><a style="color: #687693;" href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?> </a></p>
                                            <p><a style="color: #687693;" href="tel:+90 544 924 14 10">+90 544 924 14 10 </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-contact-title">
                            <h2>İletişim Formu</h2>
                            <p>İletişim numaramızla bizimle iletişime geçebilir veya iletişim formuyla bizlere yazabilirsiniz.</p>
                        </div>
                        <div class="wpo-contact-form-area">
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="İsminiz*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Eposta Adresiniz*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Telefon">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="konu" id="konu" placeholder="Konu">
                                </div>

                                <div class="fullwidth">
                                    <textarea class="form-control" name="note" id="note" placeholder="Mesajınız..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Gönder</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="wpo-contact-map-section">
            <h2 class="hidden">Harita</h2>
            <div class="wpo-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208.36443659447497!2d27.19245983636!3d38.462743375526905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b97d4922aa3af1%3A0x2962e08358659a8b!2sManavkuyu%2C%20Fatih%20Sultan%20Mehmet%20Cd.%2078%20H%2C%2035535%20Bayrakl%C4%B1%2F%C4%B0zmir!5e0!3m2!1str!2str!4v1671642791915!5m2!1str!2str" allowfullscreen=""></iframe>
            </div>
        </section>
    <?php include 'alt.php'; ?>
</body>

</html>
