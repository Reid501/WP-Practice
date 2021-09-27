<?php
/**
 * Enqueue theme assets
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;

 class Assets {
     use Singleton;

     protected function __construct() {
		
		// load class.
		$this->set_hooks();
	}

	protected function set_hooks() {
		// Actions

		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

	}

	public function register_styles() {
		// Register Styles
		wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( AQUILA_DIR_PATH . '/style.css' ), 'all' );

		// Enqueu Styles
		wp_enqueue_style( 'style-css' );
	}

	public function register_scripts() {
		// Register JS
		wp_register_script( 'main-js', AQUILA_DIR_URI . '/assets/main.js', [], filemtime( AQUILA_DIR_PATH . '/assets/main.js'), true );

		// Enqueu JS
		wp_enqueue_script( 'main-js' );
	}
 }