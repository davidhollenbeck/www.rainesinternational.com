<?php
/**
 *
 * Category Template
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_category_page', 1);

remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_open', 5);
remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_close', 15);
remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_headline', 10);
remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_intro_text', 12);


function load_category_page() {

	$category = get_category( get_query_var( 'cat' ) );

	hero( get_field('hero', $category ), 'category' );
	load_category_articles($category);
	intel_footer_cta();
}

genesis();