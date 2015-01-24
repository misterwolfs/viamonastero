 <?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
  'post_type'  => 'antiek',
 'posts_per_page' => 3,
 'orderby'=> 'menu_order',
  'paged' => $paged
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) :

?>


    <!--Content-->
    <div id="content">
      <div class="inner-wrapper">
        <h3><?php _e('Ons antiek :', 'theme'); ?></h3>
        <div class="four-col margin-bottom">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


          <?php

                $title = $post->post_title;
                $afbeelding = get_field('afbeelding');

           ?>

                        <!-- <div><a href="#" title="<?= $title; ?>"><img src="<?= $afbeelding['sizes']['medium']; ?>" alt="<?= $title; ?>"></a></div> -->
                      <div><a href="<?= $afbeelding['sizes']['large']; ?>" class="fancybox" rel="ons-antiek" title="<?= $title; ?>"><img src="<?= $afbeelding['sizes']['medium']; ?>" alt="<?= $title; ?>"></a></div>



          <?php endwhile; ?>

        </div>

<div class="pagination">
<?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $the_query->max_num_pages
  ) );
?>

  </div>



    </div>
    <!--/Content-->


    <?php endif; ?>