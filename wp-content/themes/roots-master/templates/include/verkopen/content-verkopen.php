 <?php

$args = array(
    'page_id' => '975'
);
$the_query = new WP_Query( $args );


$intro = get_field('intro');
$titel = get_field('titel');


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

      </div>
    </div>
    <!--/Content-->
