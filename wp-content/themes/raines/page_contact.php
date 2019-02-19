<?php
/**
 *
 * Generic Contact Page Template
 *
 * Template Name: Contact
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

add_action('genesis_before_loop', __NAMESPACE__ . '\load_contact_page', 1);
remove_action('genesis_loop', 'genesis_do_loop');
add_action('post_content_reformat', 'genesis_do_loop');


function load_contact_page() {
	hero( get_field('hero') );
	?>
	<div class="row row--padding row--default-page-content">
		<div class="first three-fourths">
			<?php do_action('post_content_reformat'); ?>
		</div>
		<div class="one-fourth">
			<?php load_contact_info(); ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php
	intel_footer_cta();
}

genesis();