<?php
new \Kirki\Panel(
    'ew_daev_general_panel',
        [
            'priority'		=> 20,
            'title'			=> __( 'Generelle Indstillinger', 'ew_daev' ),
            'description'	=> __( 'Generelle indstillinger for websitet', 'ew_daev' ),
        ]
);
/**
 * SECTION: typography
 */
get_template_part( 'customizer/sections/section-typography' );


/**
 * SECTION: widths
 */
get_template_part( 'customizer/sections/section-widths' );

/**
 * SECTION: background
 */
get_template_part( 'customizer/sections/section-background' );