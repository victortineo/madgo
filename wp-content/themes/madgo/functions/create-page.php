<?php  
// PÁGINAS
if (get_page_by_title('Blog') === NULL) {
    $post = array(
        'post_name' => 'blog',
        'post_status' => 'publish',
        'post_title' => 'Blog',
        'post_type' => 'page',
        'post_slug' => 'blog'
    );
    //insert page and save the id
    $newvalue = wp_insert_post($post, false);
    //save the id in the database
    update_option('movpage', $newvalue);
}
?>