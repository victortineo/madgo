<?php 
// MENU
// Register Menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'MadGO' ),
) );
// -------------------------------
// CRIAÇÃO AUTOMATICA DE MENU PRINCIPAL
// checa se o menu existe:
$menu_name = 'primary';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// Se não existe, crie:
if( !$menu_exists){
    $menu_id = wp_create_nav_menu($menu_name);

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Home'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#top' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Essência'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#essencia' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Quem somos'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#quemsomos' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('O que fazemos'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#oquefazemos' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Clientes'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#clientes' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Portfólio'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#portfolio' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Contato'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/#contato' ), 
        'menu-item-status' => 'publish'));

    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Blog'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/blog' ), 
        'menu-item-status' => 'publish'));
}
?>