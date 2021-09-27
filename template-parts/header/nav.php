<?php
/**
 * 
 * @package Aquila
 */

// wp_nav_menu(
//     [
//         'theme_location'    =>  'aquila-header-menu',
//         'container_class'   =>  'my_extra_menu_class',
//     ]
// );

$menu_class = \Aquila_Theme\Inc\Menus::get_instance();

$header_menu_id = $menu_class->get_menu_id( 'aquila-header-menu' );

$header_menus = wp_get_nav_menu_items( $header_menu_id );

echo '<pre>';
print_r( $header_menus );
wp_die();
?>