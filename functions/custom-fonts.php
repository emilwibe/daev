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
        'ew_daev_general_types'
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
            'FranklinGothic',
            'FranklinGothic',
        ]
    ];

    $ew_deav_active_custom_fonts = [];

    foreach ($ew_daev_kirki_font_settings as $font_setting) {
        $setting = get_theme_mod($font_setting);

        var_dump($setting);

        foreach ($ew_daev_custom_fonts as $custom_font) {

                if (isset($custom_font[1]) && isset($setting["font-family"]) && $custom_font[1] == $setting["font-family"]) {

                    if (!in_array($custom_font[1], $ew_deav_active_custom_fonts)) {

                        array_push($ew_deav_active_custom_fonts, $custom_font[1]);
                    }
                }
        }
    }
    
    var_dump($ew_deav_active_custom_fonts);

    if (!empty($ew_deav_active_custom_fonts)) {

        for ($i = 0; $i < count($ew_deav_active_custom_fonts); $i++) {

            get_template_part('customizer/custom-fonts/' . $ew_deav_active_custom_fonts[$i]);
        }
    }
}
