<?php
add_action('wp_print_styles', 'deactivate_gutenberg_stylesheet');

function deactivate_gutenberg_stylesheet()
{
	wp_dequeue_style('wp-block-library');
	wp_deregister_style('wp-block-library');
}


/**
 * Disable the emoji's
 */
function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// Remove from TinyMCE
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

remove_action('wp_head', 'wp_generator');

/**
 * HARDCODED SVGs for DUOTONE
 */
function ew_daev_remove_dt_svg()
{
	remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
	remove_action('in_admin_header', 'wp_global_styles_render_svg_filters');
}
add_action('after_setup_theme', 'ew_daev_remove_dt_svg', 10, 0);

/**
 * Disable the custom color picker.
 */
function tabor_gutenberg_disable_custom_colors() {
	add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'tabor_gutenberg_disable_custom_colors' );


remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );