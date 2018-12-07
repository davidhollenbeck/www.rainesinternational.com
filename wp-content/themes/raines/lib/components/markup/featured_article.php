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
            <div class="featured-article__text-container">
                <div class="wrap">
                    <h1 class="featured-article__headline"><?php echo $group['headline']; ?></h1>
                    <p class="subheadline"><?php echo $group['sub_headline']; ?></p>
                    <?php render_button($group, 'button--secondary'); ?>
                </div>
            </div>
		</div>
	<?php
}

