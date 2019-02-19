<?php
/**
 *
 * Team Profile Post Template
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_team_post', 1);

function load_team_post() {
	do_team_profile__hero();
	$categories = wp_get_post_categories( get_the_ID() );
	if ( count( $categories ) > 0):
        ?>
        <div class="row row--padding team-member__flexbox">
            <div class="first three-fourths">
                <div class="inner-content">
                    <?php do_team_profile__content(); ?>
                </div>
            </div>
            <div class="one-fourth">
                <?php do_team_profile__sidebar(); ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
    else:
        ?>
        <div class="row row--padding team-member__flexbox">
            <div class="inner-content">
                <?php do_team_profile__content(); ?>
            </div>
        </div>
    <?php
    endif;
	do_team_profile__recent_articles();
	intel_footer_cta();
}

function do_team_profile__hero() {
	$content = get_field('team_member');
	hero($content, 'team-member');
}

function do_team_profile__content() {
	$content = get_field('team_member');
	team_profile__content($content);
}

function do_team_profile__sidebar() {
	team_profile__sidebar( get_the_ID() );
}

function do_team_profile__recent_articles() {
	$content = get_field('team_member');
	if ( $content['display'] == 'yes' ) {
		recent_articles($content, 'team-member');
    }
}

function do_team_profile__ajax_setup() {
	$content = get_field('team_member');
	$args = array(
		'post__in'       => $content['articles']
    );
}

// Run the Genesis loop.
genesis();