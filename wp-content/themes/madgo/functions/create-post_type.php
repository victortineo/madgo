<?php 
// OUR CUSTOM POST TYPE FUNCTION
function create_base() {
    register_post_type( 'Portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'menu_icon' => 'dashicons-media-interactive',
            'has_archive' => false,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'portfolio'),
            'capability_type' => 'page',
        )
    );
    register_post_type( 'Contato',
        array(
            'labels' => array(
                'name' => __( 'Contato' ),
                'singular_name' => __( 'Contato' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'menu_icon' => 'dashicons-email',
            'has_archive' => true,
            'rewrite' => array('slug' => 'contato-type'),
        )
    );    

}
// Hooking up our function to theme setup
add_action( 'init', 'create_base' );
 ?>