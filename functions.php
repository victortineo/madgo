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
  // remove_menu_page( 'edit-comments.php' );          //Comments
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

function activate_comments_for_pages( $status, $post_type, $comment_type ) {
if( 'post' !== $post_type ) {return $status;}
if( 'page' !== $post_type ) {return $status;}
return 'open';
}
add_filter( 'get_default_comment_status', 'activate_comments_for_pages', 10, 3 );
?>