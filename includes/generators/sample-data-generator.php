<?php
/**
 * The file that defines the main generator class.
 *
 */

/**
 * The main generator class.
 *
 * @since      1.0.0
 * @package    Sample_Data
 * @subpackage Sample_Data/includes
 * @author     Stanimir Stoyanov <stanimir@insideout.io>
 */
abstract class Sample_Data_Generator {

	/**
	 * Triggers the process of creating new posts/entities.
	 * 
	 * @since 1.0.0
	 *
	 * @param int $limit The numbers of posts/entites to create
	 *
	 * @return void
	 */
	public function generate( $limit ) {
		$progress = \WP_CLI\Utils\make_progress_bar( 'Creating', $limit );

		// Start the import.
		for ( $i = 0; $i < $limit; $i++ ) {
			// Insert the post.
			$this->create_post( $i );

			// Update the progress bar.
			$progress->tick();
		}

		// Process completed.
		$progress->finish();
	}

	/**
	 * Create new post/entity.
	 *
	 * @since 1.0.0
	 *
	 * @return int $id The newly created post/entity id.
	 */
	protected function create_post( $index ) {
		// Post/entity data.
		$post_data = array(
			'post_type'    => $this->post_type,
			'post_title'   => $this->get_random_title( $index ),
			'post_content' => $this->content,
			'post_status'  => 'publish',
			'post_author'  => 1,
		);

		// Try to insert the post.
		$post_id = wp_insert_post( $post_data );

		// Add notice to the command line if there was an error.
		if ( is_wp_error( $post_id ) ) {
			WP_CLI::warning( $post_id->get_error_message() );
		} else {
			do_action( 'wl_sample_data_post_insert', $post_id );
		}
	}

	/**
	 * Gets random title from array of titles.
	 * 
	 * @since 1.0.0
	 *
	 * @return string Random title.
	 */
	public function get_random_title( $index ) {
		// Get random key from titles array.
		$key = array_rand( $this->titles );

		// Return the title.
		return $this->titles[ $key ] . '-' . $index;
	}
}
