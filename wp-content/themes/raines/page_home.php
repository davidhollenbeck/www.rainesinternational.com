<?php

/**
 * Raines International
 *
 * This file adds the home page to the Raines International Theme.
 *
 * Template Name: Home
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_home_page', 1);

function load_home_page() {

	home__do_slider();
	home__content_block_1();
	home__content_block_2();
	?>
		<div class="row">
			<div class="first one-fourth">
				<?php home__recent_articles(); ?>
			</div>
			<div class="three-fourths">
				<?php
					home__featured_article();
					home__link_block_inner();
				?>
			</div>
		</div>
	<?php
}

function home__do_slider() {
	$content = get_field('slides');
	slider( $content );
}

function home__content_block_1() {
	$content = get_field('content_block_1');
	content_block( $content );
}

function home__featured_article() {
   $content = get_field('featured_article');
   featured_article( $content );
}

function home__recent_articles() {

}

function home__link_block_inner() {

}

function home__content_block_2() {
	$content = get_field('content_block_2');
	content_block( $content );
}

// Next steps: add featured post/sidebar, add categories, add blue links







// Run the Genesis loop.
genesis();
