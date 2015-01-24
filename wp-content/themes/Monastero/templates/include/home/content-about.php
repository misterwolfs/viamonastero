<?php

$args = array(
  'page_id' => '15'
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) :

  $wie = get_field('wie_zijn_we_tekst');

?>

    <!--Wie zijn we-->
    <div id="<?php _e('wie-zijn-we','theme'); ?>">
      <div class="inner-wrapper">
        <h3 class="white"><?php _e('Wie zijn we?','theme'); ?></h3>
        <article><?= $wie; ?></article>
      </div>
    </div>
    <!--/Wie zijn we-->


    <?php endif; ?>