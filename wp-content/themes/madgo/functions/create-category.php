<?php 
// -------------------------------
// CRIAÇÃO DE CATEGORIAS
function produtos_insert_category() {
    wp_insert_term(
        'Design',
        'category',
        array(
          'description' => get_template_directory_uri() . "/dist/assets/img/design.jpg",
          'slug'        => 'design'
        )
    );
    wp_insert_term(
        'Webdesign',
        'category',
        array(
          'description' => get_template_directory_uri()."/dist/assets/img/webdesign.jpg",
          'slug'        => 'webdesign'
        )
    );
    wp_insert_term(
        'Marketing Digital',
        'category',
        array(
          'description' => get_template_directory_uri()."/dist/assets/img/marketing-digital.jpg",
          'slug'        => 'marketing-digital'
        )
    );
    wp_insert_term(
        'Adwords',
        'category',
        array(
          'description' => get_template_directory_uri()."/dist/assets/img/adwords.jpg",
          'slug'        => 'adwords'
        )
    );
}
add_action( 'after_setup_theme', 'produtos_insert_category' );
 ?>