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
	?>
		<div class="row row--padding home-page__flexbox">
			<div class="first one-fourth">
				<?php home__recent_articles(); ?>
			</div>
			<div class="three-fourths">
				<?php
					home__featured_article();
					home__link_block_inner();
				?>
			</div>
            <div class="clearfix"></div>
		</div>
	<?php
	home__link_block_landing();
	home__content_block_2();
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
    $content = get_field('recent_articles');
	recent_articles( $content );
}

function home__link_block_inner() {
    $content = get_field('link_block_inner');
    link_block_inner( $content );
}

function home__link_block_landing() {
	$content = get_field('link_block_landing');
	link_block_landing( $content );
}



function home__content_block_2() {
	$content = get_field('content_block_2');
	content_block( $content );
}

// Next steps: add widgetized area to recent_articles.php, add link block sections







// Run the Genesis loop.
genesis();
