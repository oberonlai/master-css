<?php

namespace msc;

defined( 'ABSPATH' ) || exit;


class MasterCss {

	private $postion;
	private $normalcss;
	private $extends;


	public static function register() {
		$class = new self();
		add_action( 'init', array( $class, 'init' ) );
	}

	public function init() {
		$this->position  = get_option( 'msc-position' );
		$this->normalcss = get_option( 'msc-normalcss' );
		$this->extends   = array( 'classes', 'colors', 'breakpoints', 'mediaQueries', 'values', 'semantics' );

		if ( $this->position ) {
			foreach ( $this->position as $key => $value ) {
				if ( 'frontend' === $key ) {
					add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 10 );
					add_action( 'wp_head', array( $this, 'set_init_maunal' ), 5 );
					add_action( 'wp_head', array( $this, 'set_extend' ), 50 );
				}

				if ( 'admin' === $key ) {
					global $pagenow;
					if ( 'post.php' === $pagenow && isset($_GET['post'])  ){
						add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ), 10 );
						add_action( 'admin_head', array( $this, 'set_init_maunal' ), 5 );
						add_action( 'admin_head', array( $this, 'set_extend' ), 50 );
					}
				}
			}
		}
	}

	public function enqueue() {
		if ( $this->normalcss === 'yes' ) {
			wp_enqueue_style( 'master-css-normal', 'https://unpkg.com/@master/normal.css', array(), null );
		}
		wp_enqueue_script( 'master-css', 'https://cdn.master.co/css', array(), null );
	}

	public function set_init_maunal() {
		echo '<script>window.MasterCSSManual = true;</script>';

	}

	public function set_extend() {
		$output = '<script>';
		foreach ( $this->extends as $ext ) {
			$style = ( $ext === 'values' || $ext === 'semantics' ) ? 'window.MasterStyles' : 'window.MasterStyle';
			if ( get_option( 'msc-' . $ext ) ) {
				$output .= $style.".extend('" . $ext . "', { " . trim( preg_replace( '/\s+/', ' ', get_option( 'msc-' . $ext ) ) ) . ' });';
			}
		}
		if ( get_option( 'msc-color_schemes' ) ) {
			$output .= 'window.MasterStyle.colorSchemes.push(' . get_option( 'msc-color_schemes' ) . ');';
		}
		$output .= 'window.initMasterCSS();</script>';
		echo $output;
	}
}

MasterCss::register();
