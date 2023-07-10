<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Hizmetlerimiz - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
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
                            <h2>Hizmetlerimiz</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li>Hizmetlerimiz</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="wpo-service-section section-padding">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-8 col-12">
                        <div class="wpo-section-title">
                            <span>MARGE YAPI & MÜHENDİSLİK</span>
                            <h2 style="margin: 25px;">Hizmetlerimiz</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-wrap">
                    <div class="wpo-service-slider ">
                      <div class="row">
                        <?php
                        				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ");
                        				if ($veri_cek->rowCount()){
                        				foreach($veri_cek as $veri_listele){
                        ?>   <div class="grid col-md-4">
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
            </div>
        </section>
   <?php include 'alt.php'; ?>
</body>
</html>
