<?php
/**
 *
 * Profile Post Template
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

add_action('genesis_before_loop', __NAMESPACE__ . '\load_profile_post', 1);
remove_action('genesis_loop', 'genesis_do_loop');
add_action('post_content_reformat', 'genesis_do_loop');
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );


function load_profile_post() {
	hero( get_field('hero'), 'profile' );
	?>
	<div class="row row--padding row--single-post-content" style="margin-top:25px;">
		<div class="first three-fourths">
			<?php do_action('post_content_reformat'); ?>
		</div>
		<div class="one-fourth">
			<?php

			$group = get_field( 'profiles_interviews' );

			$html = '
				<a href="' . get_permalink() . '" class="team-profile-box">
					<img src="' . get_the_post_thumbnail_url( get_the_id(), 'profile-image' ) .'" class="bio-image"/>
					<h3>' . get_the_title() . '</h3>
					<h4>' . $group['position'] . '</h4>
					<em>' . $group['company'] . '</em>
				</a>
			';

			echo $html;
			?>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php
	intel_footer_cta();
}

genesis();