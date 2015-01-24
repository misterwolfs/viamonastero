  <?php

$args = array(
  'page_id' => '15'
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) :


?>

<!--Wat doen we-->
    <div id="<?php _e('wat-doen-we','theme'); ?>">
      <div class="inner-wrapper">
        <h3><?php _e('Wat doen we?','theme'); ?></h3>
 <div class="three-col">
  <?php

            // check if the repeater field has rows of data
            if( have_rows('wat_doen_we') ):

              // loop through the rows of data
                while ( have_rows('wat_doen_we') ) : the_row();




              ?>


                    <div>
                    <img src="<?= get_sub_field('afbeelding')['sizes']['medium']; ?>" alt="<?= get_sub_field('afbeelding')['title']; ?>">
                    <!-- <img src="http://placehold.it/240x140" alt="dummy text"> -->
                    <h4><?= the_sub_field('titel'); ?></h4>
                    <article><?= the_sub_field('tekst'); ?></article>
                  </div>


      <?php endwhile; endif; ?>

      </div>
      </div>
      </div>



<?php endif; ?>


