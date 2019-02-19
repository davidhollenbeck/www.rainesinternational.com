<?php
/**
 *
 * News Items Functions
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function news_items( $field_name ) {
	if( have_rows($field_name ) ):
		// loop through the rows of data
		while ( have_rows( $field_name ) ) : the_row();
			// display a sub field value
			?>
			<div class="news-item">
				<h4><?php the_sub_field('title'); ?></h4>
                <?php if ( get_sub_field('author') && get_sub_field('date') ): ?>
                    <h6><?php the_sub_field('author'); ?> | <?php the_sub_field('date'); ?></h6>
				<?php else: ?>
                    <h6><?php the_sub_field('date'); ?></h6>
				<?php endif; ?>

				<a href="<?php the_sub_field('link_url'); ?>" target="<?php the_sub_field('link_target'); ?>" class="button button--primary"><?php the_sub_field('link_text'); ?></a>
				<div class="mid-separator"></div>
			</div>
		<?php

		endwhile;
	endif;
}