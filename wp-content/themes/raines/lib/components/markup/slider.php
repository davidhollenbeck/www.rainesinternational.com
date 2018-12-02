<?php
/**
 *
 * Slider Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function slider( $slides ) {
   ?>
      <div class="ucw-slider">
	      <?php
				foreach ( $slides as $i=>$slide ) {
					render_slide( $slide, $i );
				}
	      ?>
      </div>
  <?php
}

function render_slide( $group, $index ) {
	?>
        <div class="slide slide--<?php echo $index; ?>" style="background-image:url('<?php echo $group['image']; ?>');">
            <div class="slide__text-container">
                <h1 class="slide__headline"><?php echo $group['headline']; ?></h1>
                <p class="slide__subheadline"><?php echo $group['sub_headline']; ?></p>
                <?php render_button($group, 'button--secondary'); ?>
            </div>
        </div>
    <?php
}

