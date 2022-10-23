<?php
new \Kirki\Section(
	'ew_daev_header_section',
	[
		'title'       => __( 'Header', 'ew_daev' ),
		'description' => __( 'Indstillinger for header på website', 'ew_deav' ),
		//'panel'       => 'ew_daev_general_panel',
		'priority'    => 30,
	]
);

/**
 * RADIO-BUTTONSET CONTROL: Header layout
 */
new \Kirki\Field\Radio(
	[
		'settings'		=> 'ew_daev_header_layout',
		'label'			=> __( 'Header Layout', 'ew_daev' ),
		'description'	=> esc_html__( 'Sample of radio-buttonset control.', 'ew_daev' ),
		'section'		=> 'ew_daev_header_section',
		'default'		=> 'logo-nav',
		'choices'		=> [
			'logo-nav'					=> __( 'Logo - Nav', 'ew_daev' ),
			'logo-center-nav'			=> __( 'Logo over centreret Nav', 'ew_daev' ),
			'nav-logo'					=> __( 'Nav - Logo', 'ew_daev' ),
			'nav-logo-left-content'		=> __(  'Logo + Nav til venstre for indhold', 'ew_daev' )
		],
	]
);

/**
 * SLIDER: header height
 */
new \Kirki\Field\Slider(
	[
		'settings'  => 'ew_daev_header_height',
		'label'     => __( 'Header højde', 'kirki' ),
		'section'   => 'ew_daev_header_section',
		'default'   => '60',
		'transport' => 'postMessage',
		'choices'   => [
			'min'   => 30,
			'max'   => 200,
			'step'  => 1,
		],
        'output'    => [
            [
                'element'   =>  '.header.primary > div',
                'property'  =>  'height',
                'units'     =>  'px',
            ]
        ],
        'priority'  =>  30
	]
);