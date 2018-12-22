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
	do_team_profile__recent_articles();
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
	if ( count( $content['articles'] ) > 0 )
	recent_articles($content, 'team-member');
}

// Run the Genesis loop.
genesis();