<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://live.nyword.church
 * @since      0.1.0
 *
 * @package    JW_URL_Switcher
 * @subpackage JW_URL_Switcher/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    JW_URL_Switcher
 * @subpackage JW_URL_Switcher/public
 * @author     Garrett Vanhoy <absolute.eternal.truth@gmail.com>
 */
class JW_URL_Switcher_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $jw_url_switcher    The ID of this plugin.
	 */
	private $jw_url_switcher;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param      string    $jw_url_switcher       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $jw_url_switcher, $version ) {

		$this->jw_url_switcher = $jw_url_switcher;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in JW_URL_Switcher_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The JW_URL_Switcher_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->jw_url_switcher, plugin_dir_url( __FILE__ ) . 'css/jw-url-switcher-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in JW_URL_Switcher_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The JW_URL_Switcher_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->jw_url_switcher, plugin_dir_url( __FILE__ ) . 'js/jw-url-switcher-public.js', array( 'jquery' ), $this->version, false );

	}

}
