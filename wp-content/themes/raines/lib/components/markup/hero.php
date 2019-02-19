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

function hero($group, $type = 'default') {



    if ( $group['text_alignment'] == 'left') {
        $class = 'hero__text-container--left';
    }
    else if ( $group['text_alignment'] == 'right') {
	    $class = 'hero__text-container--right';
	}
	else {
		$class = 'hero__text-container--left';
    }

    if ( $type == 'team-member' ) {
        $main_class = 'hero hero--team-member';
    }

    elseif ( $type == 'ctrack' ) {
        $main_class = 'hero hero--team-member';
    }

    else {
        $main_class = 'hero';
    }

    if ( $type != 'article' ) {
	    $img = wp_get_attachment_image_src( $group['image'], 'hero-link-image' )[0];
    }

    else {
        $img = get_the_post_thumbnail_url( null, 'hero-link-image' );
    }


	?>
		<div class="<?php echo $main_class; ?>" style="background-image:url('<?php echo $img; ?>'); background-position:<?php echo $group['image_position_horizontal'] . '% ' . $group['image_position_vertical'] . '%'; ?>">
            <?php if ( $type == 'team-member' ): ?>
                <img src="<?php echo $img; ?>" class="team-member-mobile-image" />
            <?php endif; ?>

            <div class="overlay">
                <div class="hero__text-container <?php echo $class; ?>">
                    <div class="wrap <?php if ( $group['breadcrumbs'] == 'yes') { echo 'contains-breadcrumb '; } if ( $type == 'article'  ) { echo 'article-headline '; } elseif ( $group['sub_headline'] == null  ) { echo 'headline-only '; }  ?>">
                        <?php
                            if ( $type == 'team-member' ) {
                                render_breadcrumbs( get_the_id(), $type );
                            }

                            elseif ( $type == 'category') {
	                            render_breadcrumbs( get_the_id(), $type );
                            }

                            elseif( $type == 'article' ) {
	                            render_breadcrumbs( get_the_id(), $type );
                            }

                            elseif( $type == 'profile') {
	                            render_breadcrumbs( get_the_id(), $type );
                            }

                            elseif ( $group['breadcrumbs'] == 'yes' ) {
                                render_breadcrumbs( get_the_id() );
                            }
                        ?>

                        <?php if ( $type != 'article' ): ?>
                            <h1 class="hero__headline"><?php echo $group['headline']; ?></h1>

                        <?php else: ?>
                            <h1 class="hero__headline"><?php echo get_the_title(); ?></h1>

                        <?php endif; ?>

	                    <?php
	                    if ( $group['position'] || $group['location']):
		                    ?>
                            <div class="subheadline hero__details">
	                            <?php if ( $group['email'] || $group['linkedin']): ?>
                                    <div class="hero__icon_container">
			                            <?php if ( $group['email']): ?>
                                            <span class="hero__icon"><a href="mailto:<?php echo $group['email']; ?>" target="_top"><i class="far fa-envelope"></i></a></span>
			                            <?php endif; ?>
			                            <?php if ( $group['linkedin']): ?>
                                            <span class="hero__icon"><a href="<?php echo $group['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></span>
			                            <?php endif; ?>
                                    </div>
	                            <?php endif; ?>
			                    <?php if( $group['position']) : ?>
                                    <span class="hero__position"><?php echo $group['position']; ?></span>
			                    <?php endif; ?>
                                <?php if( $group['position'] && $group['location'] ): ?>
                                   <span class="details-divider"> || </span>
                                <?php endif; ?>
			                    <?php if( $group['location']) : ?>
                                    <span class="hero__location"><?php echo $group['location']; ?></span>
			                    <?php endif; ?>
                            </div>
	                    <?php endif; ?>
			            <?php if ( $group['sub_headline'] ): ?>
                            <p class="subheadline hero__subheadline"><?php echo $group['sub_headline']; ?></p>
			            <?php endif; ?>
                    </div>
                </div>
            </div>
		</div>
	<?php
}