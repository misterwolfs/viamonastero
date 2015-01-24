<?php

  $lang = ICL_LANGUAGE_CODE;

  if($lang == 'nl') {
    $lang = '';
  }

?>


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

                        <div ><a href="<?= $afbeelding['sizes']['large']; ?>" class="fancybox"  rel="<?= $post->post_name; ?>" title="<?= $description; ?>"><img src="<?= $afbeelding['sizes']['medium']; ?>" alt="<?= $title; ?>"></a></a></div>


          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

        </div>
        <a href="<?php if($lang != '') { echo '/'; }; ?><?= $lang ?>/?p=<?= icl_object_id(974, 'page'); ?>" class="more right"><?php _e('Bekijk alles','theme'); ?> &#x2192;</a>
      </div>
    </div>
    <!--/Nieuwe stukken-->


    <?php endif; ?>