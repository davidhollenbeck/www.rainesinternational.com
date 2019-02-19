<?php
/**
 * Raines International
 *
 * This file adds the consultant track page to the Raines International Theme.
 *
 * Template Name: Consultant Track
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_consultant_track_page', 1);
add_action('post_content_reformat', 'genesis_do_loop');

if ( is_user_logged_in() ) {
	add_action('genesis_after_header', __NAMESPACE__ . '\consultant_menu');
	add_filter( 'body_class', __NAMESPACE__ . '\ctrack_body_class' );
}


function load_consultant_track_page() {
	?>
	<img src="/wp-content/uploads/2019/01/ConsultantTrack.jpg" style="width:100%; height:auto;" />
	<?php if( !is_user_logged_in() ): ?>
    <div class="row row--padding row--consultant-track-intro">
        <div class="two-thirds first row--consultant-track-intro__content">
	        <?php do_action('post_content_reformat'); ?>
        </div>
        <div class="one-third row--consultant-track-intro__form">
            <div class="form-container">

                <?php if( is_user_logged_in() ): ?>
                <div class="form-container__inner logged-in">
                <h4>Recent Opportunities</h4>
                <?php recent_opportunities(); ?>
                <?php else: ?>
                <div class="form-container__inner">
                <h4>Sign Into Your Account</h4>
                <?php echo do_shortcode('[wppb-login]'); ?>
                <h6>Don't Have An Account?</h6>
                <h6><a href="/register">Sign up →</a></h6>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php endif; ?>
	<div class="row row--padding row--consultant-track-links">
        <h2>Explore ConsultantTrack</h2>
		<?php link_block_inner( get_field('ctrack_link_block_inner'), get_field('ctrack_link_block_inner_columns') ); ?>
	</div>
	<?php if( is_user_logged_in() ): ?>
    <div class="row row--padding home-page__flexbox">
        <div class="first one-fourth">
			<?php recent_articles( get_field('recent_articles') ); ?>
        </div>
        <div class="three-fourths">
			<?php
			featured_article( get_field('featured_article') );
			link_block_inner( get_field('link_block_inner'), 3 );
			?>
        </div>
        <div class="clearfix"></div>
    </div>
        <?php

        recent_articles( get_field('featured_articles_row'), 'team-member');

        endif;
}

function do_consultant_page__ajax_setup() {
	$content = get_field('team_member');
	$args = array(
		'post__in'       => $content['articles']
    );
}

genesis();