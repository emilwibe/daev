<?php
/**
 * DEACTIVATE SCRIPTS
 */
get_template_part( 'functions/deactivate' );

/**
 * THEME SUPPORT
 */
get_template_part( 'functions/theme-support' );

/**
 * NAV
 */
get_template_part( 'functions/register-nav' );
/**
 * ENQUEUES
 */
get_template_part( 'functions/enqueue' );

/**
 * CUSTOMIZER
 */
get_template_part( 'customizer/kirki-example' );
get_template_part( 'customizer/site-identity' );
get_template_part( 'customizer/customizer' );

/**
 * ADMIN META BOX WIDGETS
 */
get_template_part( 'functions/admin-meta-boxes' );

/**
 * HELPER FUNCTIONS
 */
get_template_part( 'functions/_helper-functions' );

/**
 * WALKERS
 */
get_template_part( 'functions/walker_nav' );

/**
 * CUSTOM FONTS
 */
get_template_part( 'functions/custom-fonts' );