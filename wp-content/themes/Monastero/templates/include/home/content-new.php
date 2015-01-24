 <?php

$args = array(
  'post_type'  => 'antiek',
  'posts_per_page' => 4
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) :

?>
 <!--Nieuwe stukken-->
    <div id="nieuwe-stukken">
      <div class="inner-wrapper">
        <h3><?php _e('Nieuwe stukken','theme'); ?></h3>
        <div class="four-col">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


          <?php

                $title = $post->post_title;
                $afbeelding = get_field('afbeelding');

           ?>

                        <div><a href="#" title="<?= $title; ?>"><img src="<?= $afbeelding['sizes']['medium']; ?>" alt="<?= $title; ?>"></a></div>



          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

        </div>
        <a href="#" class="more right"><?php _e('Bekijk alles','theme'); ?> &#x2192;</a>
      </div>
    </div>
    <!--/Nieuwe stukken-->


    <?php endif; ?>