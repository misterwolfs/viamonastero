<!--Header-->
    <header class="subpage clearfix">

      <div class="foreground">
        <div class="language-nav-wrapper clearfix">
          <!--Language menu & simple contact-->
          <div class="language-contact">
            <div class="inner-wrapper">
              <!--Language list-->
              <ul class="language-selection">
                                <li><a href="/nl/?p=974" title="Nederlands" <?php if(ICL_LANGUAGE_CODE == 'nl') : ?>class="active" <?php endif ?>>NL</a></li>
                <li><a href="/fr/?p=979" title="Français" <?php if(ICL_LANGUAGE_CODE == 'fr' ): ?>class="active" <?php endif ?>>FR</a></li>
                <li><a href="/en/?p=978" title="Englisch" <?php if(ICL_LANGUAGE_CODE == 'en') : ?>class="active" <?php endif ?>>ENG</a></li>

              </ul>

              <!--Contact icons-->
              <ul class="contact-icons">
                                <li><a href="" title="Telefoneer ons"><img src="<?= content_url( 'themes/Monastero/assets/img/telephone@2x.png'); ?>" alt="Via Monastero" width="20" height="20" /></a></li>
                <li><a href="" title="Stuur ons een mailtje"><img src="<?= content_url( 'themes/Monastero/assets/img/mail@2x.png') ?>" alt="Via Monastero" width="22" height="15" /></a></li>

              </ul>
            </div>
          </div>

          <!--Main menu with dropdown-->
          <div class="nav-wrapper clearfix">
            <nav id="main-menu">
              <ul>

               <li><a href="/<?= ICL_LANGUAGE_CODE ?>" title="Home" class="active"><?php _e('Homepagina','theme'); ?></a></li>
                <li><a href="/<?= ICL_LANGUAGE_CODE ?>#<?php _e('wie-zijn-we','theme'); ?>" data-scroll title="Wie zijn we"><?php _e('Wie zijn we?','theme'); ?></a></li>
                <li>
                  <a href="#" title="Antiek"><?php _e('Antiek','theme'); ?></a>
                  <ul class="submenu">
                    <li><a href="/<?= ICL_LANGUAGE_CODE ?>/?p=<?= icl_object_id(974, 'page'); ?>" title="Kopen" class="active"><?php _e('Kopen?','theme'); ?></a></li>
                    <li><a href="/<?= ICL_LANGUAGE_CODE ?>/?p=<?= icl_object_id(976, 'page'); ?>" title="Verkopen"><?php _e('Verkopen?','theme'); ?></a></li>
                  </ul>
                </li>
                <li><a href="/<?= ICL_LANGUAGE_CODE ?>#<?php _e('contact','theme'); ?>" data-scroll title="Contact"><?php _e('contact','theme'); ?></a></li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- Logo-->
        <div id="logo">
          <div class="inner-wrapper">
            <a href="" title="Via Monastero">
              <img src="<?= content_url( 'themes/Monastero/assets/img/logo@2x.png'); ?>" alt="Via Monastero" width="170" height="167" />
            </a>
          </div>
        </div>

      </div>

    </header>
    <!--/Header-->

