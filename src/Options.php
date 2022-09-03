<?php

use ODS\Option;

add_action(
	'init',
	function() {

		$config = new Option( 'msc-' );

		$config->addMenu(
			array(
				'page_title' => __( 'Master CSS', 'msc' ),
				'menu_title' => __( 'Master CSS', 'msc' ),
				'capability' => 'manage_options',
				'slug'       => 'msc',
				'option'     => true,
			)
		);

		$config->addTab(
			array(
				array(
					'id'    => 'general_section',
					'title' => __( 'General Settings', 'msc' ),
					'desc'  => __( 'These are general settings for Master CSS', 'msc' ),
				),
			)
		);

		$config->addCheckboxes(
			'general_section',
			array(
				'id'      => 'position',
				'label'   => __( 'Enable Master CSS', 'msc' ),
				'desc'    => __( 'You can enqueue in front end, admin page or both.', 'msc' ),
				'options' => array(
					'frontend' => __( 'Frontend', 'msc' ),
					'admin'    => __( 'Admin', 'msc' ),
				),
			),
		);

		$config->addRadio(
			'general_section',
			array(
				'id'      => 'normalcss',
				'label'   => __( 'Enable Master CSS with nomral.css', 'msc' ),
				'desc'    => __( 'You can enqueue with normal.css or not', 'msc' ),
				'options' => array(
					'no'  => __( 'No', 'msc' ),
					'yes' => __( 'Yes', 'msc' ),
				),
				'default' => 'no',
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'classes',
				'label'       => __( 'Extend Classes', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS class. Pasting your classes here without brackets. <a href="%s" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#classes' ) ),
				'placeholder' => "btn:'font:14 h:40 h:32.sm text:center bg:red:hover',card:'p:20 b:1|solid|gray-80 bg:white'",
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'colors',
				'label'       => __( 'Extend Colors', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS colors. Pasting your colors here without brackets. <a href="%s" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#colors' ) ),
				'placeholder' => "'tiffany-blue': '0abab5',bee: 'f2b413',purple: {'': '491d8b',50: 'a56eff',60: '8a3ffc',70: '6929c4'",
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'color_schemes',
				'label'       => __( 'Extend Color Schemes', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS color schemes. Pasting your color schemes here without brackets. <a href="%s" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#colorSchemes' ) ),
				'placeholder' => "'ocean'",
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'breakpoints',
				'label'       => __( 'Extend Breakpoints', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS breakpoints. Pasting your breakpoints here without brackets. <a href="%s" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#breakpoints' ) ),
				'placeholder' => "tablet: '768px', laptop: '1024px', desktop: '1280px'",
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'mediaQueries',
				'label'       => __( 'Extend Media Queries', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS media queries. Pasting your media queries here without brackets. <a href="%s-queries" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#media' ) ),
				'placeholder' => "'watch': '(max-device-width:42mm) and (min-device-width:38mm)'",
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'values',
				'label'       => __( 'Extend Values', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS values. Pasting your values here without brackets. <a href="%s" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#values' ) ),
				'placeholder' => "width: {'2x': '2rem','3x': '3rem'}",
			),
		);

		$config->addTextarea(
			'general_section',
			array(
				'id'          => 'semantics',
				'label'       => __( 'Extend Semantics', 'msc' ),
				/* translators: 1: Site URL */
				'desc'        => sprintf( __( 'Customizing your Master CSS semantics. Pasting your semantics here without brackets. <a href="%s" target="_blank" rel="noopener noreffer">Learn more</a>', 'msc' ), esc_url( 'https://docs.master.co/css/customization#semantics' ) ),
				'placeholder' => "display: { show: 'block';},fontSize: {'hide-text': 0;}",
			),
		);

		$config->register(); // Don't forget this.
	}
);
