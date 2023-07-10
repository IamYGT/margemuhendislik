<footer class="wpo-site-footer">
   <div class="footer-bg">
       <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/footer-bg.jpg" alt="Alt Resim">
   </div>
   <div class="wpo-support-section">
       <div class="container">
           <div class="row align-items-center justify-content-center">
               <div class="col-lg-4">
                   <div class="wpo-support-title">
                       <h2>Hemen iletişime geçin.</h2>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="wpo-support-icon">
                       <a href="tel:<?php echo $ayarlar["strPhone"]; ?>" class="support">
                           <div class="shape">
                               <i class="fi flaticon-phone-call-1"></i>
                           </div>
                       </a>
                       <div class="shape-1">
                           <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/sappot-shape.svg" alt="Marge Yapı & Mühendislik">
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="wpo-support-munber">
                       <span>Telefon:</span>
                       <p><a style="color:white;" href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?></a></p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="wpo-upper-footer">
       <div class="container">
           <div class="row">
               <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                   <div class="widget link-widget">
                       <div class="widget-title">
                           <h3>Hizmetlerimiz</h3>
                       </div>
                       <ul>
                         <?php
                            $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 6");
                              if ($veri_cek->rowCount()){
                            foreach($veri_cek as $veri_listele){
                     ?>
                      <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><i class="ti-angle-right"></i> <?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                                   <?php
                                            }
                                          }else{
                                            "Listelenecek veri bulunamadı.";
                                          }
                                   ?>
                       </ul>
                   </div>
               </div>
               <div class="col col-lg-5 col-md-6 col-sm-12 col-12">
                   <div class="widget contact-widget">
                       <div class="shape-1"></div>
                       <div class="shape-2"></div>
                       <div class="widget-title">
                           <h3>İletişim</h3>
                       </div>
                       <ul>
                           <li>Telefon: <a style="color: white;" href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></li>
                           <li>Eposta: <a style="color: white;" href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></li>
                           <li>Website: <a style="color: white;" href="<?php echo $ayarlar["strURL"]; ?>"> www.margemuhendislik.com </a></li>
                       </ul>
                       <h4>Haberlere Kayıt Olun:</h4>
                       <form>
                           <div class="input-1">
                               <input type="email" class="form-control" placeholder="Eposta Adresiniz" required="">
                           </div>
                           <div class="submit clearfix">
                               <button type="submit"><i class="fa flaticon-send" aria-hidden="true"></i></button>
                           </div>
                       </form>
                   </div>
               </div>
               <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                   <div class="widget blog-widget">
                       <div class="widget-title">
                           <h3>Haberler</h3>
                       </div>
                       <ul>
                         <?php
                             $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1  AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 2");
                             if ($veri_cek->rowCount()){
                             foreach($veri_cek as $veri_listele){
                       ?>
                           <li>
                               <div class="image">
                                <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">   <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                               </div>
                               <div class="text">
                                   <p><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></p>
                                   <span><?php   echo turkcetarih_formati('j F Y', $veri_listele["haber_tarih"] );  ?></span>
                               </div>
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
   <div class="wpo-lower-footer">
       <div class="container">
           <div class="row align-items-center">
               <div class="col col-lg-6 col-12">
                   <p class="copyright"> Copyright &copy; <?php echo date("Y"); ?> Marge Mühendislik by <a href="https://www.memsidea.com" rel="dofollow">Memsidea Group</a>. Her Hakkı Saklıdır.</p>
               </div>
               <div class="col col-lg-6 col-12">
                   <div class="social-widget">
                       <ul>
                           <li>
                               <a href="<?php echo $ayarlar["strFacebook"]; ?>">
                                   <i class="ti-facebook"></i>
                               </a>
                           </li>
                           <li>
                               <a href="<?php echo $ayarlar["strTwitter"]; ?>">
                                   <i class="ti-twitter-alt"></i>
                               </a>
                           </li>
                           <li>
                               <a href="<?php echo $ayarlar["strInstagram"]; ?>">
                                   <i class="ti-instagram"></i>
                               </a>
                           </li>

                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
</footer>
</div>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/modernizr.custom.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.dlmenu.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery-plugin-collection.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/script.js"></script>
