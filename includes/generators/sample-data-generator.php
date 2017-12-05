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
class Sample_Data_Generator {

	/**
	 * The number of posts/entities to created
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    int $limit Number of posts/entities to create.
	 */
	protected $limit;

	/**
	 * Sets the limit of posts/entites that have to be created.
	 *
	 * @since 1.0.0
	 * @param int $limit The numbers of posts/entites to create
	 */
	public function __construct( $limit = 20000 ) {
		$this->set_limit( $limit );
	}

	/**
	 * Creates sample posts/entities.
	 */
	public function generate() {
		// Get the total number of posts.
		$limit = $this->get_limit();

		$progress = \WP_CLI\Utils\make_progress_bar( 'Import', $limit );

		// Start the import.
		for ( $i = 0; $i < $limit; $i++ ) {
			$this->add();

			// Update the progress bar.
			$progress->tick();
		}

		// Import completed.
		$progress->finish();
	}

	/**
	 * Create post/entity.
	 *
	 * @return int $id The newly created post/entity id.
	 */
	public function add() {
		// Post/entity data.
		$post_data = array(
			'post_type'    => $this->type,
			'post_title'   => $this->get_title(),
			'post_content' => $this->content,
			'post_status'  => 'publish',
			'post_author'  => 1,
		);

		// Insert the post.
		$id = wp_insert_post( $post_data );

		// Return the newly created post id.
		return $id;
	}

	/**
	 * Gets random title from array of titles.
	 *
	 * @return string Random title.
	 */
	public function get_title() {
		// Get random key id from titles array.
		$key = array_rand( $this->titles );

		// Return the title.
		return $this->titles[ $key ];
	}

	/**
	 * Sets the number of posts that have to be created.
	 *
	 * @param int $limit Number of posts to create.
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
