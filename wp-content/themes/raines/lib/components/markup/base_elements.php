<?php
/**
 *
 * Render Base Elements like buttons, forms, etc.
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function render_button($group, $class) {
	if ($group['link_url'] && $group['link_text']):
	?>
		<a class="button <?php echo $class; ?>" href="<?php echo $group['link_url']; ?>" <?php format_link_target($group['link_target']); ?> >
			<?php echo $group['link_text']; ?>
		</a>
	<?php

	endif;
}

function render_breadcrumbs($post_id, $type='default') {
    $post = get_post($post_id);
    $parent = wp_get_post_parent_id( $post_id );

    if ($post && $type == 'default') :
        ?>
            <h4 class="breadcrumb"><a href="<?php echo get_permalink($parent); ?>">Back To <?php echo get_the_title($parent); ?></a></h4>
        <?php
    elseif ($post && $type == 'team-member'):
        ?>
            <h4 class="breadcrumb"><a href="/about/team">Back To Team</a></h4>
        <?php
    endif;
}