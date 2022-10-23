<?php
new \Kirki\Section(
	'ew_daev_background_section',
	[
		'title'       => __( 'Baggrund', 'ew_daev' ),
		'description' => __( 'Indstillinger for baggrund på website', 'ew_deav' ),
		'panel'       => 'ew_daev_general_panel',
		'priority'    => 30,
	]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'ew_daev_background',
		'label'       => __('Baggrund', 'ew_daev' ),
		'description' => __( 'Background conrols are pretty complex! (but useful if used properly)', 'ew_daev' ),
		'section'     => 'ew_daev_background_section',
		'default'     => [
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body',
			],
		],
	]
);