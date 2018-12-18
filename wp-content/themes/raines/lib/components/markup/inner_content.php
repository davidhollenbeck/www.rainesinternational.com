<?php
/**
 *
 * Wysiwyg Content
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;


function inner_content( $group ) {
	?>
		<div class="inner-content">
			<h2><?php echo $group['headline']; ?></h2>
            <?php echo $group['content']; ?>
		</div>
	<?php
}