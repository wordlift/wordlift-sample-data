<?php
/**
 * The entity generator.
 *
 * @since      1.0.0
 * @package    Sample_Data
 * @subpackage Sample_Data/includes
 * @author     Stanimir Stoyanov <stanimir@insideout.io>
 */
class Sample_Data_Entities_Generator extends Sample_Data_Generator {

	/**
	 * Post type.
	 *
	 * @since 1.0.0
	 *
	 * @var string $post_type Post type.
	 */
	protected $post_type = 'entity';

	/**
	 * An array of sample titles.
	 *
	 * @since 1.0.0
	 *
	 * @var array $titles An array of sample titles.
	 */
	protected $titles = array(
		'Nullam',
		'tempor',
		'lectus',
		'sit',
		'amet',
		'tincidunt',
		'euismod',
		'Nunc',
		'posuere',
		'libero',
		'augue',
	);

	/**
	 * Entity content that has to be added to newly created post.
	 *
	 * @since 1.0.0
	 *
	 * @var string $content The entity content.
	 */
	protected $content = 'Nullam tempor lectus sit amet tincidunt euismod. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Nullam tempor lectus sit amet tincidunt euismod. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';

	/**
	 * Wordlift entity type taxonomy
	 *
	 * @since  1.0.0
	 */
	const WL_TAXONOMY = 'wl_entity_type';

	/**
	 * WordLift entity terms.
	 *
	 * @since 1.0.0
	 *
	 * @var array $terms An array entity terms
	 */
	protected $terms = array(
		'article'       => 'Article',
		'creativeWork'  => 'CreativeWork',
		'event'         => 'Event',
		'localBusiness' => 'LocalBusiness',
		'organization'  => 'Organization',
		'person'        => 'Person',
		'place'         => 'Place',
		'recipe'        => 'Recipe',
		'thing'         => 'Thing',
	);

	/**
	 * Sets the limit of entites that have to be created.
	 *
	 * @since 1.0.0
	 *
	 * @param int $limit The numbers of entites to create
	 */
	public function __construct() {
		add_action( 'wl_sample_data_post_insert', array( $this, 'set_term' ) );
	}

	/**
	 * Set random term to the entity.
	 *
	 * @param int $id Entity id.
	 *
	 * @since 1.0.0
	 */
	public function set_term( $id ) {
		// Get random term slug.
		$term_slug = array_rand( $this->terms );

		// Set the entity term.
		$response = wp_set_object_terms(
			$id, // Post ID.
			$term_slug, // The term slug.
			self::WL_TAXONOMY // The taxonomy.
		);

		if ( is_wp_error( $response ) ) {
			WP_CLI::warning( $response->get_error_message() );
		}
	}

}
