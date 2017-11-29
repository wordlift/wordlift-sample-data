<?php

/**
 * WP-CLI: wp dummy data
 *
 * Run the `wp dummy data` command create dummy data.
 *
 * @since 1.0.0
 * @package Dummy_Data_Creator
 * @subpackage Dummy_Data_Creator/cli
 */

/**
 * Define the {@link Dummy_Data_Creator_Cli} class.
 *
 * @since 1.0.0
 */
class Dummy_Data_Creator_Cli {

	/**
	 * Import content from database into WordPress.
	 *
	 * Provides a command line interface to the WordPress Importer plugin, for
	 * performing data migrations.
	 *
	 * ## OPTIONS
	 *
	 * [--items]
	 * : Number of posts to create.
	 */
	public function __invoke( $args, $assoc_args ) {

		// Get flags.
		$items = \WP_CLI\Utils\get_flag_value( $assoc_args, 'items' );

		$post_creator = new Dummy_Data_Posts_Creator( $items );
		$post_creator->create();
	}
}
