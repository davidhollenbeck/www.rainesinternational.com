<?php
/**
 *
 * Link to raines intel, placed above the footer.
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function intel_footer_cta() {
	$content = get_field('above_footer_cta', 'option')
	?>
		<div class="row row--fw intel-footer-cta">
			<div class="wrap">
				<h2><?php echo $content['headline']; ?></h2>
				<?php render_button($content, 'button--primary'); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php
}