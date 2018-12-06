<?php
/**
 *
 * Inner Link Block Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function link_block_inner( $content ) {
	?>
	<div class="link-block-inner">
		<?php
		foreach ( $$content as $i=>$block) {
			$classes = '';

			if ( $i == 0 ) {
				$classes .= 'first ';
			}

			if ( count( $content ) > 4 ) {
				$classes .= 'one-third ';
			}

			else if ( count( $content ) > 1) {
				$classes .= 'one-half';
			}

			render_link_block_inner( $block, $i, $classes );
		}
		?>
	</div>
	<?php
}

function render_link_block_inner( $group, $index, $classes ) {
	?>
	<a class="link-block-inner__block link-block-inner__block--<?php echo $index; ?> <?php echo $classes; ?>" href="<?php echo $group['link_url']; ?>">
			<img src="<?php echo $group['image']; ?>"
			<h4 class="link-block-inner__headline"><?php echo $group['headline']; ?></h4>
			<p class="link-block-inner__subheadline"><?php echo $group['sub_headline']; ?></p>
	</a>
	<?php
}
