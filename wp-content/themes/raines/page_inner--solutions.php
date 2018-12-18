<?php

/**
 * Raines International
 *
 * This file adds the inner page -- solutions template to the Raines International Theme.
 *
 * Template Name: Inner Page -- Solutions
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_inner_page_solutions', 1);

function load_inner_page_solutions() {
	inner_solutions__do_hero();

	?>

	<div class="row row--padding inner-page__flexbox">
		<?php if( get_field('spotlight')['display'] == 'yes' ): ?>
			<div class="first one-third">
				<?php inner_solutions__do_spotlight(); ?>
			</div>
			<div class="two-thirds">
				<?php
				inner_solutions__do_content();
				?>
			</div>
			<div class="clearfix"></div>
		<?php else:
			inner_solutions__do_content();
		endif;
		?>
	</div>

	<div class="row row--padding">
		<?php
		inner_solutions__link_block_inner();

		?>
	</div>

	<?php
	if( get_field('recent_articles')['display'] == 'yes' ) {
		inner_solutions__do_recent_articles();
	}
}

function inner_solutions__do_hero() {
	$content = get_field('hero');
	hero( $content );
}

function inner_solutions__do_content() {
	$content = get_field('inner_content');
	inner_content($content);
}

function inner_solutions__do_spotlight() {
	$content = get_field('spotlight');
	spotlight($content);
}

function inner_solutions__do_recent_articles() {
	$content = get_field('recent_articles');
	recent_articles( $content );
}

function inner_solutions__link_block_inner() {
	$content = get_field('link_block_inner', 'option');
	link_block_inner( $content );
}

// Run the Genesis loop.
genesis();