<?php

if (!defined('ABSPATH')) { exit; }

$ew_site_url = get_site_url();

// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
 
<a href="<?php echo $ew_site_url; ?>" class="logo-link"><img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" ></a>
 
<?php // add a fallback if the logo doesn't exist 
else : ?>
 
<span><a href="<?php echo $ew_site_url; ?>" class="logo-link no-logo text-black no-underline text-4xl"><?php bloginfo( 'name' ); ?></a></span>
 
<?php endif;