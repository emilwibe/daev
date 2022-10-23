<?php
//add_action ( 'wp_head', 'ew_daev_head_styles' );

function ew_daev_head_styles () {
    echo "<style>
/* PRIMARY NAVIGATION */ \n";
$primary_nav_font = get_theme_mod('ew_daev_primary_nav_typography_setting');
echo ".nav.primary a {\n";

if ( is_array( $primary_nav_font ) ) {
    foreach ( $primary_nav_font as $key => $value ) {
        echo "\t$key: $value;\n";
    }
}

echo "}\n";

    echo "</style>\n";
}