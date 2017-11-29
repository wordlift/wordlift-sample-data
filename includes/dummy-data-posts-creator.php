<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/Stoyan0v
 * @since      1.0.0
 *
 * @package    Dummy_Data_Creator
 * @subpackage Dummy_Data_Creator/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Dummy_Data_Creator
 * @subpackage Dummy_Data_Creator/includes
 * @author     Stanimir Stoyanov <stanimir@insideout.io>
 */
class Dummy_Data_Posts_Creator extends Thread {

	/**
	 * The number of posts that have to be created
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    int $limit Number of posts to create.
	 */
	protected $limit;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $limit = 200000 ) {
		$this->set_limit( $limit );
	}

	/**
	 * Creates dummy posts
	 *
	 * @return null
	 */
	public function create() {
		// Get the total number of posts.
		$limit = $this->get_limit();

		$progress = \WP_CLI\Utils\make_progress_bar( 'Import posts', $limit );

		// Start the import.
		for ( $i = 0; $i < $limit; $i++ ) { 
			$this->add();

			// Update the progress bar.
			$progress->tick();
		}

		// Import completed.
		$progress->finish();
	}

	public function add() {
		$data = array(
			'post_title'   => uniqid(),
			'post_content' => 'test',

		);

		// Insert the post.
		$id = wp_insert_post( $data );
	}

	/**
	 * Sets the number of posts that have to be created.
	 *
	 * @param    int $limit Number of posts to create.
	 */
	public function set_limit( $limit ) {
		$this->limit = $limit;
	}
 
	/**
	 * Gets the number of posts that have to be created.
	 *
	 * @return int $limit Number of posts to create
	 */
	public function get_limit() {
		return $this->limit;
	}
}
