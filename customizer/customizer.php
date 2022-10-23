<?php
use Kirki\Util\Helper;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Do not proceed if Kirki does not exist.
if ( !class_exists( 'Kirki' ) ) {
    return;
}

Kirki::add_config(
	'ew_daev_config',
		[
        	'option_type'		=>	'theme_mod',
        	'capability'		=>	'manage_options',
			'disable_output'	=>	false
        ]
);
/**
 * PANEL: general
 */
get_template_part( 'customizer/panels/panel-general' );

/**
 * SECTION: header
 */
get_template_part( 'customizer/sections/section-header' );

/**
 * SECTION: primary navigation
 */
get_template_part( 'customizer/sections/section-nav' );

/**
 * SECTION: mobile navigation
 */
get_template_part( 'customizer/sections/section-nav-mobile' );