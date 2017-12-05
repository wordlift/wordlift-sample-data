<?php
/**
 * WP-CLI: wp create data
 *
 * Run the `wp create data` command create create data.
 *
 * @since 1.0.0
 * @package Sample_Data
 * @subpackage Sample_Data/cli
 */

/**
 * Define the {@link Sample_Data_Cli} class.
 *
 * @since 1.0.0
 */
class Sample_Data_Cli {

	/**
	 * Import content from database into WordPress.
	 *
	 * Provides a command line interface to the WordPress Importer plugin, for
	 * performing data migrations.
	 *
	 * ## OPTIONS
	 *
	 * [--posts]
	 * : Number of posts to create.
	 *
	 * [--entities]
	 * : Number of entities to create.
	 */
	public function __invoke( $args, $assoc_args ) {
		// Posts creation services.
		$services = array(
			'posts'    => 'Sample_Data_Posts_Generator', // The posts service.
			'entities' => 'Sample_Data_Entities_Generator', // Entites service.
		);

		foreach ( $services as $flag_name => $class ) {

			// Check whether the post type has to be imported.
			$flag = \WP_CLI\Utils\get_flag_value( $assoc_args, $flag_name );

			// Bail if the post type flag isn't set.
			if ( empty( $flag ) ) {
				continue;
			}

			 // Init the service.
			$service = new $class( $flag );

			// Generate posts/entities.
			$service->generate();
		}
	}
}
