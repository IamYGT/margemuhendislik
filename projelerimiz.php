<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Projelerimiz - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
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
              <h2>Projelerimiz</h2>
              <ol class="wpo-breadcumb-wrap">
                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                <li>Projelerimiz</li>
              </ol>
            </div>
          </div>
        </div>
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
    <?php include 'alt.php'; ?>
</body>

</html>
