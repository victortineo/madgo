<?php  
require_once('wp_bootstrap_navwalker.php');

$slug = "functions/create";
// CREATE CATEGORYS
get_template_part( $slug, "category" );
// CREATE POST TYPES
get_template_part( $slug, "post_type" );
// CREATE PAGES
get_template_part( $slug, "page" );
// CREATE MENU
get_template_part( $slug, "menu" );

// Remove admin menu
function remove_menus(){
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack* 
  //remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
  remove_menu_page( 'wpcf7' );                      //contact form 7
}
add_action( 'admin_menu', 'remove_menus' );

// UPLOAD MAX
@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );

// Supports
add_theme_support('post-thumbnails');
show_admin_bar(false); // admin bar
// Habilitar upload de SVG no tema
function  cc_mime_types ( $mimes )  { 
  $mimes [ 'svg' ]  =  'image/svg+xml' ; 
  return $mimes ; 
} 
add_filter ( 'upload_mimes' ,  'cc_mime_types' ) ;

// //Deletes all CSS classes and id's, except for those listed in the array below
// function custom_wp_nav_menu($var) {
//         return is_array($var) ? array_intersect($var, array(
//                 //List of allowed menu classes
//                 'current_page_item',
//                 'current_page_parent',
//                 'current_page_ancestor',
//                 'first',
//                 'last',
//                 'vertical',
//                 'horizontal'
//                 )
//         ) : '';
// }
// add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
// add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
// add_filter('page_css_class', 'custom_wp_nav_menu');
 
// //Replaces "current-menu-item" with "active"
// function current_to_active($text){
//         $replace = array(
//                 //List of menu item classes that should be changed to "active"
//                 'current_page_item' => null,
//                 'current_page_parent' => null,
//                 'current_page_ancestor' => null,
//         );
//         $text = str_replace(array_keys($replace), $replace, $text);
//                 return $text;
//         }
// add_filter ('wp_nav_menu','current_to_active');
 
// //Deletes empty classes and removes the sub menu class
// function strip_empty_classes($menu) {
//     $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
//     return $menu;
// }
// add_filter ('wp_nav_menu','strip_empty_classes');

?>