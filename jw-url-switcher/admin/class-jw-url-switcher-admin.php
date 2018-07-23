<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://live.nyword.church
 * @since      0.1.0
 *
 * @package    JW_URL_Switcher
 * @subpackage JW_URL_Switcher/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    JW_URL_Switcher
 * @subpackage JW_URL_Switcher/admin
 * @author     Garrett Vanhoy <absolute.eternal.truth@gmail.com>
 */
class JW_URL_Switcher_Admin {

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
	 * @param      string    $jw_url_switcher       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $jw_url_switcher, $version ) {

		$this->jw_url_switcher = $jw_url_switcher;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->jw_url_switcher, plugin_dir_url( __FILE__ ) . 'css/jw-url-switcher-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->jw_url_switcher, plugin_dir_url( __FILE__ ) . 'js/jw-url-switcher-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the menu item for the plugin.
	 *
	 * @since    0.1.0
	 */
	function jw_url_switcher_menu() {
		# the callback is special because it's a class member function
		add_menu_page( 'JW URL Switcher Options', 'JW URL Switcher', 
		'manage_options', 'jw-url-switcher-menu', array($this, 'jw_url_switcher_options') );
	}

	/**
	 * Register the settings for the plugin to use
	 *
	 * @since    0.1.0
	 */
	function jw_url_switcher_register_settings() {
		$args = array(
			'type'              => 'string',
			'description'       => 'Full YouTube URL such as: https://www.youtube.com/watch?v=[video_code_here]'
		);
		register_setting( 'jw-url-switcher-settings-group', 'youtube_url', $args);

		$args = array(
			'type'              => 'integer',
			'description'       => 'Media ID of JW Player media item you want to change.'
		);
		register_setting( 'jw-url-switcher-settings-group', 'media_id', $args);
	}


	/**
	 * Render the Admin options menu
	 *
	 * @since    0.1.0
	 */
	function jw_url_switcher_options() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		include_once 'partials/jw-url-switcher-admin-display.php';
	}

	/**
	 * Apply url to appropriate media ID
	 *
	 * @since    0.1.0
	 */
	function jw_url_switcher_switch_url() {
		$output = "Got the button press."
		echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	}
}
