<!-- <footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
 -->



<?php

  $lang = ICL_LANGUAGE_CODE;

  if($lang == 'nl') {
    $lang = '';
  }

?>


 <!--Footer-->
      <footer id="contact">
            <div class="inner-wrapper margin">
                  <div class="left">
                        <ul>
                              <li><a href="<?= get_site_url(); ?>/<?= $lang ?>" title="Home"><?php _e('Homepagina','theme'); ?></a></li>
                              <li><a href="<?= get_site_url(); ?>/<?= $lang ?>#<?php _e('wie-zijn-we','theme'); ?>" data-scroll title="Wie zijn we"><?php _e('Wie zijn we?','theme'); ?></a></li>
                              <li><a href="#" title="Antiek" class="dark"><?php _e('Antiek','theme'); ?></a>&nbsp;&nbsp;<a href="<?= get_site_url(); ?>/<?= $lang ?>/?p=<?= icl_object_id(974, 'page'); ?>" title="Kopen" class="orange"><?php _e('Aanbod','theme'); ?></a>&nbsp;-&nbsp;<a href="<?= get_site_url(); ?>/<?= $lang ?>/?p=<?= icl_object_id(976, 'page'); ?>" title="Verkopen" class="orange"><?php _e('U wil verkopen','theme'); ?></a>&nbsp;-&nbsp;<a href="<?= get_site_url(); ?>/<?= $lang ?>/?p=<?= icl_object_id(1159, 'page'); ?>" title="Verkopen" class="orange"><?php _e('Wat zoeken wij?','theme'); ?></a></li>
                              <li><a href="<?= get_site_url(); ?>/<?= $lang ?>#<?php _e('contact','theme'); ?>" title="Contact"><?php _e('Contact','theme'); ?></a></li>
                        </ul>
                  </div>
                  <div class="right">
                        <p>
                              Kloosterstraat 69<br/>
                              2000 Antwerpen<br/>
                              +32 496 61 42 88<br/>
                              <a href="mailto:info@viamonastero.be" title="Stuur ons een mailtje">info@viamonastero.be</a>
                        </p>
                  </div>
            </div>
            <div class="inner-wrapper">
                  <div class="copyright-social">
                        <ul>
                              <li><a href="" title=""><img src="<?= content_url( 'themes/roots-master/assets/img/twitter@2x.png'); ?>" alt="Via Monastero op Twitter" width="30" height="22"/></a></li>
                              <li><a href="" title=""><img src="<?= content_url( 'themes/roots-master/assets/img/facebook@2x.png'); ?>" alt="Via Monastero op Facebook" width="13" height="28"/></a></li>
                              <li><a href="" title=""><img src="<?= content_url( 'themes/roots-master/assets/img/mail-footer@2x.png'); ?>" alt="Stuur Via Monastero een mailtje" width="27" height="19"/></a></li>
                        </ul>
                        <p>2014 Via Monastero</p>
                  </div>
            </div>
      </footer>
      <!--/Footer-->



