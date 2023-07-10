<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$sayfa = (isset($q) ? $q : 1);
$toplam_veri_sayisi = $db->query("SELECT COUNT(*) FROM haberler WHERE dil_id = 'tr' ")->fetchColumn();
$limit = 6; //gösterilecek veri sayısı
$sonSayfa = ceil($toplam_veri_sayisi/$limit);
$baslangic = ($sayfa-1)*$limit;
 ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
  <title>Haberler - Marge Yapı & Mühendislik San. Tic. Ltd. Şti.</title>
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
              <h2>Haberler</h2>
              <ol class="wpo-breadcumb-wrap">
                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                <li>Haberler</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wpo-blog-pg-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col col-lg-12">
            <div class="row">
              <?php
            		$list = $db->query("SELECT * FROM haberler WHERE  dil_id = 'tr' ORDER BY haber_ust_id DESC LIMIT $baslangic,$limit");
          			if ($list->rowCount()){
        				foreach($list as $row){
              ?>
              <div class="col-lg-4">
                <div class="post format-standard-image">
                  <div class="entry-media">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>"> <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $row["haber_resim"]; ?>" alt="<?php echo 	$row["haber_baslik"]; ?>"></a>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="fi flaticon-user"></i> <a href="#">Marge Mühendislik</a> </li>
                      <li><i class="fi flaticon-calendar-1"></i> <?php   echo turkcetarih_formati('j F Y', $row["haber_tarih"] );  ?></li>
                    </ul>
                  </div>
                  <div class="entry-details">
                    <h3><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>"><?php echo 	$row["haber_baslik"]; ?></a>
                    </h3>
                    <p><?php echo 	$row["haber_kisaaciklama"]; ?></p>
                    <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>" class="read-more">Devamını Oku...</a>
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
            <?php if($toplam_veri_sayisi > $limit){ ?>
            <div class="pagination-wrapper pagination-wrapper-left">
              <ul class="pg-pagination">
                <?php
      					$x = 2;
      					if($sayfa > 1){
      						$onceki = $sayfa-1;
      						echo '<li><a href="?q='.$onceki.'"  aria-label="Previous"><i class="fi ti-angle-left"></i></a></li>';
      					}
      					if($sayfa==1){
      						echo '<li class="active"><a >1</a></li>';
      					} else {
      						echo '<li><a href="?q=1" class="">1</a></li>';
      					}
      					if($sayfa-$x > 2){
      						echo '...';
      						$i = $sayfa-$x;
      					} else {
      						$i = 2;
      					}
      					for($i; $i<=$sayfa+$x; $i++) {
      						if($i==$sayfa){
      							echo '<li class="active"><a href="#">'.$i.'</a></li>';
      						} else {
      							echo '<li><a href="?q='.$i.'">'.$i.'</a></li>';
      						}
      						if($i==$sonSayfa) break;
      					}
      					if($sayfa < $sonSayfa){
      						$sonraki = $sayfa+1;
      						echo '<li><a href="?q='.$sonraki.'" aria-label="Next"><i class="fi ti-angle-right"></i></a> </li>';
      					}
      			?>

              </ul>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <?php include 'alt.php'; ?>
</body>
</html>
