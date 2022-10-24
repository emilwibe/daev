<?php
new \Kirki\Section(
	'ew_daev_primary_nav_section',
	[
		'title'       => __('Primær Navigation', 'ew_daev'),
		'description' => __('Indstillinger for navigation', 'ew_deav'),
		'priority'    => 40,
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'ew_daev_primary_nav_typography',
		'label'       => __('Typografi', 'ew_daev'),
		'section'     => 'ew_daev_primary_nav_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'center',
		],
		'output'      => [
			[
				'element' => '.nav.primary a',
				'media_query'   => '@media (min-width: 1024px)',
			],
		],
		'choices' => [
			'fonts' => [
				'google'	=> ['popularity', 50],
				'families'	=>[
					'custom'	=> [
						'text'		=> 'Custom Fonts',
						'children'	=> [
							[ 'id'	=> 'inter', 'text' => 'Inter'],
							['id' => 'FranklinGothic', 'text' => 'FranklinGothic'],
						]
					]
				],
				/*'variants'	=> [
					'inter'		=>	[
						'regular',
						'italic',
						'300',
						'400',
						'700',
						'900',
					]
				]*/
			],
		],
	]
);

/**
 * RADIO-BUTTONSET CONTROL: Nav position
 */
new \Kirki\Field\Radio_Buttonset(
	[
		'settings'		=> 'ew_daev_primary_nav_position',
		'label'			=> __('Position', 'ew_daev'),
		//'description'	=> esc_html__( 'Sample of radio-buttonset control.', 'ew_daev' ),
		'section'		=> 'ew_daev_primary_nav_section',
		'default'		=> 'flex-end',
		'choices'		=> [
			'flex-start'	=> __('Venstre', 'ew_daev'),
			'center'	=> __('Centreret', 'ew_daev'),
			'flex-end'	=> __('Højre', 'ew_daev'),
		],
		'output'      => [
			[
				'element'       => '.nav-container',
				'property'      => 'justify-content',
				'media_query'   => '@media (min-width: 1024px)',
			],
		],
	]
);

/**
 * SLIDER: item distance
 */
new \Kirki\Field\Slider(
	[
		'settings'  => 'ew_daev_primary_nav_item_distance',
		'label'     => __('Afstand mellem menupunkter', 'ew_daev'),
		'section'   => 'ew_daev_primary_nav_section',
		'default'   => '20',
		'transport' => 'postMessage',
		'choices'   => [
			'min'   => 0,
			'max'   => 80,
			'step'  => 1,
		],
		'output'    => [
			[
				'element'       => '.nav.primary > ul > li > a ',
				'property'      => 'margin-right',
				'units'         => 'px',
				'media_query'   => '@media (min-width: 1024px)',
			],
		],
		'priority'  =>  20
	]
);
