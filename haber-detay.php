<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);
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
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2><?php echo 	$tekil_veri_cek["haber_baslik"]; ?></h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li>
                                <li><?php echo 	$tekil_veri_cek["haber_baslik"]; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <section class="wpo-blog-single-section wpo-blog-single-left-sidebar-section section-padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-10 col-12 offset-lg-1">
              <div class="wpo-blog-content">
                  <div class="post format-standard-image">
                      <div class="entry-media">
                          <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo 	$tekil_veri_cek["haber_baslik"]; ?>">
                      </div>
                      <div class="entry-meta">
                          <ul>
                              <li><i class="fi flaticon-user"></i> <a href="#">Marge Mühendislik</a> </li>
                               <li><i class="fi flaticon-calendar"></i> <?php   echo turkcetarih_formati('j F Y', $tekil_veri_cek["haber_tarih"] );  ?></li>
                          </ul>
                      </div>
                      <h2><?php echo 	$tekil_veri_cek["haber_baslik"]; ?></h2>
                      <?php echo 	$tekil_veri_cek["haber_aciklama"]; ?>
                  </div>
                  <div class="tag-share-s2 clearfix">
                      <div class="tag">
                          <span>Paylaş: </span>
                          <ul>
                              <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>">facebook</a></li>
                              <li><a href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&text=<?php echo $tekil_veri_cek["haber_isim"]; ?>">twitter</a></li>
                              <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>">linkedin</a></li>
                              <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&media=&description=<?php echo $tekil_veri_cek["haber_isim"]; ?>">pinterest</a></li>
                          </ul>
                      </div>
                  </div>

                  <div class="author-box">
                      <div class="author-avatar">
                          <a href="#" target="_blank"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/blog-details/author.jpg"
                                  alt></a>
                      </div>
                      <div class="author-content">
                          <a href="#" class="author-name">Marge Mühendislik</a>
                          <p>Marge Yapı Mühendislik, 3 İnşaat Mühendisi tarafından kurulmuş bir inşaat-taahhüt şirketidir. Bu kapsamda; Anahtar teslimi endüstriyel tesisler ve bunların ilgili tadilatları, konut projeleri, çevre düzenlemeleri, prefabrik ve konvansiyonel yapıların proje ve imalat yönetimi gibi işleri bilgi, tecrübe ve özgüvenle yapan dinamik bir yapıdır.</p>
                          <div class="socials">
                              <ul class="social-link">
                                  <li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="ti-facebook"></i></a></li>
                                  <li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="ti-twitter-alt"></i></a></li>
                                  <li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="ti-instagram"></i></a></li>
                              </ul>
                          </div>
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
