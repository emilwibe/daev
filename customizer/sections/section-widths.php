<?php
new \Kirki\Section(
	'ew_daev_widths_section',
	[
		'title'       => __( 'Bredder', 'ew_daev' ),
		'description' => __( 'Indstillinger for bredder på website', 'ew_deav' ),
		'panel'       => 'ew_daev_general_panel',
		'priority'    => 10,
	]
);

/**
 * CHECKBOX: boxed layout
 */
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'ew_daev_boxed_layout',
		'label'       => esc_html__( 'Boxed layout', 'ew_daev' ),
		//'description' => esc_html__( 'Description', 'ew_daev' ),
		'section'     => 'ew_daev_widths_section',
		'default'     => false,
	]
);

/**
 * SLIDER: max width small
 */
new \Kirki\Field\Slider(
	[
		'settings'  => 'ew_daev_width_s',
		'label'     => __( 'S - Maks. bredde', 'kirki' ),
		'section'   => 'ew_daev_widths_section',
		'default'   => '768',
		'transport' => 'postMessage',
		'choices'   => [
			'min'   => 400,
			'max'   => 960,
			'step'  => 1,
		],
        'output'    => [
            [
                'element'   =>  '.l-wrapper.s',
                'property'  =>  'max-width',
                'units'     =>  'px',
            ]
        ],
        'priority'  =>  10
	]
);

/**
 * SLIDER: max width medium
 */
new \Kirki\Field\Slider(
	[
		'settings'  => 'ew_daev_width_m',
		'label'     => __( 'M - Maks. bredde', 'kirki' ),
		'section'   => 'ew_daev_widths_section',
		'default'   => '960',
		'transport' => 'postMessage',
		'choices'   => [
			'min'   => 768,
			'max'   => 1200,
			'step'  => 1,
		],
        'output'    => [
            [
                'element'   =>  '.l-wrapper.m',
                'property'  =>  'max-width',
                'units'     =>  'px',
            ]
        ],
        'priority'  =>  20
	]
);

/**
 * SLIDER: max width large
 */
new \Kirki\Field\Slider(
	[
		'settings'  => 'ew_daev_width_l',
		'label'     => __( 'L - Maks. bredde', 'kirki' ),
		'section'   => 'ew_daev_widths_section',
		'default'   => '1280',
		'transport' => 'postMessage',
		'choices'   => [
			'min'   => 960,
			'max'   => 1440,
			'step'  => 1,
		],
        'output'    => [
            [
                'element'   =>  '.l-wrapper.l',
                'property'  =>  'max-width',
                'units'     =>  'px',
			],
			[
				'element'	=> '.boxed-layout-true .bindweed',
				'property'	=> 'max-width',
				'units'		=> 'px',
			]
        ],
        'priority'  =>  30
	]
);

