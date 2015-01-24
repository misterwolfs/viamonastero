<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Register Custom Post Type
function custom_post_type() {

  $labels = array(
    'name'                => _x( 'Antiek', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Antiek', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Antiek', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( 'Alle het antiek', 'text_domain' ),
    'view_item'           => __( 'Bekijk het antiek', 'text_domain' ),
    'add_new_item'        => __( 'Voeg antiek toe', 'text_domain' ),
    'add_new'             => __( 'Voeg antiek toe', 'text_domain' ),
    'edit_item'           => __( 'Bewerk het', 'text_domain' ),
    'update_item'         => __( 'Update het antiek', 'text_domain' ),
    'search_items'        => __( 'Zoek antiek', 'text_domain' ),
    'not_found'           => __( 'Niet gevonden', 'text_domain' ),
    'not_found_in_trash'  => __( 'Niet gevonden in de vuilbak', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'antiek', 'text_domain' ),
    'description'         => __( 'Antiek beschrijving', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( ),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'antiek', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );



function form_submit_button($button,$form){
    return '<div class="submit clearfix"><input type="submit" class="btn" id="gform_submit_button_' . $form['id'] . '" value="' . $form['button']['text'] . '">';
}

add_filter('gform_submit_button','form_submit_button',10,2);




add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts()
{
  return true;
}



/*
add_action('init', 'add_roles_on_plugin_activation');

function add_roles_on_plugin_activation() {
       add_role( 'monastero', __( 'Monastero' ), array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    ) );
   }

*/

function add_query_vars_filter( $vars ){
  $vars[] = "item";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );


function cw_cpp_slideshow_categories() {
  $field_args = array(
    'labels' => array(
      'name'              => 'Filters', 'taxonomy general name',
      'singular_name'     => 'Filter', 'taxonomy singular name',
      'search_items'      => 'Search Filters',
      'all_items'         => 'All Filters',
      'parent_item'       => 'Parent Filter',
      'parent_item_colon' => 'Parent Filter:',
      'edit_item'         => 'Edit Filter',
      'update_item'       => 'Update Filter',
      'add_new_item'      => 'Add New Filter',
      'new_item_name'     => 'New Filter',
      'menu_name'         => 'Filters'
    ),
    'hierarchical' => true
  );
  register_taxonomy( 'antiek_filters', 'antiek', $field_args );
}
add_action( 'init', 'cw_cpp_slideshow_categories', 0 );




add_filter("gform_confirmation", "custom_confirmation", 10, 4);
function custom_confirmation($confirmation, $form, $lead, $ajax){
    echo '<div class="confirmation">Bedankt voor jou interesse! We contacteren jou zo snel mogelijk.</div>';
}
