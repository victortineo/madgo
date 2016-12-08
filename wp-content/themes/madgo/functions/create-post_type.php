<?php 
// OUR CUSTOM POST TYPE FUNCTION
add_action( 'init', 'create_base');
function create_base() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'taxonomies' => array('category'),
            'menu_icon' => 'dashicons-media-interactive',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'portfolio' ),
            'capability_type'    => 'page',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
        )
    );
    register_post_type( 'Clientes',
        array(
            'labels' => array(
                'name' => __( 'Clientes' ),
                'singular_name' => __( 'Clientes' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'menu_icon' => 'dashicons-groups',
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
    register_post_type( 'servicos',
        array(
            'labels' => array(
                'name' => __( 'Serviços' ),
                'singular_name' => __( 'Serviços' )
            ),
            'taxonomies' => array('category', 'post_tag'),
            'menu_icon' => 'dashicons-feedback',
            'public' => true,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'servicos' ),
            'capability_type'    => 'page',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
        )
    );  
    register_post_type( 'galeria',
        array(
            'labels' => array(
                'name' => __( 'Galeria' ),
                'singular_name' => __( 'Galeria' )
            ),
            'taxonomies' => array('category'),
            'menu_icon' => 'dashicons-feedback',
            'public' => true,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'galeria' ),
            'capability_type'    => 'page',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
        )
    );
}

 ?>