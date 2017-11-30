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
 * @package    Sample_Data
 * @subpackage Sample_Data/includes
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
 * @package    Sample_Data
 * @subpackage Sample_Data/includes
 * @author     Stanimir Stoyanov <stanimir@insideout.io>
 */
class Sample_Data_Posts {

	/**
	 * The number of posts that have to be created
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    int $limit Number of posts to create.
	 */
	protected $limit;

	/**
	 * An array of sample data.
	 *
	 * @since 3.12.0
	 * @var array $samples An array of sample data.
	 */
	private $samples = array(
		array(
			'post'            => array(
				'post_name'    => 'praesent_imperdiet_odio_sed_lectus_vulputate_finibus',
				'post_title'   => 'Praesent imperdiet odio sed lectus vulputate finibus',
				'post_content' => 'Praesent imperdiet odio sed lectus vulputate finibus. Donec placerat ex arcu, eget fermentum metus ullamcorper vitae. Cras interdum libero a tellus sagittis, sed ultricies sapien tincidunt. Aliquam sit amet vehicula sem. Mauris neque nisl, pellentesque ut molestie id, laoreet nec tortor. Sed tempus ornare est, nec dapibus enim ornare eu. Cras risus ligula, blandit ut faucibus ut, vulputate id ipsum. In vel purus at orci hendrerit cursus. Aliquam interdum lorem id dui maximus volutpat. Vestibulum mi velit, efficitur nec neque eu, posuere porta risus.',
				'post_type'    => 'entity',
				'post_status'  => 'publish',
			),
			'entity_type_uri' => 'http://schema.org/Event',
		),
		array(
			'post'            => array(
				'post_name'    => 'nullam_tempor_lectus_sit_amet_tincidunt_euismod',
				'post_title'   => 'Nullam tempor lectus sit amet tincidunt euismod',
				'post_content' => 'Nullam tempor lectus sit amet tincidunt euismod. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
				'post_type'    => 'entity',
				'post_status'  => 'publish',
			),
			'entity_type_uri' => 'http://schema.org/Place',
		),
		array(
			'post'            => array(
				'post_name'    => 'praesent_luctus_tincidunt_odio_quis_aliquam',
				'post_title'   => 'Praesent luctus tincidunt odio quis aliquam',
				'post_content' => 'Praesent luctus tincidunt odio quis aliquam. Ut pellentesque odio nec turpis placerat, at rhoncus mauris elementum. Proin vehicula lectus a dolor bibendum, ut pretium lacus volutpat. Integer luctus enim sed odio dapibus tempus. Fusce elementum purus in diam dictum, sit amet ultricies leo molestie. Etiam id nunc tincidunt sapien tristique interdum ac at purus. Nulla eget laoreet turpis. Nullam id cursus nulla.',
				'post_type'    => 'entity',
				'post_status'  => 'publish',
			),
			'entity_type_uri' => 'http://schema.org/Organization',
		),
		array(
			'post'            => array(
				'post_name'    => 'lorem_ipsum_dolor_sit_amet__consectetur_adipiscing_elit',
				'post_title'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
				'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'post_type'    => 'entity',
				'post_status'  => 'publish',
			),
			'entity_type_uri' => 'http://schema.org/CreativeWork',
		),
		array(
			'post' =>
				array(
					'post_title'   => 'Praesent imperdiet odio sed lectus vulputate finibus',
					'post_content' => '<span><span id="urn:enhancement-da554278-9522-2d83-76ad-8129d2292cb3" class="textannotation disambiguated wl-event" itemid="{dataset-uri}/entity/praesent_imperdiet_odio_sed_lectus_vulputate_finibus">Praesent imperdiet odio sed lectus vulputate finibus</span>. Donec placerat ex arcu, eget fermentum metus ullamcorper vitae. Cras interdum libero a tellus sagittis, sed ultricies sapien tincidunt. Aliquam sit amet vehicula sem. Mauris neque nisl, pellentesque ut molestie id, laoreet nec tortor. Sed tempus ornare est, nec dapibus enim ornare eu. Cras risus ligula, blandit ut faucibus ut, vulputate id ipsum. In vel purus at orci hendrerit cursus. Aliquam interdum lorem id dui maximus volutpat. Vestibulum mi velit, efficitur nec neque eu, posuere porta risus.</span>',
					'post_type'    => 'post',
					'post_status'  => 'publish',
				),
		),
		array(
			'post' =>
				array(
					'post_title'   => 'Nullam tempor lectus sit amet tincidunt euismod',
					'post_content' => '<span><span id="urn:local-text-annotation-p8i5o4279ex3rsbwqkrx9z5mh1ox91ae" class="textannotation disambiguated wl-place" itemid="{dataset-uri}/entity/nullam_tempor_lectus_sit_amet_tincidunt_euismod">Nullam tempor lectus sit amet tincidunt euismod</span>. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span>',
					'post_type'    => 'post',
					'post_status'  => 'publish',
				),
		),
		array(
			'post' =>
				array(
					'post_title'   => 'Praesent luctus tincidunt odio quis aliquam',
					'post_content' => '<span><span id="urn:enhancement-b3487a20-4696-b6d9-6c55-842445f5c263" class="textannotation disambiguated wl-organization" itemid="{dataset-uri}/entity/praesent_luctus_tincidunt_odio_quis_aliquam">Praesent luctus tincidunt odio quis aliquam</span>. Ut pellentesque odio nec turpis placerat, at rhoncus mauris elementum. Proin vehicula lectus a dolor bibendum, ut pretium lacus volutpat. Integer luctus enim sed odio dapibus tempus. Fusce elementum purus in diam dictum, sit amet ultricies leo molestie. Etiam id nunc tincidunt sapien tristique interdum ac at purus. Nulla eget laoreet turpis. Nullam id cursus nulla.</span>',
					'post_type'    => 'post',
					'post_status'  => 'publish',
				),
		),
		array(
			'post' =>
				array(
					'post_title'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
					'post_content' => '<span><span id="urn:enhancement-4edc3bde-d275-22f9-8d50-0b707596b292" class="textannotation disambiguated wl-thing" itemid="{dataset-uri}/entity/lorem_ipsum_dolor_sit_amet__consectetur_adipiscing_elit">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>. Proin rutrum ultrices nulla ut elementum. Nunc nec lacus tortor. Curabitur bibendum imperdiet luctus. Vivamus a faucibus dolor. Donec blandit malesuada risus. Vestibulum volutpat ut tellus sed tincidunt. Sed id tincidunt velit. Integer sed felis id libero fringilla molestie vitae id orci. Ut vel purus ullamcorper, feugiat tortor non, iaculis neque. Vivamus vitae vehicula sem. Mauris fermentum, metus id vestibulum sodales, lorem lacus efficitur ante, non vestibulum ligula ligula a turpis. Vivamus quis scelerisque massa.</span>',
					'post_type'    => 'post',
					'post_status'  => 'publish',
				),
		),
		array(
			'post' => array(
				'post_title'   => 'Lorem ipsum',
				'post_content' => "
					<span id=\"urn:enhancement-28cb4112-64cf-bd49-ef97-a2ee54727de7\" class=\"textannotation disambiguated wl-thing\" itemid=\"{dataset-uri}/entity/lorem_ipsum_dolor_sit_amet__consectetur_adipiscing_elit\">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Proin rutrum ultrices nulla ut elementum. Nunc nec lacus tortor. Curabitur bibendum imperdiet luctus. Vivamus a faucibus dolor. Donec blandit malesuada risus. Vestibulum volutpat ut tellus sed tincidunt. Sed id tincidunt velit. Integer sed felis id libero fringilla molestie vitae id orci. Ut vel purus ullamcorper, feugiat tortor non, iaculis neque. Vivamus vitae vehicula sem. Mauris fermentum, metus id vestibulum sodales, lorem lacus efficitur ante, non vestibulum ligula ligula a turpis. Vivamus quis scelerisque massa.
					
					[wl_navigator]
					
					<span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"{dataset-uri}/entity/praesent_luctus_tincidunt_odio_quis_aliquam\">Praesent luctus tincidunt odio quis aliquam</span>. Ut pellentesque odio nec turpis placerat, at rhoncus mauris elementum. Proin vehicula lectus a dolor bibendum, ut pretium lacus volutpat. Integer luctus enim sed odio dapibus tempus. Fusce elementum purus in diam dictum, sit amet ultricies leo molestie. Etiam id nunc tincidunt sapien tristique interdum ac at purus. Nulla eget laoreet turpis. Nullam id cursus nulla.
					
					[wl_navigator]
					
					<span id=\"urn:local-text-annotation-th789do93h8xdgz7zquk7c6qxy4kx0jk\" class=\"textannotation disambiguated wl-place\" itemid=\"{dataset-uri}/entity/nullam_tempor_lectus_sit_amet_tincidunt_euismod\">Nullam tempor lectus sit amet tincidunt euismod</span>. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
					
					[wl_navigator]\
					
					<span id=\"urn:local-text-annotation-v0kqdtx685n6cg9jrfvl67amkhm28hxh\" class=\"textannotation disambiguated wl-event\" itemid=\"{dataset-uri}/entity/praesent_imperdiet_odio_sed_lectus_vulputate_finibus\">Praesent imperdiet odio sed lectus vulputate finibus</span>. Donec placerat ex arcu, eget fermentum metus ullamcorper vitae. Cras interdum libero a tellus sagittis, sed ultricies sapien tincidunt. Aliquam sit amet vehicula sem. Mauris neque nisl, pellentesque ut molestie id, laoreet nec tortor. Sed tempus ornare est, nec dapibus enim ornare eu. Cras risus ligula, blandit ut faucibus ut, vulputate id ipsum. In vel purus at orci hendrerit cursus. Aliquam interdum lorem id dui maximus volutpat. Vestibulum mi velit, efficitur nec neque eu, posuere porta risus.
					",
				'post_type'    => 'post',
				'post_status'  => 'publish',
			),
		),
	);

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
	 * Creates sample posts
	 *
	 * @return null
	 */
	public function generate() {
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
