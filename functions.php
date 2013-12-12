<?php

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}
register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );

add_filter('show_admin_bar', '__return_false');
?>