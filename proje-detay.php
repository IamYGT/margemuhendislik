<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
  <?php include 'css.php'; ?>
  <link rel="stylesheet" href="<?php echo $ayarlar["strURL"]; ?>/assets/css/masonry-1.css" />

</head>
<body>
     <div class="page-wrapper">
       <?php include 'ust.php'; ?>
        <section style="background: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/page-title-s3.jpg) no-repeat center top/cover;" class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2><?php echo $tekil_veri_cek["proje_baslik"]; ?></h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/projelerimiz">Projelerimiz</a></li>
                                <li><a href="#"><?php echo $tekil_veri_cek["proje_baslik"]; ?></a></li>
                             </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <div class="wpo-project-single-area section-padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-10 col-12">
                  <div class="wpo-project-single-wrap">
                      <div class="wpo-project-single-item">
                          <div class="row align-items-center">
                              <div class="col-lg-7">
                                  <div class="wpo-project-single-title">
                                      <h3><?php echo $tekil_veri_cek["proje_baslik"]; ?></h3>
                                  </div>
                                <?php echo $tekil_veri_cek["proje_aciklama"]; ?>
                              </div>
                              <div class="col-lg-5">
                                  <div class="wpo-project-single-content-des-right">
                                      <ul>
                                          <li>İşveren :<span><?php echo $tekil_veri_cek["proje_isveren"]; ?></span></li>
                                          <li>Proje Yeri :<span><?php echo $tekil_veri_cek["proje_yeri"]; ?></span></li>
                                          <li>Proje Zamanı :<span><?php echo $tekil_veri_cek["proje_zamani"]; ?></span></li>
                                          <li>Proje Alanı :<span><?php echo $tekil_veri_cek["proje_alani"]; ?></span></li>
                                          <li>Yapılan İş :<span><?php echo $tekil_veri_cek["proje_yapilanis"]; ?></span></li>
                                       </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="wpo-project-single-item">
                        <div class="wpo-project-single-title">
                            <h3 style="    margin-bottom: 32px;    text-align: center;">Proje Resimleri</h3>
                        </div>
                        <div class="container overflow-hidden">
        <div class="row gy-3 g-md-3 hcf-isotope-grid">

          <?php
                  $imagesList = $db->query("SELECT * FROM files WHERE ustid = {$tekil_veri_cek["proje_ust_id"]} AND itable = 2");
                  if ($imagesList->rowCount()){
                      foreach($imagesList as $image){
          ?>
          <div class="col-12 col-md-6 col-lg-4 hcf-isotope-item">
            <a class="hcf-masonry-card rounded rounded-4" href="#!">
              <img class="card-img img-fluid" loading="lazy" src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" alt="<?php echo $tekil_veri_cek["proje_baslik"]; ?>">
              <div class="card-overlay d-flex flex-column justify-content-center bg-dark p-4" style="--bs-bg-opacity: .5;">
                <h3 class="card-title text-white text-center mb-1"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h3>
               </div>
            </a>
          </div>
          <?php
                      }
                  }
          ?>
        </div>
      </div>
      </div>
                      <div class="wpo-project-single-item list-widget">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="wpo-project-single-title">
                                      <h3 style="margin-bottom: 12px;">Diğer Projelerimiz</h3>
                                  </div>
                                     <ul>
                                      <?php
                                      $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id ASC LIMIT 13 ");
                                      if ($veri_cek->rowCount()){
                                      foreach($veri_cek as $veri_listele){
                              ?>
                                        <li><a style="color: #687693" href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>"> <?php echo 	$veri_listele["proje_baslik"]; ?> </a></li>
                                        <?php
                                          }
                                        }else{
                                          "Listelenecek veri bulunamadı.";
                                        }
                                ?>
                                   </ul>
                              </div>
                              <div class="col-lg-6">
                                  <div class="wpo-project-single-item-quote">
                                      <p>“İmaj sadece bir ticari marka, bir tasarım, bir slogan ya da kolayca hatırlanan bir resim değildir. Bir kişi, kurum, ürün veya hizmetin titizlikle hazırlanmış kişilik profilidir.”</p>
                                      <span><span>Daniel J. Boorstin</span></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
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
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
   <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/controllers/masonry-1.js"></script>
    <style media="screen">
    .bg-dark {
  background-color: rgb(33 37 41 / 64%)!important;
}
   </style>

</body>

</html>
