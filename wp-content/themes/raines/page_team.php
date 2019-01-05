<?php
/**
 *
 * Team Profile Index Page Template
 *
 * Template Name: Team
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_team_index', 1);

function load_team_index() {
	team__do_hero();
	?>
		<div class="row row--padding team__flexbox">
			<?php load_team_profiles(); ?>
		</div>
	<?php

	intel_footer_cta();
}

function team__do_hero() {
	$content = get_field('hero');
	hero( $content );
}

// Run the Genesis loop.
genesis();