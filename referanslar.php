<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Referanslar - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
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
                            <h2>Referanslar</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li>Referanslar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wpo-team-section section-padding">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col col-lg-8 col-12">
                       <div class="wpo-section-title">
                           <span>MARGE MÜHENDİSLİK</span>
                           <h2>Referanslar</h2>
                       </div>
                   </div>
               </div>
               <div class="wpo-team-wrap">
                   <div class="row">
                     <?php
                         $veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1");
                         if ($veri_cek->rowCount()){
                         foreach($veri_cek as $veri_listele){
                   ?>
                       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                           <div class="wpo-team-grid">
                               <div class="images">
                                   <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/references/<?php echo $veri_listele["referans_resim"]; ?>" alt="<?php echo 	$veri_listele["referans_baslik"]; ?>">
                               </div>
                               <div class="team-text">
                                   <h2><a href="<?php echo 	$veri_listele["referans_description"]; ?>"><?php echo 	$veri_listele["referans_baslik"]; ?></a></h2>
                                   <span>Marge Yapı & Mühendislik</span>
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
    <?php include 'alt.php'; ?>
    <style media="screen">
    .wpo-team-section .wpo-team-wrap .wpo-team-grid {
    position: relative;
    z-index: 1;
    overflow: hidden;
    border-radius: 0;
    margin-bottom: 30px;
    }
    </style>
</body>

</html>
