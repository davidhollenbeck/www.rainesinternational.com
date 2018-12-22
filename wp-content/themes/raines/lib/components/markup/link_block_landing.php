<?php
/**
 *
 * Landing Link Block Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function link_block_landing( $content ) {
	?>
	<div class="row row--padding row--border-top link-block-landing">
        <h2>Explore Practices</h2>
        <div class="link-block-landing__inner">
		<?php
            foreach ( $content as $i=>$block) {
                $classes = '';

                if ( $i == 0 ) {
                    $classes .= 'first ';
                }

                if ( count( $content ) > 1) {
                    $classes .= 'one-half';
                }

                else if ( count( $content ) == 3 ) {
                    $classes .= 'one-third';
                }

                render_link_block_landing( $block, $i, $classes );
            }
		?>
            <div class="clearfix"></div>
        </div>
	</div>
	<?php
}

function render_link_block_landing( $group, $index, $classes ) {
	?>
	<div class="link-block-landing__block link-block-landing__block--<?php echo $index; ?> <?php echo $classes; ?>">
		<a href="<?php echo $group['link_text']; ?>" <?php format_link_target($group['target']); ?> >
            <img src="<?php echo $group['image']; ?>"/>
        </a>
        <div>
            <h4 class="link-block-landing__headline"><?php echo $group['headline']; ?></h4>
	        <?php render_button($group, 'button--secondary'); ?>
        </div>
	</div>
	<?php
}
