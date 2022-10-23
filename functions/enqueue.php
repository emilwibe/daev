<?php
add_action( 'wp_enqueue_scripts', 'ewdaev_enqueue' );

function ewdaev_enqueue () {
    if ( is_user_logged_in(  ) ) {
        wp_enqueue_style( 'core-styles-qa', get_template_directory_uri(  ) . '/dist/css/core.css', '', null );
        wp_enqueue_script( 'footer-scripts', get_template_directory_uri(  ) . '/dist/js/scripts-footer.js', '', '', true );
    } else {
        wp_enqueue_style( 'core-styles-prod', get_template_directory_uri(  ) . '/dist/css/core.min.css', '', null );
        wp_enqueue_script( 'footer-scripts', get_template_directory_uri(  ) . '/dist/js/scripts-footer-min.js', '', '', true );
    }
}

add_action( 'admin_enqueue_scripts', 'ew_daev_admin_enqueue' );

function ew_daev_admin_enqueue () {
    wp_enqueue_style('ew-admin-styles', get_template_directory_uri(  ) . '/dist/css/admin-styles.css');
}