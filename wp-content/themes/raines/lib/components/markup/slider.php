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
    <div class="slider">
        <div class="slider__navigation">
            <div class="slider__navigation__button slider__navigation__button--prev"><img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/caret-rev.png" /></div>
            <div class="slider__navigation__button slider__navigation__button--next"><img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/caret.png" /></div>
        </div>
		<?php
		foreach ( $slides as $i=>$slide ) {
			render_slide( $slide, $i, count($slides) );
		}
		?>
    </div>
	<?php
}

function render_slide( $group, $index, $count ) {
	?>
    <div class="slide slide--<?php echo $index; ?>" style="background-image:url('<?php echo $group['image']; ?>');">
        <div class="slide__text-container">
            <div class="wrap">
                <h1 class="slide__headline"><?php echo $group['headline']; ?></h1>
                <p class="subheadline slide__subheadline"><?php echo $group['sub_headline']; ?></p>
				<?php render_button($group, 'button--secondary'); ?>
            </div>
        </div>
        <div class="slider__pagination">
			<?php
			for ($x = 0; $x < $count; $x++) {
				?>
                <div><span class="slider__pagination__dot<?php if ($index == $x) { echo ' active'; }?>" id="slider-dot-<?php echo $x +1; ?>"></span></div>
				<?php
			}
			?>
            <p class="slider__pagination__count">
				<?php echo $index + 1; ?>/<?php echo $count; ?>
            </p>
        </div>
    </div>
	<?php
}

function post_slider( $args = 'default' ) {

    if ( $args == 'default' ) {
	    $args = array(
		    'cat' => 433,
		    'posts_per_page' => 4
	    );
    }

	// The Query
	$the_query = new \WP_Query( $args );
	if ( $the_query->have_posts() ):
        ?>
            <div class="slider slider--posts">
                <div class="slider__navigation">
                    <div class="slider__navigation__button slider__navigation__button--prev"><img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/caret-rev.png" /></div>
                    <div class="slider__navigation__button slider__navigation__button--next"><img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/caret.png" /></div>
                </div>
                <?php

                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $post = get_post();
                        render_post_slide($post, $the_query->current_post, $the_query->post_count);
                    }
                ?>
            </div>
        <?php

    endif;

	wp_reset_query();
}

function render_post_slide( $post, $index, $count ) {
	$group = get_field('post_slider', $post->ID);

	?>
    <div class="slide featured-article slide--<?php echo $index; ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url($post); ?>'); background-position:<?php echo $group['image_position_horizontal'] . '% ' . $group['image_position_vertical'] . '%'; ?>">
        <div class="slide__text-container featured-article__text-container">
            <div class="wrap">
                <h1 class="slide__headline"><?php echo get_the_title($post); ?></h1>
                <p class="subheadline slide__subheadline"><?php echo get_the_excerpt($post); ?></p>
				<a href="<?php echo get_permalink($post); ?>" class="button button--secondary">Read More</a>
            </div>
        </div>
        <div class="slider__pagination">
			<?php
			for ($x = 0; $x < $count; $x++) {
				?>
                <div><span class="slider__pagination__dot<?php if ($index == $x) { echo ' active'; }?>" id="slider-dot-<?php echo $x +1; ?>"></span></div>
				<?php
			}
			?>
            <p class="slider__pagination__count">
				<?php echo $index + 1; ?>/<?php echo $count; ?>
            </p>
        </div>
    </div>
	<?php
}