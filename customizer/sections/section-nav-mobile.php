<?php
new \Kirki\Section(
	'ew_daev_nav_mobile',
	[
		'title'       => __( 'Mobil Navigation', 'ew_daev' ),
		'description' => __( 'Indstillinger for navigation på mobile enheder', 'ew_deav' ),
		//'panel'       => 'ew_daev_general_panel',
		'priority'    => 50,
	]
);

/**
 * FIELD: mobile navigation style
 */

new \Kirki\Field\Radio(
	[
		'settings'    => 'ew_daev_nav_mobile_style',
		'label'       => esc_html__( 'Type', 'ew_daev' ),
		//'description' => esc_html__( 'Add a description here.', 'kirki' ),
		'section'     => 'ew_daev_nav_mobile',
		'default'     => 'off-canvas-right',
		'priority'    => 10,
		'choices'     => [
			'off-canvas-right'   => esc_html__( 'Off Canvas Højre', 'ew_daev' ),
            'off-canvas-left'   => esc_html__( 'Off Canvas Venstre', 'ew_daev' ),
		],
	]
);

new \Kirki\Field\Typography(
	[
        'settings'    => 'ew_daev_nav_mobile_typography',
		'label'       => __( 'Typografi', 'ew_daev' ),
		//'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'ew_daev_nav_mobile',
		'priority'    => 30,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'center',
		],
		'output'      => [
			[
				'element' => '.nav.primary a',
                'media_query'   => '@media (max-width: 1023px)',
			],
		],
        'choices' => [
            'fonts' => [
                //'google'	=> ['popularity', 50],
				'families'	=>[
					'custom'	=> [
						'text'		=> 'Custom Fonts',
						'children'	=> [
							[ 'id'	=> 'inter', 'text' => 'Inter']
						]
					]
				],
            ],
        ],
	]
);