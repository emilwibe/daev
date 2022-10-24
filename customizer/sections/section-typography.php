<?php
new \Kirki\Section(
	'ew_daev_typo_section',
	[
		'title'       => __('Typografi', 'ew_daev'),
		'panel'       => 'ew_daev_general_panel',
		'priority'    => 5,
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'ew_daev_general_types',
		'label'       => __('Tekst', 'ew_daev'),
		'section'     => 'ew_daev_typo_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => 'regular',
			'font-size'       => '14px',
			'line-height'       => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'body p, .hero-wysiwyg *'
			]
		],
		'choices' => [
			'fonts' => [
				'google'	=> ['popularity', 50],
				'families'	=> [
					'custom'	=> [
						'text'		=> 'Custom Fonts',
						'children'	=> [
							['id'	=> 'inter', 'text' => 'Inter']
						]
					]
				],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'ew_daev_heading_types',
		'label'       => __('Overskrifter', 'ew_daev'),
		'section'     => 'ew_daev_typo_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => 'regular',
			'line-height'       => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
			],
		],
		'choices' => [
			'fonts' => [
				'google'	=> ['popularity', 50],
				'families'	=> [
					'custom'	=> [
						'text'		=> 'Custom Fonts',
						'children'	=> [
							['id'	=> 'inter', 'text' => 'Inter']
						]
					]
				],
			],
		],
	]
);
