<?php
/**
 * Raines International
 *
 * This file adds the register page to the Raines International Theme.
 *
 * Template Name: Register
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
	<div class="row row--padding row--user-details">
		<div class="row--user-details__form">
		<?php echo do_shortcode('[wppb-register form_name="register"]'); ?>
		</div>
        <div class="row--user-details__info">

        </div>
	</div>
	<?php

}

genesis();