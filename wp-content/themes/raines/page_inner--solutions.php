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
		<?php if( get_field('spotlight')['display'] == 'yes' ||  get_field( 'spotlight')['profiles'] == 'yes' ): ?>
            <div class="first one-fourth">
				<?php
				if( get_field('spotlight')['display'] == 'yes') {
					inner_solutions__do_spotlight();
				}

				if( get_field( 'spotlight')['profiles'] == 'yes' ) {
					team_sidebar_slider();
				}
				?>
            </div>
            <div class="three-fourths">
				<?php
				inner_solutions__do_content();
				?>
            </div>
            <div class="clearfix"></div>
		<?php elseif ( get_field('spotlight')['display'] == 'no' && get_field( 'spotlight')['profiles'] == 'no' ):
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

	intel_footer_cta();
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
	$columns = get_field('link_block_inner_columns', 'option');
	link_block_inner( $content, $columns );
}

// Run the Genesis loop.
genesis();