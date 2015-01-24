<?php

$args = array(
  'page_id' => '15'
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) :

  $intro = get_field('intro_tekst');




?>




<?php

  $lang = ICL_LANGUAGE_CODE;

  if($lang == 'nl') {
    $lang = '';
  }

?>


    <script>

        var LANG = '<?= $lang; ?>';
        var URL =  '<?= get_site_url(); ?>';

    </script>



<!--Header-->
    <header>


      <!--Background slider images-->
      <div id="slider">

            <?php

            // check if the repeater field has rows of data
            if( have_rows('header_slider') ):

              // loop through the rows of data
                while ( have_rows('header_slider') ) : the_row();


                $afbeeldingen = get_sub_field('afbeeldingen');



              ?>

               <img src="<?= $afbeeldingen['sizes']['large']; ?>" alt="dummy-background" />

            <?php endwhile; endif; ?>
      </div>

      <div class="foreground">
        <div class="language-nav-wrapper clearfix">
          <!--Language menu & simple contact-->
          <div class="language-contact">
            <div class="inner-wrapper">
              <!--Language list-->
              <ul class="language-selection">
                         <li><a href="<?= get_site_url(); ?>" title="Nederlands" <?php if($lang == 'nl') : ?>class="active" <?php endif ?>>NL</a></li>
                <li><a href="<?= get_site_url(); ?>/fr/" title="Français" <?php if($lang == 'fr' ): ?>class="active" <?php endif ?>>FR</a></li>
                <li><a href="<?= get_site_url(); ?>/en/" title="Englisch" <?php if($lang == 'en') : ?>class="active" <?php endif ?>>ENG</a></li>

              </ul>


                <!--Contact icons-->
                <ul class="contact-icons">
                    <li class="telephone">
                        <a href="#" title="Telefoneer ons"><img src="<?= content_url( 'themes/roots-master/assets/img/telephone@2x.png'); ?>" alt="Via Monastero" width="20" height="20" /></a>
                        <ul class="numbers">
                            <li><a href="tel:+324 75 29 28 72">+324 75 29 28 72</a></li>
                            <li><a href="tel:+324 94 01 00 00">+324 94 01 00 00</a></li>
                            <li><a href="tel:+324 96 61 42 88">+324 96 61 42 88</a></li>    </ul>
                    </li>
                    <li><a href="" title="Stuur ons een mailtje"><img src="<?= content_url( 'themes/roots-master/assets/img/mail@2x.png') ?>" alt="Via Monastero" width="22" height="15" /></a></li>
                </ul>

            </div>
          </div>



          <!--Main menu with dropdown-->
          <div class="nav-wrapper clearfix">
            <nav id="main-menu">
              <ul>
                <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>" title="Home" class="active"><?php _e('Home','theme'); ?></a></li>
                <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>#<?php _e('wie-zijn-we','theme'); ?>" data-scroll title="Wie zijn we"><?php _e('Wie zijn we?','theme'); ?></a></li>
                <li>
                  <a href="#" title="Antiek"><?php _e('Antiek','theme'); ?></a>
                  <ul class="submenu">
                    <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(974, 'page'); ?>" title="Kopen"><?php _e('Aanbod','theme'); ?></a></li>
                    <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(976, 'page'); ?>" title="Verkopen"><?php _e('U wil verkopen','theme'); ?></a></li>
                    <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(1159, 'page'); ?>" title="Verkopen"><?php _e('Wat zoeken wij?','theme'); ?></a></li>
                  </ul>
                </li>
                <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>#<?php _e('contact','theme'); ?>" data-scroll title="Contact"><?php _e('contact','theme'); ?></a></li>

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

        <!--Slogan + buttons-->
        <div class="inner-wrapper">
          <h1><?= $intro; ?></h1>
          <ul class="btn-options">
            <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(976, 'page'); ?>" class="btn" title="U wil verkopen!"><?php _e('U wil verkopen', 'theme'); ?></a></li>
            <li><a href="<?= get_site_url(); ?><?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(974, 'page'); ?>" class="btn" title="Aanbod"><?php _e('Aanbod', 'theme'); ?></a></li>

          </ul>
        </div>

        <!--Scroll down arrow-->
        <div class="inner-wrapper arrow">
          <a href="<?= get_site_url(); ?>/<?= $lang ?>#<?php _e('welkom-bij-via-monastero','theme'); ?>" data-scroll title="Scroll naar beneden" class="scroll-down"><?php _e('Scroll naar beneden','theme'); ?></a>
        </div>
      </div>

    </header>
    <!--/Header-->


    <?php endif; ?>