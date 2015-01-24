 <?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
  'post_type'  => 'antiek',
 'posts_per_page' => 16,
 'orderby'=> 'menu_order',
  'paged' => $paged
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) :

?>


<?php
$categories = get_terms( 'antiek_filters', 'order=ASC&hide_empty=0' );
?>




    <!--Content-->
    <div id="content">
      <div class="inner-wrapper">
        <h3><?php _e('Ons antiek :', 'theme'); ?></h3>

        <div class="filters" id="portfolio-filter">
          <?php

             if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
               <ul>
               <li id="all" class="filter active"><?= _e('Alles', 'theme'); ?></li>
               <?php
                 foreach ( $categories as $term )  : ?>
                 <li  id="<?= $term->slug ?>" class="filter"> <?= $term->name ?></li>

                 <?php endforeach; ?>
                 </ul>
             <?php endif;

          ?>
        </div>

 <div class="error"><?=_e('Er zijn geen antiek stukken voor deze categorie.', 'theme') ?></div>
        <div class="four-col margin-bottom antiek-filters" id="portfolio-list">


          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



          <?php

                $title = $post->post_title;
                $afbeelding = get_field('afbeelding');
                $description = $post->post_content;


                // echo '<pre style="position : relative; z-index:99999  ">';
                // print_r($post);
                // echo '</pre>';

                $term_list = wp_get_post_terms($post->ID, 'antiek_filters', array("fields" => "all"));

                $class = '';

                foreach ($term_list as $term) {
                  $class .= $term->slug . ' ';
                }

           ?>

                        <!-- <div><a href="#" title="<?= $title; ?>"><img src="<?= $afbeelding['sizes']['medium']; ?>" alt="<?= $title; ?>"></a></div> -->
                      <div class="<?php echo  $class ?>"><a href="<?= $afbeelding['sizes']['large']; ?>" class="fancybox" rel="<?= $post->post_name; ?>" title="<?= $description; ?>"><img src="<?= $afbeelding['sizes']['medium']; ?>" alt="<?= $title; ?>"></a></div>



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




