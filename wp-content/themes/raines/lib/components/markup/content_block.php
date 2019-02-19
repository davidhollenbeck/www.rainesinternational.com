<?php
/**
 *
 * Basic Content Block Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;


function content_block( $group ) {
	$image_type = $group['image_type'];

	switch($image_type):
		case 'none':
			render_content_image_none($group);
			break;
		case 'left':
			render_content_image_left($group);
			break;
		case 'right':
			render_content_image_right($group);
			break;
		case 'background':
			render_content_image_background($group);
			break;
		case 'corner':
			render_content_image_corner($group);
			break;

	endswitch;
}

// render block functions

function render_content_image_none($group) {
	?>
		<div class="row content-block content-block--image-none">
			<div class="content-block__inner">
				<?php load_content_copy($group); ?>
			</div>
		</div>
	<?php
}

function render_content_image_left($group) {
	?>
	<div class="row content-block content-block--image-left">
		<?php load_content_image($group); ?>
		<div class="content-block__inner">
			<?php load_content_copy($group); ?>
		</div>
	</div>
	<?php
}

function render_content_image_right($group) {
	?>
	<div class="row row--padding content-block content-block--image-right">
		<div class="one-half first">
			<?php load_content_copy($group); ?>
		</div>
        <div class="one-half">
	        <?php load_content_image($group); ?>
        </div>
        <div class="clearfix"></div>
	</div>
	<?php
}

function render_content_image_background($group) {
	?>
	<div class="row content-block content-block--image-background" style="background-image:url('<?php echo $group['image'] ?>');">
        <div class="content-block__inner">
		    <?php load_content_copy($group); ?>
        </div>
	</div>
	<?php
}

function render_content_image_corner($group) {
	?>
	<div class="row content-block content-block--image-corner">
        <div class="corner-image" style="background-image:url('<?php echo $group['image'] ?>');"></div>
        <div class="corner-overlay"></div>
        <div class="block-background"></div>
        <div class="corner-background"></div>
        <div class="content-block__inner">
		    <?php load_content_copy($group); ?>
        </div>

	</div>

	<?php
}

// individual element loaders

function load_content_copy($group) {
	?>
		<h2><?php echo $group['headline']; ?></h2>
		<p><?php echo $group['text'] ; ?></p>
	    <?php render_button($group, 'button--primary'); ?>
	<?php
}

function load_content_image($group) {
	?>
		<img src="<?php echo $group['image'] ?>" alt="<?php echo $group['headline']; ?>" />
	<?php
}