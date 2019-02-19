<?php

/**
 * Raines International
 *
 * This file adds the intel page to the Raines International Theme.
 *
 * Template Name: Intel
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_intel_page', 1);

function load_intel_page() {
	hero( get_field('hero') );
	?>

    <div class="row row--padding intel-page__flexbox">
        <div class="first one-fourth">
			<?php recent_articles( get_field('recent_articles') ); ?>
        </div>
        <div class="three-fourths">
			<?php
			    post_slider();
                link_block_inner( get_field('link_block_inner'), get_field('link_block_inner_columns') );
			?>
        </div>
        <div class="clearfix"></div>
    </div>
	<?php
}


// Run the Genesis loop.
genesis();
