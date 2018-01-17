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
	protected $content = " [wl_navigator] <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam-1\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor-1\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus-1\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit-1\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet-1\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt-1\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod-1\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc-1\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere-1\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero-1\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue-1\">augue</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam-2\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor-2\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus-2\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit-2\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet-2\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt-2\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod-2\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc-2\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere-2\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero-2\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue-2\">augue</span> [wl_navigator] <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam-3\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor-3\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus-3\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit-3\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet-3\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt-3\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod-3\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc-3\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere-3\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero-3\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue-3\">augue</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nullam-4\">Nullam</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tempor-4\">tempor</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/lectus-4\">lectus</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/sit-4\">sit</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/amet-4\">amet</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/tincidunt-4\">tincidunt</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/euismod-4\">euismod</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/nunc-4\">Nunc</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/posuere-4\">posuere</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/libero-4\">libero</span> <span id=\"urn:local-text-annotation-p4pre3y4tccnq00prifn6lzkowgcw6ip\" class=\"textannotation disambiguated wl-organization\" itemid=\"" . DATASET_URI . "/entity/augue-4\">augue</span>
	";
}
