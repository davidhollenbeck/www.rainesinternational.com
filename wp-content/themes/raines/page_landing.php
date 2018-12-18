<?php

/**
 * Raines International
 *
 * This file adds the home page to the Raines International Theme.
 *
 * Template Name: Landing Page
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_landing_page', 1);

function load_landing_page() {
	landing__do_hero();
	?><div class="row row--padding"><?php
	landing__link_block_inner();
	?></div><?php
}

function landing__do_hero() {
	$content = get_field('hero');
	hero( $content );
}

function landing__link_block_inner() {
    if ( is_page('solutions') ) {
	    $content = get_field('link_block_inner', 'option');
    }
    else {
        $content = get_field('link_block_inner');
    }

	link_block_inner( $content );
}

// Run the Genesis loop.
genesis();