<?php
/**
 *
 * Featured Article Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function featured_article( $group ) {
	?>
		<div class="featured-article" style="background-image:url('<?php echo $group['image']; ?>');">
			<h1 class="featured-article__headline"><?php echo $group['headline']; ?></h1>
			<p class="featured-article__subheadline"><?php echo $group['subheadline']; ?></p>
			<?php render_button($group, 'button--secondary'); ?>
		</div>
	<?php
}

