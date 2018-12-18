<?php
/**
 *
 * Hero
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function hero($group) {
	?>
		<div class="hero" style="background-image:url('<?php echo $group['image']; ?>'); background-position:<?php echo $group['image_position_horizontal'] . '% ' . $group['image_position_vertical'] . '%'; ?>">
            <div class="overlay">
                <div class="hero__text-container">
                    <div class="wrap <?php if ( $group['breadcrumbs'] == 'yes') { echo 'contains-breadcrumb'; } ?>">
                        <?php
                            if ( $group['breadcrumbs'] == 'yes') {
	                            render_breadcrumbs( get_the_id() );
                            }
                        ?>
                        <h1 class="hero__headline"><?php echo $group['headline']; ?></h1>
			            <?php if ( $group['sub_headline'] ): ?>
                            <p class="subheadline hero__subheadline"><?php echo $group['sub_headline']; ?></p>
			            <?php endif; ?>
                    </div>
                </div>
            </div>
		</div>
	<?php
}