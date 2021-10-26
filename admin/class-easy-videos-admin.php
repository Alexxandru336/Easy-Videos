<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Easy_Videos
 * @subpackage Easy_Videos/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Easy_Videos
 * @subpackage Easy_Videos/admin
 * @author     Your Name <email@example.com>
 */
class Easy_Videos_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $easy_videos    The ID of this plugin.
	 */
	private $easy_videos;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $easy_videos       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $easy_videos, $version ) {

		$this->easy_videos = $easy_videos;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_Videos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Videos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->easy_videos, plugin_dir_url( __FILE__ ) . 'css/easy-videos-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_Videos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Videos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->easy_videos, plugin_dir_url( __FILE__ ) . 'js/easy-videos-admin.js', array( 'jquery' ), $this->version, false );

	}

}
