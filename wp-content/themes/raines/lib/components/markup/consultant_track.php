<?php
/**
 *
 * Consultant Track Functions
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function recent_opportunities() {

	$args = array(
		'post_type'        => 'opportunity',
		'posts_per_page' => 5
	);

	// The Query
	$the_query = new \WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		echo '<div class="recent-articles recent-articles--sidebar">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<h5><a href="/opportunities">' . get_the_title() . ' →</a></h5>';
		}
		echo '</div>';

		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}
}