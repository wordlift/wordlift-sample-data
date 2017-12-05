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
	 * Wordlift entity type taxonomy
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string $taxonomy Taxonomy name
	 */
	protected $taxonomy = 'wl_entity_type';

	/**
	 * Post type.
	 *
	 * @since 1.0.0
	 * @var string $type Post type.
	 */
	protected $type = 'entity';

	/**
	 * An array of sample titles.
	 *
	 * @since 1.0.0
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
	 * @var string $content The entity content.
	 */
	protected $content = 'Nullam tempor lectus sit amet tincidunt euismod. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Nullam tempor lectus sit amet tincidunt euismod. Nunc posuere libero augue, eu pretium erat interdum id. Vivamus aliquam dui in mauris tempor, vitae vestibulum odio aliquet. Proin quis bibendum diam, nec tempus dui. Pellentesque sit amet justo vitae urna ornare volutpat quis consectetur nisl. Sed hendrerit purus et magna varius, sodales tincidunt velit finibus. Donec malesuada faucibus mattis. Morbi viverra sagittis justo nec luctus. Nullam et justo sed nisi fringilla rutrum sit amet a urna. Integer elementum, risus in condimentum rhoncus, nisi velit cursus tellus, sed sagittis ante tellus hendrerit ante. Donec et semper libero, vitae imperdiet ligula. Donec eleifend iaculis nisi sed mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin faucibus magna ac lectus tempor iaculis quis in nisi. Mauris ac nibh lacinia, ultrices erat quis, rhoncus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';

	/**
	 * WordLift entity terms.
	 *
	 * @since 1.0.0
	 * @var array $terms An array entity terms
	 */
	protected $terms = array(
		'Article',
		'CreativeWork',
		'Event',
		'LocalBusiness',
		'Organization',
		'Person',
		'Place',
		'Recipe',
		'Thing',
	);

	/**
   	 * {@inheritdoc}
	 * Also sets the entity `wl_entity_type`.
	 */
	public function add() {
		// Get the newly created entity id.
		$id = parent::add();

		// Set the terms.
		$this->set_terms( $id );
	}

	/**
	 * Set entity term.
	 *
	 * @param int $id Entity id.
	 */
	public function set_terms( $id ) {
		// Get random term name.
		$term = $this->get_random_term();

		// Set the entity term.
		wp_set_post_terms( $id, $term->term_id, $this->taxonomy );
	}

	/**
	 * Returns random term from entity terms.
	 *
	 * @return obj $term Term object.
	 */
	public function get_random_term() {
		// Get random term index.
		$key = array_rand( $this->terms );

		// Get term name.
		$name = $this->terms[ $key ];

		// Get the term.
		$term = get_term_by( 'name', $name, $this->taxonomy );

		// Return the term.
		return $term;
	}

}
