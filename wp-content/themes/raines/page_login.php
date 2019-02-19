<?php
/**
 * Raines International
 *
 * This file adds the login page to the Raines International Theme.
 *
 * Template Name: Login
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_register_page', 1);

function load_register_page() {
	hero( get_field('hero') );
	?>
	<div class="row row--padding row--register">
		<div class="row--register__inner">
			<?php
			if ( is_user_logged_in() ) {
				echo do_shortcode('[wppb-edit-profile form_name="edit-profile"]');
			}

			else {
				echo do_shortcode('[wppb-login] ');
			}

			?>
		</div>
	</div>
	<?php

}

genesis();