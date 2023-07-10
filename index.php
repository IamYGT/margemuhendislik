<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Anasayfa - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
<meta name="description" content="Marge Yapı Mühendislik, 3 İnşaat Mühendisi tarafından kurulmuş bir inşaat-taahhüt şirketidir. Bilgi, tecrübe ve özgüvenle yapan dinamik bir firmadır.">
  <?php include 'css.php'; ?>
</head>
<body>
     <div class="page-wrapper">
       <?php include 'ust.php'; ?>
        <section class="static-hero" id='div'>
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="wpo-static-hero-inner">
                                    <div class="static-inner-shape">
                                        <i class="fi flaticon-right-arrow-1"></i>
                                    </div>
                                    <h2 class="title">Teknik
                                        Tecrübe
                                        T<span>e</span>kno<span>l</span>oji.</h2>
                                    <div class="title-shape">
                                        <img src="assets/images/slider/title-shape.svg" alt="">
                                    </div>
                                    <p class="sub-title">Marge Yapı Mühendislik, 3 İnşaat Mühendisi Tarafından Kurulmuş Bir İnşaat-Taahhüt Şirketidir. </p>
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/projelerimiz" class="theme-btn">Hakkımızda <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="wpo-hero-right">
                                    <div class="static-hero-img-inner">
                                        <img src="assets/images/slider/1.jpg" alt="">
                                    </div>
                                    <div class="wpo-right-text">
                                        <div class="p-text">
                                            <h3><span>10</span>+</h3>
                                            <div class="line"></div>
                                            <p style="text-align: center;">Yıllık Mühendislik Tecrübesi</p>
                                        </div>
                                    </div>
                                    <div class="wpo-hero-team">
                                        <div class="wpo-team-text">
                                            <h2>Ekibimiz</h2>
                                        </div>
                                        <div class="wpo-team-content">
                                          <?php
                                              $veri_cek = $db->query("SELECT * FROM ekibimiz WHERE ekip_durum = 1 AND dil_id = 'tr' ORDER BY ekip_ust_id ASC LIMIT 4");
                                              if ($veri_cek->rowCount()){
                                              foreach($veri_cek as $veri_listele){
                                        ?>

                                            <div class="wpo-team-item">
                                                <div class="image">
                                                    <img style="width: 58px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/teams/<?php echo $veri_listele["ekip_resim"]; ?>" alt="<?php echo 	$veri_listele["ekip_baslik"]; ?>">
                                                    <div class="team-link">
                                                        <a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-2">
                <img src="assets/images/slider/shape-1.png" alt="">
            </div>
            <div class="shape-3">
                <img src="assets/images/slider/shape-3.png" alt="">
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

       <section class="wpo-project-section section-padding">
         <div class="container">
           <div class="row justify-content-start">
             <div class="col col-lg-6 col-12">
               <div class="wpo-section-title">
                 <span>MARGE YAPI & MÜHENDİSLİK</span>
                 <h2>Projelerimiz</h2>
               </div>
             </div>
           </div>
           <div class="wpo-project-wrap">
             <div class="row">
               <div class="col-lg-6 col-12">
                 <div class="wpo-project-item">
                   <ul class="nav nav-pills" id="pills-tab" role="tablist">
                     <?php
                     $veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1 ");
                     if ($veri_cek->rowCount()){
                     foreach($veri_cek as $veri_listele){
                     ?>
                     <li class="nav-item" role="presentation">
                       <a class="nav-link " href="<?php echo $ayarlar["strURL"]; ?>/kategori/<?php echo $veri_listele["kategori_seo"]; ?>"><?php echo 	$veri_listele["kategori_baslik"]; ?></a>
                     </li>
                     <?php
                      }
                    }else{
                      "Listelenecek veri bulunamadı.";
                    }
                     ?>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="wpo-project-content">
           <div class="container-fluid">
             <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <div class="wpo-engeneer-wrap">
                   <div class="wpo-engeneer-slider owl-carousel">
                     <?php
                     $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 ");
                     if ($veri_cek->rowCount()){
                     foreach($veri_cek as $veri_listele){
             ?>
                     <div class="grid">
                       <div class="images">
                         <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>">
                       </div>
                       <div class="text">
                         <span>MARGE YAPI & MÜHENDİSLİK</span>
                         <a href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>">
                           <h2><?php echo 	$veri_listele["proje_baslik"]; ?></h2>
                         </a>
                         <a href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" class="theme-btn"><i class="ti-arrow-right"></i></a>
                       </div>
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
           </div>
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

         <section class="wpo-service-section section-padding">
            <div class="shape-1">
                <img src="assets/images/service/service-shape.svg" alt="">
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-8 col-12">
                        <div class="wpo-section-title">
                            <span>MARGE YAPI & MÜHENDİSLİK</span>
                            <h2>Hizmetlerimiz</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-wrap">
                    <div class="wpo-service-slider2 owl-carousel">
                      <?php
                              $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ");
                              if ($veri_cek->rowCount()){
                              foreach($veri_cek as $veri_listele){
                      ?>   <div class="grid">
                          <div class="wpo-service-item">
                              <div class="wpo-service-image">
                              <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>">
                                 <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> </a>
                              </div>
                              <div class="wpo-service-content">
                                  <div class="service-content-single">
                                      <h2><a style="color:white;" href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" ><?php echo 	$veri_listele["haber_baslik"]; ?> </a></h2>
                                      <span><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></span>
                                  </div>
                                  <a style="padding: 7px;" href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="theme-btn-s2">İncele <i
                                          class="ti-arrow-right"></i></a>
                              </div>
                          </div>
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
                          $veri_cek = $db->query("SELECT * FROM ekibimiz WHERE ekip_durum = 1 AND dil_id = 'tr' ORDER BY ekip_ust_id ASC LIMIT 4");
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
                        ?>
                      </div>
                </div>
            </div>
            <div class="shape-1">
                <img src="assets/images/team/shape.png" alt="">
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

        <section class="wpo-blog-section section-padding">
            <div class="shape">
                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/blog/shape.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col col-lg-8 col-12">
                        <div class="wpo-section-title">
                            <span>MARGE YAPI & MÜHENDİSLİK</span>
                            <h2>Haberler</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-blog-wrap">
                    <div class="wpo-blog-slider owl-carousel">
                      <?php
                          $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 6");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                    ?>
                        <div class="grid">
                            <div class="images">
                              <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"> <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> </a>
                            </div>
                            <div class="text">
                                <span><?php   echo turkcetarih_formati('j F Y', $veri_listele["haber_tarih"] );  ?></span>
                                <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><h2>  <?php echo 	$veri_listele["haber_baslik"]; ?></h2></a>
                                <p><?php echo 	$veri_listele["haber_kisaaciklama"]; ?> </p>
                                <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>" class="theme-btn-s2">Devamını Oku <i
                                        class="ti-arrow-right"></i></a>
                            </div>
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
        </section>
        <section class="wpo-partners-section">
           <h2>partners</h2>
           <div class="container">
             <div class="row justify-content-start">
                 <div class="col col-lg-12 col-12">
                     <div style="    margin-bottom: 0;    text-align: center;  margin-top: 0px;" class="wpo-section-title">
                         <span style="    font-size: 16px;">MARGE YAPI & MÜHENDİSLİK</span>
                         <h2 style="display: block;">Referanslar</h2>
                     </div>
                 </div>
             </div>
               <div class="row">
                   <div class="col col-xs-12">
                       <div class="partner-grids partners-slider owl-carousel">
                         <?php
                             $veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1");
                             if ($veri_cek->rowCount()){
                             foreach($veri_cek as $veri_listele){
                       ?>

                           <div class="grid">
                               <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/references/<?php echo $veri_listele["referans_resim"]; ?>" alt="<?php echo 	$tekil_veri_cek["referans_baslik"]; ?>">
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
