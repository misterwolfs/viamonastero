
    <?php  $param = ( get_query_var( 'item' ) ) ? get_query_var( 'item' ) : '';?>


     <?php

$args = array(
    'page_id' => '975'
);
$the_query = new WP_Query( $args );


$intro = get_field('intro');
$titel = get_field('titel');

$args2 = array(
    'post_type' => 'antiek',
    'name' => $param
);
$the_query2 = new WP_Query( $args2 );


?>


<!--Content-->
    <div id="content">
      <div class="content-wrapper clearfix">

    <h3><?= $titel; ?></h3>
        <article><?= $intro; ?></article>

        <?php




    $form = get_field('formulier');
    gravity_form_enqueue_scripts($form->id, true);
    gravity_form($form->id, false, false, false, '', false, 2);



 ?>

<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>



          <?php

                $afbeelding = get_field('afbeelding');

           ?>

                      <div class="hidden-image"><img src="<?= $afbeelding['sizes']['large']; ?>" alt="<?= $title; ?>"></div>



          <?php endwhile; ?>


      </div>
    </div>
    <!--/Content-->
