<?php if (!defined('ABSPATH')) { exit; }

//REGISTER MENUS
add_action( 'after_setup_theme', 'ew_add_menus' );

function ew_add_menus(){
    register_nav_menus(array(
        'nav_primary' => __( 'Primary', 'ew_daev' )
    ));
}