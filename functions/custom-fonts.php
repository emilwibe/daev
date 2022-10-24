<?php
/**
 * For adding custom fonts to Kirki
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('ew_daev_head_styles', 'ew_daev_custom_fonts_script');

function ew_daev_custom_fonts_script()
{
    /**
     * Kirki font settings field for looping through checking if a custom font is selected
     */
    $ew_daev_kirki_font_settings = [
        'ew_daev_primary_nav_typography',
        'ew_daev_nav_mobile_typography',
    ];

    /**
     * Custom fonts inserted
     *
     * Name, filename to include, text to look for
     */
    $ew_daev_custom_fonts = [
        [
            'Inter',
            'inter',
            'Inter, sans-serif',
        ],
        [
            'FranklinGothic',
            'FranklinGothicBT-ExtraCondensed',
            'FranklinGothic',
        ]
    ];

    $ew_deav_active_custom_fonts = [];

    foreach ($ew_daev_kirki_font_settings as $font_setting) {
        $setting = get_theme_mod($font_setting);

        foreach ($ew_daev_custom_fonts as $custom_font) {

            if (is_array($custom_font[1]) && $custom_font[1] == $setting["font-family"]) {

                if( !in_array( $custom_font[1], $ew_deav_active_custom_fonts ) ) {

                    array_push( $ew_deav_active_custom_fonts, $custom_font[1] );

                }

            }
        }

    }

    if ( !empty( $ew_deav_active_custom_fonts ) ) {

        for ( $i = 0; $i < count($ew_deav_active_custom_fonts); $i++ ) {

            get_template_part( 'customizer/custom-fonts/' . $ew_deav_active_custom_fonts[$i] );

        }
    }

}