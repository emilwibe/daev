<?php
/**
 * ADMIN META BOX WIDGETS
 */

function disable_default_dashboard_widgets() {
	global $wp_meta_boxes;
    
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // Aktivitet
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // Et overblik
    
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPress begivenheder og nyheder
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Hurtigt udkast
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	
    // bbpress
	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);
	// yoast seo
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
	// gravity forms
	unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);
}
add_action('wp_dashboard_setup', 'disable_default_dashboard_widgets', 999);