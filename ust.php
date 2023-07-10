<div class="preloader">
    <div class="vertical-centered-box">
        <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/preloader.png" alt="Preloader">
        </div>
    </div>
</div>
 <header id="header">
     <div class="wpo-site-header">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Navigasyon</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo $ayarlar["strURL"]; ?>/index"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/logo.svg"
                                    alt="Marge Mühendislik Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                               <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                               <li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a></li>
                                 <li class="menu-item-has-children">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a>
                                    <ul class="sub-menu">
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
                                </li>
                                <li class="menu-item-has-children">
                                   <a href="<?php echo $ayarlar["strURL"]; ?>/projelerimiz">Projelerimiz</a>
                                   <ul class="sub-menu">
                                     <?php
                                         $veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1");
                                         if ($veri_cek->rowCount()){
                                         foreach($veri_cek as $veri_listele){
                                 ?>
                                       <li><a href="<?php echo $ayarlar["strURL"]; ?>/kategori/<?php echo $veri_listele["kategori_seo"]; ?>"><?php echo 	$veri_listele["kategori_baslik"]; ?></a></li>
                                       <?php
                                                 }
                                               }else{
                                                 "Listelenecek veri bulunamadı.";
                                               }
                                       ?>

                                    </ul>
                                </li>
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/referanslar">Referanslar</a></li>
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li>
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="header-right">
                            <div class="close-form">
                                <a class="theme-btn" href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><i
                                        class="fi flaticon-phone-call-1"></i><span>İletişime Geçin</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
