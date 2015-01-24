<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->


<!--Everything is placed in this wrapper, for sticky footer-->
  <div class="wrapper">
<?php include roots_template_path(); ?>
</div>



  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>



  <style>
  .gform_wrapper .validation_error,  .gform_wrapper  .validation_message  {

                  display: none;
      }

            .gform_wrapper  .ginput_container {
                  margin-top : 0px !important;
            }




             .gform_wrapper .gform_fields  li.gfield_error.gfield_contains_required {


                        padding : 0px !important;
                        margin-bottom: 1.2em !important;

            }

         .gform_wrapper  .gfield_error {
                  background-color: transparent !important;
                  margin : 0px !important;
                  padding: 0px !important;
                  border : none !important;
            }


            .gform_wrapper .gfield_error .ginput_container input, .gform_wrapper .gfield_error .ginput_container textarea {
                  border-color : red !important;
            }


       /*    .gform_wrapper .gfield_contains_required,  .gform_wrapper .validation_message {
                  margin : 0px !important;
                  padding: 0px !important;
            }*/


      </style>

</body>
</html>
