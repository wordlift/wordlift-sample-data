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
	 * [--items]
	 * : Number of posts to create.
	 *
	 * [--forks]
	 * : Number of separate process to run.
	 */
	public function __invoke( $args, $assoc_args ) {
		// Get flags.
		$items = \WP_CLI\Utils\get_flag_value( $assoc_args, 'items' );
		$forks = \WP_CLI\Utils\get_flag_value( $assoc_args, 'forks' );

		if ( function_exists( 'pcntl_fork' ) ) {
			$pids_count   = 0;
			$chunk        = $items / $forks; // Split the posts between forks.
			$post_creator = new Sample_Data_Posts( $chunk );

			for( $i = 0; $i < $forks; $i++ ) {
				$pids[ $pids_count ] = pcntl_fork();

				if( $pids[ $pids_count ] ) {
					$pids_count++;
				} else {
					$post_creator->generate();
					exit();
				}
			}

			for( $i = 0; $i < $pids_count; $i++) {
				pcntl_waitpid( $pids[ $i ], $status, WUNTRACED );
			}
		} else {
			WP_CLI::success( 'PCNTL functions not available on this PHP installation. Proceed with regular import.' );
			$post_creator = new Sample_Data_Posts( $chunk );
			$post_creator->generate();
		}

		WP_CLI::success( 'Posts have been imported' );
	}
}
