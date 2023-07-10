<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Kurumsal - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
  <?php include 'css.php'; ?>
</head>
<body>
     <div class="page-wrapper">
       <?php include 'ust.php'; ?>
        <section style="background: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/page-title-s3.jpg) no-repeat center top/cover;" class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Kurumsal</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li>Kurumsal</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="wpo-about-section section-padding">
            <div class="wpo-about-bg">
                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/about/about-bg.jpg" alt="Kurumsal">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 order-lg-1 order-2">
                        <div class="wpo-about-left">
                            <div class="wpo-about-img-1">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/about/1.jpg" alt="Kurumsal">
                            </div>
                            <div class="wpo-about-img-2">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/about/2.jpg" alt="Kurumsal">
                            </div>
                            <div class="wpo-about-img-3">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/about/3.jpg" alt="Kurumsal">
                            </div>
                            <div class="wpo-about-left-text">
                                <span>“Biz, kapasitemizin farkında bir ekip olarak, müşterilerimizi memnun ve mutlu etmek adına her türlü iletişime ve iş yüküne hazır bir yapıyız.”</span>
                                <div class="text-item">

                                    <i class="fi flaticon-quotation"></i>
                                </div>
                            </div>
                           <div class="shape-1">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/about/about-shape-1.png" alt="Kurumsal">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-2 order-1">
                        <div class="wpo-about-right">
                            <div class="wpo-section-title" style="margin-bottom:30px;">
                                <span>MARGE YAPI & MÜHENDİSLİK</span>
                                <h2>Bizi daha yakından tanıyın.</h2>
                                <p>Marge Yapı Mühendislik, 3 İnşaat Mühendisi tarafından kurulmuş bir inşaat-taahhüt şirketidir.
                                  Bu kapsamda; Anahtar teslimi endüstriyel tesisler ve bunların ilgili tadilatları, konut projeleri, çelik sistem çözümleri, çevre düzenlemeleri, prefabrik ve konvansiyonel yapıların proje ve imalat yönetimi adına bu işleri bilgi, tecrübe ve özgüvenle yapan dinamik bir firmadır.
                                 Bu yapının bileşenlerini dinamik kadro, hızlı ve güvenli çözümler, sistemli iş modeli ve tecrübe oluşturur. <br> <br>
                                 Önceliğimiz işimizi kaliteden ödün vermeden, işçi ve iş sağlığı güvenliği çerçevesinde sistematik bir şekilde götürerek, işimizi zamanından önce bitirip, müşterilerimizi mutlu etmektir.
                                </p>
                            </div>

                            <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="theme-btn">İletişim<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-2">
                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/about/about-shape-2.png" alt="">
            </div>
        </section>
         <section class="wpo-cta-section">
            <div class="cta-img">
                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/cta-shape-bg.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 col-12">
                        <div class="wpo-cta-text">
                            <h2> Bir Sorunuz mu var?<br>
 Hemen
                                <span class="cta-text-bg">&nbsp;İletişime&nbsp;</span> geçin.</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="wpo-cta-btn">
                            <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="theme-btn-s2">İletişim<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-2">
                <img src="assets/images/cta-shape.svg" alt="">
            </div>
        </section>
         <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-8 col-12">
                        <div class="wpo-section-title">
                            <span>MARGE YAPI & MÜHENDİSLİK</span>
                            <h2>Ekibimiz</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                      <?php
                          $veri_cek = $db->query("SELECT * FROM ekibimiz WHERE ekip_durum = 1");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                    ?>   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-team-grid">
                                <div class="images">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/teams/<?php echo $veri_listele["ekip_resim"]; ?>" alt="<?php echo 	$veri_listele["ekip_baslik"]; ?>">
                                </div>
                                <div class="team-text">
                                    <h2><a href="#"><?php echo 	$veri_listele["ekip_baslik"]; ?></a></h2>
                                    <span>İnşaat Mühendisi</span>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                              }else{
                                "Listelenecek veri bulunamadı.";
                              }
                        ?></div>
                </div>
            </div>
            <ul class="boll-shape">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>
        <section class="wpo-partners-section wpo-partners-section-s2">
            <div class="container">
               <div class="row">
                   <div class="col col-xs-12">
                       <div class="partner-grids partners-slider owl-carousel">
                         <?php
                             $veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1");
                             if ($veri_cek->rowCount()){
                             foreach($veri_cek as $veri_listele){
                       ?>
                           <div class="grid">
                               <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/references/<?php echo $veri_listele["referans_resim"]; ?>" alt="<?php echo 	$veri_listele["referans_baslik"]; ?>">
                           </div>
                           <?php
                                   }
                                 }else{
                                   "Listelenecek veri bulunamadı.";
                                 }
                           ?>
                       </div>
                   </div>
               </div>
           </div>
        </section>
     <?php include 'alt.php'; ?>
</body>
</html>
