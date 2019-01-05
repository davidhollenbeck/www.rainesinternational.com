<?php
/**
 *
 * Team Index
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function load_team_profiles( $type = 'default' ) {

    if ( $type == 'default' ) {
	    $args = array(
		    'posts_per_page'   => -1,
		    'orderby' => array( 'menu_order' => 'DESC', 'title' => 'ASC' ),
		    'order'            => 'ASC',
		    'post_type'        => 'team'
	    );
    }

	else if ( $type == 'sidebar') {
        $page = get_post( get_the_ID() );
        $slug = $page->post_name;
		$args = array(
			'posts_per_page'   => -1,
			'orderby' => array( 'menu_order' => 'DESC', 'title' => 'ASC' ),
			'order'            => 'ASC',
			'category_name'              => $slug,
			'post_type'        => 'team',
		);
	}



	$the_query = new \WP_Query( $args );

	if ( $the_query->have_posts() ) {
		$i = 0;
		if( $type == 'sidebar' && $the_query->found_posts > 1): ?>
            <div class="slider__navigation">
                <div class="slider__navigation__button slider__navigation__button--prev"><img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/caret-rev.png" /></div>
                <div class="slider__navigation__button slider__navigation__button--next"><img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/caret.png" /></div>
            </div>
		<?php endif;
		if ( $type == 'sidebar'):
            ?>
                <h3 class="slider-title">Practice Leaders</h3>
            <?php endif;
		while ( $the_query->have_posts() ):
                $the_query->the_post();
                $group = get_field( 'team_member', get_the_id() );
            ?>

			<?php if( $type == 'default'): ?>

			<a href="<?php echo get_permalink(); ?>" class="<?php if ( $i % 4 == 0 ){ echo 'first'; } ?> one-fourth team-profile-box">
				<img src="<?php echo $group['bio_image']; ?>" class="bio-image" />
				<h3><?php echo $group['headline']; ?></h3>
				<h4><?php echo $group['position']; ?></h4>

			</a>

            <?php elseif( $type == 'sidebar'): ?>
                <a href="<?php echo get_permalink(); ?>" class="team-profile-box sidebar-slide">
                    <img src="<?php echo $group['bio_image']; ?>" class="bio-image" />
                    <h3><?php echo $group['headline']; ?></h3>
                    <h4><?php echo $group['position']; ?></h4>

                </a>
		    <?php endif; ?>
			<?php
			$i++;
		endwhile;
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}
}