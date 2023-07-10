<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title><?php echo 	$tekil_veri_cek["haber_baslik"]; ?> - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
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
                            <h2><?php echo 	$tekil_veri_cek["haber_baslik"]; ?></h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a></li>
                                <li><?php echo 	$tekil_veri_cek["haber_baslik"]; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wpo-service-single-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="wpo-service-single-wrap">
                            <div class="wpo-service-single-item">
                                <div class="wpo-service-single-main-img">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo 	$tekil_veri_cek["haber_baslik"]; ?>">
                                </div>
                                <div class="wpo-service-single-title">
                                    <h3><?php echo 	$tekil_veri_cek["haber_baslik"]; ?></h3>
                                </div>
                                <?php echo 	$tekil_veri_cek["haber_aciklama"]; ?>
                               </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="blog-sidebar">
                            <div class="widget category-widget">
                                <h3>Hizmetlerimiz</h3>
                                <ul>
                                  <?php
                                      $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
                                      if ($veri_cek->rowCount()){
                                      foreach($veri_cek as $veri_listele){
                              ?>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                                    <?php
                                              }
                                            }else{
                                              "Listelenecek veri bulunamadı.";
                                            }
                                    ?>
                                </ul>
                            </div>
                            <div class="widget wpo-instagram-widget">
                                <div class="widget-title">
                                    <h3>Referanslar</h3>
                                </div>
                                <ul class="d-flex">
                                  <?php
                                      $veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1 AND dil_id = 'tr' ORDER BY referans_ust_id ASC LIMIT 9");
                                      if ($veri_cek->rowCount()){
                                      foreach($veri_cek as $veri_listele){
                                ?>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/referanslar"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/references/<?php echo $veri_listele["referans_resim"]; ?>"
                                                alt=""></a></li>
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
        </div>
        <!-- wpo-service-single-area end -->
         <?php include 'alt.php'; ?>
</body>
</html>
