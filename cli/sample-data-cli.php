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
	 * <type>
	 * : The type of the posts that should be created.
	 *
	 * <count>
	 * : Number of posts to create.
	 *
	 * [--forks]
	 * : Number of separate process to run.
	 */
	public function __invoke( $args, $assoc_args ) {
		// Get the command params
		$forks = \WP_CLI\Utils\get_flag_value( $assoc_args, 'forks' );

		switch ( $args[0] ) {
			case 'post':
				$service = new Sample_Data_Posts_Generator();
				break;

			case 'entity':
				$service = new Sample_Data_Entities_Generator();
				break;
		}

		// Start regular import if the command is run without forks param
		// Or if the `pcntl` extension is missing for the current php configuration.
		if (
			! function_exists( 'pcntl_fork' ) ||
			empty( $forks )
		) {
			$service->generate( $args[1] );
			WP_CLI::success( 'Posts creation completed' );
			exit;
		}

		$chunk = $args[1] / $forks;

		for( $i = 0; $i <= $forks; $i++ ) {
			$pid = pcntl_fork();

			if ( $pid == -1 ) { //fork failed. May be extreme OOM condition.
				die( 'pcntl_fork failed' );
			} elseif( $pid ) { //parent process.
				$child_pids[] = $pid;
			} else {  //child process.
				$service->generate( $chunk );
				exit();
			}
		}

		while ( ! empty( $child_pids ) ) { // wait for all children to complete
			foreach ( $child_pids as $key => $pid ) {
				$status = null;
				$res = pcntl_waitpid( $pid, $status, WNOHANG );

				if ( $res == -1 || $res > 0 ) {   //if the process has already exited
					unset( $child_pids[ $key ] );
				}
			}
		}
	}
}
