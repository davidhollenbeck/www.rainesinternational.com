<?php
/**
 *
 * Team Profile Index Page Template
 *
 * Template Name: Profiles and Interviews
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_profiles_interviews_page', 1);
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\add_select_scripts' );


function load_profiles_interviews_page() {
	hero( get_field('hero') );
	?>
	<?php //profile_filter(); ?>
	<div class="row row--padding row--profiles-interviews" id="profiles">

		<?php load_profiles_interviews(); ?>
	</div>
    <div class="row row--padding" style="display:block;"><div class="readmore-section"><a class="button button-primary recent-articles__ajax" id="profiles_paginate" href="#">See More Articles</a><div class="mid-separator"></div></div></div>
	<?php

	intel_footer_cta();
}

function add_select_scripts() {
    wp_enqueue_script( 'select2-script', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( CHILD_TEXT_DOMAIN . '-profile-filter', CHILD_URL . '/assets/js/profile-filter.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_style( 'select2-style', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css', array(), CHILD_THEME_VERSION );
}

// Run the Genesis loop.
genesis();