<?php

/**
 * Raines International
 *
 * This file adds the inner page to the Raines International Theme.
 *
 * Template Name: Inner Page
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_inner_page', 1);

function load_inner_page() {
	inner__do_hero();

	?>

	<div class="row row--padding inner-page__flexbox">
		<?php if( get_field('spotlight')['display'] == 'yes' ): ?>
		<div class="first one-third">
			<?php inner__do_spotlight(); ?>
		</div>
		<div class="two-thirds">
			<?php
			inner__do_content();
			?>
		</div>
		<div class="clearfix"></div>
		<?php elseif ( get_field('spotlight')['display'] == 'no' ):
			inner__do_content();
		endif;
		?>
	</div>

    <?php
    if( get_field('recent_articles')['display'] == 'yes' ) {
	    inner__do_recent_articles();
    }
}

function inner__do_hero() {
	$content = get_field('hero');
	hero( $content );
}

function inner__do_content() {
	$content = get_field('inner_content');
	inner_content($content);
}

function inner__do_spotlight() {
	$content = get_field('spotlight');
	spotlight($content);
}

function inner__do_recent_articles() {
	$content = get_field('recent_articles');
	recent_articles( $content );
}

// Run the Genesis loop.
genesis();