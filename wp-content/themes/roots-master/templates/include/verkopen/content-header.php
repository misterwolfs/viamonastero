<?php

  $lang = ICL_LANGUAGE_CODE;

  if($lang == 'nl') {
    $lang = '';
  }

?>

<!--Header-->
    <header class="subpage clearfix">

      <div class="foreground">
        <div class="language-nav-wrapper clearfix">
          <!--Language menu & simple contact-->
          <div class="language-contact">
            <div class="inner-wrapper">
              <!--Language list-->
              <ul class="language-selection">
                                <li><a href="<?= get_site_url(); ?>/?p=976" title="Nederlands" <?php if($lang == 'nl') : ?>class="active" <?php endif ?>>NL</a></li>
                <li><a href="<?= get_site_url(); ?>/fr/?p=984" title="Français" <?php if($lang == 'fr' ): ?>class="active" <?php endif ?>>FR</a></li>
                <li><a href="<?= get_site_url(); ?>/en/?p=983" title="Englisch" <?php if($lang == 'en') : ?>class="active" <?php endif ?>>ENG</a></li>

              </ul>

              <!--Contact icons-->
              <ul class="contact-icons">
                        <li class="telephone">
                              <a href="#" title="Telefoneer ons"><img src="<?= content_url( 'themes/roots-master/assets/img/telephone@2x.png'); ?>" alt="Via Monastero" width="20" height="20" /></a>

                            <ul class="numbers">
                                <li><a href="tel:+324 75 29 28 72">+324 75 29 28 72</a></li>
                                <li><a href="tel:+324 94 01 00 00">+324 94 01 00 00</a></li>
                                <li><a href="tel:+324 96 61 42 88">+324 96 61 42 88</a></li>  </ul>


                        </li>
                        <li><a href="" title="Stuur ons een mailtje"><img src="<?= content_url( 'themes/roots-master/assets/img/mail@2x.png') ?>" alt="Via Monastero" width="22" height="15" /></a></li>

              </ul>
            </div>
          </div>

          <!--Main menu with dropdown-->
          <div class="nav-wrapper clearfix">
            <nav id="main-menu">
              <ul>

               <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>" title="Home"><?php _e('Home','theme'); ?></a></li>
                <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/#<?php _e('wie-zijn-we','theme'); ?>" title="Wie zijn we"><?php _e('Wie zijn we?','theme'); ?></a></li>
                <li>
                  <a href="#" title="Antiek"  class="active"><?php _e('Antiek','theme'); ?></a>
                    <ul class="submenu">
                        <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(974, 'page'); ?>" title="Kopen"><?php _e('Aanbod','theme'); ?></a></li>
                        <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(976, 'page'); ?>" title="Verkopen"><?php _e('U wil verkopen','theme'); ?></a></li>
                        <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(1159, 'page'); ?>" title="Verkopen"><?php _e('Wat zoeken wij?','theme'); ?></a></li>
                    </ul>
                </li>
                <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/#<?php _e('contact','theme'); ?>" data-scroll title="Contact"><?php _e('contact','theme'); ?></a></li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- Logo-->
        <div id="logo">
          <div class="inner-wrapper">
            <a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>" title="Via Monastero">
              <img src="<?= content_url( 'themes/roots-master/assets/img/logo@2x.png'); ?>" alt="Via Monastero" width="170" height="167" />
            </a>
          </div>
        </div>

      </div>

    </header>
    <!--/Header-->
