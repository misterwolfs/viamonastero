 <?php

$args = array(
    'page_id' => '1157'
);
$the_query = new WP_Query( $args );

?>


<!--Content-->
    <div id="content">
      <div class="content-wrapper clearfix">

      <h3><?php the_title() ?></h3>
       <article><?php the_content(); ?></article>

      </div>
    </div>
    <!--/Content-->
