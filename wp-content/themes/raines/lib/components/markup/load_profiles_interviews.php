<?php
/**
 *
 * Team Index
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function load_profiles_interviews( $page = 0, $ajax = false ) {


	$args = array(
		'posts_per_page'   => 8,
		'order'            => 'DESC',
		'post_type'        => 'profile_interview',
        'paged'            => $page
	);


	$the_query = new \WP_Query( $args );

	$html = '';

	if ( $the_query->have_posts() ) {
		$i = 0;

		while ( $the_query->have_posts() ):
			$the_query->the_post();
			$group = get_field( 'profiles_interviews', get_the_id() );

			$col_class = '';

			if ( $i % 4 == 0 ) {
				$col_class = 'first ';
			}

			$html .= '
				<a href="' . get_permalink() . '" class="' . $col_class . 'one-fourth team-profile-box">
					<img src="' . get_the_post_thumbnail_url( get_the_id(), 'profile-image' ) .'" class="bio-image"/>
					<h3>' . get_the_title() . '</h3>
					<h4>' . $group['position'] . '</h4>
					<em>' . $group['company'] . '</em>
				</a>
			';

			$i ++;
		endwhile;
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}

	if ( !$ajax ) {
		echo $html;
	}

	else if ( $ajax ) {
		return $html;
	}
}

function profile_filter() {
    ?>
        <div class="profile-filter">
            <select name="firm" class="test1">
                <option value="test1">test1</option>
                <option value="test2">test2</option>
            </select>
        </div>
    <?php
}
