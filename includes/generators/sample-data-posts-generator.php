<?php
/**
 * The post generator.
 *
 * @since      1.0.0
 * @package    Sample_Data
 * @subpackage Sample_Data/includes
 * @author     Stanimir Stoyanov <stanimir@insideout.io>
 */
class Sample_Data_Posts_Generator extends Sample_Data_Generator {
	/**
	 * Post type.
	 *
	 * @since 1.0.0
	 *
	 * @var string $post_type Post type.
	 */
	protected $post_type = 'post';

	/**
	 * An array of sample titles.
	 *
	 * @since 1.0.0
	 *
	 * @var array $titles An array of sample titles.
	 */
	protected $titles = array(
		'Praesent',
		'imperdiet',
		'odio',
		'sed',
		'lectus',
		'vulputate',
		'finibus',
		'Donec',
		'placerat',
		'ex',
		'arcu',
		'eget',
		'fermentum',
		'metus',
		'ullamcorper',
		'vitae',
	);

	/**
	 * Post content that has to be added to newly created post.
	 *
	 * @since 1.0.0
	 *
	 * @var string $content The post content.
	 */
	protected $content = " [wl_navigator]<span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue\">augue</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue\">augue</span> [wl_navigator] <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue\">augue</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue\">augue</span>
	";
}
